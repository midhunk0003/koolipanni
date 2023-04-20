
@extends('layouts.stylefiles.app')

@section('content')
    <div class="container" style="height: 0%">
    </div>
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
{{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">--}}
        <style>
            input:-webkit-autofill {
                box-shadow: 0 0 0 9999px #fff inset;
            }
            .container2{
                width:360px;
                height: 496px;
                margin-top: 21%;
                margin-bottom: -8%!important;
                background:#38383866;
                box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                position: inherit;
                left:50%;
                transform: translate(-50%, -50%);
                color:white;
                text-align: center;
            }

            .container1{
                width:360px;
                height: 388px;
                margin-top: 17%;
                margin-bottom: -8%!important;
                background:#38383866;
                box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                position: inherit;
                left:50%;
                transform: translate(-50%, -50%);
                color:white;
                text-align: center;
            }
            .container1 input{
                border: 1px solid #f28b00!important;
                border-radius: 0!important;
            }
            .container2 input{
                border: 1px solid #f28b00!important;
                border-radius: 0!important;
            }
            @media  (max-width: 600px) {
                .container2{
                    width:360px;
                    height: 429px;
                    margin-top: 69%!important;
                    margin-bottom:-8%!important;
                    background:#38383866;
                    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                    position: inherit;
                    left:50%;

                    transform: translate(-50%, -50%);
                    color:white;
                    text-align: center;
                }
                .container1{
                    width:360px;
                    height: 429px;
                    margin-top: 69%!important;
                    margin-bottom:-8%!important;
                    background:#38383866;
                    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                    position: inherit;
                    left:50%;

                    transform: translate(-50%, -50%);
                    color:white;
                    text-align: center;
                }
            }
            .box1 input
            .container1 h1{
                font-size:35px;
                margin-top:40px;
                margin-bottom:30px;
            }
            .box1 input
            .container2 h1{
                font-size:35px;
                margin-top:40px;
                margin-bottom:30px;
            }
            .box1{
                width:260px;
                height:40px;
                background:#f1f1f1b3;
                border-radius:10px;
                margin:10px auto;
            }
            .btn1{
                font-family:'Montserrat', sans-serif;
                width:260px;
                height:40px;
                background:#9254C8;
                border-radius:10px;
                margin:14px auto;
                display:block;
                font-size:16px;
                border:none;
                color:white;
                cursor:pointer;
                transition:0.4s all;
            }
            .btn1:hover{
                background:#3498db;
            }
            .box1 input{
                font-family:'Montserrat', sans-serif;
                background:none;
                border:none;
                outline:none;
                text-align:center;
                width:90%;
                line-height:37px;
                font-size:16px;
                color:#333;
            }
            .box1 select{
                font-family:'Montserrat', sans-serif;
                background:none;
                border:none;
                outline:none;
                text-align:center;
                width:90%;
                line-height:37px;
                font-size:16px;
                color:#333;
            }
            .b1{
                display:block;
                width:260px;
                padding:20px 0;
                text-decoration:none;
                color:white;
                text-align:center;
                margin: auto;
                transition:0.4s all;
            }
            .b2{
                position:absolute;
                bottom: 11px;
                left:50%;
                transform:translateX(-50%);
                width:260px;
                padding:10px 0;
                text-decoration:none;
                text-align:center;
                transition:0.4s all;
                color:white;
            }
            /*a:hover{*/
            /*    background:#00000040;*/
            /*}*/
            .fab{
                /*display:block;*/
                margin: -4px 4px 0px 8px;
            }
            .fa-github{
                color:black;
            }
            .fa-google{
                color:#c41b1b;
            }
            .fa-facebook-square{
                color:#002fa6;
            }
            .fab:hover{
                cursor:pointer;
            }
            #locationField{
                width: 100%;
            }
            .hero-image {
                background: url(https://inc42.com/wp-content/uploads/2015/08/home-services.jpg);
                background-color: #cccccc;
                height: 300px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }
        </style>

    <body style="   background: linear-gradient(to right, rgb(98 105 213), rgb(18 76 90)) 0% 0% / cover; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    min-height: 100%!important;
    background-size: cover;">
    <div class="hero-image">
    <div class="container1 login">
        <h1>LOGIN</h1>
        <form action="{{url('/login')}}" method="get">
<div class="row" style="
    margin-left: 15%;width:260px;
                ">
                <input type="text" placeholder="email" name="email" class="box1" required maxlength="25" >
</div>

            <div class="row" style="
    margin-left: 15%;width:260px;
                ">
                <input  type="password" placeholder="Password" name="password" class="box1"	required maxlength="15">
            </div>
            <input  type="submit" class="btn1" value="LOGIN">
        </form>
        <a href="#"  class="b1">Forget Password?</a>
        <a href="#" id="register" class="b2">Create Account</a>
{{--        <br><br><hr>--}}
{{--        <p>Or Login With</p>--}}
{{--        <div class="icon">--}}
{{--            <i class="fab fa-github fa-2x"></i>--}}
{{--            <i class="fab fa-google fa-2x"></i>--}}
{{--            <i class="fab fa-facebook-square fa-2x"></i>--}}
{{--        </div>--}}
    </div>


    <div class="container2 register">
        <h1>REGISTER</h1>
        <form  role="form" method="POST" enctype="multipart/form-data" action="{{url('/registeruser')}}" id="registerdetail">
            @csrf
            <div class="row" style="margin-left: 15%;width:260px;">
                <input type="text" placeholder="NAME"  name="name" class="box1" required maxlength="25">
            </div>
            <div class="row" style="margin-left: 15%;width:260px;">
                <input type="text" placeholder="EMAIL"  name="email" class="box1" required maxlength="25">
            </div>
            <div class="row" style="margin-left: 15%;width:260px;">
                <input type="password" placeholder="password" name="password" class="box1" required maxlength="25">
            </div>
            <div class="row" style="margin-left: 15%;width:260px;">
                <input type="text" placeholder="conform password" name="conformpassword" class="box1" required maxlength="25">
            </div>

            <div class="row" style="margin-left: 15%;width:260px;
                ">
                <div style="padding-right: 0px!important;padding-left: 0px!important;flex:1;max-width: 98.333333%!important;" id="locationField" class="col-md-4">
{{--                    <label for="input-file-max-fs">LOCATION ENTER</label>--}}
                    <input name="location" id="autocomplete" class="form-control" placeholder="select Location" type="text">
                </div>

                <div  class="col-md-4 hide">
                    <label for="input-file-max-fs">CITY</label>
                    <input name="city" type="text" class="form-control field" id="locality">
                </div>


                <div class="col-md-4 hide">
                    <label for="input-file-max-fs">STATE</label>
                    <input name="state" type="text" class="form-control field" id="administrative_area_level_1">
                </div>




                <div  class="col-md-4 hide" >
                    <label for="input-file-max-fs">PINCODE</label>
                    <input name="pincode" type="text" class="form-control field" id="postal_code">
                </div>

                <div class="col-md-4 hide">
                    <label for="input-file-max-fs">COUNTRY</label>
                    <input  name="country" type="text" class="form-control field" id="country">
                </div>

                <div class="col-md-4 hide">
                    <label for="input-file-max-fs">latitude</label>
                    <input name="latitude" type="text" class="form-control field" id="latitude">
                </div>


                <div  class="col-md-4 hide">
                    <label for="input-file-max-fs">lloungitude</label>
                    <input name="loungnitude" type="text" class=" form-control field" id="longitude">
                </div>
            </div>
                <input type="submit" class="btn1" value="REGISTER">
        </form>
{{--        <a href="#" class="b1">Forget Password?</a>--}}
        <a href="#" id="login" class="b2 ">Already have account LOGIN?</a>
        <hr>
{{--        <p>Or Login With</p>--}}
{{--        <div class="icon">--}}
{{--            <i class="fab fa-github fa-2x"></i>--}}
{{--            <i class="fab fa-google fa-2x"></i>--}}
{{--            <i class="fab fa-facebook-square fa-2x"></i>--}}
{{--        </div>--}}
    </div>
    </div>
@endsection
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>--}}
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGMYS-RP5r37u2t6ToQDKxyjerY-jDZj8&amp;libraries=places"></script>
@push('scripts')
    <script>
      ////////  // location javascript code start///////////


        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        $("#autocomplete").on('focus', function () {
            geolocate();
        });

        var placeSearch, autocomplete;
        var componentForm = {
            locality: 'long_name',
            administrative_area_level_1:        'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initialize() {
            // Create the autocomplete object, restricting the search
            // to geographical location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */ (document.getElementById('autocomplete')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'in'
                    }
                });
            // When the user selects an address from the dropdown,
            // populate the address fields in the form.
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                fillInAddress();
            });
        }

        // [START region_fillform]
        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            document.getElementById("latitude").value = place.geometry.location.lat();
            document.getElementById("longitude").value = place.geometry.location.lng();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }
        // [END region_fillform]

        // [START region_geolocation]
        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var geolocation = new google.maps.LatLng(
                        position.coords.latitude, position.coords.longitude);

                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    document.getElementById("latitude").value = latitude;
                    document.getElementById("longitude").value = longitude;

                    autocomplete.setBounds(new google.maps.LatLngBounds(geolocation, geolocation));
                });
            }

        }

        initialize();
        // [END region_geolocation]
    </script>
{{--    ////////// end location javascript code start///////////--}}
    <script>
        // validation
        $("#registerdetail").validate({
            rules: {
                email: "required",
                phone: "required",
                location: "required",
                city: "required",
                state: "required",
                country: "required",
                latitude: "required",
                loungnitude: "required",
            }
        });

        email
        phone
        phone2
        registerdate
        fulladdress
        location
        city
        state
        pincode
        country
        latitude
        loungnitude
        referencename
        referencephone
        referenceaddress
        aadharfront
        aadharback
        desiginationdoc
        workcharge
        price
        desiginationdetails
        desiginationdetails
        desiginationdetails
    </script>

{{--    //hide and show register and ligin--}}
    <script>
        $(document).ready(function(){
            $(".register").hide();
            $("#register").click(function(){
                $(".login").hide();
                $(".register").show();

            });
            $("#login").click(function(){
                $(".login").show();
                $(".register").hide();
            });
        });
    </script>
    {{--    //end hide and show register and ligin--}}

@endpush
