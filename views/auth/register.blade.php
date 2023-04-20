
@extends('layouts.stylefiles.app')

@section('content')
    <div class="container" style="height: 100%">
    </div>
            <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    {{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">--}}
    <style>
        input:-webkit-autofill {
            box-shadow: 0 0 0 9999px #fff inset;
        }

        .container1{
            width:360px;
            height:500px;
            margin-top: 26%;
            margin-bottom: -15%!important;
            background:#383838;
            position: inherit;
            left:50%;
            transform: translate(-50%, -50%);
            color:white;
            text-align: center;
        }
        @media  (max-width: 600px) {
            .container1{
                width:360px;
                height:500px;
                margin-top: 69%!important;
                margin-bottom: -44%!important;
                background:#545454;
                position: inherit;
                left:50%;

                transform: translate(-50%, -50%);
                color:white;
                text-align: center;
            }
        }.box1 input
         .container1 h1{
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
            bottom:133px;
            left:50%;
            transform:translateX(-50%);
            width:260px;
            padding:10px 0;
            text-decoration:none;
            text-align:center;
            transition:0.4s all;
            color:white;
        }
        a:hover{
            background:#00000040;
        }
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
    </style>
    <body style="    background: url(https://img.freepik.com/free-photo/colorful-composition-with-mop-sponges-rags-gloves-detergents-general-cleaning-cleaning-service-concept-background_169016-10763.jpg?w=2000);
    min-height: 100%!important;
    background-size: cover;">
    <div class="container1">
        <h1>Login</h1>
        <form action="">
            <div class="row" style="
    margin-left: 15%;width:260px;
                ">
                <input type="text" placeholder="Username" class="box1" required maxlength="25">
            </div>

            <div class="row" style="
    margin-left: 15%;width:260px;
                ">
                <input  type="password" placeholder="Password" class="box1"	required maxlength="15">
            </div>
            <input type="submit" class="btn1" value="Login">
        </form>
        <a href="#" class="b1">Forget Password?</a>
        <a href="#" class="b2">Create Account</a>
        <br><br><hr>
        <p>Or Login With</p>
        <div class="icon">
            <i class="fab fa-github fa-2x"></i>
            <i class="fab fa-google fa-2x"></i>
            <i class="fab fa-facebook-square fa-2x"></i>
        </div>
    </div>
    </body>
@endsection

@push('scripts')

@endpush
