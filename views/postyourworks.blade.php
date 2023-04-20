
@extends('layouts.stylefiles.app')

@section('content')
    <style>
        .btn-info{
            padding: 5px 9px;
            background: #d31c1c;
            border: 0;
        }

        .btn-primary {
            background-color: #17c115;
            border: 0;
            padding: 5px 9px;}

        table.dataTable thead>tr>th {
            color: #fff!important;
            background: #1d88db;
        }
        .table-responsive {
            display: block;

            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            /*width: 600px;*/
            margin: 0 auto;
        }
        table.dataTable {

            border-collapse: collapse!important;
        }
        .btn1{
            width: 100%;
            text-align: right;



        }
        button.btn.btn-success {
            padding: 0;
            font-size: 15px;
            /* padding: 5px; */
            /* padding: 0 5px; */
            padding-right: 8px;


        }

        .btn-primary:hover{
            background: #00a65a;
        }
        .btn-info:hover{
            background-color: #be1515;
        }


        i.fa.fa-plus {
            padding: 10px 13px;
            background: #0c844d;
            margin-right: 3px;
        }
        .text-black1 {
            color: #111 !important;
            padding: 15px;
            background: #ebebeba6;
            border-bottom: 3px solid #1d88db;
            font-weight: 400;
            font-size: 23px;
            border-radius: 4px;
            margin-bottom: 8px;
        }
        tbody{
            color: #747474;
        }

        .dropify-wrapper {
            display: block;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            width: 400px;
            max-width: 100%;
            height: 200px;
            padding: 5px 10px;
            font-size: 14px;}

        .dropify-wrapper .dropify-preview {
            display: none;
            position: absolute;
            z-index: 1;
            background-color: #FFF;
            padding: 5px;
            width: 400px;}
        .form-control {
            border-radius: 4px;
            box-shadow: none;
            border-color: #d2d6de;
            margin-bottom: 15px;
        }
        label{
            font-size: 16px;
            font-weight: 500;
        }
        .modal-title{
            font-size: 26px;
            font-weight: 400;
        }
        button.close {
            all: unset;
            padding-top: 11px!important;
        }
        .modal-header {
            border-bottom-color: #f4f4f4;
            background: #09ab98a3;
            padding-bottom: 5px;
            color: #fff;
        }
        .modal-footer {
            border-top-color: #f4f4f4;
            text-align: center;
            justify-items: center;
            justify-content: center;
            width: 100%;
            /* float: revert; */
        }
        button.btn.btn-primary2 {
            background: #13b09e;
            color: #fff;
            text-align: center;
        }
        .modal-dialog {
            max-width: 400px;
            margin: 1.75rem auto;
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 9px 7px;}
    </style>



    <div class="" style="min-height: 547px;">
        <!-- Content Header (Page header) -->
{{--        <div class="content-header sty-one">--}}
{{--            <h1>Category</h1>--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li><a href="{{url('/')}}">Home</a></li>--}}
{{--                <li><i class="fa fa-angle-right"></i>Category</li>--}}
{{--            </ol>--}}
{{--        </div>--}}
        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">

                    <a href="{{url('/workerdetail')}}"  class="btn btn-primary pull-right" style="margin-top: 10px;
    margin-right: 10px;">Back</a>
                    <h4 class="text-black1"><i class="fa fa-file-image-o" style="margin: 4px;

    padding-right: 8px;"></i> REGISTER YOUR WORKER DETAILS AND DOCUMENTS</h4>

