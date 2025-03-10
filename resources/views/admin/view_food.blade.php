<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">


    @include('admin.css')

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #1e1e1e;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #333333;
            color: #00d1b2;
            font-weight: bold;
        }

        td img {
            border-radius: 8px;
        }

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

        .alert .close-btn {
            position: absolute;
            top: 5px;
            right: 15px;
            font-size: 20px;
            color: white;
            cursor: pointer;
            background: none;
            border: none;
        }

        .alert .close-btn:hover {
            color: #ff0000;
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>รายการอาหาร</h1>
                <table>
                    <tr>
                        <th>ชื่ออาหาร</th>
                        <th>รายละเอียด</th>
                        <th>ราคา</th>
                        <th>รูปภาพ</th>
                        <th>จัดการ</th>
                    </tr>
                    @foreach ($foods as $food)
                        <tr>
                            <td>{{ $food->title }}</td>
                            <td>{{ $food->details }}</td>
                            <td>{{ $food->price }}</td>
                            <td>
                                <img width="100" src="{{ asset('food_img/' . $food->image) }}" alt="">
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{ url('edit_food/' . $food->id) }}">แก้ไข</a>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure?')"
                                    href="{{ url('delete_food/' . $food->id) }}">ลบ</a>
                            </td>
                        </tr>
                        @if (session('message'))
                            <div class="alert alert-success">
                                <span class="close-btn"
                                    onclick="this.parentElement.style.display='none';">&times;</span>
                                {{ session('message') }}
                            </div>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @include('admin.js')
</body>

</html>
