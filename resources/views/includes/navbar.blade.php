        <!--
    START: Share Place

    Additional Classes:
        .nk-share-place-light
-->
<div class="nk-share-place">
    <div>
        <div class="container">
            <div class="nk-share-icons" data-url="https://google.com/">
                <div class="plusone nk-share-icon fa fa-google-plus" title="Share page on Google+"></div>
                <div class="facebook nk-share-icon fa fa-facebook" title="Share page on Facebook"></div>
                <div class="twitter nk-share-icon fa fa-twitter" title="Share page on Twitter"></div>
                <div class="pinterest nk-share-icon fa fa-pinterest" title="Share page on Pinterest"></div>
                <!-- <div class="vkontakte nk-share-icon fa fa-vk" title="Share page on VK"></div> -->
            </div>
        </div>
    </div>
</div>
<!-- END: Share Place -->

<header class="nk-header">
{{-- <!--
    START: Top Contacts

    Additional Classes:
        .nk-contacts-top-light
-->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            <div class="nk-navbar">
                <ul class="nk-nav" dir="ltr">
                    <li class="nk-drop-item">
                        <a href="#">AR</a>
                        <ul class="dropdown">
                            <li><a href="#">EN</a></li>
                        </ul>
                    </li>
                    <li><a href="tel:+37001231078"><span class="nk-contact-icon"><i class="ion-ios-telephone"></i></span> + 20 1211 116494</a></li>
                    <li><a href="mailto:info@khaki.com"><span class="nk-contact-icon"><i class="ion-ios-email"></i></span> motawer@outlock.com</a></li>
                </ul>
            </div>
        </div>
        <div class="nk-contacts-right">
            <div class="nk-navbar">
                <ul class="nk-nav">
                    <li><a href="https://faceook.com/nkdevv" target="_blank" class="nk-contact-icon"><span class="ion-social-facebook"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Top Contacts --> --}}

<!--
    Additional Classes:
        .nk-header-opaque
-->
    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
            .nk-navbar-light
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide nk-navbar-blur nk-navbar-fixed nk-onscroll-show">
        <div class="container">
            <div class="nk-nav-table">
                
                <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                    
                    <li>
                        <a class="link-effect-3 ready" href="{{ url('/') }}">
                            الصفحة الرئيسية
                        </a>
                    </li>
                    <li class="nk-drop-item">
                        <a class="link-effect-3 ready" href="{{ url('#') }}">
                            مشروعات
                        </a>
                        <ul class="dropdown">
                            <li>
                                <a class="nk-item-descr" href="{{ url('motaba') }}">
                                    مُتابع
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--  <li>
                        <a href="{{ url('/posts') }}">
                            {{ config('app.name', 'Languages') }}
                        </a>
                    </li>  --}}
                    <li>
                        <a href="#">
                            خدمات
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            وظائف
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about-us') }}">
                            من نحن
                        </a>
                    </li>
                    <li>
                        <a class="link-effect-3 ready" href="{{ url('/contact') }}">
                            أتصل بنا
                        </a>
                    </li>
                </ul>
                <ul class="nk-nav nk-nav-left nk-nav-icons">
                    <li class="single-icon hidden-lg-up">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
<!--
                    @guest
                        <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                        <li><a href="{{ route('register') }}">تسجيل</a></li>
                    @else
                    <li class="nk-drop-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ url('/posts/create') }}">
                                            Create Post
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
-->
                        <li class="single-icon">
                        <a href="#" class="nk-share-toggle no-link-effect">
                            <span class="ion-android-share-alt"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->
</header>
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content nk-navbar-light hidden-lg-up">
    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">
                <div class="nk-nav-row nk-nav-row-full nk-nav-row-top">
                    <div class="nk-navbar-mobile-content">
                        <ul class="nk-nav">
                            <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->
