<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/product_detail.css') }}">
     @include('header');
    <title>Sản phẩm chi tiết</title>
</head>

<body>
<!-- Menu -->
@include('menu')
<!-- End Menu -->
<!-- Main Content -->
<div class="container">
    <nav style="--bs-breadcrumb-divider:  '>';" aria-label="breadcrumb" >
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="#" style="color: #F58B63;">Phela</a></li>
            <li class="breadcrumb-item " aria-current="page">Sản Phẩm</li>
            <li class="breadcrumb-item active" aria-current="page">Phê Truffle</li>
        </ol>
    </nav>
    <!-- Product Detail -->
    <div class="row product-detail">
        <div class="col-sm-5 product-detail-left">
            <img src="./images/size-vuong-02.jpg" style="width: 388.355px;
                height: 430.991px;" alt="">
        </div>
        <div class="col-sm-7 product-detail-right">
            <h2 class="detail-text">PHÊ TRUFFLE</h2>
            <h2 class="text-content">50.000 đ</h2>
            <div class="row product-detail-right-quantity" >
                <div class="col-5 quantity-product">
                    <h3> Số lượng: 10 </h3>
                </div>

                <div class="col-2 quantity-product">
                    <h3> Size</h3>

                </div>
                <div class="col-1 size-prodduct dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false" >

                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" >
                        <li><a class="dropdown-item" href="#">S</a></li>
                        <li><a class="dropdown-item" href="#">M</a></li>
                        <li><a class="dropdown-item" href="#">L</a></li>
                    </ul>
                </div>
            </div>
            <button type="click" class="btn button-product-detail ">MUA NGAY</button>

        </div>

    </div>
    <!-- End Product Detail -->
    <!-- Descripton -->
    <div class="product-description" style="margin-top: 50px; margin-bottom: 50px;">
        <h1 class="text-center" style="color: #5F5858;">CHI TIẾT SẢN PHẨM</h1>
        <h6>Sự sáng tạo hòa hợp của Cà Phê Đậm Mượt và Kem Nấm Truffle Đen Thơm Béo, hương vị bùng nổ đầy phóng
            khoáng.</h6>

    </div>
    <!-- End Descripton -->
    <!-- Product feature -->
    <h1>CÁC DÒNG SẢN PHẨM NỔI BẬT</h1>
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="images/size-vuong-02.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Phê Truffle</h5>
                            <h5 class="text-content"> 50.000 đ</h5>
                            <a href="#" class="btn ">CHI TIẾT</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/size-vuong-02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Phê Truffle</h5>
                                <h5 class="text-content"> 50.000 đ</h5>
                                <a href="#" class="btn ">CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="images/size-vuong-02.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Phê Truffle</h5>
                                <h5 class="text-content"> 50.000 đ</h5>
                                <a href="#" class="btn">CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product feature -->



</div>
<!-- End Main Content -->

<!-- footer -->
@include('footer')
<!-- End footer -->
</body>

</html>
