<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Book;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_food(){
        return view('admin.add_food');
    }

    public function upload_food(Request $request){
        
        $data = new Food;
        $data->title = $request->title;
        $data->details = $request->details;
        $data->price = $request->price;
        $image = $request->img;

        $filename = time().'.'.$image->getClientOriginalExtension();

        $request->img->move('food_img', $filename);
        
        $data->image = $filename;
        $data->save();
        return redirect()->back(); 
    }

    public function view_food(){
        $foods = Food::all();
        return view('admin.view_food', compact('foods'));
    }

    public function delete_food($id){
        $food = Food::find($id);
        $food->delete();
        return redirect()->back();
    }

    public function edit_food($id){

        $food = Food::find($id);
        return view('admin.edit_food', compact('food'));
    }

    public function update_food(Request $request, $id){
        $food = Food::find($id);
        $food->title = $request->title;
        $food->details = $request->details;
        $food->price = $request->price;

        $image = $request->img;

        if($image){
            $imagename= time().'.'.$image->getClientOriginalExtension();
            $request->img->move('food_img', $imagename);
            $food->image = $imagename;
        }
        $food->save();
        return redirect('view_food')->with('message', 'Food updated successfully!');
    }

    public function order(){
        $orders = Order::all();
        return view('admin.order' , compact('orders')); 
    }

    public function on_the_way($id){
        $order = Order::find($id);
        $order->delivery_status = 'กำลังจัดส่ง';
        $order->save();
        return redirect()->back();
    }

    public function delivered($id){
        $order = Order::find($id);
        $order->delivery_status = 'ส่งเสร็จสิ้น';
        $order->save();
        return redirect()->back();
    }

    public function cancel_order($id){
        $order = Order::find($id);
        $order->delivery_status = 'ยกเลิก';
        $order->save();
        return redirect()->back();
    }

    public function reservations(){
        $books = Book::all();
        return view('admin.reservations', compact('books'));
    }
}
