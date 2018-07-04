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
                    <a href="{{ route('contact') }}" class="nk-btn nk-btn-x2 nk-btn-effect-5-left nk-btn-rounded nk-btn-color-dark-2">
                        <span class="icon">
                        </span> 
                        أحجز الأن</a>
                    <span class="hidden-sm-down">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="hidden-md-up nk-gap"></div>
                    <a href="{{ route('contact') }}" class="nk-btn nk-btn-x2 nk-btn-effect-5-left nk-btn-rounded nk-btn-color-white text-dark-1"><span class="icon"></span> قم بتجربة النظام</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Header -->
<!-- START: Features -->
    <div class="nk-box">
        <div class="container">
        <div class="nk-gap-4"></div>
            <div class="text-center">
                <h1 class="h1" style="font-size: 6em">مُتابــــــــع</h1>
                <div class="nk-gap"></div>
                <h1 class="h1" style="color: #009a93">ما هو مُتابع ؟</h1>
                <p style="font-size: 20px">هو نظام إدارى ورقابى متكامل سمح للمدرسة بأن تقوم بكافة أعمالها بشكلاً إلكترونى مما يسهل سير عمل المدرسة وعملية التعليم الرقابة الشاملة قامت بتصميمه وتطوريه شركة مطور للمبرمجيات المتطورة.</p>
                <h1 class="h1" style="color: #009a93">لماذا مُتابع ؟</h1>
                <div class="row">
                    <div class="col-6">
                        <hr>
                        <h1 class="h3" style="color: #f00">نظام مرن</h1>
                        <p style="font-size: 20px">مُتابـــع نظــام مرن للغايـــة و يمكــن هيكلـة النظام بسهولة بعكس الأنظمة الأخرى الصلبـة.</p>
                        <hr>
                    </div>
                    <div class="col-6">
                        <hr>
                        <h1 class="h3" style="color: #f00">نظام أمن</h1>
                        <p style="font-size: 20px">و جـــود جــــدار حماية و أمن للمعلومـــات و البيانــــــات و نـســـخ إحتياطـــى لجميع البيانــــات.</p>
                        <hr>
                    </div>    
                    <div class="col-6">
                        <h1 class="h3" style="color: #f00">نظام يتم تطويره</h1>
                        <p style="font-size: 20px">نظام يتم تحديثـه بشكــل دائــم لكى يلائـم التطور المجتمعى و المتطلبــــــــــــــات الحديثــــــــــة.</p>
                        <hr>
                    </div>    
                    <div class="col-6">
                        <h1 class="h3" style="color: #f00">دعم فنى كامل</h1>
                        <p style="font-size: 20px">دعــــــــم فنــــــــى كامـــــل علـى مــــــــدار 24 ساعـــــــــة لمعالجـــة العيـــــــــوب إن وجــــــــــــــــــــدت.</p>
                        <hr>
                    </div>    
                    <div class="col-6">
                        <h1 class="h3" style="color: #f00">الخصوصية</h1>
                        <p style="font-size: 20px">الحفـــــــاظ على الخصوصيــــــــة و تحديـــــــد  ما يمكـــــن الإطـــلاع عليـــــــــــه لكـــــــــل مستخـــــــــدم.</p>
                        <hr>
                    </div>        
                    <div class="col-6">
                        <h1 class="h3" style="color: #f00">نظام بسيط وسهل</h1>
                        <p style="font-size: 20px">يتميــــــــــــز بسهولــــــة التعامـــــــل و وجـــــــود محــــــرك بحـــــــــث و كشوفــــــــات و تقـــاريـــــــــــــــر.</p>
                        <hr>
                    </div>
                </div>
                <h2 class="h1" style="color: #009a93">كيف يعمل متابع؟</h2>
                <p style="font-size: 20px">يكـون الدخـــول إلى النظـــــام  عن طريــق البوابـــة الإلكترونيـــة و تتكون من</p>
                <div class="row">
                    <div class="col-6">
                        <hr>
                        <h1 class="h3" style="color: #f00">موقع المدرسة الإلكترونى</h1>
                        <p style="font-size: 20px">يمكن للمدرسة الأستفادة من وجهـــــــة الموقــــــــــع  لنشــــــر</p>
                        <p>الأخبــار المدرسيــة - الأنشطة الترفيهة - الأنشطة الرياضيـة - الأنشطـــة الفنيــة - الرحــــلات جداول الإمتحانــات - أوائــــــــل الطـــلاب - أستطلاعات الـرأى - رؤيـــــة المدرســـــة - رسالـة المدرســــــة - تعليمـات و لوائـــــح</p>
                        <p style="font-size: 20px;">يكون الموقع بدومين خاص للمدرسة</p>
                        <p style="font-size: 18px; color: red; margin-top: -15px;">لكل مدرسة موقع إلكترونى وتطبيقات خاصة بها</p>
                        <div class="nk-gap" style="margin-top: -6px;"></div>
                        <hr>
                    </div>
                    <div class="col-6">
                        <hr>
                        <h1 class="h3" style="color: #f00">تطبيق المدرسة الإلكترونى</h1>
                        <p style="font-size: 14px"> المتاح على متاجر التطبيقات للهواتف النقالة . متـــــاح على متجر جوجل بلاى لأجهزة الأندرويـــد و سيكون متاح على الأب ستور لأجهزة الأيفون</p>
                        <img src="{{ asset('img/apps.png') }}" class="img-rounded" alt="المستفيد" width="200" >
                        <p style="font-size: 20px">تكون الإستفادة من وجهة التطبيـق كالموقـــع الإلكترونى</p>
                        <hr>
                    </div>
                </div>
                <h2 class="h1" style="color: #009a93">كيف يتم الدخول إلى النظام</h2>
                <p style="font-size: 20px">يتم الدخول إلى النظام عن طريق</p>
                <img src="{{ url('assets/images/image-2.png') }}" class="img-rounded" alt="المستفيد" width="268" height="255">
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <blockquote class="nk-testimonial-1 bg-dark-3 text-white text-center">
            <div class="nk-testimonial-name h2">بطاقة العضوية</div>
            <div class="nk-testimonial-body">
                <div class="nk-testimonial-photo" style="background-image: url('assets/images/image-54.png');"></div>
                <p style="font-size: 18px; width: 1000px">هى بطاقة تعريفية تحتوى على صورة العضو و بياناته فإن كان طالبا تحتوى على إسمه و المرحلة الدراسيـة و الصف الدراسى و الفصــل و إسـم المستخــدم و كلمة السر لحساب الدخول و إن كان مدرسا تحتـوى البطاقة على إسمه و مادته و درجته كمعلم و إسـم المستخــدم و كلمة السر لحساب الدخـول و إن كان إدرايا أو من العامليـن بالمدرسـة تحتوى على إسمـه و مسماه الوظيفى و إسم المستخــدم و كلمة السر لحساب الدخول</p>
            </div>
        </blockquote>
        <blockquote class="nk-testimonial-1 bg-dark-4 text-white text-center">
            <div class="nk-testimonial-name h2">حساب الدخول</div>
            <div class="nk-testimonial-body">
                <div class="nk-gap"></div>
                <div class="nk-testimonial-photo" style="background-image: url('assets/images/image-4.png');"></div>
                <p style="font-size: 18px; min-width: 500px; max-width: 1000px;">هو حساب معد مسبقا ومدون ببطاقة العضوية ليستطيع الطالب أو المدرس أو الإدارى  أو العامل بالمدرسة أو المدير بالدخول عن طريقه إلى النظـام من البوابة الإلكترونية و الإستفادة منه و تنفيذ المهام.</p>
            </div>
            <div class="nk-gap"></div>
        </blockquote>
        <div class="container text-center">
            <div class="nk-gap-2"></div>
            <h2 class="h1" style="color: #009a93">المستفيد من هذا النظام</h2>
            <img src="{{ url('assets/images/image-22.png') }}" class="img-rounded" alt="المستفيد" width="800" height="255">
            <p style="font-size: 20px; color:#f00;">يمكن الدخول إلى هذا النظام فى أى وقت ومن أى مكان عبر شبكة الأنترنت.</p>
        </div>
        <div class="nk-gap"></div>
        <hr>
        <div class="row vertical-gap">
            <blockquote class="nk-testimonial-2 bg-dark-1 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_1->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_1->details }}</p>
                    {{-- <a href="" data-toggle="modal" data-target=".bd-example-modal-lg" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">النتائج الدراسية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">البيانات المالية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الحضور والغياب</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الملاحاظات</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">جدول الحصص</a>&nbsp;&nbsp; --}}
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_1->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote>
            <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_2->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_2->details }}</p>
                    {{-- <div class="nk-gap-1"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">النتائج الدراسية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">البيانات المالية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الحضور والغياب</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">جدول الحصص</a>&nbsp;&nbsp; --}}
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_2->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote>
            <blockquote class="nk-testimonial-2 bg-dark-3 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_3->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_3->details }}</p>
                    {{-- <div class="nk-gap-1"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الحضور والغياب</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الملاحاظات</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">البيانات المالية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">جدول الحصص</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">جدول الأشراف</a>&nbsp;&nbsp; --}}
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_3->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote>
            <blockquote class="nk-testimonial-2 bg-dark-4 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_4->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_4->details }}</p>
                    {{-- <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الحضور والغياب</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الملاحاظات</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">البيانات المالية</a>&nbsp;&nbsp; --}}
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_4->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote>
            <blockquote class="nk-testimonial-2 bg-dark-5 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_5->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_5->details }}</p>
                    {{-- <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الحضور والغياب</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجل الملاحاظات</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">البيانات المالية</a>&nbsp;&nbsp; --}}
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_5->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote>
            {{-- <blockquote class="nk-testimonial-2 bg-dark-6 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_6->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_6->details }}</p> --}}
                    {{-- <div class="nk-gap-1"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">الإحصاءات العامة</a>&nbsp;&nbsp; --}}
                    {{-- <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_6->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote> --}}
        </div>
        <div class="nk-gap-2"></div>
        <div class="text-center">
            <h2 class="h1" style="color: #009a93">كيف يتم إدارة هذا النظام</h2>
            <p style="font-size: 20px">يتم إدارة النظام عن طريق</p>
            <img src="{{ url('assets/images/image-3.png') }}" class="img-rounded" alt="المستفيد" width="413" height="255">
            <div class="nk-gap"></div>
        </div>
        <hr>
        <div class="row vertical-gap">
            <blockquote class="nk-testimonial-2 bg-dark-3 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_7->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_7->details }}</p>
                    {{-- <div class="nk-gap-1"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">الإطلاع على البيانات</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تحرير النتائج الدراسية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تسجيل الملاحظات</a>&nbsp;&nbsp; --}}
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_7->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote>
            <blockquote class="nk-testimonial-2 bg-dark-4 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_8->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_8->details }}</p>
                    {{-- <div class="nk-gap-1"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">الإطلاع على البيانات</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تحرير البيانات المالية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تحرير النتائج الدراسية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">سجلات الحضور و الغياب</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تحرير جدول الحصص</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-down"></div>
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تحرير جدول الاشراف</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تسجيل الملاحاظات</a>&nbsp;&nbsp; --}}
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_8->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote>
            <blockquote class="nk-testimonial-2 bg-dark-6 text-white">
                <div class="nk-testimonial-name h2">{{ $banar_9->name }}</div>
                <div class="nk-testimonial-body">
                    <p style="font-size: 18px">{{ $banar_9->details }}</p>
                    {{-- <div class="nk-gap-1"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">الإطلاع على البيانات</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">مرجعة البيانات المالية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">مرجعة النتائج الدراسية</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">مرجعة الحضور والغياب</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">مرجعة جدول الحصص</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">مرجعة جدول الأشراف</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تسجل الملاحاظات</a>&nbsp;&nbsp;
                    <div class="nk-gap hidden-md-up"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">تخصيص الأعمال والأختصاصات</a>&nbsp;&nbsp; --}}
                    <div class="nk-gap hidden-md-down"></div>
                    <a href="{{ route('motaba.show', $banar_9->id) }}" class="nk-btn nk-btn-x2 nk-btn-circle-hover nk-btn-rounded nk-btn-color-white text-black">معرفة المزيد</a>&nbsp;&nbsp;
                </div>
            </blockquote>
        </div>
        <div class="nk-gap-4"></div>
    </div>
    <!-- END: Features -->

    <div class="nk-box bg-gray-3">
        <div class="nk-gap-4"></div>
        <div class="container">

            <!-- START: Carousel 1 -->
            <div class="nk-carousel" data-autoplay="8000">
                <div class="nk-carousel-inner">
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">ما هو مُتابع ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"هو نظام إدارى و رقابى متكامل لتسهيل سير عمل المدرسة و عملية التعليم والرقابة الشاملة قامت بتصميمـه و تطويريـه شركة مُطـور للبرمجيـات المتطـورة."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">من المستفيد من هذا النظام ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"المستفيد من هذا النظام الطـلاب و أوليــاء الأمور و المدرسين و الإدارييــن و العامليــن بالمدرسة و المديرين."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">لماذا مُتابع ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"مُتابـــع نظــام مرن للغايـــة و يمكــن هيكلـــة النظام بسهــولة بعكـــس الأنظمـــة الأخـــرى الصلبة و أيضاً هو نظام يتم تحديثـه بشكــل دائـــم لكى يلائـــم التطــــــور المجتمعــــى و المتطلبات الحديثة."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">كيف يعمل مُتابع ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"هو نظــــــام إلكترونـــــى متكامــــل يسمــــــح للمدرســـــة بإن تقـــــوم بكل أعمالهــا بشكل إلكترونى  و يكــــون الدخــــول إلى النظـــــام عن طريــق البوابـــة الإلكترونيـــــة عن طريــــق موقــــع المدرســــة الإلكترونــــى أو تطبيــــق المدرسة المتاح على متاجر التطبيقات."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">كيف يستفيد الطالب من النظام ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"يستطيـــــع الطالب الدخـــــول إلى النظــــــام عن طريق إسم المستخـــــدم و كلمة الســـر الخاص بحساب الطالــب المعـــــــد مسبقـــــاً و يمكنه الأطلاع على النتائــــــــج الدراسيـــــــة و سجل الحضور و الغياب و سجـــل الملاحظــات و المصروفات المدرسية و جدول الحصص."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">كيف يستفيد ولى الأمر من النظام ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"يستطيع ولـــى الأمـــر الدخـــول إلى النظام عن طريق إسم المستخــــــدم و كلمة الســـر الخاص بحساب الطالــــــب المعــــد مسبقــــاً و يمكنه الأطــــلاع على النتائــــــج الدراسيـــــة و سجل الحضــور و الغيـاب و سجـل الملاحظات و المصروفـــــات المدرسيــة و جدول الحصص و مراقبة نشاط الطالــب المدرسى و سيـــــر عملية التعليم."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">كيف يستفيد المدرس من النظام ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"يستطيـــــع المــــــدرس الدخــول إلى النظام عن طريق إسم المستخـدم و كلمــــة الســــر الخاص بحســـــاب المـــــدرس المعــد مسبقاً و يمكنه الأطلاع على جدول الحصـــص و جدول الإشراف كشف الراتــب و سجـــل الحضـــــور والغياب و سجل الملاحظات."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">كيف يستفيد الإدارى من النظام ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"يستطيـــــع الإدارى الدخــــــول إلى النظـــــام عن طريــــق إسم المستخـــدم و كلمة الســر الخـاص بحســـــاب الإدارى المعـــــد مسبقــــاً و يمكنه الأطلاع على  كشف الراتــــب و سجــل الحضور والغياب و سجل الملاحظات."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">كيف يستفيد العامل من النظام ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"يستطيـــع العامـــــل الدخـــــول إلى النظــــام عن طريق إسم المستخـــدم و كلمـــــة السر الخاص بحســـاب العامــــل المعـــد مسبقـــــاً و يمكنه الأطلاع على  كشف الراتب و سجــــــلالحضور والغياب و سجل الملاحظات."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">الحضور والغياب و سجل الملاحظات .</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"يستطيـــــع المـــدير الدخـــــول إلى النظـــــام عن طريق إســـم المستخــدم و كلمة الســــر الخاص بحســـــاب المديــــــر المعـــد مسبقـــاً و يمكنه الأطلاع علــى الإحصـــــاءات العامــــــة و سجـــــل الإشعــــــارات و متابعـــــة سيـــر عمـل المدرسة بكل سهولة."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">فائدة الموقع الإبكترونى و التطبيق ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"لنشـــــر الأخبــــار المدرسيـــــة و الإعـــلان عن الأنشطـــة الرياضيــــة و الترفيهيــــة و الفنية و الرحـــــلات المدرسيــة و  عمل استطلاعات للرأى و نشـــــر جــــدول الأمتحانــات و قوائم المتفوقين."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">ما يتميز به النظام ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"جدار حماية - إمن لللمعلومات و البيانات - رسائل sms لأرسال المعلومات - رسائل بريد إلكترونى - محرك بحث - سهولة التعامل - دعم فنى كامل على مدار 24 ساعة - تحدياث دورية لمعالجة العيوب ان وجدت - أضافات جديدة لتسهيل سير عمل المدرسة - نسخ أحتياطى لكل البيانات بشكل دورى - تسويق ألكترونى - محاضرات لشرح النظام لكافة مستخدميه - عضويات id بلاستيكية تعريفية لكافة - مستخدمى  النظام."</em>
                            </div>
                        </blockquote>
                    </div></div>
                    <div><div>
                        <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                            <div class="nk-testimonial-photo" style="background-image: url('assets/images/test.jpg');"></div>
                            <div class="nk-gap"></div>
                            <div class="nk-testimonial-name nk-carousel-item-name h4">فائدة العضويات البلاستيكية ؟</div>
                            <a href="#" class="nk-testimonial-source">أقرأ المزيد</a>
                            <div class="nk-testimonial-body">
                                <em>"هى بطاقــــــة تعريفية يدون عليها بيانـــــــات المستخـــــــدم و التى ايضا تشمل أســــــــــم المستخـــــــدم و كلمة الســر المعدة مسبقا للدخــــــول إلى النظــــام و مباشرة العمليات لتلاشى فقدانـــهم و إيضا لتحقيـق شخصية المستخدم أمنيا."</em>
                            </div>
                        </blockquote>
                    </div></div>
                </div>
                <div class="nk-carousel-prev">
                    <div class="nk-carousel-arrow-name"><!-- There Will be a Name of Testimonial Author --></div>
                    Previous
                    <span class="nk-icon-arrow-left"></span>
                </div>
                <div class="nk-carousel-next">
                    <div class="nk-carousel-arrow-name"><!-- There Will be a Name of Testimonial Author --></div>
                    التالى
                    <span class="nk-icon-arrow-right"></span>
                </div>
            </div>
            <!-- END: Carousel 1 -->

        </div>
        <div class="nk-gap-4"></div>
    </div>
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
<!-- START: Large Modal -->
<div class="modal nk-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title nk-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div>
    </div>
</div>
<!-- END: Large Modal -->
@endsection