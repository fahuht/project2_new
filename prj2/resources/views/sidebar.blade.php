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
                    <a href="{{ route('products.index') }}">
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
                    <a href="{{ route('categories.index') }}" style="background-color: #BE7352">
                        <i class='bx bx-category icon'></i>
                        <span class="text nav-text">Danh mục</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="{{route('customers.logout')}}">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
        </div>
    </div>
</nav>
