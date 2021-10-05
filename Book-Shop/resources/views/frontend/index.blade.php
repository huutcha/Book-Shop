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


    <div class="shoes-grid-left">
        <a href="single.html">
            <div class="col-md-6 con-sed-grid">
                <div class="elit-grid">
                    <h4>consectetur elit</h4>
                    <label>FOR ALL PURCHASE VALUE</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
                    <span class="on-get">GET NOW</span>
                </div>
                <img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />
    
                <div class="clearfix"></div>
            </div>
        </a>
        <a href="single.html">
            <div class="col-md-6 con-sed-grid sed-left-top">
                <div class="elit-grid">
                    <h4>consectetur elit</h4>
                    <label>FOR ALL PURCHASE VALUE</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
                    <span class="on-get">GET NOW</span>
                </div>
                <img class="img-responsive shoe-left" src="images/wa.jpg" alt=" " />
    
                <div class="clearfix"></div>
            </div>
        </a>
    </div>

    <div class="products">
        <h5 class="latest-product">SẢN PHẨM MỚI</h5>
        <a class="view-all" href="product.html">XEM TẤT CẢ<span> </span></a>
    </div>
    <div class="product-left">
        <div class="row">
        @foreach ($lastestProducts as $lastestProduct)
        <div class="col-md-4 chain-grid">
            <a href="single.html" class="chain-container"><img class="img-responsive chain" src="{{asset('storage/products/'.$lastestProduct->image[0]->path)}}" alt=" " /></a>
            <span class="star"> </span>
            <div class="grid-chain-bottom">
                <h6><a href="single.html">{{$lastestProduct->information->name}}</a></h6>
                <div class="star-price">
                    <div class="dolor-grid">
                        <span class="actual">{{$lastestProduct->price}} VNĐ</span>
                        {{-- <span class="reducedfrom">400$</span> --}}
                        <span class="rating">
                            <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1" />
                            <label for="rating-input-1-5" class="{{$lastestProduct->rate >= 1 ? 'rating-star1' : 'rating-star'}}"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1" />
                            <label for="rating-input-1-4" class="{{$lastestProduct->rate >= 2 ? 'rating-star1' : 'rating-star'}}"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1" />
                            <label for="rating-input-1-3" class="{{$lastestProduct->rate >= 3 ? 'rating-star1' : 'rating-star'}}"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1" />
                            <label for="rating-input-1-2" class="{{$lastestProduct->rate >= 4 ? 'rating-star1' : 'rating-star'}}"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1" />
                            <label for="rating-input-1-1" class="{{$lastestProduct->rate >= 5 ? 'rating-star1' : 'rating-star'}}"> </label>
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
@push('link-js')
<script src="{{asset('frontend/js/jquery.wmuSlider.js')}}"></script>

@endpush
@push('js')
<script>
    $(".example1").wmuSlider();
</script>
@endpush