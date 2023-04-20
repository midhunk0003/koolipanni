<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>KOOLIPANNI</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- v4.0.0 -->
<link rel="stylesheet" href="{{url('assets/admin/dist/bootstrap/css/bootstrap.min.css')}}">
<!-- Favicon -->
<?php
$logo = \App\Models\LogoModel::first();
?>
<?php
$logoimg = env('image_path');
?>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $logoimg?>{{$logo->logo}}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- Theme style -->
<link rel="stylesheet" href="{{url('assets/admin/dist/css/style.css')}}">
<link rel="stylesheet" href="{{url('assets/admin/dist/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/admin/dist/css/et-line-font/et-line-font.css')}}">
<link rel="stylesheet" href="{{url('assets/admin/dist/css/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{url('assets/admin/dist/css/simple-lineicon/simple-line-icons.css')}}">
<!-- dropify -->
<link rel="stylesheet" href="{{url('assets/admin/dist/plugins/dropify/dropify.min.css')}}">
<link rel="stylesheet" href="{{url('assets/admin/dist/plugins/datatables/css/dataTables.bootstrap.min.css')}}">

<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
{{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}

<![endif]-->
{{--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}



<link rel="stylesheet" href="{{url('assets/admin/dist/plugins/formwizard/jquery-steps.css')}}">

<link rel="stylesheet" href="{{url('assets/admin/dist/plugins/summernote/summernote-bs4.css')}}">

