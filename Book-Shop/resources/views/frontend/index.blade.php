@extends('frontend.layouts.main')
@section('title')
    Trang chủ
@endsection
@push('css')
    <style>
        .carousel-control-prev, .carousel-control-next{
            background: transparent;
            border: none;
        }
    </style>
@endpush
@section('content')
<div class="shoes-grid">
    <a href="single.html"> </a>
    <div class="wrap-in mb-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('frontend/images/main_920_x_420_2.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/images/PayDay_T1021_mainbanner__920x420.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/images/TrangManga920x420.png')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="con-sed-grid">
                <div class="elit-grid">
                    <h4>consectetur elit</h4>
                    <label>FOR ALL PURCHASE VALUE</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
                    <span class="on-get">GET NOW</span>
                </div>
                <img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />
    
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="con-sed-grid">
                <div class="elit-grid">
                    <h4>consectetur elit</h4>
                    <label>FOR ALL PURCHASE VALUE</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
                    <span class="on-get">GET NOW</span>
                </div>
                <img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />
    
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('content-botttom')
<div class="labels">
    <h5 class="latest-product">SẢN PHẨM MỚI</h5>
    <a class="view-all" href="product.html">XEM TẤT CẢ<span> </span></a>
</div>
<div class="product-left content">
    <div class="row">
        @foreach ($lastestProducts as $lastestProduct)
        <div class="col-md-3">
            <div class="product-container">
                <a href="{{url('products/'.$lastestProduct->id)}}" class="chain-container"><img class="img-responsive chain" src="{{asset('storage/products/'.$lastestProduct->image[0]->path)}}" alt=" " /></a>
                <span class="star"> </span>
                <div class="grid-chain-bottom">
                    <h6><a href="{{url('products/'.$lastestProduct->id)}}">{{$lastestProduct->information->name}}</a></h6>
                    <div class="star-price">
                        <div class="dolor-grid">
                            <span class="actual">{{$lastestProduct->price}} VNĐ</span>
                            {{-- <span class="reducedfrom">400$</span> --}}
                            <ul class="rating">
                                <li><i class="{{$lastestProduct->rate >= 1 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                <li><i class="{{$lastestProduct->rate >= 2 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                <li><i class="{{$lastestProduct->rate >= 3 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                <li><i class="{{$lastestProduct->rate >= 4 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                                <li><i class="{{$lastestProduct->rate >= 5 ? 'fas fa-star' : 'far fa-star'}}"></i></li>
                            </ul>
                        </div>
                        <a class="now-get add-cart" data-product="{{$lastestProduct->id}}">MUA NGAY</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@push('js')
<script>
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