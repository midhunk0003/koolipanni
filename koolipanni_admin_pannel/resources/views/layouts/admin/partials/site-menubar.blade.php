
<div class="wrapper boxed-wrapper">
<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->


        <!-- sidebar menu -->






        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGATION</li>

            <li {{{ (Request::is('/logoview') ? 'class= active' : '') }}}> <a href="{{url('/logoview')}}"> <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Logo</span>  </a>


            {{-- category--}}
            <li {{{ (Request::is('category') ? 'class= active' : '') }}}> <a href="{{url('/category')}}"> <i class="fa fa-list" aria-hidden="true"></i> &nbsp;&nbsp;<span>Category</span>  </a>

            </li>
            {{--end  category--}}

            {{-- category--}}
            <li {{{ (Request::is('subcategory') ? 'class= active' : '') }}}> <a href="{{url('/subcategory')}}"> <i class="fa fa-list" aria-hidden="true"></i> &nbsp;&nbsp;<span>SubCategory</span>  </a>

            </li>
            {{--end  category--}}

            {{--worker details--}}
            <li {{{ (Request::is('workerdetail') ? 'class= active' : '') }}}> <a href="{{url('/workerdetail')}}"> <i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp;&nbsp;<span>WORKERDETAILS</span>  </a>

            </li>
            {{--worker details--}}

            <li @if(Request::is('viewchangepassword') )
                class="treeview active"
                @else
                class="treeview"
                @endif
            > <a href="#"> <i class="fa fa-cogs" aria-hidden="true"></i> <span>Profile Settings</span><span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">

                    <li class=" "> <a  href="{{url('/change_password')}}"> <i class="fa fa-cog" style="margin: 4px;"></i> &nbsp;&nbsp;<span>Change Passwsord</span>  </a>

                    </li>

                    <li class=" "> <a  href="{{url('/contact_info')}}"> <i class="fa fa-cog" style="margin: 4px;"></i> &nbsp;&nbsp;<span>Contact Info</span>  </a>

                    </li>


                </ul>
            </li>
{{--            <li class=""> <a href="{{url('/pincodes')}}"> <i class="fa fa-line-chart" aria-hidden="true"></i><span>Delivery Pincodes</span>  </a>--}}

{{--            </li>--}}
            <li class=" "> <a href="{{url('/logout')}}"> <i class="fa fa-sign-out" ></i> <span>Logout</span>  </a>

            </li>







        </ul>
    </div>

</aside>
