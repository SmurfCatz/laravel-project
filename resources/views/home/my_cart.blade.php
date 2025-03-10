<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style>
        /* ตาราง */
        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #1e1e1e;
            color: #ffffff;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border: 1px solid #333;
        }

        th {
            background-color: #333;
            color: #00d1b2;
            font-weight: bold;
        }

        td {
            background-color: #222;
        }

        td img {
            border-radius: 8px;
            width: 80px;
            height: auto;
        }

        /* ปุ่มในตาราง */
        .btn {
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-warning {
            background-color: #f39c12;
            color: white;
        }

        .btn-danger {
            background-color: #e74c3c;
            color: white;
        }

        /* Hover effect สำหรับแถวในตาราง */
        tr:hover {
            background-color: #444444;
        }

        /* ฟอร์ม */
        /* ลดช่องว่างระหว่างฟอร์มและราคารวม */
        .form-container {
            max-width: 700px;
            margin: -30px auto;
            /* ลด margin-bottom เพื่อให้ช่องว่างน้อยลง */
            padding: 25px;
            border-radius: 8px;
            background-color: #222;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #333;
        }

        h3.text-center {
            margin-top: 50px;
            /* เพิ่ม margin-top เพื่อให้ห่างจากฟอร์มน้อยลง */
        }

        .form-container .form-label {
            font-weight: bold;
            font-size: 16px;
            color: #fff;
        }

        .form-container input {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #333;
            width: 100%;
            margin-top: 8px;
            background-color: #333;
            color: #fff;
        }

        /* ปุ่มฟอร์ม */
        .btn-primary {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            background-color: #00d1b2;
            border: none;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #00b38a;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/home">
                <img src="{{ asset('assets/imgs/Esan_Restaurant_1-removebg-preview.png') }}" alt="Esan Restaurant"
                    height="60" width="auto" class="me-2">
                Esan Restaurant
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- ลิงก์อื่น ๆ อยู่ทางขวา -->
            <ul class="navbar-nav">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('my_cart') }}">ตะกร้า</a>
                        </li>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit"
                                class="btn btn-danger btn-lg rounded-pill px-4 py-2 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out">
                                ออกจากระบบ
                            </button>
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">ล็อกอิน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">ลงทะเบียน</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Cart Table Section -->
        <div id="gallary" class="section bg-light">
            <h2 class="section-title ">ตะกร้าสินค้า</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ชื่ออาหาร</th>
                        <th>ราคา</th>
                        <th>จำนวน</th>
                        <th>รูปภาพ</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_price = 0;
                    ?>
                    @foreach ($carts as $cart)
                        <tr>
                            <td>{{ $cart->title }}</td>
                            <td>${{ $cart->price }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>
                                <img width="100" src="{{ asset('food_img/' . $cart->image) }}" alt="Food image">
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure to remove?')" class="btn btn-danger btn-sm"
                                    href="{{ url('remove_cart/' . $cart->id) }}">ลบ</a>
                            </td>
                        </tr>
                        <?php
                        $total_price += $cart->price * $cart->quantity;
                        ?>
                    @endforeach
                </tbody>
            </table>
            <h3 class="text-center">ราคารวม: ${{ $total_price }}</h3>
        </div>

        <!-- Order Confirmation Form -->
        <div class="form-container">
            <form action="{{ url('confirm_order') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ Auth::user()->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">อีเมล</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ Auth::user()->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร</label>
                    <input type="number" class="form-control" id="phone" name="phone"
                        value="{{ Auth::user()->phone }}" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ Auth::user()->address }}" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">ยืนยันคำสั่งซื้อ</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
