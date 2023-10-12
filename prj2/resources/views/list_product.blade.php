<div class="product">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('Admin/'). $product->image) }}"  class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $product->name }}</h5>
                            <h5 class="text-content"> {{ $product->price }} đ</h5>
                            <a href="" class="btn ">CHI TIẾT</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <button type="click" class="btn button-product display: flex flex-wrap: wrap">XEM THÊM</button>
    </div>
</div>
