
@extends('layouts.stylefiles.app')

@section('content')
{{--    <meta name="color-scheme" content="light">--}}
{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
{{--<link href="load-more-button.css" rel="stylesheet">--}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
{{--    <select id="theme" onchange="switchTheme()">--}}
{{--        <option value="light">light</option>--}}
{{--        <option value="dark">Dark</option>--}}
{{--    </select>--}}
{{------------------advatisment banner---------------------news-slider2}}--}}
        <div class="container advsbanner">
            <div class="row">
                <div class="col-lg-6" style="background: white;">
                    <div class="contentbanner aspect-ratio aspect-ratio-1-1 img-frame">
                        <img src="https://lineardesign.com/wp-content/uploads/2019/12/Amazon-Banner-Ad-Example-1-1.jpg" class="fit-img" alt="sample">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contentbanner aspect-ratio aspect-ratio-1-1 img-frame">
                        <img src="https://lineardesign.com/wp-content/uploads/2019/12/Amazon-Banner-Ad-Example-1-1.jpg" class="fit-img" alt="sample">
                    </div>
                </div>
            </div>
        </div>
{{------------------advatisment banner end first---------------------}}



{{-------------------------------------all product section-----------------------------------}}
        <section style="min-height: 0vh">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 sidemenu" style="background: #ffff;padding-top: 13px;margin-bottom: 13px;">
                        <h4 style="font-size: larger;font-weight: 700;text-align: center">SERVICES</h4><hr>
                        @foreach($categortpagina as $show)
                        <ul>
                            <li>
                                <a href="{{url('/categoryworker/'.$show->id)}}">
                                    <?php
                                            $imagesicon = env('image_path')
                                    ?>
                                    <img src="<?php echo $imagesicon?>{{$show->category_image}}" id="editimage"/>
                                    {{$show->category_name}}
                                </a>
                            </li>
                        </ul>
                        @endforeach
                        <div class="container" style="padding-left: 0px!important;padding-right:0px!important;width: 250px;height: 150px;background-color: #1a202c">
                            <img style="width: 100%;height: 100%;" src="https://images-platform.99static.com/YXm2NIBbuPi2pLueEbiuzsewRJ8=/18x14:1504x1500/500x500/top/smart/99designs-contests-attachments/75/75603/attachment_75603340">
                        </div>
                    </div>
          <div class="col-lg-9">
        <div class="container"  style="margin-bottom: 13px;background: #ffffff;">

             {{-- ////////////banner slider main--}}
{{--            <div class="carousel-slider">--}}
{{--                <input type="radio" name="control" id="slide1" checked>--}}
{{--                <input type="radio" name="control" id="slide2">--}}
{{--                <input type="radio" name="control" id="slide3">--}}
{{--                <input type="radio" name="control" id="slide4">--}}

{{--                <div class="slider-nav-prev">--}}
{{--                    <label for="slide1" class="prev prev-1"></label>--}}
{{--                    <label for="slide2" class="prev prev-2"></label>--}}
{{--                    <label for="slide3" class="prev prev-3"></label>--}}
{{--                    <label for="slide4" class="prev prev-4"></label>--}}
{{--                </div>--}}

{{--                <div class="slider-nav-next">--}}
{{--                    <label for="slide1" class="next next-1"></label>--}}
{{--                    <label for="slide2" class="next next-2"></label>--}}
{{--                    <label for="slide3" class="next next-3"></label>--}}
{{--                    <label for="slide4" class="next next-4"></label>--}}
{{--                </div>--}}

{{--                <div class="slider-nav-number">--}}
{{--                    <label for="slide1" class="slide-nav-1">1</label>--}}
{{--                    <label for="slide2" class="slide-nav-2">2</label>--}}
{{--                    <label for="slide3" class="slide-nav-3">3</label>--}}
{{--                    <label for="slide4" class="slide-nav-4">4</label>--}}
{{--                </div>--}}

{{--                <div class="slides">--}}
{{--                    <div id="slide-1" class="slide">--}}
{{--                   <img src="https://teja8.kuikr.com/QuikrServices/hp-assets-desktop/10001_Banner_1/3.jpeg" width="100%">--}}
{{--                    </div>--}}
{{--                    <div id="slide-2" class="slide">--}}
{{--                      <img src="https://teja8.kuikr.com/QuikrServices/hp-assets-desktop/10001_Banner_1/2.jpeg" width="100%">--}}
{{--                    </div>--}}
{{--                    <div id="slide-3" class="slide">--}}
{{--                      <img src="https://teja8.kuikr.com/QuikrServices/hp-assets-desktop/10001_Banner_1/4.jpeg" width="100%">--}}
{{--                    </div>--}}
{{--                    <div id="slide-4" class="slide">--}}
{{--                     <img src="https://teja8.kuikr.com/QuikrServices/hp-assets-desktop/10001_Banner_1/3.jpeg" width="100%">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
                 <style>
                     .carousel-item {
                         height: 40vh;
                         background-repeat: no-repeat;
                         background-position: center center;
                         background-size: cover;
                     }
                     .carousel-inner{
                         border-radius: 11px;
                         margin-bottom: 60px;
                         top: 12px;
                     }

                 </style>
             <!-- Slider -->
                 <section class="slider-section">
                     <div id="carousel" class="carousel slide" data-ride="carousel">
                         <!-- Indicators -->
                         <ol class="carousel-indicators">
                             <li data-target="#carousel" data-slide-to="0" class="active"></li>
                             <li data-target="#carousel" data-slide-to="1"></li>
                             <li data-target="#carousel" data-slide-to="2"></li>
                         </ol> <!-- End of Indicators -->

                         <!-- Carousel Content -->
                         <div class="carousel-inner" role="listbox">
                             <div class="carousel-item active" style="background-image: url('https://teja8.kuikr.com/QuikrServices/hp-assets-desktop/10001_Banner_1/3.jpeg');">
                                 <div class="carousel-caption d-none d-md-block">
                                     <h3>Amazon Forest</h3>
                                     <p>Cool description for Amazon Forest.</p>
                                 </div>
                             </div> <!-- End of Carousel Item -->

                             <div class="carousel-item" style="background-image: url('https://teja8.kuikr.com/QuikrServices/hp-assets-desktop/10001_Banner_1/2.jpeg');">
                                 <div class="carousel-caption d-none d-md-block">
                                     <h3>Bridge Picture</h3>
                                     <p>Awesome description for bridge.</p>
                                 </div>
                             </div> <!-- End of Carousel Item -->

                             <div class="carousel-item" style="background-image: url('https://teja8.kuikr.com/QuikrServices/hp-assets-desktop/10001_Banner_1/4.jpeg');">
                                 <div class="carousel-caption d-none d-md-block">
                                     <h3>Flowers & Grass</h3>
                                     <p>Beauty of Flowers & Grass.</p>
                                 </div>
                             </div> <!-- End of Carousel Item -->
                         </div> <!-- End of Carousel Content -->

                         <!-- Previous & Next -->
                         <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="sr-only"></span>
                         </a>
                         <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="sr-only"></span>
                         </a>
                     </div> <!-- End of Carousel -->
                 </section> <!-- End of Slider -->
            {{--///////////banner slider owl main end--}}
            <style>
                .homepageworker{
                    border: 1px solid;
                    height: 350px;
                    width: 100%;
                    margin: 3px;
                    background: #f9f9f9;
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                }
                .imagecontainer{
                    border: 1px solid;
                    margin: 2px;
                    height: 107px;
                    text-align: center;
                }
                .imagecontainer img{
                    height: 100%;
                    object-fit: cover;
                }
                .card-title ul li {
                    display: inline-block!important;
                    font-size: 10px!important;
                }
                .allinnercontent{
                    margin: 10px;
                }
                .viewmorebutton{
                    border: 1px solid;
                    color: black;
                    padding: 4px;
                    text-align: center;
                }
                .viewmorebutton:hover{
                    background: black;
                    color: #FFFFFF;
                }
                .loadmorecss{
                    color: black;
                    border: 1px solid;
                    padding: 8px;
                    width: 216px;
                    text-align: center;
                }
                .loadmorecss:hover{
                    background: black;
                    color: #FFFFFF;
                }
            </style>
            {{--///////////owl carousel 2 box --}}

            <style>
                .product-wish{
                    position: absolute;
                    top: 40%;
                    left: 0;
                    z-index: 99;
                    right: 30px;
                    text-align: right;
                    padding-top: 0;
                }
                .product-wish .fa{
                    color: black;
                    font-size: 32px;

                }
                .product-wish .fa:hover{
                    color: orange;

                }
            </style>
{{--            //////////// workers containers--}}
            <div class="container">
                <div class="row">
                    @if(isset($searchcount) == 0)
                   @foreach($workerdetails as $show)
                            <div class="col-lg-4 blogBox moreBox">
                                <input type="hidden" id="categorryid" name="catid" value="{{$show->catid}}">
                                <div class="homepageworker">
                                    <div class="imagecontainer">
                                    @if($show->workerprofileimage == !null)
                                        <?php
                                         $workerprofileimg = env('image_path2');
                                        ?>
                                        <img src="<?php echo $workerprofileimg ?>{{$show->workerprofileimage}}">
                                        @else
                                            <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=">
                                       @endif
                                    </div>
                                    <div class="allinnercontent">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h5>{{$show->fname}}</h5>
                                            </div>
                                            <div class="product-wish">
                                                @if(\Illuminate\Support\Facades\Auth::check())
                                                    @if(!empty($show->wishlist))
                                                        <a href="{{url('/removewishlist/'.$show->wishlist->id)}}"><i class="fa fa-heart"></i></a>
                                                    @else
                                                        <a href="{{url('/insertwishlist')}}" data-workerid="{{$show->workerdetid}}" class="insertwishlist" ><i class="fa fa-heart-o"></i></a>
                                                    @endif
                                                @else
                                                    <a href="{{url('/loginview')}}"><i class="fa fa-heart-o"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        <?php

                                        ?>

                                        <div class="card-title">
                                            @if($show->commentsandratings['avgrating'] == null)
                                            <ul style="margin: 0%;padding: 0%">
                                                <li><i  class="fa fa-star"></i></li>
                                                <li><i  class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i  class="fa fa-star"></i></li>
                                                <li>(0)</li>
                                            </ul>
                                            @else
                                                <?php
                                               $average =  $show->commentsandratings['avgrating']
                                                ?>
                                                <ul style="margin: 0%;padding: 0%">
                                                    <li><i  @if($average<1) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li><i   @if($average<2) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li><i   @if($average<3) class="fa fa-star"  @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li><i   @if($average<4) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li><i  @if($average<5) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li>({{number_format((float)$average,1,'.','')}})</li>
                                                </ul>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p style="font-size: 13px;">{{$show->category_name}}</p>
                                                <h5 style="font-size: 13px;">{{$show->location}}</h5>
                                            </div>
                                            <div class="col-lg-2">
                                                <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                            </div>
                                        </div>
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            <a  href="{{url('/workerdetailpage/'.$show->workerdetid)}}}}">
                                                <div data-workerid="{{$show->workerdetid}}" class="viewmorebutton insertcount" >
                                                    VIEW MORE
                                                </div>
                                            </a>
                                        @else
                                            <a  href="{{url('/loginview')}}">
                                                <div class="viewmorebutton">
                                                    VIEW MORE
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach($search as $show)
                            <div class="col-lg-4 blogBox moreBox">
                                <input type="hidden" id="categorryid" name="catid" value="{{$show->catid}}">
                                <div class="homepageworker">
                                    <div class="imagecontainer">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYPpTW06APyAK1iikTL8QX0fwgxUO1oo1QvA&usqp=CAU">
                                    </div>
                                    <div class="allinnercontent">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h5>{{$show->fname}}</h5>
                                            </div>
                                            <div class="product-wish">
                                                @if(\Illuminate\Support\Facades\Auth::check())
                                                    @if(!empty($show->wishlist))
                                                        <a href="{{url('/removewishlist/'.$show->wishlist->id)}}"><i class="fa fa-heart"></i></a>
                                                    @else
                                                        <a href="{{url('/insertwishlist')}}" data-workerid="{{$show->workerdetid}}" class="insertwishlist" ><i class="fa fa-heart-o"></i></a>
                                                    @endif
                                                @else
                                                    <a href="{{url('/loginview')}}"><i class="fa fa-heart-o"></i></a>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="card-title">
                                            @if($show->commentsandratings['avgrating'] == null)
                                                <ul style="margin: 0%;padding: 0%">
                                                    <li><i  class="fa fa-star"></i></li>
                                                    <li><i  class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i  class="fa fa-star"></i></li>
                                                    <li>(0)</li>
                                                </ul>
                                            @else
                                                <?php
                                                $average =  $show->commentsandratings['avgrating']
                                                ?>
                                                <ul style="margin: 0%;padding: 0%">
                                                    <li><i  @if($average<1) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li><i   @if($average<2) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li><i   @if($average<3) class="fa fa-star"  @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li><i   @if($average<4) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li><i  @if($average<5) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                    <li>({{number_format((float)$average,1,'.','')}})</li>
                                                </ul>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p style="font-size: 13px;">{{$show->category_name}}</p>
                                                <h5 style="font-size: 13px;">{{$show->location}}</h5>
                                            </div>
                                            <div class="col-lg-2">
                                                <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                            </div>
                                        </div>
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            <a  href="{{url('/workerdetailpage/'.$show->workerdetid)}}}}">
                                                <a data-workerid="{{$show->workerdetid}}" class="viewmorebutton  insertcount" onclick=" insertrecent(); ">
                                                    VIEW MORE
                                                </a>
                                            </a>
                                        @else
                                            <a  href="{{url('/loginview')}}">
                                                <div class="viewmorebutton">
                                                    VIEW MORE
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <a href="" style="margin: auto;margin-top: 28px;">
                    <div  id="loadMore" class="loadmorecss">
                       Load More
                    </div>
                    </a>
                </div>
            </div>
            {{--            //////////// workers containers--}}


{{------------------advatism ent banner second ---------------------}}
                <div class="container advsbanner" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contentbanner aspect-ratio aspect-ratio-1-1 img-frame">
                                <img src="https://lineardesign.com/wp-content/uploads/2019/12/Amazon-Banner-Ad-Example-1-1.jpg" class="fit-img" alt="sample">
                            </div>
                        </div>
                    </div>
                </div>
{{------------------advatisment banner end second end---------------------}}
            </div>
        </div>
      </div>
   </div>
{{-------------------------------------all product section end-----------------------------------}}



{{----------------------last owlcarousel slider-----------------}}
            @if(\Illuminate\Support\Facades\Auth::check())
            @if(count($workerdetailsrecentviews) > 0)
            <div class="container">
                <h1 style="text-align: center;border-bottom:1px solid black">Recent Views</h1>
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider5" class="owl-carousel">
                        @foreach($workerdetailsrecentviews as $show)
                        <div class="post-slide">
                            <div class="homepageworker">
                                <div class="imagecontainer">
                                    @if($show->workerprofileimage == !null)
                                        <?php
                                        $workerprofileimg = env('image_path2');
                                        ?>
                                        <img src="<?php echo $workerprofileimg ?>{{$show->workerprofileimage}}">
                                    @else
                                        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=">
                                    @endif
                                </div>
                                <div class="allinnercontent">
                                    <h5>{{$show->fname}}</h5>

                                    <div class="card-title">
                                        @if($show->commentsandratings['avgrating'] == null)
                                            <ul style="margin: 0%;padding: 0%">
                                                <li><i  class="fa fa-star"></i></li>
                                                <li><i  class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i  class="fa fa-star"></i></li>
                                                <li>(0)</li>
                                            </ul>
                                        @else
                                            <?php
                                            $average =  $show->commentsandratings['avgrating']
                                            ?>
                                            <ul style="margin: 0%;padding: 0%">
                                                <li><i  @if($average<1) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                <li><i   @if($average<2) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                <li><i   @if($average<3) class="fa fa-star"  @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                <li><i   @if($average<4) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                <li><i  @if($average<5) class="fa fa-star" @else style="color: orange" class="fa fa-star"  @endif></i></li>
                                                <li>({{number_format((float)$average,1,'.','')}})</li>
                                            </ul>
                                        @endif
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p style="font-size: 13px;">{{$show->category_name}}</p>
                                            <h5 style="font-size: 13px;">{{$show->location}}</h5>
                                        </div>
                                        <div class="col-lg-2">
                                            <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                        </div>
                                    </div>
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <a  href="{{url('/workerdetailpage/'.$show->workerdetid)}}}}">
                                            <div data-workerid="{{$show->workerdetid}}" class="viewmorebutton insertcount" >
                                                VIEW MORE
                                            </div>
                                        </a>
                                    @else
                                        <a  href="{{url('/loginview')}}">
                                            <div class="viewmorebutton">
                                                VIEW MORE
                                            </div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
            @endif
            @endif
{{----------------------slider third end-----------------}}


{{-----------------second section ads and counter user-----------------}}
    {{------------------advatisment banner third ---------------------}}
    <div class="container advsbanner">
        <div class="contentbanner aspect-ratio aspect-ratio-1-1 img-frame">
          <img src="https://lineardesign.com/wp-content/uploads/2019/12/Amazon-Banner-Ad-Example-1-1.jpg" class="fit-img" alt="sample" style="    width: 100%;">
       </div>
    </div>
    {{------------------advatisment banner end second end---------------------}}
        </section>
@endsection

@push('scripts')
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--    <script src="load-more-button.js"></script>--}}
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/bootstrap@4.0.0"></script>
{{--        ------------------carousel first one banner slider--------------------}}


        <script>

            function insertrecent() {
                alert('ok');
            }


            $(document).ready(function(){
                ////////////wishlist submit////////////
                $('.insertwishlist').on("click", function (evt) {
                    evt.preventDefault();
                    var workerid = $(this).data('workerid');
                    var categoryid = $("#categorryid").val();
                    var data = {
                        categoryid: categoryid,
                        workerid: workerid,
                    };

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "/insertwishlist",
                        type: "POST",
                        data: data,
                        success: function (response)
                        {
                            console.log(response);
                            window.location.reload();
                        }
                    });
                });
                ////////////wishlist submit////////////

                ////////////insertcount and  recent view////////////// submit////////////
                $('.insertcount').on("click", function (evt) {
                    evt.preventDefault();
                    var workerid = $(this).data('workerid');
                    var categoryid = $("#categorryid").val();
                    var data = {
                        categoryid: categoryid,
                        workerid: workerid,
                    };

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "/insertviewcount",
                        type: "POST",
                        data: data,
                        success: function (response)
                        {
                            alert('count');
                            console.log(response);
                            window.location.href = "/workerdetailpage/"+workerid;
                        }
                    });
                });
                ////////////insertcount submit////////////




                $(".moreBox").slice(0, 9).show();
                if ($(".blogBox:hidden").length != 0) {
                    $("#loadMore").show();
                }
                $("#loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".moreBox:hidden").slice(0, 6).slideDown();
                    if ($(".moreBox:hidden").length == 0) {
                        $("#loadMore").fadeOut('slow');
                    }
                });

                $('#itemslider').carousel({ interval: 3000 });

                $('.carousel-showmanymoveone .item').each(function(){
                    var itemToClone = $(this);

                    for (var i=1;i<6;i++) {
                        itemToClone = itemToClone.next();

                        if (!itemToClone.length) {
                            itemToClone = $(this).siblings(':first');
                        }

                        itemToClone.children(':first-child').clone()
                            .addClass("cloneditem-"+(i))
                            .appendTo($(this));
                    }
                });
            });

        </script>
{{--        ------------------carousel first one banner slider--------------------}}

{{----------------------------------owl carousel--------------------}}
<script type="text/javascript">
    // function switchTheme(){
    //     // alert('ok');
    //     const theme = document.getElementById("theme").value;
    //     document.getElementsByTagName("meta")[0].content=theme;
    // }

    $(document).ready(function() {
        $("#news-slider2").owlCarousel({
            items : 3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
    $(document).ready(function() {
        $("#news-slider3").owlCarousel({
            items : 3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
    $(document).ready(function() {
        $("#news-slider4").owlCarousel({
            items : 3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
    $(document).ready(function() {
        $("#news-slider5").owlCarousel({
            items : 4,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
</script>
{{----------------------------------owl carousel--------------------}}
    @endpush
