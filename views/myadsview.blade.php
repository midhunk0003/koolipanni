
@extends('layouts.stylefiles.app')

@section('content')

    <style>
        .emptymyads{
            width: 100px;
            height: 100px;
            background: #2d3748;
            margin-top: 82px;
            margin-bottom: 82px;
            height: 220px;
            text-align: center;
            padding-top: 85px;
        }
        .myads{
            background: #c4c4c4;
            margin-top: 82px;
            margin-bottom: 82px;
            height: 113px;
            padding-top: 84px;
        }
        .images{
            background: white;
            width: 12px;
            height: 103px;
            margin-top: -79px;
            margin-left: 4px;
            padding: 26px;
        }
        .rowmyadssmall{
            margin-right: -100px!important;
        }
        .image{
            height: 98px;
            /*background: thistle;*/
            margin-top: -23px;
            margin-left: -12px;
        }
        .editremove{
            border: 1px solid black;
            color: black;
            padding: 6px;
            margin-left: 5px;
        }
        .statusads{
            background: green;
            padding: inherit;
            color: aliceblue!important;
        }
        .postnow{
            border: 1px solid black;
            color: black;
            padding: inherit;
        }
        @media screen and (max-width: 600px) {
            .myads {
                background: #c4c4c4;
                margin-top: 19px;
                margin-bottom: 34px;
                height: 318px;
                padding-top: 84px;
           }
            .rowmyadssmall{
                margin-right: -15px!important
            }
            .images{
                display: none;
            }
            .responscssimages{
                background: white;
                width: 12px;
                height: 46px;
                margin-top: -78px;
                /* margin: 4px; */
                margin-right: 6px;
                margin-left: 4px;
                display: block;
                padding: inherit;
            }
            .responscssimages2{
                display: block;
                margin-top: -28px;
                margin-right: 6px;
                height: 202px;
            }
            .responscssimages3{
                display: block;
                margin-left: 4px;
                margin-top: -1px;
                margin-right: 6px;
                height: 1px;
            }
        }

    </style>
<?php
$workdetailcount = count($workdetailcount);
?>
    @if(empty($workdetailcount))
<div class="container emptymyads">
    empty ads
</div>
    @elseif(!empty($workdetailcount))
@foreach($viewads as $show)
<div class="container myads">
    <div class="row rowmyadssmall">
        <div class="col-md-2 col-sm-5 images responscssimages">
          <strong>FROM : &nbsp;<small>{{date('d-m-Y',strtotime($show->register_date))}}</small></strong><br>
          <strong> TO : &nbsp;<small>{{date('d-m-Y',strtotime($show->todateandtime))}}</small></strong><br>
            <strong>AD ID : <small>{{$show->register_enroll_id}}</small></strong><br>
        </div>
        <div class="col-md-7 images responscssimages2">
          <div class="container smallimg">
              <div class="row">
                  <div class="col-md-2 image" style="display: flex;
                             justify-content: center;
                             align-items: center;
                             overflow: hidden">
                      @if($show->workerprofileimage == !null)
                      <?php
                      $workerprofileimg = env('image_path2');
                      ?>
                      <img src="<?php echo $workerprofileimg ?>{{$show->workerprofileimage}}" width="100%" height="100%">
                      @else
                          <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=">
                      @endif
                  </div>
                  <div class="col-md-5">
                   <strong>{{$show->category_name}}</strong><br>
                      <i class="fa fa-eye" aria-hidden="true">&nbsp View : {{$show->viewsandlikes}}</i><br>
                      <i class="fa fa-heart-o" aria-hidden="true">&nbsp;like :{{$show->like}}</i>
                  </div>
                  <?php
                    $ststusads = $show->status
                  ?>
                  @if($ststusads == 1)
                      <div class="col-md-5">
                          <a class="statusads">ACTIVE</a>
                          {{--                      <a href="" class="postnow">POST NOW</a><br>--}}
                          <label>This ad is live</label>
                      </div>
                  @elseif($ststusads == 2)
                      <div class="col-md-5">
                          <a class="statusads">NOT POSTED</a>
                          <a href="" class="postnow">POST NOW</a><br>
                          <label>Waite 25 days to post for free or pay to post now</label>
                      </div>
                  @elseif($ststusads == 3)
                  <div class="col-md-5">
                      <a style="border:1px solid grey;color:black!important;background: red!important;" class="statusads">EXPIRED</a>
                      <a href="" class="postnow">POST NOW</a><br>
                      <label>re publish the post</label>
                  </div>
                  @elseif($ststusads == 0)
                      <div class="col-md-5">
                          <a style="border:1px solid grey;color:black!important;background: #E4A11B!important;" class="statusads">inactive</a>
                          {{--                            <a href="" class="postnow">POST NOW</a><br>--}}
                          <label>VERIFICATION UNDER PROCCESSING....</label>
                      </div>
                  @endif
              </div>
          </div>
        </div>
        <div class="col-md-2 images responscssimages3">
          <div class="row" style="margin-left: 6px;margin-top: -9px;">
              <div class="">
                  <a href="{{url('/editviewworkerdetail/'.$show->id)}}" class="editremove">edit</a>
              </div>
              <div class="">
                  <a href="{{url('/removemyad/'.$show->id)}}" class="editremove">remove</a>
              </div><br><br>
              <a href="" class="editremove">VIEW AD</a>
          </div>
        </div>
    </div>
</div>
@endforeach


