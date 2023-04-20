{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>change password</h1>--}}
{{--</body>--}}
{{--</html>--}}
@extends('layouts.admin.app')
@section('content')
    <body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">


        <style>
            .box-gradient {
                background: #328dff;
                background: -webkit-linear-gradient(135deg, #3d74f1, #9986ee);
                background: linear-gradient(-45deg, #14942a, #2bdd35);
            }
            .box-gradient-4 {
                background: #fe413b;
                background: -webkit-linear-gradient(135deg, #fe413b, #fc7572);
                background: linear-gradient(-45deg, #e22c26, #ff817e);
            }
            .box-gradient-2 {
                background: #7a86ff;
                background: -webkit-linear-gradient(135deg, #7a86ff, #949dff);
                background: linear-gradient(-45deg, #0f93bd, #73d6ff);
            }
            .box-gradient-3 {
                background: #fab63f;
                background: -webkit-linear-gradient(135deg, #fab63f, #fbc465);
                background: linear-gradient(-45deg, #e8980c, #ffc767);
            }
            .headbox{

                font-size: 31px;
                color: #fff;

            }
            .info-box-icon{
                margin-top: 39px;

            }
            .card-header {
                background-color: #c92c2c;
                color: #fff;
                /* font-size: 33px; */
            }
            .card-title {
                /* margin-bottom: .75rem; */
                font-size: 27px;
                margin: 0;
                padding: 6px 0px;
            }
            .btn-primary3 {
                background-color: #c92c2c;
                border-color: #ffffff;
            }
            .btn-outline-success2 {
                color: #f8be07;
                background-color: transparent;
                background-image: none;
                border-color: #f8be07;
            }
            .ml-auto{
                background: #fff;
                padding: 0px;
                margin: 0;
                height: 25px;
                border-radius: 3px;
            }
            .bg-green{
                background-color: #8049bc !important;
            }
            .td5{
                padding: 15px 20px!important;
                font-size: 17px;
            }


            .btn-roundgreen{


                background: #fff;
                color: #2fa8d2;
                padding: 8px 14px;
                border-radius: 45px;
                border: 1px solid #2fa8d2 ;
            }
            button.btn.btn-roundgreen:hover {
                background: #2fa8d2;
                color: #fff;
                border: 1px solid #2fa8d2 ;
                padding: 8px 14px;
                border-radius: 45px;
            }

            .box-rounded:hover {
                border-radius: 5px;
                transition: 0.6s;
                transform: scale(1.1);
            }

            .box-rounded {
                cursor:pointer
            }
            .card{
                margin-top: 111px;
            }
        </style>
        <!-- Left side column. contains the logo and sidebar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header sty-one">
                <h1>Change Password</h1>

            </div>

            <!-- Main content -->
            <div class="content">
                <div class="card" style="margin-top: 0!important;">
                    <div class="card-body">
                        <form id="form-change-password" role="form" method="POST" action="{{ url('/update_password') }}" novalidate class="form-horizontal">
                            {{csrf_field()}}
                            @include('layouts.admin.partials.flash-message')
                            <div class="col-md-9">
                                <label for="current-password" class="col-sm-4 control-label">Current Password</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="password" class="form-control" id="currentpassword" name="currentpassword" placeholder="Password">
                                    </div>
                                </div>
                                <label for="password" class="col-sm-4 control-label">New Password</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="password"  class="form-control @error('password_confirmation') {{ $message }} is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
                                        @error('password_confirmation')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-5 col-sm-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>

    </div>

    @endsection
    @push('scripts')


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

        <script>

            $(document).ready(function(){
                "use strict";
                // alert("dfgfdg");
                $("#form-change-password").validate({
                    rules: {
                        currentpassword: "required",
                        password: "required",
                        password_confirmation: "required"
                    }
                });
            });
        </script>
    @endpush





