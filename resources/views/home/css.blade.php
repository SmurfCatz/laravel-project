<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="ร้านอาหารอีสาน รสชาติแท้ ที่คุณไม่ควรพลาด">
<meta name="author" content="Esan Restaurant">
<title>Esan Restaurant</title>

<link rel="stylesheet" href="assets/css/foodhut.css">

<!-- Main Styles -->
<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7f6;
        color: #000000;
        line-height: 1.6;
        padding-top: 80px;

    }

    /* Navbar */
    .navbar {
        background-color: #333;
        padding: 20px 0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }

    .navbar-brand {
        color: #ff6347;
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .navbar .nav-link {
        color: #fff;
        padding: 10px 20px;
        font-size: 1.1rem;
        text-transform: uppercase;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .navbar .nav-link:hover {
        color: #ff6347;
    }

    .navbar-toggler {
        background-color: #ff6347;
        border: none;
    }

    .navbar-toggler-icon {
        background-color: #fff;
    }

    /* Section */
    .section {
        padding: 100px 0;
        text-align: center;
        background-color: #ffffff;
    }

    .section-title {
        font-size: 3rem;
        color: #1f8a70;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 3px;
        margin-bottom: 3rem;
        text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2);
    }

    /* About Section */
    .about-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: #ffffff;
        border-radius: 15px;
        padding: 3rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
    }

    .about-section img {
        max-width: 100%;
        border-radius: 15px;
        transition: transform 0.3s ease;
    }

    .about-section img:hover {
        transform: scale(1.05);
    }

    .about-section .about-text {
        max-width: 600px;
        padding: 20px;
    }

    .about-section .about-text h2 {
        font-size: 2.5rem;
        color: #1f8a70;
        margin-bottom: 1.5rem;
    }

    .about-section .about-text p {
        font-size: 1.2rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 1.5rem;
    }

    .btn-primary {
        padding: 12px 25px;
        background-color: #ff6347;
        color: #fff;
        border-radius: 30px;
        font-size: 1.2rem;
        font-weight: 700;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #d84c39;
    }

    /* Footer */
    footer {
        background-color: #333;
        color: #fff;
        padding: 30px 0;
        text-align: center;
        font-size: 1rem;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    footer p {
        margin: 0;
        font-weight: 600;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .about-section {
            flex-direction: column;
            text-align: center;
        }

        .about-section img {
            margin-bottom: 2rem;
        }

        .navbar-brand {
            font-size: 1.8rem;
        }

        .navbar .nav-link {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .navbar .nav-link {
            font-size: 1rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .about-section .about-text h2 {
            font-size: 1.8rem;
        }

        .about-section .about-text p {
            font-size: 1rem;
        }
    }

    #book-table {
        background: rgba(0, 0, 0, 0.8) url('https://via.placeholder.com/1500x900') center/cover no-repeat;
        background-size: cover;
        position: relative;
        padding-top: 60px;
    }

    .has-bg-overlay::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    .section-title {
        font-size: 3rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
    }

    .custom-form-control {
        border: 2px solid #fff;
        background: transparent;
        color: #fff;
        font-size: 1.1rem;
        padding: 0.75rem 1rem;
    }

    .custom-form-control::placeholder {
        color: #bbb;
    }

    .custom-form-control:focus {
        border-color: #ff9800;
        box-shadow: 0 0 8px rgba(255, 152, 0, 0.7);
    }

    .btn-custom {
        background-color: #ff9800;
        border: none;
        font-weight: 600;
        letter-spacing: 1px;
        transition: background-color 0.3s ease;
        padding: 1rem 2rem;
    }

    .btn-custom:hover {
        background-color: #e68900;
    }

    .btn-custom:focus {
        box-shadow: 0 0 10px rgba(255, 152, 0, 0.5);
    }

    #blog {
        background: rgba(0, 0, 0, 0.9) url('https://via.placeholder.com/1500x900') center/cover no-repeat;
        background-size: cover;
        padding-top: 40px;
    }

    .section-title {
        font-size: 3rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }

    .card-body h4 {
        color: #ffcc00;
        font-size: 1.25rem;
        font-weight: 500;
    }

    .card-body p {
        font-size: 1rem;
        line-height: 1.6;
        color: #b0b0b0;
    }

    .btn-warning {
        background-color: #ffcc00;
        border: none;
        transition: background-color 0.3s ease;
        font-weight: 600;
    }

    .btn-warning:hover {
        background-color: #e6b800;
    }

    .card-img-top {
        object-fit: cover;
    }

    .gallery-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: transform 0.3s ease, opacity 0.3s ease;
        border-radius: 10px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
        margin-bottom: 0.5rem;
        /* Reduced space between items */
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 10px;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-icon {
        font-size: 3rem;
        color: white;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-icon {
        transform: scale(1.3);
    }

    /* For responsive layout */
    @media (max-width: 768px) {
        .gallery-item {
            margin-bottom: 1rem;
        }
    }

    /* For very small screens */
    @media (max-width: 576px) {
        .gallery-img {
            height: 200px;
        }
    }

    /* Navbar Styles */
    .custom-navbar {
        background-color: #2a2a2a;
        border-bottom: 2px solid #ff9800;
        transition: background-color 0.3s ease;
    }

    .custom-navbar:hover {
        background-color: #444;
    }

    .navbar-nav .nav-link {
        font-size: 1.1rem;
        padding: 0.75rem 1rem;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #ff9800;
    }

    /* Header Section */
    .header {
        background-image: url('https://d3h1lg3ksw6i6b.cloudfront.net/media/image/2019/08/05/000d670272364cf0b164f4d764560bdf_Isaan_Food_Hero.jpg');
        background-position: center;
        background-size: cover;
        height: 100vh;
        color: white;
        position: relative;
    }

    .header .overlay {
        background: rgba(0, 0, 0, 0.5);
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .header .container {
        text-align: center;
    }

    .btn-primary {
        background-color: #ff9800;
        border: none;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #ff5722;
    }

    /* Text Shadow for readability */
    .text-shadow {
        text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);
    }

    /* Navbar Toggler Icon */
    .navbar-toggler-icon {
        color: #fff;
    }
</style>
