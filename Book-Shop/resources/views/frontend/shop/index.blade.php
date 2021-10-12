@extends('frontend.layouts.main')
@section('title')
Tông hợp sản phẩm
@endsection


@section('content')
<div class="content">
<div class="shoes-grid">
    <div class=" w_content">
        <div class="women">
            <ul class="w_nav">
                <li>Sort : </li>
                 <li><a href="?sort=popular" style="{{Request::get('sort') == 'popular' ? 'color: rgb(29, 186, 165)' : ''}}">Phổ biến</a></li> |
                 <li><a href="?sort=new" style="{{Request::get('sort') == 'new' ? 'color: rgb(29, 186, 165)' : ''}}">Mới </a></li> |
                 <li><a href="?sort=discount" style="{{Request::get('sort') == 'discount' ? 'color: rgb(29, 186, 165)' : ''}}">discount</a></li> |
                 <li><a href="?sort=price" style="{{Request::get('sort') == 'price' ? 'color: rgb(29, 186, 165)' : ''}}">Giá: Low High </a></li> 
             <div class="clearfix"> </div>	
             </ul>
             <div class="clearfix"> </div>	
        </div>
    </div>
    <!-- grids_of_4 -->
    <div class="product-left mt-4">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="product-container">
                    <a href="{{url('products/'.$product->id)}}" class="chain-container"><img class="img-responsive chain" src="{{asset('storage/products/'.$product->image[0]->path)}}" alt=" " /></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="{{url('products/'.$product->id)}}">{{$product->information->name}}</a></h6>
                        <div class="star-price">
                            <div class="dolor-grid">
                                <span class="actual">{{$product->price}} VNĐ</span>
                                {{-- <span class="reducedfrom">400$</span> --}}
                                <ul class="rating">
                                    <li><i class="{{$product->rate >= 1 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                    <li><i class="{{$product->rate >= 2 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                    <li><i class="{{$product->rate >= 3 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                    <li><i class="{{$product->rate >= 4 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                    <li><i class="{{$product->rate >= 5 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                </ul>
                            </div>
                            <a class="now-get add-cart" data-product="{{$product->id}}">MUA NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection



@push('js')
    <script>
        $(function(){
            $('.active').css('background-color', '#1DBAA5')
            $('.active').parents('ul.cute').show();
        })
        $('.add-cart').click(function(){
            console.log($(this).data('product'));
            axios.post('/cart', {
                product_id: $(this).data('product'),
                quantity: 1
            })
            .then(function (response) {
                loadCart();
            })
            .catch(function (error) {
                console.log(error);
            });
        })
    </script>
@endpush