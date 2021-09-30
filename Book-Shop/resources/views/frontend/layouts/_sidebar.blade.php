<div class="sub-cate">
    <div class="top-nav rsidebar span_1_of_left">
        <h3 class="cate">DANH MỤC SÁCH</h3>
        <ul class="menu">
            @foreach ($categories as $category)
            <li class="item1">
                <a href="#">{{$category->name}} <i class="fa-solid fa-angle-down"></i> </a>
                @if ($category->subCategory)
                    <ul class="cute">
                        @foreach ($category->subCategory as $subcate )
                        <li class="subitem1"><a href="{{url('product?category='.$category->id.'&subcategory='.$subcate->id)}}">{{$subcate->name}} </a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
    <div class="chain-grid menu-chain">
        <a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>
        <div class="grid-chain-bottom chain-watch">
            <span class="actual dolor-left-grid">300$</span>
            <span class="reducedfrom">500$</span>
            <h6>Lorem ipsum dolor</h6>
        </div>
    </div>
    <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>
</div>
<div class="clearfix"></div>