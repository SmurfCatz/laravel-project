<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <h1>รายการคำสั่งซื้อ</h1>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ชื่อลูกค้า</th>
                            <th>อีเมล</th>
                            <th>เบอร์โทร</th>
                            <th>ที่อยู่</th>
                            <th>ชื่ออาหาร</th>
                            <th>จำนวน</th>
                            <th>ราคา</th>
                            <th>รูปภาพ</th>
                            <th>สถานะ</th>
                            <th>จัดการสถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->title}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>${{$order->price}}</td>
                                <td>
                                    <img src="/food_img/{{$order->image}}" style="width: 100px; height: 100px;">
                                </td>
                                <td>{{$order->delivery_status}}</td>
                                <td>
                                    <a href="{{url('on_the_way/'.$order->id)}}" class="btn btn-warning">กำลังจัดส่ง</a>
                                    <a href="{{url('delivered/'.$order->id)}}" class="btn btn-success">ส่งเสร็จสิ้น</a>
                                    <a href="{{url('cancel_order/'.$order->id)}}" class="btn btn-danger">ยกเลิก</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.js')
</body>

</html>
