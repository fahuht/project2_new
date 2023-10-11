<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ asset('assets/css/bill.css') }}">
    @include('header')
    <title>Hóa đơn chi tiết</title>
</head>

<body>

<!-- Menu -->
@include('menu')
<!-- End Menu -->

<!-- content -->
<div class="container">
    <h1>HÓA ĐƠN CHI TIẾT</h1>
    <div class="row bill-content">
        <div class="row-8 bill-content-left">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col-1">STT</th>
                    <th scope="col-1">Tên sản phẩm</th>
                    <th scope="col-4">Ảnh sản phẩm</th>
                    <th scope="col-1">Size</th>
                    <th scope="col-1">Số lượng</th>
                    <th scope="col-1">Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Truffle</td>
                    <td>
                        <img src="/images/size-vuong-02.jpg" style="width: 137.687px;
                        height: 107.642px;">
                    </td>
                    <td>L</td>
                    <td>1</td>
                    <td>50.000đ</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Truffle</td>
                    <td>
                        <img src="/images/size-vuong-02.jpg" style="width: 137.687px;
                        height: 107.642px;">
                    </td>
                    <td>M</td>
                    <td>1</td>
                    <td>50.000đ</td>

                </tr>
                </tbody>
            </table>
        </div>
        <div class="row-4 bill-content-right">
            <h2>Thông tin khách hàng</h2>
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Tên khách hàng</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Nhập tên khách hàng">
                </div>

                <div class="col-md-4">
                    <label for="inputAddress" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Nhập số điện thoại">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Nhập địa chỉ">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Thành phố</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Hình thức thanh toán</label>
                    <select id="inputState" class="form-select">
                        <option selected></option>
                        <option>Chuyển khoản</option>
                        <option>Tiền mặt</option>
                    </select>
                </div>
                <div class="col-12">
                        <button type="submit" class="btn button-bill " >Thanh toán</button>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Content -->
<!-- footer -->
@include('footer')
<!-- End footer -->








</div>



</body>

</html>
