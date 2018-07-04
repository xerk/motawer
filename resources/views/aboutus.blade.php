@extends('layouts.app')
@section('content')
@section('title', 'من نحن')
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
<div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity">
    <div class="bg-image">
        <div style="background-image: url('assets/images/image-20.jpg');"></div>
    </div>
    <div class="nk-header-table">
        <div class="nk-header-table-cell">
            <div class="container">
                    <h1 class="nk-title">About Us</h1>
            </div>
        </div>
    </div>
    
</div>
<!-- END: Header Title -->
<!-- START: Overview -->
    <div class="nk-box">
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row align-items-center" dir="ltr">
                <div class="col-md-6">
                    <h2 class="nk-title" style="color:#b08962">Motawer People</h2>
                    <p class="lead">
                        It always seems impossible until it is done.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/image-21.jpg" alt="" class="nk-img">
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Overview -->

    <!-- START: Features -->
    <div class="nk-box bg-gray-2 text-center">
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row vertical-gap">
                <div class="col-md-3 col-sm-6">
                    <div class="nk-counter-2">
                        <div class="nk-count">3</div>
                        <h3 class="nk-counter-title h4">مديرى الشركة</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="nk-counter-2">
                        <div class="nk-count">62</div>
                        <h3 class="nk-counter-title h4">موظفين</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="nk-counter-2">
                        <div class="nk-count">98</div>
                        <h3 class="nk-counter-title h4">عملائنا</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="nk-counter-2">
                        <div class="nk-count">4</div>
                        <h3 class="nk-counter-title h4">الأعمال البرمجية</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Features -->

    
@endsection