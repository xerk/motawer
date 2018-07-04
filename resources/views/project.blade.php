@extends('layouts.app')
@section('content')
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
<div  dir="ltr" class="nk-header-title nk-header-title-lg nk-header-title-parallax bg-white text-dark-1">
    <div class="bg-image">
        <div style="background-image: url('assets/images/image-19-a.jpg');"></div>
    </div>
    <div class="nk-header-table">
        <div class="nk-header-table-cell">
            <div class="container">
                <div class="nk-header-text">     
                    <div class="nk-gap-1"></div>
                    <h1 class="nk-title display-3">نظام متابع</h1>
                    <h2 class="nk-sub-title">نظام إدارى متكامل لتسهيل سير عمل المدرسة و عملية التعليم.</h2>
                    <div class="nk-gap-3"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-effect-5-left nk-btn-rounded nk-btn-color-dark-2">
                        <span class="icon">
                            <i class="fa fa-apple"></i>
                        </span> 
                        متجر أبل</a>
                    <span class="hidden-sm-down">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <div class="hidden-md-up nk-gap"></div>
                    <a href="#!" class="nk-btn nk-btn-x2 nk-btn-effect-5-left nk-btn-rounded nk-btn-color-white"><span class="icon"><i class="fa fa-google"></i></span> متجر جوجل</a>
                </div>
            </div>
        </div>
    </div>

<!-- End: Header -->
<!-- START: Features -->
    <div class="nk-box">
        <div class="nk-gap-4"></div>
        <div class="container">
            <h2 class="h1">مُتابع</h2>
            <p>هو نظام متكامل يسمح للمدرسة بأن تقوم بكل أعمالها بشكل إلكترونى بحيث يستطيع كل من.</p>
            <div class="nk-gap"></div>
            <hr>
            <div class="row vertical-gap">
                <div class="col-md-12">
                    <blockquote class="nk-testimonial-2 bg-dark-1 text-white">
                        <div class="nk-testimonial-photo" style="background-image: url({{ asset('assets/images/student.jpg') }})"></div>
                        <div class="nk-testimonial-body">
                            <em>"يستطيع الطلاب الدخول الى النظام بحيث يستطيع الطالب معرفة."</em>
                            <div class="nk-gap-1"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">النتائج الدراسية</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">البيانات المالية</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">سجل الحضور و الغياب</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">جدول الحصص</a>&nbsp;&nbsp;
                        </div>
                        <div class="nk-testimonial-name h2">الطلاب</div>
                        <div class="nk-testimonial-source">الدخول إلى هذا النظام فى أى وقت و من أى مكان عبر شبكة الإنترنت</div>
                    </blockquote>
                </div>
                <div class="col-md-12">
                    <blockquote class="nk-testimonial-2 bg-dark-2 text-white">
                        <div class="nk-testimonial-photo" style="background-image: url({{ asset('assets/images/father.jpg') }})"></div>
                        <div class="nk-testimonial-body">
                            <em>"يستطيع أولياء الأمور الدخول إلى النظام بحيث يستطيع ولى الأمر معرفة "</em>
                            <div class="nk-gap-1"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">النتائج الدراسية</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">البيانات المالية</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">سجل الحضور و الغياب</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">جدول الحصص</a>&nbsp;&nbsp;
                        </div>
                        <div class="nk-testimonial-name h2">أولياء الأمور</div>
                        <div class="nk-testimonial-source">الدخول إلى هذا النظام فى أى وقت و من أى مكان عبر شبكة الإنترنت</div>
                    </blockquote>
                </div>
                <div class="col-md-12">
                    <blockquote class="nk-testimonial-2 bg-dark-3 text-white">
                       <div class="nk-testimonial-photo" style="background-image: url({{ asset('assets/images/techer.jpg') }})"></div>
                        <div class="nk-testimonial-body">
                            <em>"يستطيع المدرسون الدخول إلى النظام بحيث يستطيعون معرفة."</em>
                            <div class="nk-gap-1"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">جدول الحصص</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">جدول الحصص</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">جدول الإشراف</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">الرواتب والخصومات</a>&nbsp;&nbsp;
                        </div>
                        <div class="nk-testimonial-name h2">المدرسين</div>
                        <div class="nk-testimonial-source">الدخول إلى هذا النظام فى أى وقت و من أى مكان عبر شبكة الإنترنت</div>
                    </blockquote>
                </div>
                <div class="col-md-12">
                    <blockquote class="nk-testimonial-2 bg-dark-4 text-white">
                        <div class="nk-testimonial-photo" style="background-image: url({{ asset('assets/images/m-techer.jpg') }})"></div>
                        <div class="nk-testimonial-body">
                            <em>"يستطيع الإدرايون الدخول إلى النظام بحيث يستطيعون معرفة."</em>
                            <div class="nk-gap-1"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">الرواتب والخصومات</a>&nbsp;&nbsp;
                        </div>
                        <div class="nk-testimonial-name h2">الإداريين</div>
                        <div class="nk-testimonial-source">الدخول إلى هذا النظام فى أى وقت و من أى مكان عبر شبكة الإنترنت</div>
                    </blockquote>
                </div>
                <div class="col-md-12">
                    <blockquote class="nk-testimonial-2 bg-dark-5 text-white">
                        <div class="nk-testimonial-photo" style="background-image: url({{ asset('assets/images/s-techer.jpg') }})"></div>
                        <div class="nk-testimonial-body">
                            <em>"يستطيع العاملون بالمدرسة الدخول إلى النظام بحيث يستطيعون معرفة."</em>
                            <div class="nk-gap-1"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">الرواتب والخصومات</a>&nbsp;&nbsp;
                        </div>
                        <div class="nk-testimonial-name h2">العاملين بالمدرسة</div>
                        <div class="nk-testimonial-source">الدخول إلى هذا النظام فى أى وقت و من أى مكان عبر شبكة الإنترنت</div>
                    </blockquote>
                </div>
                <div class="col-md-12">
                    <blockquote class="nk-testimonial-2 bg-dark-6 text-white">
                        <div class="nk-testimonial-photo" style="background-image: url({{ asset('assets/images/manger.jpg') }})"></div>
                        <div class="nk-testimonial-body">
                            <em>"يستطيع المديرون الدخول إلى النظام بحيث يستطيعون معرفة."</em>
                            <div class="nk-gap-1"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">الإحصاءات العامة</a>&nbsp;&nbsp;
                            <div class="nk-gap hidden-md-up"></div>
                            <a href="#!" class="nk-btn nk-btn-color-white text-black">سجل الإشعارات العامة</a>&nbsp;&nbsp;
                        </div>
                        <div class="nk-testimonial-name h2">المديرين</div>
                        <div class="nk-testimonial-source">الدخول إلى هذا النظام فى أى وقت و من أى مكان عبر شبكة الإنترنت</div>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
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
        <div style="background-image: url('assets/images/footer.jpg')"></div>
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
                    <a href="#!" class="nk-btn nk-btn-color-white text-black">TEL: 0237771010</a>&nbsp;&nbsp;
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