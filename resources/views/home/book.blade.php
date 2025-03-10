<div id="book-table" class="container-fluid has-bg-overlay text-center text-light py-5">
    <h2 class="section-title text-warning mb-5 mt-3">จองโต๊ะ</h2>
    <form action="{{ url('book_table') }}" method="post">
        @csrf
        <div class="row g-4 mb-4">
            <!-- Phone Number -->
            <div class="col-sm-6 col-md-3">
                <input type="text" id="phone" class="form-control form-control-lg custom-form-control"
                    name="phone" placeholder="เบอร์โทร" required>
            </div>
            <!-- Number of Guests -->
            <div class="col-sm-6 col-md-3">
                <input type="number" id="n_guest" class="form-control form-control-lg custom-form-control"
                    name="n_guest" placeholder="จำนวนคน" max="20" min="1" required>
            </div>
            <!-- Time -->
            <div class="col-sm-6 col-md-3">
                <input type="time" id="time" class="form-control form-control-lg custom-form-control"
                    name="time" required>
            </div>
            <!-- Date -->
            <div class="col-sm-6 col-md-3">
                <input type="date" id="date" class="form-control form-control-lg custom-form-control"
                    name="date" required>
            </div>
        </div>
        <button type="submit" class="btn btn-custom btn-lg rounded-pill px-5 mt-5">ยืนยัน</button>
    </form>
</div>
