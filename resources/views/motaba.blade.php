@extends('layouts.app')
@section('content')
@section('title', 'مشروع مُتابع')
<!-- START: Header Title -->
<!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-opacity
-->
<div  dir="ltr" class="nk-header-title nk-header-title-full nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <div style="background-image: url('assets/images/header.jpg');"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">
                    <div class="nk-header-text">     
                        <div class="nk-gap-1"></div>
                        <h1 class="nk-title display-3">نظام مُتابع</h1>
                        <h1 class="nk-title typing-text">
                            <span class="db hidden-sm-up"></span>
                            <span class="nk-typed bg-white text-dark-1 pl-8 pr-8 pt-5 pb-5 m-5 dib"><span> إحدى مشروعات مجموعة  <a style="color: #3498db" href="#">مُطور</a></span><span> عين على الطالب </span><span> الأكثر فاعلية وتفاعلاً</span></span>
                        </h1>
                        <div class="nk-gap-3"></div>
                        <a href="{{ route('motaba') }}" class="nk-btn nk-btn-x2 nk-btn-effect-5-left nk-btn-rounded nk-btn-color-dark-2">
                            <span class="icon">
                            </span> 
                            معرفة المزيد</a>
                        <span class="hidden-sm-down">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <div class="hidden-md-up nk-gap"></div>
                        <a href="{{ route('contact') }}" class="nk-btn nk-btn-x2 nk-btn-effect-5-left nk-btn-rounded nk-btn-color-white text-dark-1"><span class="icon"></span> قم بتجربة النظام</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Header -->


        

        

    <!-- START: Image Block 1 -->
    <div class="nk-box">
        <div class="nk-gap-5"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="h1 nk-title">{{ $banar_1->name }}</h2>
                    <h3 class="nk-sub-title">{{ $banar_1->details }}</h3>
                    <div class="nk-gap"></div>
                    <p>{{ $banar_1->description }}</p>
                </div>
                <div class="col-md-6 order-md-2">
                    <img class="nk-img-fit-sm-down" src="https://cdn-html.nkdev.info/khaki/assets/images/mock-ipad-pro-1.png" alt="">
                    <div class="nk-gap d-md-none"></div>
                </div>
            </div>
        </div>
        <div class="nk-gap-5"></div>
    </div>
    <!-- END: Image Block 1 -->

    <!-- START: Image Block 2 -->
    <div class="nk-box bg-dark-1 text-white" style="background-color: #1c1c1c!important;">
        <div class="nk-gap-5"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="h1 nk-title">{{ $banar_2->name }}</h2>
                    <h3 class="nk-sub-title">{{ $banar_2->details }}</h3>
                    <div class="nk-gap"></div>
                    <p>{{ $banar_2->description }}</p>
                </div>
                <div class="col-md-6">
                    <div class="float-right">
                        <img class="nk-img-fit-sm-down" src="{{ asset('assets/images/mock-mbp-2.png') }}" alt="">
                        <div class="nk-gap d-md-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-5"></div>
    </div>
    <!-- END: Image Block 2 -->

    <!-- START: Image Block 3 -->
    <div dir="ltr" class="nk-box">
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="nk-ibox-1 nk-ibox-inverted nk-ibox-hover">
                        <div class="nk-ibox-icon nk-ibox-icon-circle nk-ibox-icon-color-info nk-ibox-icon-hover-bg-color-info">
                            <span class="fa fa-line-chart"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title text-info"><a href="#">الحسابات المدرسية</a></h3>
                            والتى من خلالها يمكنك إدارة كل ما هو يتعلق بالحسابات المدرسية داخل المدرسة كشجرة الحسابات المدرسية ومصروفات الطلاب والارباح والخسائر
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>

                    <div class="nk-ibox-1 nk-ibox-inverted nk-ibox-hover">
                        <div class="nk-ibox-icon nk-ibox-icon-circle nk-ibox-icon-color-info nk-ibox-icon-hover-bg-color-info">
                            <span class="fa fa-address-card"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title text-info"><a href="#">المكتبة المدرسية</a></h3>
                            والتى من خلالها يمكنك إدارة كل ما هو يتعلق بأعمال المكتبة داخل المدرسة كتسجيل وأتستعارة الكتب 
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>

                    <div class="nk-ibox-1 nk-ibox-inverted nk-ibox-hover">
                        <div class="nk-ibox-icon nk-ibox-icon-circle nk-ibox-icon-color-info nk-ibox-icon-hover-bg-color-info">
                            <span class="fa fa-wrench"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title text-info"><a href="#">السجل الأمنى</a></h3>
                            والذى من خلاله يمكنك إدارة كل ما بالزيارات المدرسية داخل المدرسة كسجل الزيارات والانصراف
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="nk-img-fit" src="{{ asset('assets/images/mock-iphone6-1.png') }}" alt="">
                    <div class="nk-gap hidden-md-up"></div>
                </div>
                <div class="col-md-4">
                    <div class="nk-ibox-1 nk-ibox-hover">
                        <div class="nk-ibox-icon nk-ibox-icon-circle nk-ibox-icon-color-info nk-ibox-icon-hover-bg-color-info">
                            <span class="fa fa-users"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title text-info"><a href="#">شئون الطلاب</a></h3>
                            والتى من خلالها يمكنك إدارة كل ما هو يتعلق بالطالب داخل المدرسة كسجل الحضور والغياب وسجل الملاحظات والقيد والتقارير العامة
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>

                    <div class="nk-ibox-1 nk-ibox-hover">
                        <div class="nk-ibox-icon nk-ibox-icon-circle nk-ibox-icon-color-info nk-ibox-icon-hover-bg-color-info">
                            <span class="fa fa-rocket"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title text-info"><a href="#">شئون العاملين</a></h3>
                            والتى من خلالها يمكنك إدارة كل ما هو يتعلق بالعاملين داخل المدرسة كسجل الحضور والغياب وسجل الملاحظات وكشوفات الرواتب
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>

                    <div class="nk-ibox-1 nk-ibox-hover">
                        <div class="nk-ibox-icon nk-ibox-icon-circle nk-ibox-icon-color-info nk-ibox-icon-hover-bg-color-info">
                            <span class="fa fa-download"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title text-info"><a href="#">الكنترول المدرسى</a></h3>
                            والتى من خلالها يمكنك إدارة كل ما هو يتعلق بالكنترول داخل المدرسة كترصيد الدراجات وتنظيم اللجان وأستخراج أرقام الجلوس والارقام السرية
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Image Block 3 -->

    <!-- START: Image Block 4 -->
    <div class="nk-box text-center text-white bg-dark-1" style="background-color: #1c1c1c!important;">
        <div class="bg-image bg-image-parallax op-5">
            <img class="jarallax-img" src="https://cdn-html.nkdev.info/khaki/assets/images/image-4.jpg" alt="">
        </div>
        <div class="nk-gap-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="h1 nk-title">{{ $banar_3->name }}</h2>
                    <h3 class="nk-sub-title">{{ $banar_3->details }}</h3>
                    <div class="nk-gap"></div>
                    <p>{{ $banar_3->description }}</p>
                </div>
            </div>
        </div>
        <div class="nk-gap-5"></div>
    </div>
    <!-- END: Image Block 4 -->

    <!-- START: Image Block 5 -->
    <div class="nk-box" dir="ltr">
        <div class="bg-image-row row">
            <div class="col-lg-6 offset-lg-6">
                <div class="bg-image">
                    <img class="jarallax-img" class="jarallax-img" src="{{ asset('assets\images\update.jpg') }}" width="800px" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="nk-gap-5"></div>
                    <h2 class="h1 nk-title">{{ $banar_4->name }}</h2>
                    <div class="nk-gap"></div>
                    <p>{{ $banar_4->description }}</p>

                    <div class="nk-gap-5"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Image Block 5 -->

    <!-- START: Image Block 6 -->
    <div dir="ltr" class="nk-box bg-dark-1 text-white" style="background-color: #1c1c1c!important;" >
        <div class="bg-image-row row">
            <div class="col-lg-6">
                <div class="bg-image bg-image-parallax">
                    <img class="jarallax-img" class="jarallax-img" src="https://cdn-html.nkdev.info/khaki/assets/images/image-6.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-7">
                    <div class="nk-gap-5"></div>
                    <h2 class="h1 nk-title">يتميز بــ</h2>
                    <div class="nk-gap-2"></div>

                    <div class="nk-ibox-2">
                        <div class="nk-ibox-icon">
                            <span class="ion-iphone"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title"><a href="#">تطبيق للهواتف النقالة</a></h3>
                            يتم تصميم تطبيقات للمدرسة والتى من خلالها يتم الدخول إلى النظام وتكون التطبيقات متاحة على متاجر التطبيقات للهواتف النقالة كجوجل لأجهزة الاندرويد والاب ستور لأجهزة الايفون  
                        </div>
                    </div>
                    <div class="nk-gap"></div>

                    <div class="nk-ibox-2">
                        <div class="nk-ibox-icon">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title"><a href="#">موقع إلكترونى</a></h3>
                            يتم تصميم موقع إلكترونى للمدرسة والتى من خلاله يتم الدخول إلى النظام كما يمكن للمدرسة الإستفادة من واجهة الموقع لنشر الاخبار المدرسية والانشظة الترفيهية والرياضية والفنية وجداول الاستطلاعات والتعليمات واللوائح
                        </div>
                    </div>
                    <div class="nk-gap"></div>

                    <div class="nk-ibox-2">
                        <div class="nk-ibox-icon">
                            <span class="fa fa-address-card"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title"><a href="#">بطاقات عضوية</a></h3>
                            هى بطاقة تعريفية بلاستيكية ممغنطة تحتوى على صورة العضو وبياناته وأسم المستخدم وكلمة السر لحساب الدخول
                        </div>
                    </div>

                    <div class="nk-gap-5"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Image Block 6 -->

    <!-- START: Image Block 7 -->
    <div dir="ltr" class="nk-box text-center">
        <div class="nk-gap-5"></div>
        <img src="{{ asset('assets/images/mock-imac-1.png') }}" class="nk-img" alt="">
        <div class="nk-gap-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2 class="h1 nk-title">{{ $banar_5->name }}</h2>
                    <h3 class="nk-sub-title">{{ $banar_5->details }}</h3>
                    <div class="nk-gap"></div>
                    <p>{{ $banar_5->description }}</p>
                    <br>
                    <a href="{{ route('motaba') }}" class="nk-btn nk-btn-x2 nk-btn-effect-5-left nk-btn-color-main-1">
                        معرفة المزيد
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-gap-5"></div>
    </div>
    <!-- END: Image Block 7 -->


        
<!-- START: Footer -->
<!--
    Additional Classes:
        .nk-footer-parallax
        .nk-footer-parallax-opacity
-->
<footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity" dir="ltr">
    
        <div class="bg-image">
            <div style="background-image: url('assets/images/footer-2.jpg')"></div>
        </div>
        
    
        <div class="container">
            <div class="nk-gap-4"></div>
            <div class="row align-items-center">
                <div class="col-md-4 push-md-4">
                    <div class="nk-footer-logo">
                        <a href="#">
                            <img src="assets/images/logo.png" alt="" width="70">
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