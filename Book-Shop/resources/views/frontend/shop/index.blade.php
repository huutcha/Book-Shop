@extends('frontend.layouts.main')
@section('title')
Tông hợp sản phẩm
@endsection


@section('content')
    
<div class="shoes-grid" style="margin-top: 2em">
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
    <div class="product-left">
        <div class="row">
         
        @foreach ($products as $product)
        <div class="col-md-4 chain-grid">
            <a href="{{url('products/'.$product->id)}}" class="chain-container"><img class="img-responsive chain" src="{{asset('storage/products/'.$product->image[0]->path)}}" alt=" " /></a>
            <span class="star"> </span>
            <div class="grid-chain-bottom">
                <h6><a href="{{url('products/'.$product->id)}}">{{$product->information->name}}</a></h6>
                <div class="star-price">
                    <div class="dolor-grid">
                        <span class="actual">{{$product->price}} VNĐ</span>
                        {{-- <span class="reducedfrom">400$</span> --}}
                        <span class="rating">
                            <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" />
                            <label for="rating-input-1-5" class="{{$product->rate >= 1 ? 'rating-star1' : 'rating-star'}}"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" />
                            <label for="rating-input-1-4" class="{{$product->rate >= 2 ? 'rating-star1' : 'rating-star'}}"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" />
                            <label for="rating-input-1-3" class="{{$product->rate >= 3 ? 'rating-star1' : 'rating-star'}}"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" />
                            <label for="rating-input-1-2" class="{{$product->rate >= 4 ? 'rating-star1' : 'rating-star'}}"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" />
                            <label for="rating-input-1-1" class="{{$product->rate >= 5 ? 'rating-star1' : 'rating-star'}}"> </label>
                        </span>
                    </div>
                    <a class="now-get get-cart" href="#">ADD TO CART</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        @endforeach   
        </div>
        
        <div class="clearfix"></div>
    </div>
</div>

@endsection



@push('js')
    <script>
        $(function(){
            $('.active').css('background-color', '#1DBAA5')
            $('.active').parents('ul.cute').show();
        })
        
    </script>
@endpush