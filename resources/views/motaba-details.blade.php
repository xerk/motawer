@extends('layouts.app')
@section('content')
@section('title', 'أتصل بنا')



        


<div class="nk-portfolio-item-single">
        <div class="nk-gap-4"></div>
        <div class="nk-gap"></div>
        <div class="container">
            <h1 class="nk-title h2 text-center">{{ $banar->banars->name }}</h1>
            <h2 class="nk-sub-title text-center">{{ $banar->banars->details }}</h2>
            <div class="nk-gap-2"></div>

            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <div class="col-md-12">
                        <div class="nk-portfolio-item-description">
                            <!-- All content inside Excerpt will be shown in portfolio quick view -->
                            <div class="nk-portfolio-item-excerpt">
                                {!! $banar->body !!}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nk-gap-1"></div>
            </div>
        </div>
    </div>

{{-- <div class="nk-box bg-dark-1">
    <div class="bg-image bg-image-parallax op-5">
        <img class="jarallax-img" src="https://cdn-html.nkdev.info/khaki/assets/images/image-5.jpg" alt="">
    </div>
    <div class="nk-gap-4"></div>
    <div class="container">

        <!-- START: Carousel 4 -->
        <div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible" data-autoplay="5000">
            <div class="nk-carousel-inner">
                <div><div>
                    <a href="#"><img src="https://cdn-html.nkdev.info/khaki/assets/images/partner-logo-1-light.png" alt="" class="nk-img-fit"></a>
                </div></div>
                <div><div>
                    <a href="#"><img src="https://cdn-html.nkdev.info/khaki/assets/images/partner-logo-2-light.png" alt="" class="nk-img-fit"></a>
                </div></div>
                <div><div>
                    <a href="#"><img src="https://cdn-html.nkdev.info/khaki/assets/images/partner-logo-3-light.png" alt="" class="nk-img-fit"></a>
                </div></div>
                <div><div>
                    <a href="#"><img src="https://cdn-html.nkdev.info/khaki/assets/images/partner-logo-4-light.png" alt="" class="nk-img-fit"></a>
                </div></div>
                <div><div>
                    <a href="#"><img src="https://cdn-html.nkdev.info/khaki/assets/images/partner-logo-5-light.png" alt="" class="nk-img-fit"></a>
                </div></div>
                <div><div>
                    <a href="#"><img src="https://cdn-html.nkdev.info/khaki/assets/images/partner-logo-6-light.png" alt="" class="nk-img-fit"></a>
                </div></div>
                <div><div>
                    <a href="#"><img src="https://cdn-html.nkdev.info/khaki/assets/images/partner-logo-7-light.png" alt="" class="nk-img-fit"></a>
                </div></div>
            </div>
        </div>
        <!-- END: Carousel 4 -->

    </div>
    <div class="nk-gap-4"></div>
</div> --}}



        
<!-- START: Footer -->
<!--
    Additional Classes:
        .nk-footer-parallax
        .nk-footer-parallax-opacity
-->
<footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity" dir="ltr">
    
        <div class="bg-image">
            <div style="background-image: url('{{ asset('assets/images/footer-2.jpg')}}')"></div>
        </div>
        
    
        <div class="container">
            <div class="nk-gap-4"></div>
            <div class="row align-items-center">
                <div class="col-md-4 push-md-4">
                    <div class="nk-footer-logo">
                        <a href="#">
                            <img src="{{ asset('assets/images/logo.png')}}" alt="" width="70">
                        </a>
                    </div>
                    <div class="nk-gap"></div>
                    <div class="text-center">
                        <a href="#!" class="nk-btn nk-btn-color-white text-black">TEL: 01211116494</a>&nbsp;&nbsp;
                        <div class="nk-gap"></div>
                        <a href="#!" class="nk-btn nk-btn-color-white text-black">E-Mail: Motawer@outlook.com</a>&nbsp;&nbsp;
                    </div>
                </div>
                <div class="col-md-4 pull-md-4">
                    <div class="nk-gap-3 hidden-md-up"></div>
                    <div class="nk-footer-social">
                        <a href="https://www.facebook.com/Motaba.Motawer/"><i class="ion-social-facebook"></i></a>
                    </div>
                    <div class="nk-gap-3 hidden-md-up"></div>
                </div>
                <div class="col-md-4">
                    <div class="nk-copyright-2">
                        <div class="container text-center text-md-right">
                            <a href="https://www.facebook.com/Motaba.Motawer/" target="_blank">Motawer</a> &copy; 2017. All rights reserved
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-4"></div>
        </div>
    </footer>
    <!-- END: Footer -->
@endsection