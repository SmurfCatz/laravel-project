<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Cart;
use Illuminate\Support\str;
use App\Models\Order;
use App\Models\book;

class HomeController extends Controller
{
    public function index(){

        if(Auth::user()->usertype == 'admin'){
            $total_users = User::where('usertype','=', 'user')->count();
            $total_foods = Food::all()->count();
            $total_orders = Order::all()->count();
            $total_delivered = Order::where('delivery_status', '=', 'Delivered' )->count();
            return view('admin.index', compact('total_users', 'total_foods', 'total_orders', 'total_delivered'));
        }else{
            $foods = Food::all();
            return view('home.index', compact('foods'));
        }
    }

    public function my_home(){
        $foods = Food::all();
        return view('home.index', compact('foods'));
    }

    public function add_cart(Request $request, $id){
        if(Auth::id()){
            $food = Food::find($id);
            $cart_title = $food->title;
            $cart_details = $food->details;
            $cart_price = str::remove('$', $food->price);
            $cart_image = $food->image;

            $cart = new Cart;
            $cart->title = $cart_title;
            $cart->details = $cart_details;
            $cart->price = $cart_price * $request->qty;
            $cart->image = $cart_image;
            $cart->quantity = $request->qty;
            $cart->userid = Auth()->user()->id;
            $cart->save();
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function my_cart(){
        $user_id = Auth::id();
        $carts = cart::where('userid',"=", $user_id)->get();
        return view('home.my_cart', compact('carts'));
    }

    public function remove_cart($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Cart deleted successfully!');

    }

    public function confirm_order(Request $request){
        $user_id = Auth::id();
        $carts = cart::where('userid',"=", $user_id)->get();
        foreach($carts as $cart){
            $order = new Order;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->title = $cart->title;
            $order->price = $cart->price;
            $order->image = $cart->image;
            $order->quantity = $cart->quantity;
            $order->save(); 

            $cart = cart::find($cart->id);
            $cart->delete();
        }
        return redirect()->back()->with('message', 'Order placed successfully!');
    }

    public function book_table(Request $request){
        $book = new book;
        $book->phone = $request->phone;
        $book->guest = $request->n_guest;
        $book->time = $request->time;
        $book->date = $request->date;
        $book->save();
        return redirect()->back()->with('message', 'Table booked successfully!');
    }
}
