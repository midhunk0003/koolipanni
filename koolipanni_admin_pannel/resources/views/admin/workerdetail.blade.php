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
            <h1>Category</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><i class="fa fa-angle-right"></i>Category</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black1"><i class="fa fa-file-image-o" style="margin: 4px;

    padding-right: 8px;"></i>WORKER DETAILS AND DOCUMANTATION</h4>

                    @include('layouts.admin.partials.flash-message')

                    <div class="btn1">
                      <a href="{{url('/addworkingdetailsanddocumentsview')}}" ><button class="btn btn-primary"><i class="fa fa-plus"></i> Add WORKER DETAILS AND DOCUMANTATION</button></a>
                    </div>

{{--                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog">--}}
{{--                            <form action="{{ url('/store_category') }}" enctype="multipart/form-data" method="post" id="create_category">--}}
{{--                                {{csrf_field()}}--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                            <span style="font-size: 34px;--}}
{{--                                            font-weight: 200;" aria-hidden="true">&times;</span>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <label for="input-file-max-fs">category name</label>--}}
{{--                                        <input autocomplete="off" type="text" class="form-control" placeholder="name" id="category" name="category"   />--}}

{{--                                        <label for="input-file-max-fs">Image</label>--}}
{{--                                        <input autocomplete="off" type="file" class="form-control" placeholder="image" id="image" name="image"   />--}}
{{--                                    </div>--}}


{{--                                    <div class="modal-footer">--}}
{{--                                        <button  class="btn btn-primary2">Submit</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th >EN ROLL ID</th>
                                <th >UPDATE & MORE DETAILS</th>
                                <th >CATEGORY</th>
                                <th >WORKER</th>
                                <th >IMAGE</th>
                                <th >active/non active</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php
                                $i=1;
                            @endphp
                            @foreach($workerdetails as $get)

                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$get->register_enroll_id}}</td>
                                    <td>
                                        <a href="/viewworkerdetails/{{$get->id}}"><button onclick="return confirm('UPDATE OR VERIFY')"  type="button" class="btn btn-primary2">UPDATE & MORE DETAILS<i class="fa fa-envelope-open"></i></button></a>
                                    </td>
                                    <td>{{$get->category_name}}</td>
                                    <td>{{$get->fname}}</td>
                                    <?php
                                       $profileimg = env('image_path2');
                                    ?>
                                    <td>
                                        <img style="width: 100%;height: 100px;" src="<?php echo $profileimg?>{{$get->workerprofileimage}}" width="20" height="20" />
                                    </td>
                                    <style>
                                      input[type="checkbox"]
                                      {
                                          cursor: pointer;
                                          position: relative;
                                          width: 80px;
                                          height: 40px;
                                          -webkit-appearance: none;
                                          background: #c69500;
                                          outline: none;
                                          transition: .5s;
                                          box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                                      }
                                      input:checked[type="checkbox"]
                                      {
                                          background: green;

                                      }
                                      input[type="checkbox"]:before
                                      {
                                         content: '';
                                          position: absolute;
                                          width: 40px;
                                          height: 40px;
                                          background: #0b2e13;
                                          transition: .5s;
                                          transform: scale(1.1);

                                      }
                                      input:checked[type="checkbox"]:before
                                      {
                                          left: 40px;

                                      }
                                    </style>
                                    <td>
                                        @if($get->status == 1)
                                        <input type="checkbox"  checked  id="check" class="toggle" value="{{$get->id}}" row-catid="{{$get->id}}" row-status="{{$get->status}}">
                                            <h6>verified</h6>
                                        @else
                                         <input type="checkbox"   id="check" class="toggle" value="{{$get->id}}" row-catid="{{$get->id}}" row-status="{{$get->status}}">
                                            <p>UnVerified</p>
                                        @endif
                                    </td>
                                    <td style="padding: 10px;">
                                        <a href="/delete_category/{{$get->id}}"><button onclick="return confirm('Are you sure to delete?')"  type="button" class="btn btn-info reject"><i class="fa fa-trash"></i> </button></a>
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
        <form action="{{ url('/edit_category') }}"  method="post" id="edit_category">
            {{csrf_field()}}
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Edit category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                           <span style="font-size: 34px;
                                                            font-weight: 200;" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="hidden" name="category_id" id="category_id1" value="category_id">
                    <div class="modal-body">
                        <label for="input-file-max-fs">category name</label>
                        <input autocomplete="off" type="text" class="form-control" placeholder="name" id="category_name1" name="category_name"   />

                        {{--                                                    <label for="input-file-max-fs">Image</label>--}}
                        {{--                                                    @if($get->image)--}}
                        {{--                                                    <img src="{{url('storage/' . $get->image)}}" id="editimage" width="200" height="100" />--}}
                        {{--                                                    <input type="file" class="form-control"  id="editimage" name="editimage"   />--}}
                        {{--                                                    @endif--}}
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
        $(document).ready(function() {
            $(document).on('click','.toggle', function (e) {
                var catid = $(this).attr("row-catid");
                var status = $(this).attr("row-status");
                // alert(status);
                if (status == 0) {
                    confirm('press ok to make  ad approve!')
                        // alert(catid);
                        $.ajax({
                            url: "/vaificationstatuspost/" + catid + "",
                            method: "POST",
                            data: {
                                "_token": "{{csrf_token()}}",
                            },
                            success: function (response) {
                                console.log(response);
                                window.location.reload();
                            }
                        })
                } else{
                    confirm('press ok this ad block')
                    // alert(catid);
                    $.ajax({
                        url:"/unvaificationstatuspost/"+catid+"",
                        method:"POST",
                        data:{
                            "_token":"{{csrf_token()}}",
                        },
                        success:function (response){
                            console.log(response);
                            window.location.reload();
                        }
                    })
                }
            });
        });

        $("#create_category").validate({
            rules: {
                category: "required"
            }
        });
        $(document).ready(function() {
            $(document).on('click','.editcat', function (e) {
                var catid = $(this).attr("row-id");
                var category = $(this).attr("row-cat");
                //var categoryimg = $(this).attr("row-catimg");
                //alert(categoryimg);
                $('#category_id1').val(catid);
                $('#category_name1').val(category);
                // $('#editimage').val(categoryimg);
            });
        });
    </script>
@endpush

