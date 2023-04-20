<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <!--	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">-->
    <!--===============================================================================================-->
    <!--	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">-->
    <!--===============================================================================================-->
    <!--	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/admin/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/admin/css/main.css">
    <!--===============================================================================================-->
</head>
<style>
    .img-fluid{
        height: auto;
        margin: 0 auto;
        /*width: 100%;*/
        padding: 0 83px;
    }
    .loginbutton{
        background-color: white;
        color: black;
    }
    .loginbutton:hover{
        background-color: #decabf;
        color: white;
    }

</style>
<body>

<div class="limiter">
    <div class="container-login100" style="background:linear-gradient(to bottom,  #665344 0%, #6e6478 100%);">
        <div class="wrap-login100" style="box-shadow: 7px -4px 13px -1px rgba(0,0,0);background:linear-gradient(to right, rgba(143, 114, 103, 1), rgba(133, 114, 103, 1))">

            <form method="POST"  action="{{('/login')}}" class="login100-form validate-form">
                {{csrf_field()}}



                <div class="img-fluid">
{{--                    <img src="{{url('assets/dark.png')}}">--}}
                </div>

                <span class="login100-form-title">
{{--					 Login--}}
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input autocomplete="off" class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input autocomplete="off" class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn loginbutton">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-20">
                    {{--                						<span class="txt1">--}}
                    {{--                							Forgot--}}
                    {{--                						</span>--}}
                    {{--                                    <a class="txt2" href="{{url('/forgot_view')}}">--}}
                    {{--                                        Password?--}}
                    {{--                                    </a>--}}
                </div>

                {{--                <div class="text-center p-t-60">--}}
                {{--                    <a class="txt2" href="#">--}}
                {{--                        Create your Account--}}
                {{--                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="assets/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/admin/vendor/bootstrap/js/popper.js"></script>
<script src="assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/admin/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>
<!--===============================================================================================-->
<!--	<script src="js/main.js"></script>-->

</body>
</html>
