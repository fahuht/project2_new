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
    <title>Create category</title>
</head>

<body>

{{-- Sidebar --}}
@include('sidebar')

{{-- main --}}
<section id="content" style="margin-top: 30px">
    <h2 style="text-align: center">Thêm danh mục</h2>
    <form method="post" action="{{ route('categories.store') }}" class="add-category-form">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"  required>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Thêm</button>
    </form>
</section>
</body>

</html>
