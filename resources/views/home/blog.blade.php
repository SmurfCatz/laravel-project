<!-- Blog Section -->
<div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
    <h2 class="section-title py-5 text-warning font-weight-bold mb-3">เมนูของเรา</h2>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row g-4">

                @foreach ($foods as $food)
                    <div class="col-md-4">
                        <div class="card bg-transparent border-0 rounded shadow-lg h-100">
                            <!-- Food Image -->
                            <img src="food_img/{{ $food->image }}" alt="Food image for {{ $food->title }}"
                                class="rounded-top card-img-top object-fit-cover" style="height: 250px;">

                            <div class="card-body d-flex flex-column text-center">
                                <!-- Food Price -->
                                <h2 class="text-center mb-3 text-warning">
                                    <span class="badge bg-dark text-light">${{ $food->price }}</span>
                                </h2>
                                <!-- Food Title -->
                                <h4 class="text-uppercase mb-3 text-light">{{ $food->title }}</h4>
                                <!-- Food Details -->
                                <p class="text-muted mb-4">{{ $food->details }}</p>

                                <!-- Add to Cart Form -->
                                <form action="{{ url('add_cart/' . $food->id) }}" method="post"
                                    class="addCartForm mt-auto">
                                    @csrf
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <input type="number" value="1" min="1" name="qty"
                                            class="form-control w-50 me-2" required>
                                        <button type="submit" class="btn btn-warning">เพิ่มลงตะกร้า</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // ใช้ jQuery ส่งฟอร์มผ่าน AJAX
    $('.addCartForm').on('submit', function(event) {
        event.preventDefault(); // ป้องกันไม่ให้ฟอร์มรีเฟรชหน้า

        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize(); // เก็บข้อมูลของฟอร์มทั้งหมด

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function(response) {
                // การตอบสนองจากเซิร์ฟเวอร์ เช่น แจ้งเตือนว่าเพิ่มตะกร้าเรียบร้อย
                alert('เพิ่มสินค้าลงตะกร้าแล้ว!');
                // คุณสามารถอัพเดตตะกร้าหรือข้อมูลอื่นๆ ได้ที่นี่
            },
            error: function(xhr, status, error) {
                alert('เกิดข้อผิดพลาด! กรุณาลองใหม่');
            }
        });
    });
</script>
