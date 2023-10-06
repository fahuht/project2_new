<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a product</title>
</head>
<body>

<form method="post" action="{{ route('products.update', $product) }} " enctype="multipart/form-data">
    @csrf
    @method('PUT')

    Tên sản phẩm: <input type="text" name="name" value="{{ $product->name }}"> <br>
    Giá tiền: <input type="text" name="price" value="{{ $product->price }}"><br>
    Hình ảnh: <input type="file" name="image" >
    <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('Admin/'). $product->image) }}" width="100px" height="100px">
    <br>
    Danh mục: <select name="cate_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
            @if($product->cate_id == $category->id)
                {{ 'selected' }}
                @endif
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select> <br>
    <button>Cập nhật</button>
</form>
</body>
</html>
