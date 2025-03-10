<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Restaurant Landing Page - ร้านอาหารอีสาน">
    <meta name="author" content="Your Name">

    <!-- Include CSS -->
    @include('home.css')

    <title>ร้านอาหารอีสาน</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @include('home.header')

    @include('home.about')

    @include('home.gallery')

    @include('home.book')

    <!-- Blog Section -->
    @include('home.blog')

    <!-- Footer Section -->
    <footer class="container-fluid footer bg-dark text-light text-center py-5">
        <div class="row">
            <!-- Contact Email -->
            <div class="col-sm-4 mb-4 mb-sm-0">
                <h3 class="footer-title">อีเมล</h3>
                <p class="text-muted footer-text">test@example.com</p>
            </div>

            <!-- Contact Number -->
            <div class="col-sm-4 mb-4 mb-sm-0">
                <h3 class="footer-title">เบอร์โทร</h3>
                <p class="text-muted footer-text">098-7777777</p>
            </div>

            <!-- Location -->
            <div class="col-sm-4">
                <h3 class="footer-title">พิกัด</h3>
                <p class="text-muted footer-text">439 ตำบล ในเมือง อำเภอเมืองบุรีรัมย์ บุรีรัมย์ 31000</p>
            </div>
        </div>


        <!-- Footer Copyright -->
        <div class="mt-4">
            <p class="footer-copyright">&copy; 2025 Esan Restaurant. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Font Awesome for Social Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Footer JS & Dependencies -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>

    <!-- Google Maps API -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- Custom JS -->
    <script src="assets/js/foodhut.js"></script>

</body>

</html>
