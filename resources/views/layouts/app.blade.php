@include('includes.header')
    <div class="nk-main">
        @include('includes.navbar')
        @include('includes.messages')
        @yield('content')
    </div>
<div class="nk-side-buttons nk-side-buttons-visible">
    <ul>
        <li><span class="nk-scroll-top bg-white text-dark-1"><span class="ion-ios-arrow-up"></span></span></li>
    </ul>
</div>
<!-- END: Side Buttons -->
    @include('includes.footer')
</body>
</html>
