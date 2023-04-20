
@extends('layouts.stylefiles.app')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet">
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




                <style>
                    .details ul li {
                        display: inline-block!important;
                        font-size: 10px!important;
                    }
                    .details h3{
                        font-size: 20px!important;
                    }
                    .details h4{
                        font-size: 20px!important;
                    }
                    .userreview ul li{
                        display: inline-block!important;
                        font-size: 20px!important;
                        font-weight: bold;
                    }
                    .profileimg{
                        width: 46%;
                        height: 44%;
                        z-index: 9999999;
                        position: absolute;
                        background: rgba(0,0,0,0.5);
                        color: transparent;
                        cursor: pointer;
                        top: 27%;
                        left: 27%;
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                    }
                    .profileimg::before{
                        content: '\f030';
                        font-size: 35px;
                        font-family: FontAwesome;
                        color: #ffff;
                        left: 36%;
                        bottom: 30%;
                        z-index: 9999999;
                        position: absolute;
                        display: inline-block;
                        -webkit-user-select: none;
                    }
                    .profileimg::-webkit-file-upload-button{
                        visibility: hidden;
                    }
                    .profileimg:hover{
                        width: 46%;
                        height: 44%;
                        z-index: 9999999;
                        position: absolute;
                        background: rgba(0,0,0,0.5);
                        color: transparent;
                        cursor: pointer;
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                    }
                    .buttonupdateprofile{
                        position: absolute;
                        left: 92px;
                    }
                    .buttonupdateprofile .update{
                        color: black;
                        border: 1px solid gray;
                        top: 4px;
                        background: #FFFFFF;
                        /*position: absolute;*/
                        height: 26px;
                        /*width: 65px!important;*/
                        /*padding: 2px;*/
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                    }
                    .buttonupdateprofile .remove{
                        color: black;
                        border: 1px solid gray;
                        top: 4px;
                        left: 129px;
                        position: absolute;
                        padding: 2px;
                        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                    }
                    .buttonupdateprofile .update:hover{
                      background: green;
                        color: white;
                    }
                    .buttonupdateprofile .remove:hover{
                        background: red;
                        color: white;
                    }
                </style>
                <div class="col-lg-9">
                    {{--                    profile photo--}}
                    <div class="container" style="padding-top: 14px;margin-bottom: 13px;;background: #ffffff;">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="workerimg" style="background: #2a2928;">
                                    @if(!empty($workerdetail))
                                        @if($workerdetail->workerprofileimage == !null)
                                        <?php
                                        $workerprofileimg = env('image_path2');
                                        ?>
                                        <form action="{{url('/updateworkerprofileimg/'.$workerdetail->id)}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                        <input name="workerprofileimg" class="profileimg" type="file">
                                        <img width="100%" height="100%" src="<?php echo $workerprofileimg ?>{{$workerdetail->workerprofileimage}}">
                                        <div class="buttonupdateprofile">
                                        <button type="submit" class="update" >update</button>
                                        <a class="remove" href="{{url('/remove')}}">remove</a>
                                         </div>
                                        </form>
                                       @else
                                            <form action="{{url('/updateworkerprofileimg/'.$workerdetail->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input name="workerprofileimg" class="profileimg" type="file">
                                                <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=">
                                                <div class="buttonupdateprofile">
                                                    <button type="submit" class="update" >submit</button>
                                                </div>
                                            </form>
                                       @endif
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="details">
                                    @if(!empty($workerdetail))
                                    <h1>{{$workerdetail->fname}}</h1>
{{--                                    <ul style="margin: 0%;padding: 0%">--}}
{{--                                        <li><i class="fa fa-star"></i></li>--}}
{{--                                        <li><i class="fa fa-star"></i></li>--}}
{{--                                        <li><i class="fa fa-star"></i></li>--}}
{{--                                        <li><i class="fa fa-star"></i></li>--}}
{{--                                        <li><i class="fa fa-star"></i></li>--}}
{{--                                        <li>(500)</li>--}}
{{--                                        <i style="color: #0E7AC4" class="fa fa-check-circle"></i>--}}
{{--                                        <?php--}}
{{--                                        $i = 2--}}
{{--                                        ?>--}}
{{--                                        @if( $i < 3)--}}
{{--                                            <a href="#"><i style=" color: #0E7AC4" class="fa fa-heart-o"></i></a>--}}
{{--                                        @else--}}
{{--                                            <i><img width="5%" height="5px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOsAAADXCAMAAADMbFYxAAAAilBMVEX/AAD/////np7/paX/tLT/oaH/qKj/wMD/srL/trb/r6//u7v/ra3/0tL/VVX/vLz/mZn/7+//19f/4uL/h4f/ICD/xcX/bGz/gID/Zmb/enr/9vb/zc3/1tb/Ghr/Pz//Skr/6en/WFj/ERH/OTn/amr/KSn/Xl7/j4//c3P/hYX/e3v/MTH/T0/Q2a+vAAAG40lEQVR4nO3dCWLaOhAGYClkT0nATkqoWROakL7m/td7ttltSdYyM1rofwA0HxYGbFnDuFOKYZ5NyvSz5dDtlaQZLrN+NcQ0HxZur8RsK5j0Xt9m7DTz0eAhd6vnKPnDYDRvjDB7e72e2L6rNtbsavzO5Jk/37ge4+Lmuak8zvu4l1m8qqm1uBwrithntZ5aFLNJNljpDPH7znRKG1mL22+dKrb5Y/PeZ88GIzzeGr22gbX/26CMOrMrs7e+6H2YDjHqI1jvjcuo86V/rsp/WY3woX1wNa0XVmXUedT75GZv9kNcAFqv7Muo8t39wc0f3Ya4ArLeuZVRZaz+EhoanwnauQOw5lpfAJ0ZKIYYgIyw6jwzdFlNvgKUmclOmNMXqCH+OFmnzV+BLvlPOMQr4Agz9WlQaV0D1lGV0p5lOdhB3WRtaS1UP0nt0msMcQ0+wkpxFpRb++B1lPk8GULrp7VpJuZW+Le8zsfhfS/+4gzRnDydVshTxml2H9ocbQTxSVBqRZld22wm2QRxhE8xSmw1+etmnqdyhBvUERb61gVqIdXvuSfkEVa61gVyIYyB/RqTZq5ndfzLEUgE07htHfmuEijjbivw70KPaf0VaFovfVcImB9qa+a7PtBkSqvv6oBTKKwO17eCzLfc2vNdG3guZNal78oQkkusMFfRwspfsTW9GVzlQmQd+q4KKUOB9dN3UUj5bFunvmtCS79lTfHEtMmqacW9TuA3Nw2r3d3VOPJxak35sO4PLEv901pldWxFucYfUPpHVszLwSFkfLAWvmtBz3BvdVj5EUku9lbgm6AB5mVnTesikzjZ1prOZVJ51lsr5KKIUDPbWPFuhIaUvLY6rkqLJFe1NY17VV35rq2+qyBKZT2Hb5wq09Ka5uXDdnqlNZX7rV0Zldb0fyBuMiutvmsgS8HO45dElZz99F0CWX4ypHWHAabHYBagx5A1+/JdAlm+WOqX1Q75ZAvfJZBlzlK+uXGaF3YOFyU2eWeqp3b/5V9iyDnN4XP5S1f+qWNp33k9zgc7j6uIVRYM4DHbSDJmeA9YhZZfLP17r7sMGMDT6JHklqW+LOSQCUt1eWk7yzO6ZsoZX3gugSrz0or/HF8YeS2t2I9nhpK70pri0xuiLKt7zWdyFaa+r263bVJs+aqtaa8d3uWhtqa/8rJKsVnLdQ5/YRfbdWv3vgshyPXWeg6TuNitqU31katDHvfrh9O/t/50WO/vuxT0HD3bkPrN9fWRNfWz0/D4WaS0fyeOTp67SvvPTn767GDKS0R2O8PsrCkf2LxhRdxgzXe+eNOa7qm4aFmxNgn0nsOmC0f7SyBtV+g5L1xkTXPhf19oTfJK8S8utib4gP47l1nTWyOeSa3JnYtPd+5u7EGW1grbR66yJvWRfedqa0q3npcd1oS+ZVsbTLf3+Ezllke7uYFg79Y0Lo0LulaI9uRN4clJUZ8I4V7L8X/NCltiiPfQjn0xm7j7h2Rv9LixkkYnsj3vY8bKerpIexnEi5W2r5H3qIgVK+/Uo+g9EidW0ZRI1VMmRqyq/5Kyf058WBW1oy9SbFgltavfVVz74nT0qevq7RUTtqslX2fPtniwnd0Hu3vxxYJVf1b1rJFgNXpK6vSTjOH/rE77TK3emeFjtTqF6vVEDR2r1xRVs/9r2FjI/q+BYzWp+j2Mw70GpdXn1sgaLFabatKHO0ysPtWov3qIn1kDqlkv+fCOrLRPprM1OKwR1dAaGNaMamoNCmtINbYGhDWlmluDwRpTLaz8h29lnWvzwi2sQWAtqFbWAKax+QS2tXo/slZUS6tnrM0Etrd6XUBiSbW2ejyytlR7qzesNdXB6glrT3WxevnMOlCdrB6wzRbMdFZyrMtRdbUSY92orlZSrNMEBrDy22io7lYyrDMVwEqEdadCWEmwAFQQKwEWggpj5ZfI1HuQKmGsyFgYKpQVdRoDUcGsiEcWigpnRcOCUQGtHGfH21u4AgGtKFhAKqgVYRrDTWAObAU/sqBUYCswFnICc3ArKPYSuDZoKyAW+KgiWMGw4FQEKxAWegJzFCsIFoGKYuUPztT2A9gAQbE6YzGOKpbVEYtDxbI6YVEmMMezOmCxqHhWaywaFdFqicWjYlqtsIhUVKsFFpOKazXuf/GAWg2u1XAjHVwqttUIizqBOb7VAItNxbdqY5EnMKewamKf8AshsGphCagkVg0s/gTmRNZOLMVRpbJ2YGmoVFYl9oaoBiqrAkt0VAmtUiwZldAqwVJNYE5qFbauIaSSWgVYSiqttYUlpRJbG1haKrX1BEtMJbceYamp9NY9lpzqwbrF0lN9WGusB6oXa4n1QfVj5UMvo/4Pcr1nR1a9WZ0AAAAASUVORK5CYII="></i>--}}
{{--                                        @endif--}}
{{--                                    </ul>--}}
                                    <h3>{{$workerdetail->category_name}}</h3>
                                    <h4><strong>Country:</strong> {{$workerdetail->country}}</h4>
                                    <h4><strong> state: </strong>  {{$workerdetail->state}}</h4>
                                    <h4><strong>dist:</strong>  {{$workerdetail->city}}</h4>
                                    <h4><strong>location:</strong>  {{$workerdetail->location}}</h4>
                                </div>
                                <style>
                                    .wrap {
                                        position: absolute;
                                        text-align: center;
                                    }
                                    .wrap a{
                                        -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
                                        -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
                                        -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
                                        -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
                                        transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
                                        display: block;
                                        margin: 20px auto;
                                        max-width: 180px;
                                        text-decoration: none;
                                        border-radius: 4px;
                                        padding: 20px 30px;
                                    }
                                    .wrap a.button1 {
                                        background: black;
                                        color: rgb(255 255 255 / 60%);
                                    }
                                    .wrap a.button1:hover {
                                        color: rgba(255, 255, 255, 0.85);
                                        box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset;
                                    }

                                    .wrap a.button2 {
                                        background: black;
                                        color: rgb(255 255 255 / 60%);
                                    }
                                    .wrap a.button2:hover {
                                        color: rgba(255, 255, 255, 0.85);
                                        box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset;
                                    }
                                </style>
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 wrap">--}}
{{--                                        <a href="#" class="button1 fa fa-phone"> &nbsp;CALL</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 wrap">--}}
{{--                                        <a href="#" class="button2 fa fa-envelope"> &nbsp;CHAT</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        {{------------------advatisment banner second ---------------------}}
                        <div class="container advsbanner" style="margin-top: 32px;">
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
                    @endif
                    <style>
                        .owl-carousel-wrap {
                            width: 100%;
                            max-width: 960px;
                            /*margin: 200px auto;*/
                            position: relative;
                        }

                        .owl-carousel .item {
                            /*background: #4DC7A0;*/
                            padding: 3px;
                            cursor: pointer;
                        }

                        .popup {
                            left: 0.5px!important;
                            height: 100%;
                            top: 43px;
                            width: 100%;
                            opacity: 0;
                            position: absolute;
                            background: rgba(0,0,0,0.4);
                            z-index: 10;
                            opacity: 0;
                        }
                        .item{
                            /*position: absolute;*/
                            /*display: contents;*/
                            /*justify-content: center;*/
                            /*align-items: center;*/
                            /*overflow: hidden*/
                        }
                        .item img{
                            width: 100%;
                            height: auto;
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center;
                        }

                    </style>
                    {{--myworkers--}}
                    <div class="container" style="background: #ffffff;">
                        <div style="margin-top: 27px;margin-bottom: 21px;display: inline-flex;text-decoration: none; list-style-type: none;">
                            <li>MY WORKS</li>
                            <li style="cursor: pointer"><a style="margin-left: 28px;border: 1px solid gray;padding: 6px;" href="" data-toggle="modal" data-target="#exampleModalCenter">INSERT MORE IMAGE</a></li>
                        </div>
                    {{--                        model imageinsert--}}
                    <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">INSERT WORK IMAGE</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>



                                    <div class="modal-body">
                                        @if(!empty($workerdetail))
                                        <form method="post" enctype="multipart/form-data" action="{{url('/insertworkerimage')}}">
                                            @csrf
                                        <div>
                                        <label>worke images</label>
                                         <input type="hidden" value="{{$workerdetail->id}}" name="workdetail_ID">
                                        <input type="file" name="works_image" id="workimage" placeholder="images" >
                                       </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                        {{--model imageinsert--}}
                        <div class="owl-carousel-wrap">
                            <div class="owl-carousel owl-theme">
                                @foreach($workerimages as $showimg)
                                <div class="owltrashdiv">
                                        <a href="{{url('/deleteworkerimg/'.$showimg->id)}}" style="background: #e50407;width: 12px;height: 12px;z-index: 99999;position: absolute" onclick="return confirm('Are you sure to delete?')" type="button" class="btn btn-danger reject"><i style="position: relative;bottom: 10px;right: 5px;" class="fa fa-trash"></i> </a>
                                        <?php
                                        $img = env('image_path2');
                                        ?>
                                    <div class="item">
                                      <img src="<?php echo $img ?>{{$showimg->worksimage}}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="popup" style="left:0px;height: 320px!important;"></div>
                        </div>
                        {{--post review and rating--}}
                    <style>
                        * { box-sizing: border-box; }

                        .rating {
                            display: flex;
                            width: 100%;
                            justify-content: center;
                            overflow: hidden;
                            flex-direction: row-reverse;
                            height: 150px;
                            position: relative;
                        }

                        .rating-0 {
                            filter: grayscale(100%);
                        }

                        .rating > input {
                            display: none;
                        }

                        .rating > label {
                            cursor: pointer;
                            width: 40px;
                            height: 40px;
                            margin-top: auto;
                            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: 76%;
                            transition: .3s;
                        }

                        .rating > input:checked ~ label,
                        .rating > input:checked ~ label ~ label {
                            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
                        }


                        .rating > input:not(:checked) ~ label:hover,
                        .rating > input:not(:checked) ~ label:hover ~ label {
                            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
                        }

                        .emoji-wrapper {
                            width: 100%;
                            text-align: center;
                            height: 100px;
                            overflow: hidden;
                            position: absolute;
                            top: 0;
                            left: 0;
                        }

                        .emoji-wrapper:before,
                        .emoji-wrapper:after{
                            content: "";
                            height: 15px;
                            width: 100%;
                            position: absolute;
                            left: 0;
                            z-index: 1;
                        }

                        .emoji-wrapper:before {
                            top: 0;
                            background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
                        }

                        .emoji-wrapper:after{
                            bottom: 0;
                            background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
                        }

                        .emoji {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            transition: .3s;
                        }

                        .emoji > svg {
                            margin: 15px 0;
                            width: 70px;
                            height: 70px;
                            flex-shrink: 0;
                        }

                        #rating-1:checked ~ .emoji-wrapper > .emoji { transform: translateY(-100px); }
                        #rating-2:checked ~ .emoji-wrapper > .emoji { transform: translateY(-200px); }
                        #rating-3:checked ~ .emoji-wrapper > .emoji { transform: translateY(-300px); }
                        #rating-4:checked ~ .emoji-wrapper > .emoji { transform: translateY(-400px); }
                        #rating-5:checked ~ .emoji-wrapper > .emoji { transform: translateY(-500px); }

                        .feedback {
                            max-width: 360px;
                            background-color: #fff;
                            width: 100%;
                            /*padding: 30px;*/
                            border-radius: 8px;
                            display: flex;
                            flex-direction: column;
                            flex-wrap: wrap;
                            align-items: center;
                            box-shadow: 0 4px 30px rgba(0,0,0,.05);
                        }
                    </style>
                    <div class="" style="min-height: 547px;">
                        <div class="content">
                            <div class="card">
                                <div class="card-body">
                                    @if($workerdetail)
                                    <form  role="form" method="post" enctype="multipart/form-data" action="{{url('/updateworkerdetail/'.$workerdetail->id)}}" id="worker_detail">
                                        {{csrf_field()}}
{{--                                        <input type="text" value="{{$workerdetail->id}}" name="workerdetailid">--}}
                                        <div hidden class="row">
                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Firstname</label>
                                                <input type="text" name="first_name" class="form-control" id="firstname" value="{{$workerdetail->fname}}" >
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Last Name</label>
                                                <input type="text" name="last_name" class="form-control" id="lastname" value="{{$workerdetail->lname}}">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">SELECT CATEGORY</label>
                                                <select class="form-control" id="categoryid" name="category_id" >
                                                    <option value="{{$workerdetail->category_id}}">{{$workerdetail->category_name}}</option>
                                                    @foreach($categortpagina as $get)
                                                        <option id="categoryid" value="{{$get->id}}">{{$get->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Email</label>
                                                <input type="text" name="email" class="form-control" value="{{$workerdetail->email}}">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Phone</label>
                                                <input type="text" name="phone" class="form-control" value="{{$workerdetail->phone}}">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Phone2</label>
                                                <input type="text" name="phone2" class="form-control" value="{{$workerdetail->phone2}}">
                                            </div>

                                            <div hidden  class="col-md-4">
                                                <label  for="input-file-max-fs">Register Date</label>
                                                <input  type="datetime-local" name="registerdate" value="<?php echo date('Y-m-d H:i:s');?>" class="form-control" >
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
                                                <textarea name="fulladdress" class="form-control" value="{{$workerdetail->full_address}}">{{$workerdetail->full_address}}</textarea>
                                            </div>

                                            <div id="locationField" class="col-md-4">
                                                <label for="input-file-max-fs">LOCATION ENTER</label>
                                                <input name="location" id="autocomplete" class="form-control" placeholder="Enter your address" type="text" value="{{$workerdetail->location}}">
                                            </div>

                                            <div  class="col-md-4">
                                                <label for="input-file-max-fs">CITY</label>
                                                <input name="city" type="text" class="form-control field" id="locality" value="{{$workerdetail->city}}">
                                            </div>


                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">STATE</label>
                                                <input name="state" type="text" class="form-control field" id="administrative_area_level_1" value="{{$workerdetail->state}}">
                                            </div>




                                            <div  class="col-md-4">
                                                <label for="input-file-max-fs">PINCODE</label>
                                                <input name="pincode" type="text" class="form-control field" id="postal_code" value="{{$workerdetail->pincode}}">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">COUNTRY</label>
                                                <input name="country" type="text" class="form-control field" id="country" value="{{$workerdetail->country}}">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">latitude</label>
                                                <input name="latitude" type="text" class="form-control field" id="latitude" value="{{$workerdetail->latitude}}">
                                            </div>


                                            <div  class="col-md-4">
                                                <label for="input-file-max-fs">lloungitude</label>
                                                <input name="loungnitude" type="text" class=" form-control field" id="longitude" value="{{$workerdetail->loungnitude}}">
                                            </div>

                                        </div>













                                        {{-----------------------------------------------------------------------------------------------------------}}
                                        <h2 hidden >REFERENCE DETAILS</h2>
                                        <div hidden class="row">
                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Reference Name</label>
                                                <input type="text" name="referencename" class="form-control" value="{{$workerdetail->reference_name}}">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Reference Phone</label>
                                                <input type="text" name="referencephone" class="form-control" value="{{$workerdetail->reference_phone}}">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Reference Fulladdress</label>
                                                <textarea  name="referenceaddress" class="form-control" value="{{$workerdetail->reference_address}}">{{$workerdetail->reference_address}}</textarea>
                                            </div>
                                        </div>
                                        {{-----------------------------------------------------------------------------------------------------------}}
                                        <h2 hidden >WORKER DOCUMENTS</h2>
                                        <div hidden class="row">
                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">AADHAR FRONT</label>
                                                <img src= "/storage/{{$workerdetail->aadhar_frount }}" style="width: 317px;height: 82px;" />
                                                <input type="file" name="aadharfront" class="form-control" >
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">AADHAR BACK</label>
                                                <img src= "/storage/{{$workerdetail->aadhar_back }}" style="width: 317px;height: 82px;" />
                                                <input type="file" name="aadharback" class="form-control" >
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-file-max-fs">Designation DOC &nbsp;<small style="color: red">not mandatory</small></label>
                                                <input type="file" name="desiginationdoc" class="form-control" >
                                            </div>
                                        </div>
                                        {{-----------------------------------------------------------------------------------------------------------}}
                                        <h2 hidden >WORKER Designation details</h2>
                                        <div class="row">
                                            <div hidden class="col-md-4">
                                                <label for="input-file-max-fs">WORKER CHARGE</label>
                                                <select  class="form-control" name="workcharge">
                                                    <option value ="{{$workerdetail->worker_charge}}">{{$workerdetail->worker_charge}}</option>
                                                    <option value="perhour">PER HOUR</option>
                                                    <option value="oneday">ONE DAY</option>
                                                </select>
                                            </div>

                                            <div hidden class="col-md-4">
                                                <label for="input-file-max-fs">PRICE</label>
                                                <input type="text" name="price" class="form-control" value="{{$workerdetail->price}}" >
                                            </div>

                                            <div class="col-md-12">
                                                <label for="input-file-max-fs">work description</label>
                                                <textarea style="height: 202px;"  name="desiginationdetails" class="form-control" value="{{$workerdetail->desiginationdetails}}">{{$workerdetail->desiginationdetails}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="text-align:center"><br>
                                            <input type="submit" class="btn btn-success" name="save" value="Submit"><br>
                                            <br>
                                        </div>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <h2>Post your Comments and Rating</h2>--}}
{{--                    <div class="container" style="padding: 17px;background: #ffffff;">--}}
{{--                        <div class="container" style="width: 100%!important;height: 100%!important;">--}}
{{--                            <div class="postuserreview">--}}
{{--                                <form action="" method="post">--}}
{{--                                    <div class="row">--}}
{{--                                        <h1 class="card__title">How did we do?</h1>--}}
{{--                                        <p class="card__desc">Please let us know how we did with your support request. All feedback is appreciated--}}
{{--                                            to help us improve our offering!</p>--}}
{{--                                        <div class="col-md-8">--}}
{{--                                            <textarea placeholder="write your comments"></textarea>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <div class="container">--}}
{{--                                                <div class="feedback">--}}
{{--                                                    <div class="rating">--}}
{{--                                                        <input type="radio" name="rating" id="rating-5">--}}
{{--                                                        <label for="rating-5"></label>--}}
{{--                                                        <input type="radio" name="rating" id="rating-4">--}}
{{--                                                        <label for="rating-4"></label>--}}
{{--                                                        <input type="radio" name="rating" id="rating-3">--}}
{{--                                                        <label for="rating-3"></label>--}}
{{--                                                        <input type="radio" name="rating" id="rating-2">--}}
{{--                                                        <label for="rating-2"></label>--}}
{{--                                                        <input type="radio" name="rating" id="rating-1">--}}
{{--                                                        <label for="rating-1"></label>--}}
{{--                                                        <div class="emoji-wrapper">--}}
{{--                                                            <div class="emoji">--}}
{{--                                                                <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
{{--                                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>--}}
{{--                                                                    <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>--}}
{{--                                                                    <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>--}}
{{--                                                                    <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>--}}
{{--                                                                    <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>--}}
{{--                                                                    <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>--}}
{{--                                                                    <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>--}}
{{--                                                                    <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>--}}
{{--                                                                    <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>--}}
{{--                                                                </svg>--}}
{{--                                                                <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
{{--                                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>--}}
{{--                                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>--}}
{{--                                                                    <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>--}}
{{--                                                                    <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>--}}
{{--                                                                    <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>--}}
{{--                                                                    <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>--}}
{{--                                                                    <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>--}}
{{--                                                                    <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>--}}
{{--                                                                    <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>--}}
{{--                                                                    <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>--}}
{{--                                                                    <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>--}}
{{--                                                                </svg>--}}
{{--                                                                <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
{{--                                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>--}}
{{--                                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>--}}
{{--                                                                    <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>--}}
{{--                                                                    <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>--}}
{{--                                                                    <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>--}}
{{--                                                                    <g fill="#fff">--}}
{{--                                                                        <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>--}}
{{--                                                                        <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>--}}
{{--                                                                    </g>--}}
{{--                                                                    <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>--}}
{{--                                                                    <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>--}}
{{--                                                                </svg>--}}
{{--                                                                <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
{{--                                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>--}}
{{--                                                                    <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>--}}
{{--                                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>--}}
{{--                                                                    <g fill="#fff">--}}
{{--                                                                        <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>--}}
{{--                                                                        <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>--}}
{{--                                                                    </g>--}}
{{--                                                                    <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>--}}
{{--                                                                    <g fill="#fff">--}}
{{--                                                                        <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>--}}
{{--                                                                        <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>--}}
{{--                                                                    </g>--}}
{{--                                                                    <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>--}}
{{--                                                                    <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>--}}
{{--                                                                </svg>--}}
{{--                                                                <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
{{--                                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>--}}
{{--                                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>--}}
{{--                                                                    <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>--}}
{{--                                                                    <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>--}}
{{--                                                                    <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>--}}
{{--                                                                    <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>--}}
{{--                                                                    <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>--}}
{{--                                                                    <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>--}}
{{--                                                                    <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>--}}
{{--                                                                    <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>--}}
{{--                                                                </svg>--}}
{{--                                                                <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">--}}
{{--                                                                    <g fill="#ffd93b">--}}
{{--                                                                        <circle cx="256" cy="256" r="256"/>--}}
{{--                                                                        <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>--}}
{{--                                                                    </g>--}}
{{--                                                                    <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>--}}
{{--                                                                    <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>--}}
{{--                                                                    <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>--}}
{{--                                                                    <g fill="#38c0dc">--}}
{{--                                                                        <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>--}}
{{--                                                                    </g>--}}
{{--                                                                    <g fill="#d23f77">--}}
{{--                                                                        <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>--}}
{{--                                                                    </g>--}}
{{--                                                                    <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>--}}
{{--                                                                    <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>--}}
{{--                                                                    <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>--}}
{{--                                                                </svg>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <button style="margin-top: 5px;">submit</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    {{--user description--}}
{{--                    <h2>WORK DESCRIPTION</h2>--}}
{{--                    <div class="container" style="padding: 7px;background: #ffffff;">--}}
{{--                        <div class="container" style="width: 100%!important; height: 100%!important;padding: 6px;margin-bottom: 9px;width: 100%!important;height: 100%!important;">--}}
{{--                            <div class="userreview">--}}
{{--                                <ul style="margin: 0%;padding: 0%">--}}
{{--                                    <li><i>CARPENTER</i></li>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                    <li><i>WINDOWS AND DOOR</i></li>--}}
{{--                                </ul>--}}
{{--                                <p>cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    --}}{{--user review--}}
{{--                    <h2>USER REVIEW (6)</h2>--}}
{{--                    <div class="container" style="min-height: 100px;max-height: 557px;overflow: scroll;background: #ffffff;">--}}
{{--                        <div class="container" style="width: 100%!important;height: 100%!important;">--}}
{{--                            <div class="userreview" style="border-bottom: 1px solid black!important;">--}}
{{--                                <ul style="margin: 0%;padding: 0%">--}}
{{--                                    <li><i>rahul</i></li>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                    <li style="margin-top: 5px;background: green;color: white;"><i style="font-size: 18px;padding: 4px;" class="fa fa-star">5</i></li>--}}
{{--                                    <li><i>good work</i></li>--}}
{{--                                </ul>--}}
{{--                                <p>cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.</p>--}}
{{--                            </div>--}}
{{--                            <div class="userreview" style="border-bottom: 1px solid black!important;">--}}
{{--                                <ul style="margin: 0%;padding: 0%">--}}
{{--                                    <li><i>rahul</i></li>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                    <li style="margin-top: 5px;background: green;color: white;"><i style="font-size: 18px;padding: 4px;" class="fa fa-star">3</i></li>--}}
{{--                                    <li><i>good work</i></li>--}}
{{--                                </ul>--}}
{{--                                <p>cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.</p>--}}
{{--                            </div>--}}
{{--                            <div class="userreview" style="border-bottom: 1px solid black!important;">--}}
{{--                                <ul style="margin: 0%;padding: 0%">--}}
{{--                                    <li><i>rahul</i></li>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                    <li style="margin-top: 5px;background: green;color: white;"><i style="font-size: 18px;padding: 4px;" class="fa fa-star">3</i></li>--}}
{{--                                    <li><i>good work</i></li>--}}
{{--                                </ul>--}}
{{--                                <p>cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.</p>--}}
{{--                            </div>--}}
{{--                            <div class="userreview" style="border-bottom: 1px solid black!important;">--}}
{{--                                <ul style="margin: 0%;padding: 0%">--}}
{{--                                    <li><i>rahul</i></li>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                    <li style="margin-top: 5px;background: green;color: white;"><i style="font-size: 18px;padding: 4px;" class="fa fa-star">3</i></li>--}}
{{--                                    <li><i>good work</i></li>--}}
{{--                                </ul>--}}
{{--                                <p>cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.</p>--}}
{{--                            </div>--}}
{{--                            <div class="userreview" style="border-bottom: 1px solid black!important;">--}}
{{--                                <ul style="margin: 0%;padding: 0%">--}}
{{--                                    <li><i>rahul</i></li>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                    <li style="margin-top: 5px;background: green;color: white;"><i style="font-size: 18px;padding: 4px;" class="fa fa-star">3</i></li>--}}
{{--                                    <li><i>good work</i></li>--}}
{{--                                </ul>--}}
{{--                                <p>cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.</p>--}}
{{--                            </div>--}}
{{--                            <div class="userreview" style="border-bottom: 1px solid black!important;">--}}
{{--                                <ul style="margin: 0%;padding: 0%">--}}
{{--                                    <li><i>rahul</i></li>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                    <li style="margin-top: 5px;background: green;color: white;"><i style="font-size: 18px;padding: 4px;" class="fa fa-star">3</i></li>--}}
{{--                                    <li><i>good work</i></li>--}}
{{--                                </ul>--}}
{{--                                <p>cabinetry, repair works and more. Please note: Convenience fee/ visiting charge of Rs 199 will be charged if no job is performed after the Pro visits the customer site.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>


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
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGMYS-RP5r37u2t6ToQDKxyjerY-jDZj8&amp;libraries=places"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/bootstrap@4.0.0"></script>
    {{--        ------------------carousel first one banner slider--------------------}}
    <script>
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






        $(document).ready(function(){
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
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            var topItem = 0,
                leftItem = 0,
                popupHeight = 500;

            $(".owl-carousel .item").on("click", function(e) {
                var $this = $(this),
                    $parent = $this.parents(".owl-carousel-wrap"),
                    content = $this.html(),
                    $popup = $parent.find(".popup");

                topItem = $this.offset().top - $parent.offset().top + $this.height() / 2;
                leftItem = $this.offset().left - $parent.offset().left + $this.width() / 2;

                $popup.css({
                    top: topItem,
                    left: leftItem,
                    width: "100%",
                    height: "100%"
                });

                $popup.html(content).stop().animate(
                    {
                        top: - ((popupHeight - $this.parent().outerHeight()) / 2),
                        left: 0,
                        width: "100%",
                        height: popupHeight,
                        opacity: 1
                    },
                    400
                );
            });

            $(".popup").on("click", function(e) {
                $(this).stop().animate(
                    {
                        width: "100%",
                        height: "100%",
                        top: topItem,
                        left: leftItem,
                        opacity: 0
                    },
                    400
                );
            });
        });
    </script>
    {{----------------------------------owl carousel--------------------}}

@endpush
