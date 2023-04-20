
@extends('layouts.stylefiles.app')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">
    {{--   <--------------------style addbanner --------------->--}}
    <style>
        #bill-pay-ad {
            background: #3888E1;
            background: -webkit-linear-gradient(#3888E1, #307CD1);
            background: -o-linear-gradient(#3888E1, #307CD1);
            background: -moz-linear-gradient(#3888E1, #307CD1);
            background: linear-gradient(#3888E1, #307CD1);
            color: #FFF;

        }
        .glyphicon {
            padding: 15px 15px 0 0;
            float:right;
            font-size: 26px;
            color: #fff;
        }

        .bill-pay-ad-wrap {

            padding-top: 40px;
        }

        .bp-ad-content-wrap {
            top: -20px;
        }

        .bp-ad-title {

        }

        .bp-ad-content {
            margin-top: 20px;
        }

        //button
          .btn-bp-ad {
              padding: 10px 40px 10px 40px;
              font-size: 1.2em;
              margin-top: 15px;
              color: #3176C5; /* @brand-primary ? */
          }

        //image
          #bp-img-container {
              height: 270px;
        img {
            height: 100%;
            width: 100%;
            z-index: 1;
            position: relative;
            vertical-align: bottom;
        }
        }
        }

        .reset-wrap{
            text-align: center;
        }

        #reset {
            display: block;
            padding: 30px;
        }


        {{--       --------------------sliderbar------------------------}}

             #check{
            display: none;
        }

        .labelsidebar #btn{
            position: absolute;
            z-index: 1;
            cursor: pointer;
            left: 40px;
            top: 6px;
            font-size: 35px;
            border-radius: 3px;
            padding: 3px 12px;
            background: #ffffff;

        }
        @media(max-width:880px) {
            .labelsidebar #btn{
                position: absolute;
                z-index: 1;
                cursor: pointer;
                left: 40px;
                top: 80px;
                font-size: 35px;
                border-radius: 3px;
                padding: 6px 12px;
                background: #ffffff ;
                transition: all .5s;

            }
        }
        .labelsidebar #cancel{
            position: fixed;
            cursor: pointer;
            border-radius: 3px;
            padding: 4px 3px;
            background: #e0e0e0;
            color: #000000;
            z-index: 1111;
            left: -195px;
            top: 16px;
            font-size: 30px;
        }

        #check:checked ~ .sidebarslider{
            left: 0px!important;
        }

        #check:checked ~ .labelsidebar #btn{
            left: 250px;
            opacity: 0;
            pointer-events: none;
        }

        #check:checked ~ .labelsidebar #cancel{
            left: 186px;

        }

        #check:checked ~ section{
            margin-left: 250px!important;
        }
        .sidebarslider{
            overflow: auto;
            position: fixed;
            top: 0px;
            z-index: 1;
            left: -250px;
            width: 250px;
            height: 100%;
            background: #ebebeb;
        }
        .sidebarslider header{
            font-size: 17px;
            color: #5a5555;
            font-weight: 400;
            text-align: center;
            line-height: 70px;
            background: #d8dcdd;
            user-select: none;
        }
        .sidebarslider header img{

            width: 60px;
            height: 58px;
            border-radius: 40px;
            margin-left: -37px;
        }
        .sidebarslider ul a{
            display: block;
            color: #474141;
            /*height: 100%;*/
            width: 100%;
            line-height: 42px!important;
            padding-left: 40px;
            box-sizing: border-box;
            /*border-top: 1px solid rgba(255,255,255,.1);*/
            /*border-bottom: 1px solid black;*/
        }
        .sidebarslider ul li:hover a{
            padding-left: 50px;
            background: #d7d7d7;
            border-left: 5px solid red!important;

        }
        .sidebarslider ul a img{
            margin-right: 16px;
            width: 30px;
        }
        .sidebarslider ul a i{
            margin-right: 16px;
            width: 30px;
        }


        {{-----------------second section-----------------}}
                 #slider-text{
            padding-top: 40px;
            display: block;
        }
        #slider-text .col-md-6{
            overflow: hidden;
        }

        #slider-text h2 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 30px;
            letter-spacing: 3px;
            margin: 30px auto;
            padding-left: 40px;
        }
        #slider-text h2::after{
            border-top: 2px solid #c7c7c7;
            content: "";
            position: absolute;
            bottom: 35px;
            width: 100%;
        }

        #itemslider h4{
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 12px;
            margin: 10px auto 3px;
        }
        #itemslider h5{
            font-family: 'Josefin Sans', sans-serif;
            font-weight: bold;
            font-size: 12px;
            margin: 3px auto 2px;
        }
        #itemslider h6{
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 300;;
            font-size: 10px;
            margin: 2px auto 5px;
        }
        .badge {
            background: #b20c0c;
            position: absolute;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            line-height: 31px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 300;
            font-size: 14px;
            border: 2px solid #FFF;
            box-shadow: 0 0 0 1px #b20c0c;
            top: 5px;
            right: 25%;
        }
        #slider-control img{
            padding-top: 204%;
            margin: 0 auto;
        }
        @media screen and (max-width: 992px){
            #slider-control img {
                padding-top: 70px;
                margin: 0 auto;
            }
        }

        .carousel-showmanymoveone .carousel-control {
            width: 4%;
            background-image: none;
        }
        .carousel-showmanymoveone .carousel-control.left {
            margin-left: 5px;
        }
        .carousel-showmanymoveone .carousel-control.right {
            margin-right: 5px;
        }
        .carousel-showmanymoveone .cloneditem-1,
        .carousel-showmanymoveone .cloneditem-2,
        .carousel-showmanymoveone .cloneditem-3,
        .carousel-showmanymoveone .cloneditem-4,
        .carousel-showmanymoveone .cloneditem-5 {
            display: none;
        }
        @media all and (min-width: 768px) {
            .carousel-showmanymoveone .carousel-inner > .active.left,
            .carousel-showmanymoveone .carousel-inner > .prev {
                left: -50%;
            }
            .carousel-showmanymoveone .carousel-inner > .active.right,
            .carousel-showmanymoveone .carousel-inner > .next {
                left: 50%;
            }
            .carousel-showmanymoveone .carousel-inner > .left,
            .carousel-showmanymoveone .carousel-inner > .prev.right,
            .carousel-showmanymoveone .carousel-inner > .active {
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
                display: block;
            }
        }
        @media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
            .carousel-showmanymoveone .carousel-inner > .item.active.right,
            .carousel-showmanymoveone .carousel-inner > .item.next {
                -webkit-transform: translate3d(50%, 0, 0);
                transform: translate3d(50%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner > .item.active.left,
            .carousel-showmanymoveone .carousel-inner > .item.prev {
                -webkit-transform: translate3d(-50%, 0, 0);
                transform: translate3d(-50%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner > .item.left,
            .carousel-showmanymoveone .carousel-inner > .item.prev.right,
            .carousel-showmanymoveone .carousel-inner > .item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
        }
        @media all and (min-width: 992px) {
            .carousel-showmanymoveone .carousel-inner > .active.left,
            .carousel-showmanymoveone .carousel-inner > .prev {
                left: -16.666%;
            }
            .carousel-showmanymoveone .carousel-inner > .active.right,
            .carousel-showmanymoveone .carousel-inner > .next {
                left: 16.666%;
            }
            .carousel-showmanymoveone .carousel-inner > .left,
            .carousel-showmanymoveone .carousel-inner > .prev.right,
            .carousel-showmanymoveone .carousel-inner > .active {
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner .cloneditem-2,
            .carousel-showmanymoveone .carousel-inner .cloneditem-3,
            .carousel-showmanymoveone .carousel-inner .cloneditem-4,
            .carousel-showmanymoveone .carousel-inner .cloneditem-5,
            .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
                display: block;
            }
        }
        @media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
            .carousel-showmanymoveone .carousel-inner > .item.active.right,
            .carousel-showmanymoveone .carousel-inner > .item.next {
                -webkit-transform: translate3d(16.666%, 0, 0);
                transform: translate3d(16.666%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner > .item.active.left,
            .carousel-showmanymoveone .carousel-inner > .item.prev {
                -webkit-transform: translate3d(-16.666%, 0, 0);
                transform: translate3d(-16.666%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner > .item.left,
            .carousel-showmanymoveone .carousel-inner > .item.prev.right,
            .carousel-showmanymoveone .carousel-inner > .item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
        }
        {{-----------------second section css end-----------------}}


        {{-------------------------------------all product section css-----------------------------------}}
                 .bordercss  {
            border: 2px solid!important;
        }
        .moreBox{
            display: none;
        }
        .loadMore{
            border: 1px solid;
            width: 100px;
            text-align: center;
            background-color: black;
            margin: auto;
            margin-bottom: 11px;

        }


        /*////videoslider*/


        /* start global style */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* start container style */
        .carousel-slider {
            position: relative;
            width: 100%;
            max-width: 970px;
            min-width: 350px;
            height: 200px;
            margin:24px 36px 85px auto;
        }

        /* start slides style */
        .carousel-slider > .slides {
            width: 100%;
            height: 100%;
            position: relative;
            overflow-x: hidden;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .carousel-slider > .slides > .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            transition: 0.5s linear;
            display: flex;
            align-items: center;
            justify-content: center;
            visibility: hidden;
        }

        .carousel-slider > .slides > .slide#slide-1 {
            background: #34495e;
        }

        .carousel-slider > .slides > .slide#slide-2 {
            background: #1abc9c;
        }

        .carousel-slider > .slides > .slide#slide-3 {
            background: #2ecc71;
        }

        .carousel-slider > .slides > .slide#slide-4 {
            background: #3498db;
        }

        /* start input style */
        .carousel-slider > input {
            display: none;
        }

        /* start slider nav style */
        .carousel-slider .slider-nav-number {
            position: absolute;
            width: 100%;
            bottom: -70px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1%;
            padding: 9px 50px;
            border: 1px solid #333;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            background-color: floralwhite;
        }

        .carousel-slider > .slider-nav-number > label {
            background-color: #7f8c8d;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            flex: 0 0 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            user-select: none;
        }

        .carousel-slider > .slider-nav-number > label:hover {
            color: #fff;
            background-color: black !important;
        }

        .carousel-slider > .slider-nav-prev > label {
            width: 50px;
            height: 50px;
            cursor: pointer;
            background-color: #7f8c8d;
            border-radius: 50%;
            position: absolute;
            left: 10px;
            top: calc(100% + 10px);
        }

        .carousel-slider > .slider-nav-prev > label::before {
            content: "";
            border: 10px solid transparent;
            border-right-color: #000;
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-slider > .slider-nav-next > label {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #7f8c8d;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: calc(100% + 10px);
        }

        .carousel-slider > .slider-nav-next > label::after {
            content: "";
            border: 10px solid transparent;
            border-left-color: #000;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-slider > .slider-nav-prev > label:hover,
        .carousel-slider > .slider-nav-next > label:hover {
            background-color: black;
        }

        .carousel-slider > .slider-nav-prev > label:hover::before {
            border-right-color: #fff;
        }
        .carousel-slider > .slider-nav-next > label:hover::after {
            border-left-color: #fff;
        }

        /* hilight slider nav */
        input#slide1:checked ~ .slider-nav-number > .slide-nav-1 {
            background-color: #34495e;
        }

        input#slide2:checked ~ .slider-nav-number > .slide-nav-2 {
            background-color: #1abc9c;
        }

        input#slide3:checked ~ .slider-nav-number > .slide-nav-3 {
            background-color: #2ecc71;
        }

        input#slide4:checked ~ .slider-nav-number > .slide-nav-4 {
            background-color: #3498db;
        }

        /* next and prev arrow */
        input#slide1:checked ~ .slider-nav-next > label.next-2,
        input#slide1:checked ~ .slider-nav-prev > label.prev-4 {
            z-index: 2;
        }

        input#slide2:checked ~ .slider-nav-next > label.next-3,
        input#slide2:checked ~ .slider-nav-prev > label.prev-1 {
            z-index: 2;
        }

        input#slide3:checked ~ .slider-nav-next > label.next-4,
        input#slide3:checked ~ .slider-nav-prev > label.prev-2 {
            z-index: 2;
        }

        input#slide4:checked ~ .slider-nav-next > label.next-1,
        input#slide4:checked ~ .slider-nav-prev > label.prev-3 {
            z-index: 2;
        }

        /* start slide movment control style */
        input#slide1:checked ~ .slides > #slide-1 {
            transform: translateX(0);
            visibility: visible;
        }

        input#slide2:checked ~ .slides > #slide-2 {
            transform: translateX(0);
            visibility: visible;
        }

        input#slide3:checked ~ .slides > #slide-3 {
            transform: translateX(0);
            visibility: visible;
        }

        input#slide4:checked ~ .slides > #slide-4 {
            transform: translateX(0);
            visibility: visible;
        }

        /* slides move animation */
        input#slide1:checked ~ .slides > #slide-2,
        input#slide1:checked ~ .slides > #slide-3,
        input#slide1:checked ~ .slides > #slide-4 {
            transform: translateX(100%);
        }

        input#slide2:checked ~ .slides > #slide-1 {
            transform: translateX(-100%);
        }
        input#slide2:checked ~ .slides > #slide-3,
        input#slide2:checked ~ .slides > #slide-4 {
            transform: translateX(100%);
        }

        input#slide3:checked ~ .slides > #slide-2,
        input#slide3:checked ~ .slides > #slide-1 {
            transform: translateX(-100%);
        }
        input#slide3:checked ~ .slides > #slide-4 {
            transform: translateX(100%);
        }

        input#slide4:checked ~ .slides > #slide-3,
        input#slide4:checked ~ .slides > #slide-2,
        input#slide4:checked ~ .slides > #slide-1 {
            transform: translateX(-100%);
        }
        .sidemenu{
            position: fixed;
            top: 0;
            z-index: 1;
            left: 0;
            width: 250px;
            height: 100%!important;
            background: #042331;
        }
        .sidemenu ul a{
            display: block!important;
            height: 100%!important;
            width: 100%!important;
            line-height: 43px!important;
            font-size: 14px!important;
            padding-left: 20px!important;
            box-sizing: border-box;
            /* border-top: 1px solid; */
            transition: .4s;
        }
        .sidemenu ul li:hover{
            background: #ededed;
            border-left: 6px solid red!important;
        }
        .sidemenu ul li:hover a{
            padding-left: 40px!important;
        }
        .sidemenu ul a img{
            margin-right: 16px;
            width: 30px!important;
        }
        .sidemenu a {
            text-transform: uppercase;
            color: #6e6969!important;
        }
        .sidemenu a:hover {
            text-transform: uppercase;
            color: red!important;
        }
        @media only screen and (min-width:480px) and (max-width:767px) {

            .sidemenu{
                display: none;
            }
            .mainnav{
                display: none;
            }

        }
        @media only screen and (max-width: 412px) {
            .sidemenu {
                display: none;
            }
            .mainnav{
                display: none;
            }
        }
        @media only screen and (max-width: 600px) {
            .sidemenu {
                display: none;
            }
            .mainnav{
                display: none;
            }
        }
        @media only screen and (max-width: 1024px) {
            .sidemenu {
                display: none;
            }
            .mainnav{
                display: none;
            }
            .labelsidebar #btn{
                left: 5px;
                top: 5px;
            }
        }
        @media only screen and (max-width: 720px) {
            .sidemenu {
                display: none;
            }
            .mainnav{
                display: none;
            }
            .labelsidebar #btn{
                left: 5px;
                top: 79px;
            }
        }


        /*//////////////////////slider second*/

        #slider-text{
            padding-top: 40px;
            display: block;
        }
        #slider-text .col-md-6{
            overflow: hidden;
        }

        #slider-text h2 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 30px;
            letter-spacing: 3px;
            margin: 30px auto;
            padding-left: 40px;
        }
        #slider-text h2::after{
            border-top: 2px solid #c7c7c7;
            content: "";
            position: absolute;
            bottom: 35px;
            width: 100%;
        }

        #itemslider h4{
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 12px;
            margin: 10px auto 3px;
        }
        #itemslider h5{
            font-family: 'Josefin Sans', sans-serif;
            font-weight: bold;
            font-size: 12px;
            margin: 3px auto 2px;
        }
        #itemslider h6{
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 300;;
            font-size: 10px;
            margin: 2px auto 5px;
        }
        .badge {
            background: #b20c0c;
            position: absolute;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            line-height: 31px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 300;
            font-size: 14px;
            border: 2px solid #FFF;
            box-shadow: 0 0 0 1px #b20c0c;
            top: 5px;
            right: 25%;
        }
        #slider-control img{
            padding-top: 204%;
            margin: 0 auto;
        }
        @media screen and (max-width: 992px){
            #slider-control img {
                padding-top: 70px;
                margin: 0 auto;
            }
        }

        .carousel-showmanymoveone .carousel-control {
            width: 4%;
            background-image: none;
        }
        .carousel-showmanymoveone .carousel-control.left {
            margin-left: 5px;
        }
        .carousel-showmanymoveone .carousel-control.right {
            margin-right: 5px;
        }
        .carousel-showmanymoveone .cloneditem-1,
        .carousel-showmanymoveone .cloneditem-2,
        .carousel-showmanymoveone .cloneditem-3,
        .carousel-showmanymoveone .cloneditem-4,
        .carousel-showmanymoveone .cloneditem-5 {
            display: none;
        }
        @media all and (min-width: 768px) {
            .carousel-showmanymoveone .carousel-inner > .active.left,
            .carousel-showmanymoveone .carousel-inner > .prev {
                left: -50%;
            }
            .carousel-showmanymoveone .carousel-inner > .active.right,
            .carousel-showmanymoveone .carousel-inner > .next {
                left: 50%;
            }
            .carousel-showmanymoveone .carousel-inner > .left,
            .carousel-showmanymoveone .carousel-inner > .prev.right,
            .carousel-showmanymoveone .carousel-inner > .active {
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
                display: block;
            }
        }
        @media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
            .carousel-showmanymoveone .carousel-inner > .item.active.right,
            .carousel-showmanymoveone .carousel-inner > .item.next {
                -webkit-transform: translate3d(50%, 0, 0);
                transform: translate3d(50%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner > .item.active.left,
            .carousel-showmanymoveone .carousel-inner > .item.prev {
                -webkit-transform: translate3d(-50%, 0, 0);
                transform: translate3d(-50%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner > .item.left,
            .carousel-showmanymoveone .carousel-inner > .item.prev.right,
            .carousel-showmanymoveone .carousel-inner > .item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
        }
        @media all and (min-width: 992px) {
            .carousel-showmanymoveone .carousel-inner > .active.left,
            .carousel-showmanymoveone .carousel-inner > .prev {
                left: -16.666%;
            }
            .carousel-showmanymoveone .carousel-inner > .active.right,
            .carousel-showmanymoveone .carousel-inner > .next {
                left: 16.666%;
            }
            .carousel-showmanymoveone .carousel-inner > .left,
            .carousel-showmanymoveone .carousel-inner > .prev.right,
            .carousel-showmanymoveone .carousel-inner > .active {
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner .cloneditem-2,
            .carousel-showmanymoveone .carousel-inner .cloneditem-3,
            .carousel-showmanymoveone .carousel-inner .cloneditem-4,
            .carousel-showmanymoveone .carousel-inner .cloneditem-5,
            .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
                display: block;
            }
        }
        @media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
            .carousel-showmanymoveone .carousel-inner > .item.active.right,
            .carousel-showmanymoveone .carousel-inner > .item.next {
                -webkit-transform: translate3d(16.666%, 0, 0);
                transform: translate3d(16.666%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner > .item.active.left,
            .carousel-showmanymoveone .carousel-inner > .item.prev {
                -webkit-transform: translate3d(-16.666%, 0, 0);
                transform: translate3d(-16.666%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner > .item.left,
            .carousel-showmanymoveone .carousel-inner > .item.prev.right,
            .carousel-showmanymoveone .carousel-inner > .item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
        }
        {{-------------------------------------all product section css end-----------------------------------}}




/*owl carousel css*/

        body{
            background-color: #f1f6ff;
        }
        #news-slider{
            margin-top: 80px;
        }
        .post-slide{
            background: #fff;
            margin: 20px 15px 20px;
            border-radius: 15px;
            padding-top: 1px;
            box-shadow: 0px 14px 22px -9px #bbcbd8;
        }
        .post-slide .post-img{
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin: -12px 15px 8px 15px;
            margin-left: -10px;
        }
        .post-slide .post-img img{
            width: 100%;
            height: auto;
            transform: scale(1,1);
            transition:transform 0.2s linear;
        }
        .post-slide:hover .post-img img{
            transform: scale(1.1,1.1);
        }
        .post-slide .over-layer{
            width:100%;
            height:100%;
            position: absolute;
            top:0;
            left:0;
            opacity:0;
            background: linear-gradient(-45deg, rgba(6,190,244,0.75) 0%, rgba(45,112,253,0.6) 100%);
            transition:all 0.50s linear;
        }
        .post-slide:hover .over-layer{
            opacity:1;
            text-decoration:none;
        }
        .post-slide .over-layer i{
            position: relative;
            top:45%;
            text-align:center;
            display: block;
            color:#fff;
            font-size:25px;
        }
        .post-slide .post-content{
            background:#fff;
            padding: 2px 20px 40px;
            border-radius: 15px;
        }
        .post-slide .post-title a{
            font-size:15px;
            font-weight:bold;
            color:#333;
            display: inline-block;
            text-transform:uppercase;
            transition: all 0.3s ease 0s;
        }
        .post-slide .post-title a:hover{
            text-decoration: none;
            color:#3498db;
        }
        .post-slide .post-description{
            line-height:24px;
            color:#808080;
            margin-bottom:25px;
        }
        .post-slide .post-date{
            color:#a9a9a9;
            font-size: 14px;
        }
        .post-slide .post-date i{
            font-size:20px;
            margin-right:8px;
            color: #CFDACE;
        }
        .post-slide .read-more{
            padding: 7px 20px;
            float: right;
            font-size: 12px;
            background: #2196F3;
            color: #ffffff;
            box-shadow: 0px 10px 20px -10px #1376c5;
            border-radius: 25px;
            text-transform: uppercase;
        }
        .post-slide .read-more:hover{
            background: #3498db;
            text-decoration:none;
            color:#fff;
        }
        .owl-controls .owl-buttons{
            text-align:center;
            margin-top:20px;
        }
        .owl-controls .owl-buttons .owl-prev{
            background: #fff;
            position: absolute;
            top:23%;
            left:15px;
            padding: 0 18px 0 15px;
            border-radius: 50px;
            box-shadow: 3px 14px 25px -10px #92b4d0;
            transition: background 0.5s ease 0s;
        }
        .owl-controls .owl-buttons .owl-next{
            background: #fff;
            position: absolute;
            top:23%;
            right: 15px;
            padding: 0 15px 0 18px;
            border-radius: 50px;
            box-shadow: -3px 14px 25px -10px #92b4d0;
            transition: background 0.5s ease 0s;
        }
        .owl-controls .owl-buttons .owl-prev:after,
        .owl-controls .owl-buttons .owl-next:after{
            content:"\f104";
            font-family: FontAwesome;
            color: #333;
            font-size:30px;
        }
        .owl-controls .owl-buttons .owl-next:after{
            content:"\f105";
        }
        @media only screen and (max-width:1280px) {
            .post-slide .post-content{
                padding: 0px 15px 25px 15px;
            }
        }
    </style>

    {{------------------advatisment banner---------------------}}
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
                        <div class="container" style="background: black;width: 100%;height: 244px;padding-right: 0px;padding-left:0px;">
                            @if(!empty($catebannerimg))
                                <div class="col-md-12 h2_div d-flex justify-content-right" style="display: flex;justify-content: right;top:80%;">
                            <h2 style="background: #222941;padding: 9px;position: absolute;font-family: cursive;color: #FFFFFF;font-weight: 900;font-size: 25px;margin-right: -14px;">{{$catebannerimg->category_name}}</h2>
                                </div>
                                <?php
                                $images = env('image_path')
                                ?>
                            <img style="width: 100%;height: 100%;" src="<?php echo $images ?>{{$catebannerimg->bannerimg}}">
                            @endif
                        </div>



{{--                        //subcat nav--}}
                        <style>
                            .tag-rail {
                                margin-top: 50px;
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                                position: relative;
                                top: 50%;
                                transform: translateY(-50%);
                                overflow: hidden;
                                padding: 0;
                            }
                            .rail-container {
                                overflow: hidden;
                                height: 36px;
                                padding-top: 6px;
                                cursor: pointer;
                                scroll-behavior: smooth;
                            }
                            .tag {
                                background: #e3ebf7;
                                border-radius: 8px;
                                padding: 3px 8px 4px;
                                margin: 5px 4px;
                                color: #285192;
                                font-weight: 500;
                                user-select: none;
                                border: 1px solid #e3ebf7;
                                transition-duration: 0.25s;
                                white-space: nowrap;
                            }
                            .tag:first-child {
                                margin-left: 16px;
                            }
                            .tag:last-child {
                                margin-right: 16px;
                            }
                            .tag:hover {
                                background: #dce4f0;
                            }
                            .tag:active {
                                background: #e3ebf7;
                            }
                            .tag-selected {
                                background: #3b71ca;
                                color: #fff;
                                border: 1px solid #3b71ca;
                            }
                            .tag-selected:hover {
                                background: #3265b9;
                                color: #fff;
                            }
                            .tag-selected:active {
                                background: #3b71ca;
                                color: #fff;
                            }
                            .btn-left-con,
                            .btn-right-con {
                                position: absolute;
                            }
                            .btn-right-con {
                                right: 0;
                            }
                            .btn-left,
                            .btn-right {
                                height: 32px;
                                width: 32px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                font-size: 24px;
                                border-radius: 100%;
                                cursor: pointer;
                                transition-duration: 0.25s;
                                box-shadow: 0 0 16px 24px #fff;
                                background: #fff;
                            }
                            .btn-left {
                                margin-left: 2px;
                            }
                            .btn-right {
                                margin-right: 2px;
                            }
                            .btn-left:hover,
                            .btn-right:hover {
                                background: #f2f2f2;
                            }
                            .btn-left:active,
                            .btn-right:active {
                                background: #d9d9d9;
                            }
                            .d-none {
                                display: none;
                            }
                        </style>
{{--                        <h4 style="font-family: cursive;text-transform: uppercase;margin-top: 15px;font-weight: revert;">SUB CATEGORY</h4>--}}
{{--                        <div class="container tag-rail">--}}
{{--                            <div id="btnLeftCon" class="btn-left-con">--}}
{{--                                <i class="fa fa-angle-left btn-left" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                            <div class="rail-container">--}}
{{--                                <div class="rail" id="rail" style="display: inline-table;">--}}
{{--                                    <span id="tag1" class="tag tag-selected">All</span>--}}
{{--                                    <span id="tag2" class="tag">general carpenter work</span>--}}
{{--                                    <span id="tag3" class="tag">new furniture making</span>--}}
{{--                                    <span id="tag4" class="tag">furniture repair</span>--}}
{{--                                    <span id="tag4" class="tag">furniture assemble and installation</span>--}}
{{--                                    <span id="tag4" class="tag">door or window repair</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                    <span id="tag4" class="tag">Drama</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="btnRightCon" class="btn-right-con">--}}
{{--                                <i class="fa fa-angle-right btn-right" aria-hidden="true"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <subcat nav carousel end--}}

                        {{--///////////owl carousel 2 box --}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <h4 style="font-family: cursive;text-transform: uppercase;margin-top: 15px;font-weight: revert;">type of services</h4>--}}
{{--                                    <div id="news-slider2" class="owl-carousel">--}}
{{--                                        <div class="post-slide">--}}
{{--                                            <div class="post-img">--}}
{{--                                                <img src="https://media.istockphoto.com/id/1350701180/photo/woman-cleaning-floor-with-mop.jpg?s=612x612&w=0&k=20&c=xZBxsNd-qIFKOcyMywRGIV2u9bp-HuWZSAk_OaWwzKc=" alt="">--}}
{{--                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-content">--}}
{{--                                                <h3 class="post-title">--}}
{{--                                                    <a href="#">general carpenter work</a>--}}
{{--                                                    <p style="font-size: 14px;" href="#">starting visiting charge</p>--}}
{{--                                                    <h6 style="" href="#">Rs: 199</h6>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-slide">--}}
{{--                                            <div class="post-img">--}}
{{--                                                <img src="https://www.driverserviceshyderabad.com/new-img/s1.jpg" alt="">--}}
{{--                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-content">--}}
{{--                                                <h3 class="post-title">--}}
{{--                                                    <a href="#">new furniture making</a>--}}
{{--                                                    <p style="font-size: 14px;" href="#">starting visiting charge</p>--}}
{{--                                                    <h6 style="" href="#">Rs: 199</h6>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-slide">--}}
{{--                                            <div class="post-img">--}}
{{--                                                <img src="https://images.unsplash.com/photo-1564979268369-42032c5ca998?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=500" alt="">--}}
{{--                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-content">--}}
{{--                                                <h3 class="post-title">--}}
{{--                                                    <a href="#">furniture repair</a>--}}
{{--                                                    <p style="font-size: 14px;" href="#">starting visiting charge</p>--}}
{{--                                                    <h6 style="" href="#">Rs: 199</h6>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-slide">--}}
{{--                                            <div class="post-img">--}}
{{--                                                <img src="https://images.unsplash.com/photo-1576659531892-0f4991fca82b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501" alt="">--}}
{{--                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-content">--}}
{{--                                                <h3 class="post-title">--}}
{{--                                                    <a href="#">furniture assemble and installation</a>--}}
{{--                                                    <p style="font-size: 14px;" href="#">starting visiting charge</p>--}}
{{--                                                    <h6 style="" href="#">Rs: 199</h6>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-slide">--}}
{{--                                            <div class="post-img">--}}
{{--                                                <img src="https://images.unsplash.com/photo-1586083702768-190ae093d34d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=305&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=505" alt="">--}}
{{--                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-content">--}}
{{--                                                <h3 class="post-title">--}}
{{--                                                    <a href="#">door or window repair</a>--}}
{{--                                                    <p style="font-size: 14px;" href="#">starting visiting charge</p>--}}
{{--                                                    <h6 style="" href="#">Rs: 199</h6>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-slide">--}}
{{--                                            <div class="post-img">--}}
{{--                                                <img src="https://images.unsplash.com/photo-1484656551321-a1161420a2a0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=306&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=506" alt="">--}}
{{--                                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-content">--}}
{{--                                                <h3 class="post-title">--}}
{{--                                                    <a href="#">Lorem ipsum dolor sit amet.</a>--}}
{{--                                                    <p style="font-size: 14px;" href="#">starting visiting charge</p>--}}
{{--                                                    <h6 style="" href="#">Rs: 199</h6>--}}
{{--                                                </h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        {{--///////////owl carousel 2 box --}}




                        {{--///////////owl carousel 3 box --}}
                        <style>
                            .card-title ul li {
                                display: inline-block!important;
                                font-size: 10px!important;
                            }
                        </style>
                        <style>
                            .homepageworker{
                                border: 1px solid;
                                height: 316px;
                                width: 100%;
                                margin: 3px;
                                background: #f9f9f9;
                                box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                            }
                            @media only screen and (max-width: 600px) {
                                .homepageworker {
                                    border: 1px solid;
                                    height: 350px;
                                    width: 100%;
                                    margin: 3px;
                                    background: #f9f9f9;
                                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                                }
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
                            .wishlist{
                                margin-left: 59px;
                            }
                        </style>
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <h4 style="font-family: cursive;text-transform: uppercase;margin-top: 15px;font-weight: revert;">VERIFIED workers</h4> (10 Km)--}}
{{--                                    <div id="news-slider3" class="owl-carousel">--}}
{{--                                        @foreach($categortpagina2 as $show)--}}
{{--                                        <div class="post-slide">--}}
{{--                                            <input type="hidden" id="categorryid" name="catid" value="{{$show->catid}}">--}}
{{--                                            <input type="hidden" id="workdetailid"  name="workdetailid" value="{{$show->workerdetid}}">--}}
{{--                                            <div class="homepageworker">--}}

{{--                                                <div class="imagecontainer">--}}
{{--                                                    <img src="data:image/jpeg;base64,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">--}}
{{--                                                </div>--}}
{{--                                                <div class="allinnercontent">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-9">--}}
{{--                                                           <h5>{{$show->fname}}</h5>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-3">--}}
{{--                                                            <a href="{{url('/insertwishlist')}}" id="insertwishlist" ><i style="color: #0E7AC4;font-size: 28px;" class="fa fa-heart-o"></i></a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="card-title">--}}
{{--                                                        <ul style="margin: 0%;padding: 0%">--}}
{{--                                                            <li><i class="fa fa-star"></i></li>--}}
{{--                                                            <li><i class="fa fa-star"></i></li>--}}
{{--                                                            <li><i class="fa fa-star"></i></li>--}}
{{--                                                            <li><i class="fa fa-star"></i></li>--}}
{{--                                                            <li><i class="fa fa-star"></i></li>--}}
{{--                                                            <li>(500)</li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-lg-10">--}}
{{--                                                            <p style="font-size: 13px;">{{$show->category_name}}</p>--}}
{{--                                                            <h5 style="font-size: 13px;">{{$show->location}}</h5>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-2">--}}
{{--                                                            <i style="color: #0E7AC4" class="fa fa-check-circle"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <a  href="{{url('/workerdetailpage/'.$show->workerdetid)}}">--}}
{{--                                                        <div class="viewmorebutton">--}}
{{--                                                            VIEW MORE--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        {{--///////////container box 3 end --}}
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
                     {{--///////////after login details --}}
                       <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="font-family: cursive;text-transform: uppercase;margin-top: 15px;font-weight: revert;">VERIFIED workers</h4> (20 Km)
                                    <div id="news-slider4" class="owl-carousel">
                                        @if(isset($searchcount) == 0)
                                        @foreach($categortpagina2 as $show)
                                            <div class="post-slide">
                                                <input type="hidden" id="categorryid" name="catid" value="{{$show->catid}}">
                                                <input type="hidden" id="workdetailid"  name="workdetailid" value="{{$show->workerdetid}}">
                                                <div class="homepageworker">

                                                    <div class="imagecontainer">
                                                        <?php
                                                        $workerprofileimg = env('image_path2');
                                                        ?>
                                                        <img src="<?php echo $workerprofileimg ?>{{$show->workerprofileimage}}">
                                                    </div>
                                                    <div class="allinnercontent">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <h5>{{$show->fname}}</h5>
                                                            </div>
                                                            <div class="product-wish">
                                                                @if(\Illuminate\Support\Facades\Auth::check())
                                                             @if(!empty($show->wishlist))
                                                               <a href="{{url('/removewishlist')}}"  data-workerid="{{$show->workerdetid}}" class="removeinsertwishlist" ><i class="fa fa-heart"></i></a>
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
                                                <div class="post-slide">
                                                    <input type="hidden" id="categorryid" name="catid" value="{{$show->catid}}">
                                                    <input type="hidden" id="workdetailid"  name="workdetailid" value="{{$show->workerdetid}}">
                                                    <div class="homepageworker">

                                                        <div class="imagecontainer">
                                                            <img src="data:image/jpeg;base64,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">
                                                        </div>
                                                        <div class="allinnercontent">
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <h5>{{$show->fname}}</h5>
                                                                </div>
                                                                <div class="product-wish">
                                                                    @if(\Illuminate\Support\Facades\Auth::check())
                                                                        @if(!empty($show->wishlist))
                                                                            <a href="{{url('/removewishlist')}}"  data-workerid="{{$show->workerdetid}}" class="removeinsertwishlist" ><i class="fa fa-heart"></i></a>
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
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                      {{--///////////after login details --}}
                        {{------------------advatisment banner second ---------------------}}
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider5" class="owl-carousel">
                        <div class="post-slide">
                            <div class="homepageworker">

                                <div class="imagecontainer">
                                    <img src="data:image/jpeg;base64,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">
                                </div>
                                <div class="allinnercontent">
                                    <h5>MIDHUN murali</h5>

                                    <div class="card-title">
                                        <ul style="margin: 0%;padding: 0%">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li>(500)</li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p style="font-size: 13px;">Door or window repair</p>
                                            <h5 style="font-size: 13px;">kavunagar</h5>
                                        </div>
                                        <div class="col-lg-2">
                                            <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <a  href="#">
                                        <div class="viewmorebutton">
                                            VIEW MORE
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="homepageworker">

                                <div class="imagecontainer">
                                    <img src="data:image/jpeg;base64,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">
                                </div>
                                <div class="allinnercontent">
                                    <h5>MIDHUN murali</h5>

                                    <div class="card-title">
                                        <ul style="margin: 0%;padding: 0%">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li>(500)</li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p style="font-size: 13px;">Door or window repair</p>
                                            <h5 style="font-size: 13px;">kavunagar</h5>
                                        </div>
                                        <div class="col-lg-2">
                                            <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <a  href="#">
                                        <div class="viewmorebutton">
                                            VIEW MORE
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="homepageworker">

                                <div class="imagecontainer">
                                    <img src="data:image/jpeg;base64,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">
                                </div>
                                <div class="allinnercontent">
                                    <h5>MIDHUN murali</h5>

                                    <div class="card-title">
                                        <ul style="margin: 0%;padding: 0%">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li>(500)</li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p style="font-size: 13px;">Door or window repair</p>
                                            <h5 style="font-size: 13px;">kavunagar</h5>
                                        </div>
                                        <div class="col-lg-2">
                                            <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <a  href="#">
                                        <div class="viewmorebutton">
                                            VIEW MORE
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="homepageworker">

                                <div class="imagecontainer">
                                    <img src="data:image/jpeg;base64,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">
                                </div>
                                <div class="allinnercontent">
                                    <h5>MIDHUN murali</h5>

                                    <div class="card-title">
                                        <ul style="margin: 0%;padding: 0%">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li>(500)</li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p style="font-size: 13px;">Door or window repair</p>
                                            <h5 style="font-size: 13px;">kavunagar</h5>
                                        </div>
                                        <div class="col-lg-2">
                                            <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <a  href="#">
                                        <div class="viewmorebutton">
                                            VIEW MORE
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="homepageworker">

                                <div class="imagecontainer">
                                    <img src="data:image/jpeg;base64,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">
                                </div>
                                <div class="allinnercontent">
                                    <h5>MIDHUN murali</h5>

                                    <div class="card-title">
                                        <ul style="margin: 0%;padding: 0%">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li>(500)</li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p style="font-size: 13px;">Door or window repair</p>
                                            <h5 style="font-size: 13px;">kavunagar</h5>
                                        </div>
                                        <div class="col-lg-2">
                                            <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <a  href="#">
                                        <div class="viewmorebutton">
                                            VIEW MORE
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-slide">
                            <div class="homepageworker">

                                <div class="imagecontainer">
                                    <img src="data:image/jpeg;base64,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">
                                </div>
                                <div class="allinnercontent">
                                    <h5>MIDHUN murali</h5>

                                    <div class="card-title">
                                        <ul style="margin: 0%;padding: 0%">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li>(500)</li>
                                        </ul>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p style="font-size: 13px;">Door or window repair</p>
                                            <h5 style="font-size: 13px;">kavunagar</h5>
                                        </div>
                                        <div class="col-lg-2">
                                            <i style="color: #0E7AC4" class="fa fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <a  href="#">
                                        <div class="viewmorebutton">
                                            VIEW MORE
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/bootstrap@4.0.0"></script>
    {{--        ------------------carousel first one banner slider--------------------}}
    <script>
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
                alert(data);

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
            ////////////insertcount submit////////////
            $('.insertcount').on("click", function (evt) {
                evt.preventDefault();
                var workerid = $(this).data('workerid');
                var categoryid = $("#categorryid").val();
                var data = {
                    categoryid: categoryid,
                    workerid: workerid,
                };
                alert(data);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/insertviewcount",
                    type: "POST",
                    data: data,
                    success: function (response)
                    {
                        console.log(response);
                        window.location.href = "/workerdetailpage/"+workerid;
                    }
                });
            });
            ////////////insertcount submit////////////

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




            const railCon = document.querySelector(".rail-container"),
                rail = document.getElementById("rail"),
                btnLeftCon = document.getElementById("btnLeftCon"),
                btnRightCon = document.getElementById("btnRightCon"),
                tags = document.getElementsByClassName("tag");
            let mouseDown = false;
            let startX, scrollLeft, mDwnOntag;

            let startDragging = function (e) {
                railCon.style.scrollBehavior = "auto";
                mouseDown = true;
                startX = e.pageX - railCon.offsetLeft;
                scrollLeft = railCon.scrollLeft;
            };
            let stopDragging = function (event) {
                railCon.style.scrollBehavior = "smooth";
                mouseDown = false;
            };

            railCon.addEventListener("mousemove", (e) => {
                e.preventDefault();
                if (!mouseDown) {
                    return;
                }
                const x = e.pageX - railCon.offsetLeft;
                const scroll = x - startX;
                railCon.scrollLeft = scrollLeft - scroll;
                showHideBtns(scrollLeft - scroll);
            });

// Add the event listeners
            railCon.addEventListener("mousedown", startDragging, false);
            railCon.addEventListener("mouseup", stopDragging, false);
            railCon.addEventListener("mouseleave", stopDragging, false);
            btnRightCon.addEventListener("click", () => {
                railCon.scrollLeft = railCon.scrollLeft + railCon.offsetWidth / 2;
                showHideBtns(railCon.scrollLeft + railCon.offsetWidth / 2);
            });
            btnLeftCon.addEventListener("click", () => {
                railCon.scrollLeft = railCon.scrollLeft - railCon.offsetWidth / 2;
                showHideBtns(railCon.scrollLeft - railCon.offsetWidth / 2);
            });

            window.addEventListener("mousedown", (e) => {
                if (e.target.id.startsWith("tag")) {
                    mDwnOntag = e.pageX * e.pageY;
                }
            });
            window.addEventListener("mouseup", (e) => {
                if (e.target.id.startsWith("tag")) {
                    if (mDwnOntag - e.pageX * e.pageY === 0) {
                        Array.from(tags).forEach((tag) => {
                            tag.classList.remove("tag-selected");
                        });
                        e.target.classList.add("tag-selected");
                    }
                }
            });
            showHideBtns(railCon.scrollLeft);
            function showHideBtns(railConLeft) {
                if (railConLeft <= 0) btnLeftCon.classList.add("d-none");
                else btnLeftCon.classList.remove("d-none");
                if (railConLeft >= rail.scrollWidth - railCon.offsetWidth)
                    btnRightCon.classList.add("d-none");
                else btnRightCon.classList.remove("d-none");
            }

        });
    </script>
    {{----------------------------------owl carousel--------------------}}

@endpush
