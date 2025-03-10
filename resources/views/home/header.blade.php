<!-- Header Section -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#home">
            <img src="{{ asset('assets/imgs/Esan_Restaurant_1-removebg-preview.png') }}" alt="Esan Restaurant"
                height= "60" width=auto class="me-2">
            Esan Restaurant
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">เกี่ยวกับเรา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">คลังรูปภาพ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">จองโต๊ะ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">เมนู</a>
                </li>
            </ul>

            <!-- Right Links -->
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('my_cart') }}">ตะกร้า</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit"
                                    class="btn btn-danger btn-lg rounded-pill px-4 py-2 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out">
                                    ออกจากระบบ
                                </button>
                            </form>
                        </li>
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
    </div>
</nav>

<!-- Header Section -->
<header id="home" class="header bg-dark text-light d-flex align-items-center position-relative">
    <div class="overlay text-center w-100">
        <div class="container">
            <h1 class="display-4 font-weight-bold my-4 text-shadow">ยินดีต้อนรับ</h1>
            <h3 class="mb-4 text-shadow">Esan Restaurant ร้านอาหารอีสานที่ดีที่สุดในภาคอีสาน
            </h3>
            <a class="btn btn-lg btn-primary text-white px-5 py-3" href="#gallery">ดูรูปภาพ</a>
        </div>
    </div>
</header>

<!-- JavaScript for Smooth Scrolling -->
<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
