<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
       
        
        <ul class="list-unstyled">
            <li class="active"><a href="{{ url('home') }}"> <i class="icon-home"></i>หน้าหลัก</a></li>

            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                        class="icon-windows"></i>เมนู</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_food') }}">เพิ่มเมนู</a></li>
                    <li><a href="{{ url('view_food') }}">รายการเมนู</a></li>

                </ul>
            </li>
            <li><a href="{{ url('order') }}"> <i class="icon-logout"></i>คำสั่งซื้อ</a></li>
            <li><a href="{{ url('reservations') }}"> <i class="icon-logout"></i>จองโต๊ะ</a></li>



    </nav>
    <!-- Sidebar Navigation end-->
