<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    @include('header')
    <title>Danh sách sản phẩm</title>
</head>

<body>

<!-- Menu -->
@include('menu')
<!-- End Menu -->
<!-- Content -->
<div class="container content">
    <div class="row ">
        <!-- Content Left -->
        <div class="content-left-product col-sm-3 ">
            <ul class="list-group ">
                <li class="list-group-item">CÀ PHÊ</li>
                <li class="list-group-item">SYPHON</li>
                <li class="list-group-item">MOKA POT</li>
                <li class="list-group-item">FRENCH FRESS</li>
                <li class="list-group-item">V60</li>
            </ul>
        </div>
        <!-- ENd Content Left -->
        <!-- Content Right -->
        <div class="content-right-product col-sm-9">
            <div class="product">
                <div class="contanier">
                    <div class="product-name">
                        <h2 class="name-product">CÀ PHÊ</h2>
                        <div class="row">
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/size-vuong-02.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Phê Truffle</h5>
                                        <h5 class="text-content"> 50.000 đ</h5>
                                        <a href="{{url('/product-detail')}}" class="btn ">MUA NGAY</a>
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
                                            <a href="#" class="btn ">MUA NGAY</a>
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
                                            <a href="#" class="btn">MUA NGAY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- End Content Right -->
    </div>
</div>
<!-- End Content -->
<!-- footer -->
@include('footer')

<!-- End footer -->

</body>

</html>
