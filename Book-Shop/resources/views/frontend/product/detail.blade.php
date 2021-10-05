@extends('frontend.layouts.main')

@section('title')
    {{$product->information->name}}
@endsection
@push('link-css')
<link rel="stylesheet" href="{{asset('frontend/css/etalage.css')}}" type="text/css" media="all" />
@endpush
@section('content')
<div class="single_top">
    <div class="single_grid">
        <div class="grid images_3_of_2">
            <ul id="etalage">
                @foreach ( $product->image as $img)
                <li>
                    <img class="etalage_thumb_image" src="{{asset('storage/products/'.$img->path)}}" class="img-responsive" />
                    <img class="etalage_source_image" src="{{asset('storage/products/'.$img->path)}}" class="img-responsive" title="" />
                </li>
                @endforeach
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="desc1 span_3_of_2">
            <h4>{{$product->information->name}}</h4>
            <div class="cart-b">
                <div class="left-n">{{$product->price}} VNĐ</div>
                <a class="now-get get-cart-in" href="#">ADD TO CART</a>
                <div class="clearfix"></div>
            </div>
            <h6>{{$product->quantity > 0 ? 'Còn hàng' : 'Hết hàng'}}</h6>
            <p>
                <strong>Tác giả: </strong> {{$product->information->author}}<br>
                <strong>Nhà xuất bản: </strong> {{$product->information->published}}<br>
                <strong>Ngôn ngữ: </strong> {{$product->information->language}}<br>
                <strong>Năm xuất bản: </strong> {{$product->information->year}}<br>
            </p>
            {{-- <div class="share">
                <h5>Share Product :</h5>
                <ul class="share_nav">
                    <li>
                        <a href="#"><img src="images/facebook.png" title="facebook" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/twitter.png" title="Twiiter" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/rss.png" title="Rss" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/gpluse.png" title="Google+" /></a>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="toogle">
        <h3 class="m_3">Product Details</h3>
        <p class="m_text">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
            lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
            dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
        </p>
    </div>
    <div>
        <h3 class="m_3 mb-4">Sản phẩm cùng thể loại</h3>
        <ul id="flexiselDemo1">
            @foreach ($productsSame as $productSame)
                <li>
                    <div class="chain-grid" style="width:240px">
                        <a href="{{url('products/'.$productSame->id)}}" class="chain-container"><img class="img-responsive chain" src="{{asset('storage/products/'.$productSame->image[0]->path)}}" alt=" " /></a>
                        <span class="star"> </span>
                        <div class="grid-chain-bottom mb-3">
                            <h6><a href="{{url('products/'.$productSame->id)}}">{{$productSame->information->name}}</a></h6>
                            
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    
</div>

@endsection
@push('link-js')
<script src="{{asset('frontend/js/jquery.etalage.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.flexisel.js')}}"></script>
@endpush
@push('js')
<script>
    jQuery(document).ready(function($){

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,
            source_image_width: 900,
            source_image_height: 1200,
            show_hint: true,
            click_callback: function(image_anchor, instance_id){
                alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
            }
        });

    });
</script>
<script type="text/javascript">
    $(window).load(function() {
       $("#flexiselDemo1").flexisel({
           visibleItems: 3,
           animationSpeed: 1000,
           autoPlay: false,
           autoPlaySpeed: 3000,    		
           pauseOnHover: true,
           enableResponsiveBreakpoints: true,
           responsiveBreakpoints: { 
               portrait: { 
                   changePoint:480,
                   visibleItems: 1
               }, 
               landscape: { 
                   changePoint:640,
                   visibleItems: 2
               },
               tablet: { 
                   changePoint:768,
                   visibleItems: 3
               }
           }
       });
       
   });
 </script>
@endpush