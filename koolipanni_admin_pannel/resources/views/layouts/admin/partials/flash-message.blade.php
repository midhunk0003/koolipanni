@if(session()->has('success'))
    <div class="row" style="    position: absolute;
    width: 100%;">
        <div class="col-md-5 " style="    margin: 0 auto;

    /* position: absolute; */
    z-index: 999;
    top: -125px;
    /* right: 315px;
   ">
            <div class="alert dark alert-icon alert-success alert-dismissible alert-block"
                 role="alert" style="background-color: #008000c2 !important;
    text-align: center;
    padding: 12px 0;
    margin: 0;
    align-items: center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

                <p style="font-size: 18px;
    margin: 0;"> <i class="fa fa-check-circle" style=" margin-right: 4px;
    font-size: 21px;"></i>{{ session()->get('success') }}</p>
            </div>
        </div>
    </div>
@elseif(session()->has('error'))
    <div class="row" style="    position: absolute;
    width: 100%;">
        <div class="col-md-5 " style="    margin: 0 auto;

    /* position: absolute; */
    z-index: 999;
    top: -125px;
    /* right: 315px;
   ">
            <div class="alert dark alert-icon alert-danger alert-dismissible alert-block deletesuccess"
                 role="alert" style="background-color:#bc2f2f !important;text-align: center;
    padding: 12px 0;
    margin: 0;
    align-items: center;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <p style="font-size: 18px;
    margin: 0;"> <i class="icon wb-alert" style=" margin-right: 4px;
    font-size: 21px;"></i>{{ session()->get('error') }}</p>
{{--                <i class="icon wb-alert " aria-hidden="true"></i>--}}
{{--                <strong>{{ session()->get('error') }}</strong>--}}
            </div>
        </div>
    </div>
@endif

@if(session()->has('warning'))
    <div class="row" style="    position: absolute;
    width: 100%;">
        <div class="col-md-5 " style="    margin: 0 auto;

    /* position: absolute; */
    z-index: 999;
    top: -125px;
    /* right: 315px;
   ">

    <div class="alert " style="color: #fff;
    border: none;
    background: #dcac00;text-align: center; padding: 12px 0;
    margin: 0;">


       <p style="font-size: 18px;margin: 0;">{{ session()->get('warning') }}</p>

    </div>
    </div>
    </div>
@endif
