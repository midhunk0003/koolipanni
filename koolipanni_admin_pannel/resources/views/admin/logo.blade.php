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
            <h1>LOGO</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><i class="fa fa-angle-right"></i>LOGO</li>
            </ol>
        </div>
        <a href="{{url('/addstate')}}" class="btn btn-primary">add state</a>
        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black1"><i class="fa fa-file-image-o" style="margin: 4px;

    padding-right: 8px;"></i>LOGO</h4>

                    @include('layouts.admin.partials.flash-message')

                    <div class="btn1">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add LOGO</button>

                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ url('/store_logo') }}" enctype="multipart/form-data" method="post" id="create_category">
                                {{csrf_field()}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add LOGO</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span style="font-size: 34px;font-weight: 200;" aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="input-file-max-fs">Image</label>
                                        <input autocomplete="off" type="file" class="form-control" placeholder="image" id="image" name="image"   />
                                    </div>


                                    <div class="modal-footer">
                                        <button  class="btn btn-primary2">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th >LOGO</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php
                                $i=1;
                            @endphp
                            @foreach($logo as $get)

                                <tr>
                                    <td>{{$i}}</td>
                                    <td>
                                        <img style="width: 100%;height: 100px;" src="{{url('storage/' . $get->logo)}}" width="20" height="20" />
                                    </td>
                                    <td style="padding: 10px;"> <button  data-toggle="modal" data-target="#editexampleModal"
                                                                         row-id = "{{$get->id}}"
                                                                         row-catimg="{{url('storage/' . $get->category_image)}}"
                                                                         type="button" class="btn btn-primary editcat"><i class="fa fa-pencil"></i></button>


                                        <a href="/deletelogo/{{$get->id}}"><button onclick="return confirm('Are you sure to delete?')"  type="button" class="btn btn-info reject"><i class="fa fa-trash"></i> </button></a>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{ url('/edit_category')}}" enctype="multipart/form-data" method="post" id="edit_category">
            {{csrf_field()}}
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Edit LOGO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span style="font-size: 34px;
                                                            font-weight: 200;" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="hidden" name="category_id" id="category_id1" value="category_id">
                    <div class="modal-body">
                        <label for="input-file-max-fs">Image</label>
{{--                        @if(!empty($get->category_image))--}}
{{--                            <img src="{{url('storage/' . $get->category_image)}}" id="editimage" width="200" height="100" />--}}
{{--                            <input type="file" class="form-control"  id="editimage" name="editimage"   />--}}
{{--                        @endif--}}
                    </div>
                    <div class="modal-footer">
                        <button  class="btn btn-primary2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection



@push('scripts')

    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>

    {{--            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    <script>
        $("#create_category").validate({
            rules: {
                category: "required"
            }
        });
        $(document).ready(function() {
            $(document).on('click','.editcat', function (e) {
                var catid = $(this).attr("row-id");
                var category = $(this).attr("row-cat");
                var category_img = $(this).attr("row-catimg");
                //var categoryimg = $(this).attr("row-catimg");
                //alert(categoryimg);
                $('#category_id1').val(catid);
                $('#category_name1').val(category);
                $('#editimage').val(category_img);
            });
        });
    </script>
@endpush

