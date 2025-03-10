<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
        }

        .page-header {
            margin-top: 20px;
            margin-bottom: 40px;
        }

        h1 {
            text-align: center;
            color: #00d1b2;
        }

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
        }

        /* Hover effect for table rows */
        tr:hover {
            background-color: #444444;
        }

        .container-fluid {
            padding: 0 15px;
        }

        .page-content {
            padding: 30px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .btn {
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            margin: 5px;
            font-weight: bold;
        }

        .btn-warning {
            background-color: #f39c12;
            color: white;
        }

        .btn-danger {
            background-color: #e74c3c;
            color: white;
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <h1>รายการการจอง</h1>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>เบอร์โทร</th>
                            <th>จำนวนคน</th>
                            <th>วันที่</th>
                            <th>เวลา</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->phone }}</td>
                                <td>{{ $book->guest }}</td>
                                <td>{{ $book->date }}</td>
                                <td>{{ $book->time }}</td>

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
