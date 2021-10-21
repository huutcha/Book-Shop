<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="latter">
                <h6>ĐĂNG KÍ NHẬN TIN</h6>
                <div class="sub-left-right">
                    <form>
                        <input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
                        <input type="submit" value="SUBSCRIBE" />
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="latter-right">
                <p>FOLLOW US</p>
                <ul class="face-in-to">
                    <li><a href="#"><span> </span></a></li>
                    <li><a href="#"><span class="facebook-in"> </span></a></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-cate">
                <h6>DANH MỤC</h6>
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <div><strong style="color: #555">{{$category->name}}</strong> </div>
                            @foreach ($category->subCategory as $subCate)
                                <a href="{{url('category/'.$category->id.'/'.'sub_category/'.$subCate->id.'/products')}}" class="mx-2 d-block">{{$subCate->name}} </a>
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-bottom-cate bottom-grid-cat">
                <h6>DỊCH VỤ</h6>
                <ul>
                    <li><a href="{{url('/contact')}}">Liên Hệ</a></li>
                    <li><a href="{{url('/terms')}}">Điều khoản sử dụng</a></li>
                    <li><a href="{{url('/security')}}">Chính sách bảo mật</a></li>
                    <li><a href="{{url('/introduce')}}">Giới thiệu Book - Shop</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate">
                <h6>HỖ TRỢ</h6>
                <ul>
                    <li><a href="{{url('/change')}}">Chính sách đổi - trả - hoàn tiền</a></li>
                    <li><a href="{{url('/buys')}}">Chính sách khách sỉ</a></li>
                    <li><a href="{{url('/transport')}}">Phương thức vận chuyển</a></li>
                    <li><a href="#">Phương thức thanh toán và xuất HĐ</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate cate-bottom">
                <h6>OUR ADDERSS</h6>
                <ul>
                    <li>Aliquam metus  dui. </li>
                    <li>orci, ornareidquet</li>
                    <li> ut,DUI.</li>
                    <li >nisi, dignissim</li>
                    <li >gravida at.</li>
                    <li class="phone">PH : 6985792466</li>
                    <li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>