{{--                    @include('layouts.admin.partials.flash-message')--}}


                    <form  role="form" method="post" enctype="multipart/form-data" action="{{url('/storeworkerdetail')}}" id="worker_detail">
                     @csrf
                        {{-----------------------------------------------------------------------------------------------------------}}
                        <h2>WORKER DETAILS</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="input-file-max-fs">Firstname</label>
                                <input type="text" name="first_name" class="form-control" id="firstname" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="lastname">
                            </div>


                            <div class="col-md-4">
                            <h3 for="input-file-max-fs">YOUR Profile Image</h3>
                            <label for="wprofileimage" id="imgsdprofile"><i style="background:none!important;padding: 30px 45px!important;margin-right: 3px!important;border: 1px solid!important;" class="fa fa-plus"></i></label>
                            <input type="file" name="workerprofileimage" id="wprofileimage" class="" style="display: none;visibility:hidden" onchange="getImageprofile(event);">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">SELECT CATEGORY</label>
                                <select class="form-control" id="categoryid" name="category_id">
                                    <option disabled selected> -- select -- </option>
                                   @foreach($category as $get)
                                       <option id="categoryid" value="{{$get->id}}">{{$get->category_name}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <h3 for="input-file-max-fs">POST YOUR WORKES IMG</h3>
                                <label for="firstimage" id="imgsd"><i style="background:none!important;padding: 30px 45px!important;margin-right: 3px!important;border: 1px solid!important;" class="fa fa-plus"></i></label>
                                <input type="file" name="firstimage[]" id="firstimage" class="" style="display: none;visibility:hidden" onchange="getImage1(event);">

                                <label for="firstimage2" id="imgsd2"><i style="background:none!important;padding: 30px 45px!important;margin-right: 3px!important;border: 1px solid!important;" class="fa fa-plus"></i></label>
                                <input type="file" name="firstimage[]" id="firstimage2" class="" style="display: none;visibility:hidden" onchange="getImage2(event);">

                                <label for="firstimage3" id="imgsd3"><i style="background:none!important;padding: 30px 45px!important;margin-right: 3px!important;border: 1px solid!important;" class="fa fa-plus"></i></label>
                                <input type="file" name="firstimage[]" id="firstimage3" class="" style="display: none;visibility:hidden" onchange="getImage3(event);">

                                <label for="firstimage4" id="imgsd4"><i style="background:none!important;padding: 30px 45px!important;margin-right: 3px!important;border: 1px solid!important;" class="fa fa-plus"></i></label>
                                <input type="file" name="firstimage[]" id="firstimage4" class="" style="display: none;visibility:hidden" onchange="getImage4(event);">

                                <label for="firstimage5" id="imgsd5"><i style="background:none!important;padding: 30px 45px!important;margin-right: 3px!important;border: 1px solid!important;" class="fa fa-plus"></i></label>
                                <input type="file" name="firstimage[]" id="firstimage5" class="" style="display: none;visibility:hidden" onchange="getImage5(event);">

                                <label for="firstimage6" id="imgsd6"><i style="background:none!important;padding: 30px 45px!important;margin-right: 3px!important;border: 1px solid!important;" class="fa fa-plus"></i></label>
                                <input type="file" name="firstimage[]" id="firstimage6" class="" style="display: none;visibility:hidden" onchange="getImage6(event);">

                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Email</label>
                                <input type="text" name="email" class="form-control" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Phone</label>
                                <input type="text" name="phone" class="form-control" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Phone2</label>
                                <input type="text" name="phone2" class="form-control" >
                            </div>

                            <div hidden  class="col-md-4">
                                <label  for="input-file-max-fs">Register Date</label>
                                <input  type="datetime-locaSELECT CATEGORYl" name="registerdate" value="<?php echo date('Y-m-d H:i:s');?>" class="form-control" >
                            </div>
                            <?php
                             $date = date('Y-m-d H:i:s');
                             $date = strtotime($date);
                             $date = strtotime("+30 day",$date);
                            ?>

                            <div hidden class="col-md-4">
                                <label for="input-file-max-fs">Register Date</label>
                                <input  type="datetime-local" name="todateandtime" value="<?php echo date('Y-m-d H:i:s',$date);?>" class="form-control" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Full Address</label>
                                <textarea name="fulladdress" class="form-control"></textarea>
                            </div>

                            <div id="locationField" class="col-md-4">
                                <label for="input-file-max-fs">LOCATION ENTER</label>
                                <input name="location" id="autocomplete1" class="form-control" placeholder="Enter your address" type="text">
                            </div>

                            <div  class="col-md-4">
                                <label for="input-file-max-fs">CITY</label>
                                <input name="city" type="text" class="form-control field" id="locality1">
                            </div>


                            <div class="col-md-4">
                                <label for="input-file-max-fs">STATE</label>
                                <input name="state" type="text" class="form-control field" id="administrative_area_level_11">
                            </div>




                            <div  class="col-md-4">
                                <label for="input-file-max-fs">PINCODE</label>
                                <input name="pincode" type="text" class="form-control field" id="postal_code">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">COUNTRY</label>
                                <input name="country" type="text" class="form-control field" id="country1">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">latitude</label>
                                <input name="latitude" type="text" class="form-control field" id="latitude2">
                            </div>


                            <div  class="col-md-4">
                                <label for="input-file-max-fs">lloungitude</label>
                                <input name="loungnitude" type="text" class=" form-control field" id="longitude2">
                            </div>

                        </div>













                        {{-----------------------------------------------------------------------------------------------------------}}
                        <h2>REFERENCE DETAILS</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="input-file-max-fs">Reference Name</label>
                                <input type="text" name="referencename" class="form-control" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Reference Phone</label>
                                <input type="text" name="referencephone" class="form-control" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Reference Fulladdress</label>
                                <textarea  name="referenceaddress" class="form-control"></textarea>
                            </div>
                        </div>
                        {{-----------------------------------------------------------------------------------------------------------}}
                        <h2>WORKER DOCUMENTS</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="input-file-max-fs">AADHAR FRONT</label>
                                <input type="file" name="aadharfront" class="form-control" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">AADHAR BACK</label>
                                <input type="file" name="aadharback" class="form-control" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Designation DOC &nbsp;<small style="color: red">not mandatory</small></label>
                                <input type="file" name="desiginationdoc" class="form-control" >
                            </div>
                        </div>
                        {{-----------------------------------------------------------------------------------------------------------}}
                        <h2>WORKER Designation details</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="input-file-max-fs">WORKER CHARGE</label>
                                <select class="form-control" name="workcharge">
                                    <option disabled selected> -- select -- </option>
                                    <option value="perhour">PER HOUR</option>
                                    <option value="oneday">ONE DAY</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">PRICE</label>
                                <input type="text" name="price" class="form-control" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Designation Full Details</label>
                                <textarea  name="desiginationdetails" class="form-control"></textarea>
                            </div>
                        </div>
                        {{-----------------------------------------------------------------------------------------------------------}}






                        <div class="col-md-12" style="text-align:center"><br>
                            <input type="submit" class="btn btn-success" name="save" value="Submit"><br>
                            <br>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection



@push('scripts')
    <!-- Google Maps JavaScript library -->

    {{--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGMYS-RP5r37u2t6ToQDKxyjerY-jDZj8&amp;libraries=places"></script>

    <script type="text/javascript">

        // $( document ).ready(function() {

        function getImageprofile(event) {
            var image = URL.createObjectURL(event.target.files[0]);
            var imagediv = document.getElementById('imgsdprofile');
            var newimg = document.createElement('img');
            imagediv.innerHTML = '';
            newimg.src = image;
            newimg.width = "120";
            imagediv.appendChild(newimg);
            // var newimg = imagename.replace(/^.*\\/,"");
            // $('#display-image').html(newimg);
        }

           function getImage1(event) {
               var image = URL.createObjectURL(event.target.files[0]);
               var imagediv = document.getElementById('imgsd');
               var newimg = document.createElement('img');
               imagediv.innerHTML = '';
               newimg.src = image;
               newimg.width = "120";
               imagediv.appendChild(newimg);
               // var newimg = imagename.replace(/^.*\\/,"");
              // $('#display-image').html(newimg);
           }
        function getImage2(event) {
            var image = URL.createObjectURL(event.target.files[0]);
            var imagediv = document.getElementById('imgsd2');
            var newimg = document.createElement('img');
            imagediv.innerHTML = '';
            newimg.src = image;
            newimg.width = "120";
            imagediv.appendChild(newimg);
            // var newimg = imagename.replace(/^.*\\/,"");
            // $('#display-image').html(newimg);
        }

        function getImage3(event) {
            var image = URL.createObjectURL(event.target.files[0]);
            var imagediv = document.getElementById('imgsd3');
            var newimg = document.createElement('img');
            imagediv.innerHTML = '';
            newimg.src = image;
            newimg.width = "120";
            imagediv.appendChild(newimg);
            // var newimg = imagename.replace(/^.*\\/,"");
            // $('#display-image').html(newimg);
        }

        function getImage4(event) {
            var image = URL.createObjectURL(event.target.files[0]);
            var imagediv = document.getElementById('imgsd4');
            var newimg = document.createElement('img');
            imagediv.innerHTML = '';
            newimg.src = image;
            newimg.width = "120";
            imagediv.appendChild(newimg);
            // var newimg = imagename.replace(/^.*\\/,"");
            // $('#display-image').html(newimg);
        }

        function getImage5(event) {
            var image = URL.createObjectURL(event.target.files[0]);
            var imagediv = document.getElementById('imgsd5');
            var newimg = document.createElement('img');
            imagedfirstimageiv.innerHTML = '';
            newimg.src = image;
            newimg.width = "120";
            imagediv.appendChild(newimg);
            // var newimg = imagename.replace(/^.*\\/,"");
            // $('#display-image').html(newimg);
        }

        function getImage6(event) {
            var image = URL.createObjectURL(event.target.files[0]);
            var imagediv = document.getElementById('imgsd6');
            var newimg = document.createElement('img');
            imagediv.innerHTML = '';
            newimg.src = image;
            newimg.width = "120";
            imagediv.appendChild(newimg);
            // var newimg = imagename.replace(/^.*\\/,"");
            // $('#display-image').html(newimg);
        }
        // });

        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        $("#autocomplete1").on('focus', function () {
            geolocate1();
        });


        var placeSearch1, autocomplete1;
        var componentForm1 = {
            locality: 'long_name',
            administrative_area_level_1:        'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initialize1() {
            // Create the autocomplete object, restricting the search
            // to geographical location types.
            autocomplete1 = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */ (document.getElementById('autocomplete1')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'in'
                    }
                });
            // When the user selects an address from the dropdown,
            // populate the address fields in the form.
            google.maps.event.addListener(autocomplete1, 'place_changed', function () {
                fillInAddress1();
            });
        }

        function fillInAddress1() {
            // Get the place details from the autocomplete object.
            var place1 = autocomplete1.getPlace();

            console.log(place1);





            document.getElementById("latitude2").value = place1.geometry.location.lat();
            document.getElementById("longitude2").value = place1.geometry.location.lng();

            for (var component1 in componentForm1) {
                document.getElementById(component1).value = '';
                document.getElementById(component1).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place1.address_components.length; i++) {
                var addressType1 = place1.address_components[i].types[0];


                if (componentForm1[addressType1]) {
                    var val1 = place1.address_components[i][componentForm1[addressType1]];
                    var city3 = place1.address_components[0]['long_name'];
                    var administrative_area_level_11 = place1.address_components[2]['long_name'];
                    var country1 = place1.address_components[3]['long_name'];
                    document.getElementById('locality1').value = city3;
                    document.getElementById('administrative_area_level_11').value = administrative_area_level_11;
                    document.getElementById('country1').value = country1;

                    document.getElementById(addressType1).value = val1;
                }
            }
        }

        function geolocate1() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position1) {
                    var geolocation1 = new google.maps.LatLng(
                        position1.coords.latitude, position1.coords.longitude);

                    var latitude1 = position1.coords.latitude;
                    var longitude1 = position1.coords.longitude;



                    document.getElementById("latitude2").value = latitude1;
                    document.getElementById("longitude2").value = longitude1;

                    autocomplete1.setBounds(new google.maps.LatLngBounds(geolocation1, geolocation1));
                });
            }

        }

        initialize1();


        $("#worker_detail").validate({
            rules: {
                first_name: "required",
                category_id: "required",
                last_name: "required",
                email: "required",
                phone: "required",
                phone2: "required",
                registerdate: "required",
                fulladdress: "required",
                location: "required",
                city: "required",
                state: "required",
                pincode: "required",
                country: "required",
                latitude: "required",
                loungnitude: "required",
                referencename: "required",
                referencephone: "required",
                referenceaddress: "required",
                aadharfront: "required",
                aadharback: "required",
                // desiginationdoc: "required",
                workcharge: "required",
                price: "required",
                desiginationdetails: "required",
            }
        });
    </script>
@endpush
