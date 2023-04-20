@extends('layouts.admin.app')
@section('content')
    {{--    <body class="skin-blue sidebar-mini">--}}
    {{--    <div class="wrapper boxed-wrapper">--}}

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



    <div class="content-wrapper" style="min-height: 547px;">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>UPDATE REGISTERED WORKER DETAILS AND DOCUMENTS</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><i class="fa fa-angle-right"></i>UPDATE REGISTERED WORKER DETAILS AND DOCUMENTS</li>
            </ol>
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">

                    <a href="{{url('/workerdetail')}}"  class="btn btn-primary pull-right" style="margin-top: 10px;
    margin-right: 10px;">Back</a>
                    <h4 class="text-black1"><i class="fa fa-file-image-o" style="margin: 4px;

    padding-right: 8px;"></i>UPDATE REGISTERED WORKER DETAILS AND DOCUMENTS</h4>

                    @include('layouts.admin.partials.flash-message')


                    <form  role="form" method="post" enctype="multipart/form-data" action="{{url('storeworkerdetail')}}" id="worker_detail">
                        {{csrf_field()}}
                        {{-----------------------------------------------------------------------------------------------------------}}
                        <h2>WORKER DETAILS</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="input-file-max-fs">SELECT CATEGORY</label>
                                <select class="form-control" id="categoryid" name="category_id">
                                    <option disabled selected>{{$showworkerdetails->category_name}}</option>
                                    @foreach($category as $get)
                                        <option id="categoryid" value="{{$get->id}}">{{$get->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <input type="text" name="workdetailid" id="workdetailid" value="{{$showworkerdetails->workdetailid}}">

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Firstname</label>
                                <input type="text" name="first_name" class="form-control" id="firstname" value="{{$showworkerdetails->fname}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="lastname" value="{{$showworkerdetails->lname}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Email</label>
                                <input type="email" name="email" class="form-control" id="email"  value="{{$showworkerdetails->email}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone"  value="{{$showworkerdetails->phone}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Phone2</label>
                                <input type="text" name="phone2" class="form-control" id="phone2"  value="{{$showworkerdetails->phone2}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Register Date</label>
                                <input type="datetime-local" name="registerdate" class="form-control" id="register_date"  value="{{date('Y-m-d h:i:s', strtotime($showworkerdetails->register_date))}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Full Address</label>
                                <textarea name="fulladdress" class="form-control" id="full_address" value="{{$showworkerdetails->full_address}}" >{{$showworkerdetails->full_address}}</textarea>
                            </div>

                            <div id="locationField" class="col-md-4">
                                <label for="input-file-max-fs">LOCATION ENTER</label>
                                <input name="location" id="autocomplete" class="form-control" placeholder="Enter your address" type="text" value="{{$showworkerdetails->location}}" >
                            </div>

                            <div  class="col-md-4">
                                <label for="input-file-max-fs">CITY</label>
                                <input name="city" type="text" class="form-control field" id="locality" value="{{$showworkerdetails->city}}" >
                            </div>


                            <div class="col-md-4">
                                <label for="input-file-max-fs">STATE</label>
                                <input name="state" type="text" class="form-control field" id="administrative_area_level_1" value="{{$showworkerdetails->state}}" >
                            </div>




                            <div  class="col-md-4">
                                <label for="input-file-max-fs">PINCODE</label>
                                <input name="pincode" type="text" class="form-control field" id="postal_code" value="{{$showworkerdetails->pincode}}" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">COUNTRY</label>
                                <input name="country" type="text" class="form-control field" id="country" value="{{$showworkerdetails->country}}" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">latitude</label>
                                <input name="latitude" type="text" class="form-control field" id="latitude" value="{{$showworkerdetails->latitude}}" >
                            </div>


                            <div  class="col-md-4">
                                <label for="input-file-max-fs">lloungitude</label>
                                <input name="loungnitude" type="text" class=" form-control field" id="longitude" value="{{$showworkerdetails->loungnitude}}">
                            </div>

                        </div>













                        {{-----------------------------------------------------------------------------------------------------------}}
                        <h2>REFERENCE DETAILS</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="input-file-max-fs">Reference Name</label>
                                <input type="text" name="referencename" class="form-control" id="reference_name" value="{{$showworkerdetails->reference_name}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Reference Phone</label>
                                <input type="text" name="referencephone" class="form-control" id="reference_phone" value="{{$showworkerdetails->reference_phone}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Reference Fulladdress</label>
                                <textarea  name="referenceaddress" class="form-control" id="reference_address" value="{{$showworkerdetails->reference_address}}">{{$showworkerdetails->reference_address}}</textarea>
                            </div>
                        </div>
                        {{-----------------------------------------------------------------------------------------------------------}}
                        <h2>WORKER DOCUMENTS</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="input-file-max-fs">AADHAR FRONT</label>
                                <?php
                                 $aadhar = env('image_path2')
                                ?>
                                <img src= "<?php echo $aadhar?>{{$showworkerdetails->aadhar_frount}}" style="width: 150px;height: 100px;" />
                                <input type="file" name="aadharfront" class="form-control" value="{{$showworkerdetails->aadhar_frount}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">AADHAR BACK</label>
                                <img src= "<?php echo $aadhar?>{{$showworkerdetails->aadhar_back}}" style="width: 150px;height: 100px;" />
                                <input type="file" name="aadharback" class="form-control" value="{{$showworkerdetails->aadhar_back}}">
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">profileimg</label>
                                <img src= "<?php echo $aadhar?>{{$showworkerdetails->workerprofileimage}}" style="width: 100px;height: 100px;" />
                                <input type="file" name="aadharback" class="form-control" value="{{$showworkerdetails->workerprofileimage}}">
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
                                    <option disabled selected>{{$showworkerdetails->worker_charge}}</option>
                                    <option value="perhour">PER HOUR</option>
                                    <option value="oneday">ONE DAY</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">PRICE</label>
                                <input type="text" name="price" class="form-control" value="{{$showworkerdetails->price}}" >
                            </div>

                            <div class="col-md-4">
                                <label for="input-file-max-fs">Designation Full Details</label>
                                <textarea  name="desiginationdetails" class="form-control" value="{{$showworkerdetails->desiginationdetails}}">{{$showworkerdetails->desiginationdetails}}</textarea>
                            </div>
                        </div>
                        {{-----------------------------------------------------------------------------------------------------------}}






                        <div class="col-md-12" style="text-align:center"><br>
                            <input type="submit" class="btn btn-success" name="save" value="UPDATE"><br>
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

