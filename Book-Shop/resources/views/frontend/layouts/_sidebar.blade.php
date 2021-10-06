<div class="sub-cate">
    <div class="top-nav rsidebar span_1_of_left">
        <h3 class="cate">DANH MỤC SÁCH</h3>
        <ul class="menu">
            @foreach ($categories as $category)
            <li class="item1">
                <a href="#">{{$category->name}} <i class="fa-solid fa-angle-down"></i> </a>
                @if ($category->subCategory)
                    <ul class="cute" style="display: none">
                        @foreach ($category->subCategory as $subcate )
                        <li class="subitem1">
                            @if (isset($subcategory_id))
                            <a href="{{url('category/'.$category->id.'/'.'sub_category/'.$subcate->id.'/products')}}" class="{{$subcate->id == $subcategory_id ? 'active' : ''}}">{{$subcate->name}} </a>
                                
                            @else
                            <a href="{{url('category/'.$category->id.'/'.'sub_category/'.$subcate->id.'/products')}}">{{$subcate->name}} </a>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
    <div class="chain-grid menu-chain">
        @yield('sidebar')
    </div>
</div>
<div class="clearfix"></div>