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
                      <a href="{{url('/logout')}}" >ĐĂNG XUẤT</a>
                 </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="d-flex justify-content-beetween">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="images/logo.png" alt=" " /></a>
                </div>
                <div class="search">
                    <form action="{{url('/search')}}">
                        <input type="text" name="search" autocomplete="off" id="search-content" value="" placeholder="Tìm kiếm theo tên sách" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                        <ul class="search-list">
                        </ul>
                        <input type="submit" id="search-btn"  value="SEARCH">
                    </form>
                </div>
                <div class="header-bottom-right"> 
                    <div class="cart">
                        <a href="{{url('/cart')}}" class="position-relative">
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                            CART
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cart-quantity" style="display:none">
                            </span>
                        </a>
                        <div class="cart-container">
                            <ul id="cart-list-item">

                            </ul>
                            <a class="link-cart" href="{{url('/cart')}}">XEM GIỎ HÀNG</a>
                        </div>
                    </div>

                    @if (Auth::check())
                    <div class="account">
                        <a href="{{url('/profile')}}" class="position-relative">
                            <span><i class="fa-solid fa-user"></i></span>
                            {{Auth::user()->information->fullname}}
                        </a>
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
            </div>
        </div>
    </div>
</div>