{{--<div class="container myads">--}}
{{--    <div class="row rowmyadssmall">--}}
{{--        <div class="col-md-2 col-sm-5 images responscssimages">--}}
{{--            <strong>FROM : &nbsp;<small>11/12/2022</small></strong><br>--}}
{{--            <strong> TO : &nbsp;<small>11/12/2022</small></strong><br>--}}
{{--        </div>--}}
{{--        <div class="col-md-7 images responscssimages2">--}}
{{--            <div class="container smallimg">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 image" style="display: flex;--}}
{{--                             justify-content: center;--}}
{{--                             align-items: center;--}}
{{--                             overflow: hidden">--}}
{{--                        <img src="https://www.shutterstock.com/image-photo/carpenter-cutting-house-roof-supports-260nw-303640922.jpg" width="100%" height="100%">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-5">--}}
{{--                        <strong>DOOR AND WINDOWS</strong><br>--}}
{{--                        <i class="fa fa-eye" aria-hidden="true">&nbsp;views : 0</i><br>--}}
{{--                        <i class="fa fa-heart-o" aria-hidden="true">&nbsp;like : 0</i>--}}
{{--                    </div>--}}
{{--                    <?php--}}
{{--                    $ststusads = 2--}}
{{--                    ?>--}}
{{--                    @if($ststusads == 1)--}}
{{--                        <div class="col-md-5">--}}
{{--                            <a class="statusads">NOT POSTED</a>--}}
{{--                            <a href="" class="postnow">POST NOW</a><br>--}}
{{--                            <label>Waite 25 days to post for free or pay to post now</label>--}}
{{--                        </div>--}}
{{--                    @elseif($ststusads == 2)--}}
{{--                        <div class="col-md-5">--}}
{{--                            <a class="statusads">ACTIVE</a>--}}
{{--                            --}}{{--                      <a href="" class="postnow">POST NOW</a><br>--}}
{{--                            <label>This ad is live</label>--}}
{{--                        </div>--}}
{{--                    @elseif($ststusads == 3)--}}
{{--                        <div class="col-md-5">--}}
{{--                            <a class="statusads">EXPIRED</a>--}}
{{--                            <a href="" class="postnow">POST NOW</a><br>--}}
{{--                            <label>re publish the post</label>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-2 images responscssimages3">--}}
{{--            <div class="row" style="margin-left: 6px;margin-top: -9px;">--}}
{{--                <div class="">--}}
{{--                    <a href="" class="editremove">edit</a>--}}
{{--                </div>--}}
{{--                <div class="">--}}
{{--                    <a href="" class="editremove">remove</a>--}}
{{--                </div><br><br>--}}
{{--                <a href="" class="editremove">VIEW AD</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="container myads">--}}
{{--    <div class="row rowmyadssmall">--}}
{{--        <div class="col-md-2 col-sm-5 images responscssimages">--}}
{{--            <strong>FROM : &nbsp;<small>11/12/2022</small></strong><br>--}}
{{--            <strong> TO : &nbsp;<small>11/12/2022</small></strong><br>--}}
{{--        </div>--}}
{{--        <div class="col-md-7 images responscssimages2">--}}
{{--            <div class="container smallimg">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 image" style="display: flex;--}}
{{--                             justify-content: center;--}}
{{--                             align-items: center;--}}
{{--                             overflow: hidden">--}}
{{--                        <img src="https://www.shutterstock.com/image-photo/carpenter-cutting-house-roof-supports-260nw-303640922.jpg" width="100%" height="100%">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-5">--}}
{{--                        <strong>DOOR AND WINDOWS</strong><br>--}}
{{--                        <i class="fa fa-eye" aria-hidden="true">&nbsp;views : 0</i><br>--}}
{{--                        <i class="fa fa-heart-o" aria-hidden="true">&nbsp;like : 0</i>--}}
{{--                    </div>--}}
{{--                    <?php--}}
{{--                    $ststusads = 3--}}
{{--                    ?>--}}
{{--                    @if($ststusads == 1)--}}
{{--                        <div class="col-md-5">--}}
{{--                            <a class="statusads">NOT POSTED</a>--}}
{{--                            <a href="" class="postnow">POST NOW</a><br>--}}
{{--                            <label>Waite 25 days to post for free or pay to post now</label>--}}
{{--                        </div>--}}
{{--                    @elseif($ststusads == 2)--}}
{{--                        <div class="col-md-5">--}}
{{--                            <a class="statusads">ACTIVE</a>--}}
{{--                            --}}{{--                      <a href="" class="postnow">POST NOW</a><br>--}}
{{--                            <label>This ad is live</label>--}}
{{--                        </div>--}}
{{--                    @elseif($ststusads == 3)--}}
{{--                        <div class="col-md-5">--}}
{{--                            <a class="statusads">EXPIRED</a>--}}
{{--                            <a href="" class="postnow">POST NOW</a><br>--}}
{{--                            <label>re publish the post</label>--}}
{{--                        </div>--}}
{{--                    @elseif($ststusads == 4)--}}
{{--                        <div class="col-md-5">--}}
{{--                            <a style="background: darkred!important;" class="statusads">not active</a>--}}
{{--                            <a href="" class="postnow">POST NOW</a><br>--}}
{{--                            <label>re publish the post</label>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-2 images responscssimages3">--}}
{{--            <div class="row" style="margin-left: 6px;margin-top: -9px;">--}}
{{--                <div class="">--}}
{{--                    <a href="" class="editremove">edit</a>--}}
{{--                </div>--}}
{{--                <div class="">--}}
{{--                    <a href="" class="editremove">remove</a>--}}
{{--                </div><br><br>--}}
{{--                <a href="" class="editremove">VIEW AD</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
    @endif
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
@endpush
