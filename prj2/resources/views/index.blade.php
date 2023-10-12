<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHELA</title>
    @include('header')
</head>

<body>

<!-- Menu -->
@include('menu')
<!-- End Menu -->
<!-- Banner -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/cover-web.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://phela.vn/wp-content/uploads/2023/08/Phe-La_web-2500x950px-TCC-01-min-scaled.jpg"
                 class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- content -->
<div class="container">
    <h1>PHÊ LA VÀ NHỮNG ĐIỀU KHÁC BIỆT</h1>
    <!-- content1 -->
    <div class="content-1">
        <div class="row ">
            <div class="col">
                <h2>CÂU CHUYỆN THƯƠNG HIỆU</h2>
                <p>Nốt Hương Đặc Sản - Phê La luôn trân quý, nâng niu những giá trị Nguyên Bản ở mỗi vùng đất mà chúng tôi đi
                    qua, nơi tâm hồn được đồng điệu với thiên nhiên, với nỗi vất vả nhọc nhằn của người nông dân; cảm nhận được
                    hết thảy những tầng hương ẩn sâu trong từng nguyên liệu. Một chặng đường dài đang chờ phía trước, Phê La đã
                    sẵn sàng viết tiếp câu chuyện Nốt Hương Đặc Sản - Nguyên Bản - Thủ Công đầy cảm hứng và càng tự hào hơn khi
                    được mang sứ mệnh: ``Đánh thức những nốt hương đặc...</p>
            </div>
            <div class="col">
                <img src="https://phela.vn/wp-content/uploads/2021/11/web.jpg" alt="">
                <button type="click" class="btn button-content-1">XEM THÊM</button>
            </div>
            <div class="col">
                <h2>NGUYÊN LIỆU ĐẶC SẢN</h2>
                <p>Trà Ô Long đặc sản tại Phê La còn được ươm trồng với phương pháp chăm bón hữu cơ, hoàn toàn với trứng gà,
                    đậu nành và thu hái thủ công để có được những búp trà tươi và non nhất, tạo nên điểm khác biệt mạnh mẽ so
                    với các thương hiệu khác. Có thể nói, dòng trà đặc sản của Phê La luôn giữ được hương vị thơm ngon nguyên
                    bản nhất và được nhiều người biết đến như một nguồn nguyên liệu tinh hoa của Đà Lạt.</p>
            </div>
        </div>
    </div>
    <!-- End content1 -->
    <!-- product -->
    <h1>CÁC DÒNG SẢN PHẨM NỔI BẬT</h1>
@include('list_product')
    <!-- End product -->
</div>
<!-- End Content -->
<!-- footer -->
@include('footer')

<!-- End footer -->








</div>



</body>

</html>
