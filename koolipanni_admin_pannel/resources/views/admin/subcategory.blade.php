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
            <h1>Sub Category</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><i class="fa fa-angle-right"></i>sub Category</li>
            </ol>
        </div>
        <a href="{{url('/addstate')}}" class="btn btn-primary">add state</a>
        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black1"><i class="fa fa-file-image-o" style="margin: 4px;

    padding-right: 8px;"></i>Sub Category</h4>

                    @include('layouts.admin.partials.flash-message')

                    <div class="btn1">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add sub Category</button>

                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ url('/store_subcategory') }}" enctype="multipart/form-data" method="post" id="create_subcategory">
                                {{csrf_field()}}

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add sub Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span style="font-size: 34px;
                                            font-weight: 200;" aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="input-file-max-fs">category</label>
                                        <select class="form-control" name="category_id" id="categoryid">
                                            <option>--category--</option>
                                            @foreach($category as $get)
                                            <option value="{{$get->id}}">{{$get->category_name}}</option>
                                            @endforeach
                                        </select>

                                        <label for="input-file-max-fs">sub category</label>
                                        <input autocomplete="off" type="text" class="form-control" placeholder="name" id="subcategoryid" name="subcategory"   />

                                        <label for="input-file-max-fs">subcat description</label>
                                        <textarea class="form-control" name="subcat_description" id="subcat_description"></textarea>

                                        <label for="input-file-max-fs">Work details</label>
                                        <textarea class="form-control" name="workdetails" id="workdetails"></textarea>

                                        <label for="input-file-max-fs">Duration</label>
                                        <input autocomplete="off" type="text" class="form-control" placeholder="Duration" id="duration" name="duration"   />

                                        <label for="input-file-max-fs">Turnaround Time</label>
                                        <input autocomplete="off" type="text" class="form-control" placeholder="Turnaround" id="turnaroundid" name="turnaround"   />

                                        <label for="input-file-max-fs">general Pricing</label>
                                        <input autocomplete="off" type="text" class="form-control" placeholder="generalpricing" id="generalpricing" name="generalpricing"   />

                                        <label for="input-file-max-fs">starting Price</label>
                                        <input autocomplete="off" type="text" class="form-control" placeholder="startingprice" id="startingprice" name="startingprice"   />



                                        <table class="table table-bordered" id="dynamicAddRemove">
                                            <tr>
                                                <th>What's Included in General carpentry work</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="workinclude[]" placeholder="Enter details" class="form-control" />
                                                </td>
                                                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add details</button></td>
                                            </tr>
                                        </table>


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
                                <th >category name</th>
                                <th >sub category</th>
                                <th >duration</th>
                                <th >workinclude</th>
                                <th >turnaround_time</th>
                                <th >general_starting_price</th>
                                <th >starting_price</th>
                                <th >category image</th>
                                <th >subcategory image</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php
                                $i=1;
                            @endphp
                            @foreach($subcategory as $get)

                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$get->category_name}}</td>
                                    <td>{{$get->subcategory}}</td>
                                    <td>{{$get->duration}}</td>
                                    <td>
                                        @foreach($get->workinclude as $show1)
                                      <strong>{{$i++}}</strong>{{$show1->workerincludeddetails}}<br>
                                        @endforeach
                                    </td>
                                    <td>{{$get->turnaround_time}}</td>
                                    <td>{{$get->general_starting_price}}</td>
                                    <td>{{$get->starting_price}}</td>
                                    <td>
                                        <img style="width: 100%;height: 100px;" src="{{url('storage/' . $get->category_image)}}" width="10" height="10" />
                                    </td>
                                    <td>
                                        <img style="width: 100%;height: 100px;" src="{{url('storage/' . $get->image)}}" width="10" height="10" />
                                    </td>
                                    <td style="padding: 10px;"> <button  data-toggle="modal" data-target="#editexampleModal"
                                                                         row-id = "{{$get->id}}"
                                                                         row-catid = "{{$get->catid}}"
                                                                         row-cat="{{$get->category_name}}"
                                                                         row-subcat="{{$get->subcategory}}"
                                                                         row-duration="{{$get->duration}}"
                                                                         row-subcat_description="{{$get->subcat_description}}"
                                                                         row-work_details="{{$get->work_details}}"
                                                                         row-turnaround_time="{{$get->turnaround_time}}"
                                                                         row-general_starting_price="{{$get->general_starting_price}}"
                                                                         row-starting_price="{{$get->starting_price}}"
                                                                         row-catimg="{{url('storage/' . $get->category_image)}}"
                                                                         row-subcatimg="{{url('storage/' . $get->image)}}"
                                                                         type="button" class="btn btn-primary editcat"><i class="fa fa-pencil"></i></button>


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
        <form action="{{ url('/edit_category')}}" enctype="multipart/form-data" method="post" id="editcreate_subcategory">
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
{{--                    <input type="hidden" name="category_id" id="category_id1" value="category_id">--}}
                    <div class="modal-body">
                        <label for="input-file-max-fs">category</label>
                        <select class="form-control" name="category_id" id="category_id1">
                            <option></option>
                            @foreach($category as $get)
                                <option value="{{$get->id}}">{{$get->category_name}}</option>
                            @endforeach
                        </select>

                        <label for="input-file-max-fs">sub category</label>
                        <input autocomplete="off" type="text" class="form-control" placeholder="name" id="subcat1" name="subcategory"   />

                        <label for="input-file-max-fs">subcat description</label>
                        <textarea class="form-control" name="subcat_description" id="subcat_description1"></textarea>

                        <label for="input-file-max-fs">Work details</label>
                        <textarea class="form-control" name="workdetails" id="work_details1"></textarea>

                        <label for="input-file-max-fs">Duration</label>
                        <input autocomplete="off" type="text" class="form-control" placeholder="Duration" id="duration1" name="duration"   />

                        <label for="input-file-max-fs">Turnaround Time</label>
                        <input autocomplete="off" type="text" class="form-control" placeholder="Turnaround" id="turnaround_time1" name="turnaround"   />

                        <label for="input-file-max-fs">general Pricing</label>
                        <input autocomplete="off" type="text" class="form-control" placeholder="generalpricing" id="general_starting_price1" name="generalpricing"   />

                        <label for="input-file-max-fs">starting Price</label>
                        <input autocomplete="off" type="text" class="form-control" placeholder="startingprice" id="starting_price1" name="startingprice"   />



                        <table class="table table-bordered" id="dynamicAddRemove">
                            <tr>
                                <th>What's Included in General carpentry work</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="workinclude[]" placeholder="Enter details" class="form-control" />
                                </td>
                                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add details</button></td>
                            </tr>
                        </table>
                        <label for="input-file-max-fs">Image</label>
                        @if(!empty($get->category_image))
                            <img src="{{url('storage/' . $get->category_image)}}" id="editimage" width="200" height="100" />
                            <input type="file" class="form-control"  id="editimage" name="editimage"   />
                        @endif
                        <label for="input-file-max-fs">subImage</label>
                        @if(!empty($get->category_image))
                            <img src="{{url('storage/' . $get->category_image)}}" id="subcatimg1" width="200" height="100" />
                            <input type="file" class="form-control"  id="subcatimg1" name="subcatimg1"   />
                        @endif
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


        //dynamicaddbutton
        // var i = 0;
        $("#dynamic-ar").click(function (){
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="workinclude[]" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
        //dynamicaddbutton end

        // $("#create_subcategory").validate({
        //     rules: {
        //         category_id: "required",
        //         subcategory: "required",
        //         image: "required",
        //     }
        // });
        $("#editcreate_subcategory").validate({
            rules: {
                category_id: "required",
                subcategory: "required",
                image: "required",
            }
        });
        $(document).ready(function() {
            $(document).on('click','.editcat', function (e) {
                var subcatid = $(this).attr("row-id");
                var catid = $(this).attr(" row-catid");
                var category = $(this).attr("row-cat");
                var subcat = $(this).attr("row-subcat");
                var duration = $(this).attr("row-duration");
                var subcat_description = $(this).attr("row-subcat_description");
                var work_details = $(this).attr("row-work_details");
                var turnaround_time = $(this).attr("row-turnaround_time");
                var general_starting_price = $(this).attr("row-general_starting_price");
                var starting_price = $(this).attr("row-starting_price");
                var subcatimg = $(this).attr("row-subcatimg");
                var category_img = $(this).attr("row-catimg");
                alert(catid);
                $('#subcatid1').val(subcatid);
                $('#category_id1').val(catid);
                $('#editcategory_name').val(category);
                $('#subcat1').val(subcat);
                $('#duration1').val(duration);
                $('#subcat_description1').val(subcat_description);
                $('#work_details1').val(work_details);
                $('#turnaround_time1').val(turnaround_time);
                $('#general_starting_price1').val(general_starting_price);
                $('#starting_price1').val(starting_price);
                $('#subcatimg1').val(subcatimg);
                $('#editimage').val(category_img);
            });
        });
    </script>
@endpush

