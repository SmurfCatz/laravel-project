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
            margin-bottom: 30px;
        }

        .form-container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-container label {
            display: inline-block;
            width: 200px;
            margin-top: 10px;
            color: #ffffff;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container textarea,
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #333;
            background-color: #222;
            color: #ffffff;
        }

        .form-container textarea {
            resize: vertical;
        }

        .form-container input[type="submit"] {
            background-color: #00d1b2;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            margin-top: 20px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #00b19d;
        }

        .form-container .btn {
            display: inline-block;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <h1>เพิ่มเมนูอาหาร</h1>
            <div class="form-container">
                <form action="{{ url('upload_food') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_deg">
                        <label for="title">ชื่ออาหาร</label>
                        <input type="text" name="title" id="title" required>
                    </div>
                    <div class="div_deg">
                        <label for="details">รายละเอียด</label>
                        <textarea name="details" id="details" cols="50" rows="5" required></textarea>
                    </div>
                    <div class="div_deg">
                        <label for="price">ราคา</label>
                        <input type="text" name="price" id="price" required>
                    </div>
                    <div class="div_deg">
                        <label for="img">รูปภาพ</label>
                        <input type="file" name="img" id="img" required>
                    </div>
                    <div class="div_deg">
                        <input type="submit" value="Add Food">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.js')
</body>

</html>
