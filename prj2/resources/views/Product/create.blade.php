<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Add a product</title>
</head>

<body>

{{-- Sidebar --}}
<nav class="sidebar">
    <header>
        <div class="image-text">
                <span class="image">
                    <img src="{{ asset('assets/image/logo.vn.png') }}" alt="logo">
                </span>
        </div>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="search" placeholder="Tìm kiếm...">
            </li>
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-bar-chart icon'></i>
                        <span class="text nav-text">Doanh thu</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bxl-product-hunt icon'></i>
                        <span class="text nav-text">Sản phẩm</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bxs-package icon'></i>
                        <span class="text nav-text">Đơn hàng</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bxs-user icon'></i>
                        <span class="text nav-text">User</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#" style="background-color: #BE7352">
                        <i class='bx bx-category icon'></i>
                        <span class="text nav-text">Danh mục</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="#">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
        </div>
    </div>
</nav>

{{-- main --}}
<section id="content" style="margin-top: 30px">
    <h2 style="text-align: center">Thêm sản phẩm</h2>
    <form method="post" action="{{ route('products.store') }}" class="add-category-form" enctype="multipart/form-data">
        @csrf
        Tên sản phẩm: <input type="text" name="name"  required><br>
        Hình ảnh: <input type="file" name="image"  required><br>
        Giá tiền: <input type="text" name="price"  required><br>
        Danh mục: <select name="cate_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select> <br>
        <button>Thêm</button>

    </form>
</section>
</body>

</html>
