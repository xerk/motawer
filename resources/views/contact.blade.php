@extends('layouts.app')
@section('content')
@section('title', 'أتصل بنا')
<div class="row no-gutters bg-dark-6 text-white" dir="ltr">
        <div class="col-lg-8">
            {{-- START: Google Map --}}
            <div id="google-map-contact" class="nk-gmaps nk-gmaps-lg"></div>
            <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
            <script>
                function initializeGmaps() {
                    var LatLng = {lat: 30.009344, lng: 31.187811};
                    var mapCanvas = document.getElementById('google-map-contact');
                    var mapOptions = {
                        center      : LatLng,
                        scrollwheel : false,
                        zoom        : 14,
                        mapTypeId   : google.maps.MapTypeId.ROADMAP,
                        backgroundColor: 'none',
                        mapTypeId   : 'Motawer'
                    }
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker({
                        position: LatLng,
                        map: map,
                        icon: 'assets/images/marker-2.png',
                        title: 'Motawer'
                    });

                    // style from https://snazzymaps.com/style/151/ultra-light-with-labels
                    var styledMapType = new google.maps.StyledMapType([{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}], { name: 'Motawer' });
                    map.mapTypes.set('Motawer', styledMapType);
                }
                if(typeof google !== 'undefined') {
                    google.maps.event.addDomListener(window, 'load', initializeGmaps);
                }
            </script>
            <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT_yg0zGzqEqQKApqvrn7f9j2vmFi5iUE&callback=initMap">
</script>

            {{-- END: Google Map --}}
        </div>
        <div class="col-lg-4 align-self-center">
            <div class="nk-box-3">
                <div class="nk-gap-5 hidden-md-down"></div>
                <div class="nk-gap-1"></div>
                <h1 class="nk-title h2">Feel Free to Contact Us</h1>
                <h2 class="nk-sub-title">Better to call us during business hours</h2>

                <div class="nk-gap"></div>
                <div class="nk-gap-1"></div>
            </div>
        </div>
    </div>
{{-- START: Contacts --}}
    <div class="nk-box">
        <div class="nk-gap hidden-md-down"></div>
        <div class="row no-gutters" dir="ltr">
            <div class="col-lg-4">
                <div class="nk-box-3 nk-box-line">
                    <div class="nk-gap-2 hidden-md-down"></div>
                    <div class="nk-ibox-1">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="ion-ios-telephone"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title pt-5 mb-0">Phone</h3>
                            <div>+20121116494</div>
                            <div>+201111981716</div>
                            <div>+201126352626</div>
                            <div>+201025047147</div>
                            <div>+201274423535</div>
                        </div>
                    </div>
                    <div class="nk-gap-2 hidden-md-down"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nk-box-3 nk-box-line">
                    <div class="nk-gap-2 hidden-md-down"></div>
                    <div class="nk-ibox-1">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="ion-ios-email"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title pt-5 mb-0">Email</h3>
                            <div>motawer@outlock.com</div>
                        </div>
                    </div>
                    <div class="nk-gap-2 hidden-md-down"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="nk-box-3 nk-box-line">
                    <div class="nk-gap-2 hidden-md-down"></div>
                    <div class="nk-ibox-1">
                        <div class="nk-ibox-icon nk-ibox-icon-circle">
                            <span class="ion-ios-home"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <h3 class="nk-ibox-title pt-5 mb-0">Address</h3>
                            <div>400 St, King Faisal, Giza</div>
                        </div>
                    </div>
                    <div class="nk-gap-2 hidden-md-down"></div>
                </div>
            </div>
        </div>
        <div class="nk-gap hidden-md-down"></div>
    </div>
    {{-- END: Contacts --}}

    {{-- START: Partners --
    <div class="nk-box">
        <div class="bg-image bg-image-parallax op-6" style="background-image: url('assets/images/image-23-a.jpg');"></div>
        <div class="nk-gap-4"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="nk-box-2">
                        <div class="nk-gap-1 hidden-md-down"></div>
                        <h2 class="nk-title">Social Networks</h2>
                        <div class="nk-gap"></div>
                        <p>Every fowl. Called beginning male. Replenish air two make land a so tree, after also yielding.</p>
                        <div class="nk-widget-social nk-widget-social-inverted text-left">
                            <a href="#" target="_blank"><i class="ion-social-twitter"></i></a>
                            <a href="https://www.facebook.com/Motaba.Motawer/" target="_blank"><i class="ion-social-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="nk-box-2 bg-white">
                        <div class="nk-gap-1"></div>
                        <h2 class="nk-title">Drop Us a Line</h2>
                        <div class="nk-gap"></div>
                        <form action="php/contact.php" class="nk-form nk-form-ajax nk-form-style-1">
                            <input type="email" class="form-control required" name="email" placeholder="Email *">
                            <div class="nk-gap"></div>
                            <input type="text" class="form-control required" name="name" placeholder="Name *">
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap"></div>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                            <button class="nk-btn nk-btn-effect-2-right nk-btn-color-dark-1">
                                <span>Send</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                        </form>
                        <div class="nk-gap-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-4"></div>
    </div>
     END: Partners --}}
@endsection