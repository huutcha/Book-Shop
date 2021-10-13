<!--header-->
<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="top-header-right">
                <div class="down-top">
                      <select class="in-drop">
                          <option value="English" class="in-of">English</option>
                          <option value="Japanese" class="in-of">Japanese</option>
                          <option value="French" class="in-of">French</option>
                          <option value="German" class="in-of">German</option>
                        </select>
                 </div>
                <div class="down-top top-down">
                      <select class="in-drop">

                      <option value="Dollar" class="in-of">Dollar</option>
                      <option value="Yen" class="in-of">Yen</option>
                      <option value="Euro" class="in-of">Euro</option>
                        </select>
                 </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="images/logo.png" alt=" " /></a>
                </div>
                <div class="search">
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                    <input type="submit"  value="SEARCH">

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right">

                    <div class="cart">
                        <a href="{{url('/cart')}}" class="position-relative">
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                            CART
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="display:none">
                            </span>
                        </a>

                        <div class="cart-container">
                            <ul id="cart-list-item">

                            </ul>
                            <a class="link-cart" href="{{url('/cart')}}">XEM GIỎ HÀNG</a>
                        </div>
                    </div>
                    @if (Auth::check())
                    <div class="cart">
                        <a href="{{url('/#')}}" class="position-relative">
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                            {{Auth::user()->information->fullname}}
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="display:none">
                            </span>
                        </a>

                        <div class="cart-container">

                            <a class="link-cart" href="{{url('/orders')}}">Đơn hàng đã mua</a>
                            <a class="link-cart" href="{{url('/profile')}}">Thông tin tài khoản</a>
                            <a class="link-cart" href="{{url('/changepassword')}}">Đổi mật khẩu</a>
                            <a class="link-cart" href="{{url('/logout')}}">Đăng xuất</a>
                        </div>
                    </div>
                        {{-- <div class="account"><a href="#"><span><i class="fa-solid fa-user"></i> </span>{{Auth::user()->information->fullname}}</a></div> --}}
                    @else
                    <ul class="login">
                        <li><a href="{{url('/login')}}"><span><i class="fa-solid fa-lock"></i></span>ĐĂNG NHẬP</a></li> |
                        <li ><a href="{{url('/register')}}">ĐĂNG KÝ</a></li>
                    </ul>
                    @endif
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
