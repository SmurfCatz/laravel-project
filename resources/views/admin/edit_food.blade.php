<!DOCTYPE html>
<html>

<head>
    <base href="/public">
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
            text-align: center;
        }

        h1 {
            color: #00d1b2;
            margin-bottom: 30px;
        }

        .form-container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-container label {
            display: inline-block;
            width: 200px;
            margin-top: 10px;
            color: #ffffff;
            font-weight: bold;
            text-align: left;
            margin-right:100%;
        }


        .form-container input[type="text"],
        .form-container textarea,
        .form-container input[type="file"] {
            width: 100%;
            padding: 12px;
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

        .img-preview {
            margin-top: 10px;
        }

        .img-preview img {
            width: 100px;
            height: auto;
        }

        .div_deg {
            margin-bottom: 20px;
        }

        /* Media Query สำหรับการแสดงผลที่ดีขึ้นในมือถือ */
        @media (max-width: 768px) {
            .form-container {
                padding: 15px;
            }

            .form-container label {
                width: 100%;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>แก้ไขเมนูอาหาร</h1>
                <div class="form-container">
                    <form action="{{ url('update_food/' . $food->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_deg">
                            <label for="title">ชื่ออาหาร</label>
                            <input type="text" name="title" id="title" value="{{ $food->title }}" required>
                        </div>
                        <div class="div_deg">
                            <label for="details">รายละเอียด</label>
                            <textarea name="details" id="details" cols="50" rows="5" required>{{ $food->details }}</textarea>
                        </div>
                        <div class="div_deg">
                            <label for="price">ราคา</label>
                            <input type="text" name="price" id="price" value="{{ $food->price }}" required>
                        </div>
                        <div class="div_deg">
                            <label for="img">รูปภาพ</label>
                            <input type="file" name="img" id="img">
                            <div class="img-preview">
                                <img src="{{ asset('food_img/' . $food->image) }}" alt="Food Image">
                            </div>
                        </div>
                        <div class="div_deg">
                            <input type="submit" value="Update Food">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
