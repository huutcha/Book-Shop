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
                <div>
                    <a href="{{url('/logout')}}">ĐĂNG XUẤT</a>
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
                    <a href="index.html"><img src="images/logo.png" alt=" " /></a>
                </div>
                <div class="search">
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                    <input type="submit"  value="SEARCH">

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right"> 
                    <div class="cart"><a href="#"><span><i class="fa-solid fa-cart-shopping"></i></span>CART</a></div>
                    @if (Auth::check())
                        <div class="account"><a href="login.html"><span><i class="fa-solid fa-user"></i> </span>YOUR ACCOUNT</a></div>
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