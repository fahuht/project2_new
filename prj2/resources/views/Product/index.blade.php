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
    <title>Product</title>
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
                    <a href="{{ route('products.index') }}" style="background-color: #BE7352">
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
                    <a href="{{ route('categories.index') }}" >
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
    <h1 align="center">Quản lý sản phẩm</h1>
    <div class="container">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
        <table class="table text-center">
            <thead>
            <tr>
                <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá tiền</th>
                        <th>Danh mục</th>
                        <th>Hình ảnh</th>
                        <th>Hành động</th>
                        <th></th>
                        <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
            @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->id}}
                    </td>
                    <td>
                        {{ $product->name}}
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        {{ $product->cate_id }}
                    </td>
                    <td>
                        <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('Admin/'). $product->image) }}" width="100px" height="100px">

                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">Sửa</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product) }}" method="post"
                              class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</section>
<script>
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const confirmation = confirm('Bạn có chắc muốn xóa không?');

            if (confirmation) {
                form.submit();
            }
        });
    });
</script>
</body>
</html>
