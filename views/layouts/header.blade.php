
@include('layouts.stylefiles.site-style')

<style>
    body{
        overflow: auto!important;
    }
</style>
{{--   <--------------------style header--------------->--}}
<style>
    .fa-bell:before {
        content: "\f0f3";
        font-size: 25px!important;
    }
    .fa-envelope-square:before {
        content: "\f0f3";
        font-size: 26px!important;
    }
    .fa-heart:before {
        content: "\f0f3";
        font-size: 25px!important;
    }
    #notification-btn {
        all: unset;
        position: relative;
    }

    #notification-btn::before {
        /*  main is this attr()  */
        content: attr(data-notification-count);

        position: absolute;
        width: 15px;
        height: 15px;
        display: grid;
        place-items: center;
        color: white;
        font-weight: 600;
        font-size: 11px!important;
        border-radius: 999px;
        background-color: red;
        top: -4px;
        right: -1px;
    }

    #wishlist-btn {
        all: unset;
        position: relative;
    }

    #wishlist-btn::before {
        /*  main is this attr()  */
        content: attr(data-notification-count);

        position: absolute;
        width: 15px;
        height: 15px;
        display: grid;
        place-items: center;
        color: white;
        font-weight: 600;
        font-size: 11px!important;
        border-radius: 999px;
        background-color: red;
        top: -4px;
        right: -1px;
    }


    .notificationrow ul li{
        width: auto;
        display: inline-block!important;
        margin-top: 15px;
        text-decoration: none!important;
        color: black!important;
    }
    .notificationrow ul li a{

        color: black!important;
    }

    ol, ul {
        list-style:none;
    }

    blockquote, q {
        -webkit-hyphens:none;
        -moz-hyphens:none;
        -ms-hyphens:none;
        hyphens:none;
        quotes:none;
    }

    figure {
        margin:0;
    }

    :focus {
        outline:0;
    }

    table {
        border-collapse:collapse;
        border-spacing:0;
    }

    img {
        border:0;
        -ms-interpolation-mode:bicubic;
        vertical-align:middle;
    }

    legend {
        white-space:normal;
    }

    button,
    input,
    select,
    textarea {
        font-size:100%;
        margin:0;
        max-width:100%;
        vertical-align:baseline;
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        box-sizing:border-box;
    }

    button,
    input {
        line-height:normal;
    }

    input,
    textarea {
        background-image:-webkit-linear-gradient(hsla(0,0%,100%,0), hsla(0,0%,100%,0));
    }

    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"] {
        line-height:1;
        cursor:pointer;
        -webkit-appearance:button;
        border:none;
    }

    input[type="checkbox"],
    input[type="radio"] {
        padding:0;
    }

    input[type="search"] {
        -webkit-appearance:textfield;
    }

    input[type="search"]::-webkit-search-decoration {
        -webkit-appearance:none;
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
        border:0;
        padding:0;
    }

    /* Repeatable Patterns
-------------------------------------------------------------- */
    *,
    *:before,
    *:after {
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        box-sizing:border-box;
    }

    *,
    *:before,
    *:after {
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        box-sizing:border-box;
    }

    body {
        font-family:'Open Sans', sans-serif;
        font-size:13px;
        line-height:24px;
        font-weight:400;
        background-color:#f3f3f3!important;
        color:#656565;
        overflow:hidden;
        position:relative;
    }

    a {
        text-decoration:none;
        color:#333333;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    a:hover,
    a:focus {
        color:#f28b00;
        text-decoration:none;
        outline:0;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    ul, ol {
        padding:0;
    }

    img {
        max-width:100%;
        /*height:auto;*/
        /*width: 100%;*/
        height: 100%;
    }

    b, strong {
        font-weight:900;
    }

    uttonb,
    button:hover {
        border:none;
    }

    button:focus {
        outline:none;
    }

    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"] {
        display:inline-block;
        color:#fff;
        padding:0px 27px 0 27px;
        height:48px;
        line-height:42px;
        font-size:14px;
        color:#ffffff;
        background:#f28b00;
        /*border-radius:30px;*/
        font-weight:600;
        font-family:"Nunito", sans-serif;
        position:relative;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    button.search-submit-form {
        position:absolute;
        right:2px;
        top:7px;
        padding:0px 10px;
        color:#999999;
        background-color:transparent;
        display:inline-block;
        height:29px;
        line-height:31px;
        font-size:12px;
        border-color:transparent;
        border-left:1px solid #d0d0d0;
        text-transform:uppercase;
        font-weight:700;
        border-radius:0;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    select,
    textarea,
    input[type="text"],
    input[type="password"],
    input[type="datetime"],
    input[type="datetime-local"],
    input[type="date"],
    input[type="month"],
    input[type="time"],
    input[type="week"],
    input[type="number"],
    input[type="url"],
    input[type="search"],
    input[type="tel"],
    input[type="color"],
    input[type="email"] {
        position:relative;
        display:block;
        font-family:'Open Sans';
        width:100%;
        line-height:24px;
        padding:8px 15px 8px 30px;
        color:#222222;
        border:2px solid #f28b00;
        height:48px;
        /*border-radius:30px;*/
        background-color:transparent;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    select {
        border:none;
    }

    input[type="search"] {
        width:250px;
        margin-bottom:0px;
        border-radius:0px;
        background-color:#ffffff;
    }

    input[type="email"] {
        padding:8px 14px;
        color:#555555;
        border:1px solid #e5e5e5;
        margin-bottom:20px;
    }

    textarea:focus,
    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="datetime"]:focus,
    input[type="datetime-local"]:focus,
    input[type="date"]:focus,
    input[type="month"]:focus,
    input[type="time"]:focus,
    input[type="week"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="search"]:focus,
    input[type="tel"]:focus,
    input[type="color"]:focus {
        border:2px solid #cacaca;
        -webkit-box-shadow:none;
        -moz-box-shadow:none;
        box-shadow:none;
    }

    textarea {
        width:100%;
        padding:11px 18px;
        height:173px;
    }

    input[type="checkbox"] {
        display:inline;
    }

    textarea:-moz-placeholder,
    textarea::-moz-placeholder,
    input:-moz-placeholder,
    input::-moz-placeholder {
        color:#aeaeae;
        opacity:1;
    }

    input:-ms-input-placeholder {
        color:#aeaeae;
    }

    textarea::-webkit-input-placeholder,
    input::-webkit-input-placeholder {
        color:#aeaeae;
        opacity:1;
    }

    .btn {
        background-image:none;
    }

    select,
    textarea,
    input[type="text"],
    input[type="submit"],
    input[type="password"],
    input[type="datetime"],
    input[type="datetime-local"],
    input[type="date"],
    input[type="month"],
    input[type="time"],
    input[type="week"],
    input[type="number"],
    input[type="email"],
    input[type="url"],
    input[type="search"],
    input[type="tel"],
    input[type="color"],
    .uneditable-input,
    .dropdown-menu,
    .navbar .nav > .active > a,
    .navbar .nav > .active > a:hover,
    .navbar .nav > .active > a:focus {
        -webkit-appearance:none;
        -moz-appearance:none;
        appearance:none;
        text-shadow:none;
        -webkit-box-shadow:none;
        -moz-box-shadow:none;
        -o-box-shadow:none;
        box-shadow:none;
        color:#727272;
    }

    select::-ms-expand {
        -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter:alpha(opacity=0);
        opacity:0;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family:'Nunito', sans-serif;
        font-weight:400;
    }

    h1 {
        font-size:32px;
    }

    h2 {
        font-size:24px;
    }

    h3 {
        font-size:20px;
        font-weight:500;
        color:#2d2d2d;
    }

    h4 {
        font-size:18px;
    }

    .container {
        width:1170px;
    }

    .clearfix {
        clear:both;
    }

    .left {
        text-align:left;
    }

    .center {
        text-align:center;
    }

    .sale {
        color:#f28b00;
        font-weight:500;
        font-size:22px;
        font-family:'Nunito';
    }

    .regular {
        color:#c5c5c5;
        font-size:14px;
        text-decoration:line-through;
    }

    .background {
        background-color:#f5f5f5;
    }

    /* aniketrod
-------------------------------------------------------------- */
    .aniketrod {
        position:relative;
    }

    .aniketrod > .overlay {
        content:'';
        position:absolute;
        width:100%;
        height:100%;
        top:0;
        left:0;
        background-color:rgba(0, 0, 0, 0.5);
        z-index:909;
        opacity:0;
        display:none;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    .aniketrod > .overlay.show {
        opacity:1;
        display:block;
    }

    /* Header
-------------------------------------------------------------- */
    #header {
        position:relative;
        z-index:999;
        background-color:#fff;
    }
    /* Header Top */
    .header-top {
        border-bottom:1px solid #e5e5e5;
    }

    .header-top.style1 {
        background-color:#f5f5f5;
        padding:6px 0;
    }

    .header-top.style2 {
        background-color:#ffa020;
        padding:0px 0;
        border-bottom:none;
    }

    .flat-support a {
        color:black;
    }
    .header-top.style2 ul.flat-support > li {
        border-color:#fec579;
    }

    .flat-infomation a{
        color:black;
    }

    .flat-unstyled  a {
        color:black;
    }

    .header-top.style3 {
        background-color:#f5f5f5;
        padding:0px 0;
        border-bottom:none;
    }

    .header-top.style4 {
        background-color:#f5f5f5;
        padding:6px 0 6px;
        border-bottom:none;
    }

    /* Flat Support */
    ul.flat-support li {
        display:inline-block;
        line-height:38px;
        height:37px;
    }

    ul.flat-support li a {
        border-right:1px solid #e5e5e5;
        padding-right:10px;
        padding-left:7px;
        font-size:12px;
        font-weight:400;
    }

    ul.flat-support li:first-child > a {
        padding-left:0;
    }

    ul.flat-support li:last-child > a {
        padding-right:0;
        border-right:none;
    }

    ul.flat-support.style1 > li,
    ul.flat-unstyled.style2 > li {
        display:inline-block;
        line-height:27px;
        height:24px;
    }

    /* Flat Infomation */
    ul.flat-infomation {
        text-align:center;
    }

    ul.flat-infomation li.phone {
        color:#f28b00;
        line-height:38px;
        height:37px;
        letter-spacing:-0.5px;
    }

    .grid-right ul.flat-infomation li.phone {
        height:55px;
        line-height:59px;
        font-size:15px;
    }

    /* Flat Unstyled */
    ul.flat-unstyled {
        text-align:right;
        margin-right:3px;
    }

    ul.flat-unstyled > li {
        display:inline-block;
        line-height:38px;
        height:37px;
        position:relative;
    }

    ul.flat-unstyled > li > a {
        border-left:1px solid #e5e5e5;
        line-height:1;
        padding-left:9px;
        padding-right:6px;
        letter-spacing:-0.5px;
    }

    ul.flat-unstyled > li:last-child > a {
        padding-right:0;
    }

    ul.flat-unstyled > li:first-child > a {
        border-left:none;
    }

    ul.flat-unstyled > li > a i {
        padding-left:10px;
        padding-right:4px;
    }

    ul.flat-unstyled > li:last-child > a i {
        padding-right:0px;
    }

    ul.flat-unstyled > li > ul {
        background-color:#fff;
        border-radius:10px;
        padding:10px 0;
        box-shadow:0px 2px 3px 0px rgba(72, 72, 72, 0.15);
        opacity:0;
        visibility:hidden;
        position:absolute;
        left:0;
        z-index:99;
        width:130px;
        text-align:left;
        top:100px;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    ul.flat-unstyled > li > ul:before {
        content:'';
        position:absolute;
        left:30px;
        top:-8px;
        border-left:8px solid transparent;
        border-right:8px solid transparent;
        border-bottom:8px solid #e5e5e5;
        z-index:100;
    }

    ul.flat-unstyled > li:hover > ul {
        opacity:1;
        visibility:visible;
        top:38px;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    ul.flat-unstyled li > ul > li > a {
        display:block;
        padding:1px 15px;
        line-height:24px;
        font-size:12px;
    }

    .flat-unstyled.style1 {
        float:right;
        line-height:102px;
        height:101px;
        margin-right:3px;
    }

    /* Header Middle */
    /*.header-middle #logo {*/
    /*    line-height:97px;*/
    /*    margin-left:-2px;*/
    /*    margin-bottom:7px;*/
    /*}*/

    .header-middle .grid-left #logo {
        margin-bottom:0px;
    }

    .header-middle .logo.style1 {
        float:left;
        width:23%;
        margin-right:0px;
    }

    .header-middle.style1 {
        background-color:#f28b00;
    }

    /* Show Search */
    .show-search {
        display:none;
    }

    .show-search button {
        content:'';
        background:#fff;
        color:#f28b00;
        border-color:transparent;
        height:45px;
        line-height:45px;
        width:45px;
        display:block;
        padding:0;
        border-radius:50%;
        position:relative;
    }

    .show-search button:before {
        content:"\f002";
        font-family:fontawesome;
        position:absolute;
        font-size:18px;
        line-height:45px;
        left:50%;
        top:0px;
        transform:translateX(-50%);
    }

    .show-search > button.active:before {
        content:"\f00d";
    }

    /* Top Search */
    .top-search {
        margin-top: 2px!important;
        padding: 0!important;
    }

    .top-search form.form-search {
        position:relative;
    }

    .top-search form.form-search .cat-wrap {
        position:absolute;
        z-index:9;
        padding:15px 0;
    }

    .top-search form.form-search .cat-wrap-v1 {
        position:absolute;
        z-index:9;
        padding:12px 0;
    }

    .top-search form.form-search .cat-wrap select {
        height:20px;
        line-height:20px;
        padding:1px 63px 0 36px;
        border-radius:0px;
        border-right:1px solid #e5e5e5;
    }

    .top-search form.form-search .cat-wrap span {
        position:absolute;
        top:14px;
        right:22px;
        color:#1b1b19;
        font-size:14px;
    }

    .top-search form.form-search .cat-wrap-v1 span {
        top:11px !important;
    }

    .top-search form.form-search .cat-wrap .all-categories {
        position:absolute;
        top:80px;
        left:0;
        width:215px;
        border:2px solid #484848;
        border-radius:10px;
        height:287px;
        background:#fff;
        padding:10px 20px;
        z-index:9;
        opacity:0;
        visibility:hidden;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    .top-search form.form-search .cat-wrap .all-categories.show {
        top:55px;
        opacity:1;
        visibility:visible;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    .top-search form.form-search .cat-wrap .all-categories:before {
        content:'';
        position:absolute;
        border-bottom:5px solid #484848;
        border-left:5px solid transparent;
        border-right:5px solid transparent;
        top:-7px;
        left:57px;
    }

    .top-search form.form-search .cat-wrap .all-categories .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
        background:#f28b00;
    }

    .top-search form.form-search .cat-wrap .all-categories .cat-list-search .title {
        color:#f28b00;
        line-height:30px;
    }

    .top-search form.form-search .cat-wrap .all-categories .cat-list-search ul {
        margin-bottom:5px;
    }

    .top-search form.form-search .cat-wrap .all-categories .cat-list-search ul li {
        padding-left:9px;
        line-height:20px;
        cursor:pointer;
    }

    .top-search form.form-search .cat-wrap .all-categories .cat-list-search ul li:hover {
        color:#f28b00;
    }

    .top-search form.form-search .box-search input {
        padding-left:191px;
        padding-top:11px;
        height:49px;
    }

    .top-search form.form-search .box-search .btn-search {
        position:absolute;
        top:0;
        right:0;
    }

    .top-search form.form-search .box-search .search-suggestions {
        width:800px;
        overflow:hidden;
        position:absolute;
        top:100px;
        left:0;
        z-index:9;
        opacity:0;
        visibility:hidden;
        border-bottom-left-radius:10px;
        border-bottom-right-radius:10px;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    .top-search form.form-search .box-search .search-suggestions.show {
        opacity:1;
        visibility:visible;
        top:77px;
    }

    /* Top Search Style1 */
    .top-search.style1 {
        width:610px;
        padding:5px 0px 5px 1px;
        float:left;
    }

    .top-search.style1 form.form-search .box-search input {
        background-color:#fff;
        border-color:#fff;
        height:45px;
        padding-left:188px;
    }

    .top-search.style1 form.form-search .box-search .btn-search button {
        background:#484848;
        padding:0px 27px 0 32px;
        height:45px;
        line-height:43px;
    }

    .top-search.style1 form.form-search .box-search .btn-search button img {
        margin-top:-3px;
    }

    /* Top Search Style2 */
    .top-search.style2 {
        padding:28px 0 26px 48px;
        float:left;
        width:68%;
    }

    .top-search.style2 form.form-search .box-search .btn-search button {
        background:#484848;
        padding:0 29px 0 30px;
        height:49px;
        line-height:39px;
    }

    .top-search.style2 form.form-search .box-search input {
        background-color:#fff;
        border-color:#fff;
    }

    /* Top Search Style3 */
    .top-search.style3 {
        padding-left:93px;
        margin-right:-37px;
    }

    /* Search Sugguestions */
    .search-suggestions .box-suggestions {
        width:55%;
        float:left;
        background:#fff;
        padding:20px 30px;
    }

    .search-suggestions .box-suggestions .title,
    .search-suggestions .box-cat .title {
        color:#f28b00;
        font-size:14px;
        font-weight:600;
        margin-bottom:15px;
    }

    .search-suggestions .box-suggestions ul li {
        margin-bottom:28px;
        overflow:hidden;
    }

    .search-suggestions .box-suggestions ul li .image {
        width:40px;
        float:left;
        height:40px;
        line-height:50px;
        margin-right:20px;
    }

    .search-suggestions .box-suggestions ul li .info-product {
        overflow:hidden;
    }

    .search-suggestions .box-suggestions ul li .info-product .name a:not(:hover) {
        color:#484848;
    }

    .search-suggestions .box-suggestions ul li .info-product .price .sale {
        color:#484848;
        font-size:16px;
        font-weight:500;
        font-family:'Nunito';
        margin-right:15px;
    }

    .search-suggestions .box-suggestions ul li .info-product .price .regular {
        font-size:13px;
    }

    .search-suggestions .box-cat {
        width:45%;
        float:left;
        background:#f5f5f5;
        padding:20px 30px;
        height:541px;
        overflow:hidden;
    }

    .search-suggestions .box-cat li a {
        color:#484848;
        line-height:30px;
    }

    /* Box Cart */
    .box-cart {
        text-align:right;
        padding:0!important;
    }

    .box-cart .inner-box {
        display:inline-block;
        position:relative;
    }

    .box-cart .inner-box > a > div {
        display:inline-block;
    }

    .box-cart .inner-box > a > div.icon-cart {
        height:48px;
        line-height:40px;
        width:48px;
        text-align:center;
        border:2px solid #e5e5e5;
        border-radius:50%;
        position:relative;
    }

    .box-cart .inner-box > a:hover > div.icon-cart {
        border-color:#f28b00;
    }

    .box-cart .inner-box > a > div.icon-cart span {
        position:absolute;
        top:-3px;
        right:-8px;
        background-color:#f28b00;
        width:20px;
        height:20px;
        line-height:18px;
        color:#f4f4f4;
        font-size:11px;
        border-radius:50%;
    }

    .box-cart .inner-box > a > .price {
        font-weight:600;
        font-size:16px;
        margin-left:8px;
    }

    .box-cart .inner-box ul.menu-compare-wishlist li {
        display:inline-block;
        margin-right:19px;
    }

    .box-cart .inner-box ul.menu-compare-wishlist li a {
        display:inline-block;
        height:48px;
        width:48px;
        line-height:40px;
        text-align:center;
        border:2px solid #e5e5e5;
        border-radius:50%;
    }

    .box-cart .inner-box ul.menu-compare-wishlist li a:hover {
        border-color:#f28b00;
    }

    .box-cart .inner-box .dropdown-box {
        padding:25px 20px 32px;
        position:absolute;
        background-color:#fff;
        border-radius:8px;
        top:150px;
        width:332px;
        right:0;
        opacity:0;
        visibility:hidden;
        z-index:99;
        box-shadow:0px 2px 3px 0px rgba(72, 72, 72, 0.15);
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    .box-cart .inner-box .dropdown-box:before {
        content:'';
        position:absolute;
        top:-7px;
        right:70px;
        border-left:7px solid transparent;
        border-right:7px solid transparent;
        border-bottom:7px solid #e5e5e5;
    }

    .box-cart > .inner-box:hover > .dropdown-box {
        top:55px;
        opacity:1;
        visibility:visible;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    .box-cart .inner-box .dropdown-box > ul > li {
        position:relative;
        margin-bottom:30px;
    }

    .box-cart .inner-box .dropdown-box > ul > li .img-product {
        float:left;
        margin-right:20px;
        width:64px;
        height:64px;
        border:2px solid transparent;
        border-radius:8px;
        text-align:center;
    }

    .box-cart .inner-box .dropdown-box > ul > li:hover .img-product {
        border-color:#e5e5e5;
    }

    .box-cart .inner-box .dropdown-box > ul > li .info-product {
        text-align:left;
    }

    .box-cart .inner-box .dropdown-box > ul > li .info-product .name {
        margin-bottom:3px;
        color:#484848;
        font-size:12px;
        line-height:20px;
    }

    .box-cart .inner-box .dropdown-box > ul > li .info-product .price {
        color:#f28b00;
    }

    .box-cart .inner-box .dropdown-box > ul > li span.delete {
        position:absolute;
        top:0;
        right:0;
        font-size:18px;
        cursor:pointer;
    }

    .box-cart .inner-box .dropdown-box .total {
        text-align:left;
    }

    .box-cart .inner-box .dropdown-box .total span {
        color:#484848;
        font-weight:bold;
        font-size:14px;
    }

    .box-cart .inner-box .dropdown-box .total span.price {
        color:#f28b00;
        font-size:22px;
        font-weight:500;
        float:right;
    }

    .box-cart .inner-box .dropdown-box .btn-cart {
        margin-top:30px;
        overflow:hidden;
    }

    .box-cart .inner-box .dropdown-box .btn-cart a.view-cart {
        padding:10px 33px;
        color:#f28b00;
        border:2px solid #f28b00;
        border-radius:30px;
        font-size:14px;
        font-weight:600;
        float:left;
        position:relative;
        overflow:hidden;
        z-index:5;
    }

    .box-cart .inner-box .dropdown-box .btn-cart a.view-cart:hover {
        color:#fff;
    }

    .box-cart .inner-box .dropdown-box .btn-cart a.view-cart:before,
    .box-cart .inner-box .dropdown-box .btn-cart a.check-out:before {
        content:'';
        position:absolute;
        width:100%;
        height:100%;
        top:0;
        left:0;
        z-index:-1;
        background:#f28b00;
        -webkit-transform:scaleX(0);
        transform:scaleX(0);
        -webkit-transform-origin:0 50%;
        transform-origin:0 50%;
        -webkit-transition-property:transform;
        transition-property:transform;
        -webkit-transition-duration:0.4s;
        transition-duration:0.4s;
        -webkit-transition-timing-function:ease-out;
        transition-timing-function:ease-out;
    }

    .box-cart .inner-box .dropdown-box .btn-cart a.view-cart:hover:before,
    .box-cart .inner-box .dropdown-box .btn-cart a.check-out:hover:before {
        -webkit-transform:scaleX(1);
        transform:scaleX(1);
        -webkit-transition-timing-function:cubic-bezier(0.52, 1.64, 0.37, 0.66);
        transition-timing-function:cubic-bezier(0.52, 1.64, 0.37, 0.66);
    }

    .box-cart .inner-box .dropdown-box .btn-cart a.check-out {
        padding:12px 35px;
        color:#fff;
        border-radius:30px;
        font-size:14px;
        font-weight:600;
        background-color:#484848;
        float:right;
        position:relative;
        overflow:hidden;
        z-index:5;
    }

    .box-cart .inner-box .dropdown-box .btn-cart a.check-out:hover {
        border-color:transparent;
    }

    /* Header Bottom */
    .header-bottom {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        background-color:#ffffff;
    }

    .header-bottom > .container > .row {
        position:relative;
    }

    .header-bottom.style2 {
        background-color:#e58400;
    }

    .header-bottom.style3 {
        background-color:#fff;
    }

    /* Menu Mega
-------------------------------------------------------------- */
    #mega-menu {
        position:relative;
        top:-10px;
        height:55px;
        width:250px;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    #mega-menu > .btn-mega {
        font-weight:600;
        font-size:16px;
        color:#fefefe;
        height:65px;
        padding-left:87px;
        line-height:65px;
        background-color:#484848;
        border-top-left-radius:9px;
        border-top-right-radius:9px;
        position:relative;
        z-index:98;
        cursor:pointer;
    }

    #mega-menu:hover ul.menu {
        top:-1px;
        visibility:visible;
        opacity:1;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    #mega-menu > .btn-mega > span {
        position:absolute;
        height:2px;
        width:18px;
        left:46px;
        top:31px;
        background-color:#fff;
        display:inline-block;
    }

    #mega-menu > .btn-mega > span:before {
        content:'';
        position:absolute;
        height:2px;
        width:24px;
        top:-7px;
        background-color:#fff;
    }

    #mega-menu > .btn-mega > span:after {
        content:'';
        position:absolute;
        height:2px;
        width:24px;
        top:7px;
        background-color:#fff;
    }

    #mega-menu > ul.menu {
        position:relative;
        z-index:90;
        background-color:#fff;
        border:1px solid #484848;
        border-bottom-left-radius:8px;
        border-bottom-right-radius:8px;
        top:-40px;
        opacity:0;
        visibility:hidden;
        height:516px;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    #mega-menu > ul.menu > li > a {
        height:50px;
        line-height:51px;
        padding:0 24px;
        border-bottom:1px solid #e5e5e5;
        display:block;
        position:relative;
    }

    #mega-menu > ul.menu > li:last-child > a {
        border-bottom:none;
    }

    #mega-menu > ul.menu > li:hover > a .menu-title {
        color:#f28b00;
    }

    #mega-menu > ul.menu > li > a.dropdown:after {
        content:'\f105';
        position:absolute;
        font-family:'fontawesome';
        right:29px;
        font-size:14px;
        color:#484848;
    }

    #mega-menu > ul.menu > li > a .menu-img {
        margin-right:18px;
        min-width:30px;
        display:inline-block;
        text-align:center;
    }

    #mega-menu > ul.menu > li > a .menu-title {
        color:#484848;
    }

    #mega-menu.style1 > ul.menu {
        transform:translateY(0%);
        opacity:1;
        top:-1px;
        visibility:visible;
        border-width:1px;
        border-bottom-left-radius:10px;
        border-bottom-right-radius:10px;
    }

    #mega-menu > ul.menu > li:hover > .drop-menu {
        opacity:1;
        visibility:visible;
        transform:translateX(0%);
    }

    #mega-menu > ul.menu > li .drop-menu {
        transform:translateX(-10%);
        opacity:0;
        visibility:hidden;
        padding:27px 7px 27px 0;
        position:absolute;
        top:-1px;
        left:270px;
        width:875px;
        border-radius:10px;
        z-index:-1;
        height:516px;
        background-color:#fff;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third {
        width:33.3%;
        float:left;
        padding-left:42px;
        padding-right:15px;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third .cat-title {
        color:#f28b00;
        font-size:16px;
        font-weight:bold;
        margin-bottom:20px;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third ul li {
        margin-bottom:5px;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third ul li a:not(:hover) {
        color:#484848;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third .show a {
        color:#f28b00;
        font-weight:bold;
        position:relative;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third .show a:before {
        content:'';
        position:absolute;
        width:0;
        height:2px;
        bottom:-4px;
        right:0;
        background:#f28b00;
        -webkit-transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        -o-transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third .show a:hover:before {
        width:100%;
        left:0;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third ul.banner li {
        border:2px solid #e5e5e5;
        border-radius:5px;
        background-color:#e5e5e5;
        height:110px;
        padding:30px 10px 30px 18px;
        margin-bottom:20px;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third ul.banner li:hover {
        background-color:#fff;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third ul.banner li .banner-text {
        float:left;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third ul.banner li .banner-text .banner-title {
        font-weight:bold;
        font-size:18px;
        color:#f28b00;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third ul.banner li .banner-text .more-link a img {
        margin-left:10px;
    }

    #mega-menu > ul.menu > li .drop-menu > .one-third ul.banner li .banner-img {
        float:right;
    }

    /* Main Navigation
-------------------------------------------------------------- */
    #mainnav {
        padding-left:30px;
        float:left;
    }

    #mainnav > ul.menu {
        word-spacing:-4px;
    }

    #mainnav > ul.menu > li {
        display:inline-block;
        line-height:57px;
        height:11px!important;
    }

    #mainnav ul.menu > li > a {
        word-spacing: initial!important;
        display:inline-block;
        color:#000000;
        font-size:14px;
        font-weight:500;
        padding:0 21.5px;
        border-right:1px solid #000000;
        line-height:1;
        position:relative;
        z-index:8;
    }

    #mainnav ul.menu > li > a:after {
        content:'';
        position:absolute;
        bottom:-20px;
        left:-1px;
        opacity:0;
        background-color:#fff;
        height:48px;
        width:calc(100% + 2px);
        z-index:-3;
        border-top-left-radius:10px;
        border-top-right-radius:10px;
    }

    #mainnav ul.menu > li:hover > a {
        color:#f28b00;
    }

    #mainnav ul.menu > li:hover > a:after {
        opacity:1;
    }

    #mainnav ul.menu > li:last-child > a {
        border-right:none;
    }

    #mainnav.style1 {
        padding-left:4px;
        line-height:104px;
    }

    #mainnav.style1 ul.menu > li > a {
        color:#484848;
        border:none;
        padding:0;
        font-weight:500;
        margin-right:33px;
    }

    #mainnav.style2 {
        padding-left:55px;
    }

    #mainnav.style2 ul.menu > li {
        margin-top:24px;
    }

    #mainnav.style2 ul.menu > li > a {
        margin-right:43.5px;
        text-transform:uppercase;
        font-weight:bold;
        color:#656565;
        padding:0;
        border-right:0px;
    }

    #mainnav.style2 ul.menu > li:last-child > a {
        margin-right:0px;
    }

    #mainnav.style2 ul.menu > li.has-mega-menu:hover > .submenu {
        top:80px;
    }

    #mainnav.style3 ul.menu > li > a {
        color:#484848;
        border-color:#c9c9c9;
    }

    #mainnav.style4 {
        padding-left:72px;
    }

    #mainnav ul.menu > li:hover > .submenu {
        opacity:1;
        visibility:visible;
        top:55px;
        -webkit-transition:all 0.3s ease-in-out;
        -moz-transition:all 0.3s ease-in-out;
        -ms-transition:all 0.3s ease-in-out;
        -o-transition:all 0.3s ease-in-out;
        transition:all 0.3s ease-in-out;
    }

    #mainnav.style1 ul.menu > li.column-1:hover > .submenu {
        top:55px;
    }

    #mainnav.style1 ul.menu > li:hover > .submenu {
        top:80px;
    }

    /* Today Deal */
    .today-deal {
        float:right;
    }
    .today-deal a:hover, a:active, a:focus {
        outline: none;
        text-decoration: none;
        color: #f8f8f8!important;
    }

    .today-deal a {
        line-height: 55px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        position: relative;
        border: 2px solid;
        padding: 7px;
        background-color: red;
        border-radius: 5px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }

    .today-deal a:before {
        content:'';
        position:absolute;
        width:0;
        height:2px;
        bottom:-4px;
        right:0;
        background:#fff;
        -webkit-transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        -o-transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
    }

    .today-deal a:hover:before {
        width:100%;
        left:0;
    }

    .today-deal.style1 > a {
        color:#f28b00;
    }

    /* Sub Menu */
    ul.menu li.column-1 {
        position:relative;
    }

    ul.menu li.column-1 .submenu {
        width:263px;
        left:-1px;
        padding:18px 0;
    }

    ul.menu li.column-1 .submenu > li {
        line-height:30px;
    }

    ul.menu li.column-1 .submenu > li:last-child {
        border-bottom:none;
    }

    ul.menu li.column-1 .submenu > li > a {
        display:block;
        font-size:13px;
        padding-left:22px;
        position:relative;
        font-weight:500;
        color:#484848;
    }

    ul.menu li.column-1 .submenu > li > a:hover {
        color:#f28b00;
    }

    ul.menu li.column-1 .submenu > li > a i {
        padding-right:15px;
    }

    .submenu .row:not(:last-child) {
        margin-bottom:30px;
    }

    .submenu .col-md-4 {
        padding-left:50px;
    }

    .submenu .cat-title {
        color:#f28b00;
        font-size:16px;
        font-weight:500;
        margin-bottom:20px;
    }

    .submenu ul > li {
        margin-bottom:5px;
        line-height:24px;
    }

    .submenu .show {
        line-height:24px
    }

    .submenu .show a {
        color:#f28b00;
        font-weight:700;
        position:relative;
    }

    .submenu .show a:before {
        content:'';
        position:absolute;
        width:0;
        height:2px;
        bottom:-4px;
        right:0;
        background:#f28b00;
        -webkit-transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        -o-transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        transition:width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
    }

    .submenu .show a:hover:before {
        width:100%;
        left:0;
    }

    /* Main Navigation Mobile
-------------------------------------------------------------- */
    #mainnav-mobi {
        display:block;
        margin:0 auto;
        width:100%;
        position:absolute;
        left:0;
        z-index:1000;
        background-color:#222222;
    }

    #mainnav-mobi > ul {
        display:block;
        list-style:none;
        margin:0;
        padding:0;
    }

    #mainnav-mobi ul li {
        margin:0;
        position:relative;
        text-align:left;
        border-top:1px solid #333333;
        cursor:pointer;
        display:block;
    }

    #mainnav-mobi ul > li > a {
        text-decoration:none;
        height:50px;
        line-height:50px;
        padding:0 20px;
        color:#fff;
        border:none;
    }

    #mainnav-mobi ul.submenu {
        top:100%;
        left:0;
        z-index:2000;
        position:relative;
        background-color:#222222;
    }

    #mainnav-mobi > ul > li > ul > li {
        position:relative;
        border-top:1px solid #333333;
    }

    #mainnav-mobi ul.submenu > li > a {
        display:block;
        text-decoration:none;
        padding:0 50px;
        border-top-color:rgba(255,255,255,.1);
        -webkit-transition:all 0.2s ease-out;
        -moz-transition:all 0.2s ease-out;
        -o-transition:all 0.2s ease-out;
        transition:all 0.2s ease-out;
    }

    #mainnav-mobi > ul > li > ul > li:first-child a {
        border-top:none;
    }

    #mainnav-mobi ul.submenu > li > a:hover,
    #mainnav-mobi > ul > li > ul > li.active > a {
        color:#fff;
    }

    #mainnav-mobi ul.menu li.has-mega-menu .submenu {
        background:#222222;
        right:0px;
        width:100%;
        position:relative;
    }

    #mainnav-mobi ul.menu li.has-mega-menu h3.cat-title {
        color:#fff;
        padding-left:50px;
        cursor:pointer;
    }

    #mainnav-mobi ul.menu li.has-mega-menu .submenu .row:not(:last-child) {
        margin:0;
    }

    /* Button Menu */
    .btn-menu,
    .btn-menu-mega {
        display:none;
        position:relative;
        background:black;
        cursor:pointer;
        float:right;
        top:10px;
        width:25px;
        height:25px;
        border:2px solid #fff;
        padding:15px 18px 17px;
        border-radius:4px;
        z-index:8;
        -webkit-transition:all ease .238s;
        -moz-transition:all ease .238s;
        transition:all ease .238s;
    }

    .btn-menu-mega {
        background:#484848;
        border-color:#484848;
    }

    .btn-menu:before,
    .btn-menu:after,
    .btn-menu span,
    .btn-menu-mega:before,
    .btn-menu-mega:after,
    .btn-menu-mega span {
        background-color:#fff;
        -webkit-transition:all ease .238s;
        -moz-transition:all ease .238s;
        transition:all ease .238s;
    }

    .btn-menu:before,
    .btn-menu:after,
    .btn-menu-mega:before,
    .btn-menu-mega:after {
        content:'';
        position:absolute;
        height:2px;
        width:25px;
        left:5px;
        top:50%;
        -webkit-transform-origin:50% 50%;
        -ms-transform-origin:50% 50%;
        transform-origin:50% 50%;
    }

    .btn-menu span,
    .btn-menu-mega span {
        position:absolute;
        width:25px;
        height:2px;
        left:5px;
        top:50%;
        overflow:hidden;
        text-indent:200%;
    }

    .btn-menu-mega span {
        width:20px;
    }

    .btn-menu:before,
    .btn-menu-mega:before {
        -webkit-transform:translate3d(0, -7px, 0);
        transform:translate3d(0, -7px, 0);
    }

    .btn-menu:after,
    .btn-menu-mega:after {
        width:25px;
        -webkit-transform:translate3d(0, 7px, 0);
        transform:translate3d(0, 7px, 0);
    }

    .btn-menu.active:after,
    .btn-menu-mega.active:after {
        width:25px;
    }

    .btn-menu.active span,
    .btn-menu-mega.active span {
        opacity:0;
    }

    .btn-menu.active:before,
    .btn-menu-mega.active:before {
        -webkit-transform:rotate3d(0, 0, 1, 45deg);
        transform:rotate3d(0, 0, 1, 45deg);
    }

    .btn-menu.active:after,
    .btn-menu-mega.active:after {
        -webkit-transform:rotate3d(0, 0, 1, -45deg);
        transform:rotate3d(0, 0, 1, -45deg);
    }

    .btn-submenu,
    .btn-submenu-child {
        position:absolute;
        right:0px;
        top:-1px;
        font:20px/51px 'FontAwesome';
        text-align:center;
        cursor:pointer;
        width:51px;
        height:50px;
        background:#333;
    }

    .btn-submenu-child {
        right:57px;
        top:0px;
        height:45px;
        line-height:46px;
    }

    .btn-submenu:before {
        content:"\f107";
        color:#ffffff;
    }

    .btn-submenu-child:before {
        content:"\f107";
        color:#fff;
    }

    .btn-submenu.active:before,
    .btn-submenu-child.active:before {
        content:"\f106"
    }

    /* Mega Mobile
-------------------------------------------------------------- */
    #mega-mobile {
        display:block;
        margin:0 auto;
        width:100%;
        position:absolute;
        left:0;
        z-index:1000;
        background-color:#222222;
    }

    #mega-mobile > ul.menu > li > a {
        color:#fff;
        display:block;
        padding:15px 0;
        cursor:pointer;
        padding-left:15px;
        border-bottom:1px solid #333;
        position:relative;
    }

    #mega-mobile > ul.menu > li > a .menu-img {
        margin-right:18px;
        min-width:30px;
        display:inline-block;
        text-align:center;
    }

    #mega-mobile > ul.menu > li > a.dropdown .btn-dropdown,
    .btn-dropdown-child {
        position:absolute;
        top:0;
        right:0;
        font-size:14px;
        width:54px;
        height:54px;
        background:#262626;
        text-align:center;
        cursor:pointer;
        font:20px/54px 'FontAwesome';
    }

    .btn-dropdown-child {
        right:0px;
        width:44px;
        height:44px;
        line-height:44px;
    }

    #mega-mobile > ul.menu > li > a.dropdown .btn-dropdown:after,
    .btn-dropdown-child:after {
        content:'\f107';
    }

    #mega-mobile > ul.menu > li > a.dropdown .btn-dropdown.active:after,
    .btn-dropdown-child.active:after {
        content:'\f106';
    }

    #mega-mobile > ul.menu > li > .drop-menu {
        padding:0 54px 0 50px;
    }

    #mega-mobile > ul.menu > li > .drop-menu .cat-title {
        position:relative;
        color:#f5f5f5;
        padding:10px 0;
        border-bottom:1px solid #333;
    }

    #mega-mobile > ul.menu > li > .drop-menu ul {
        padding-left:20px;
    }

    #mega-mobile > ul.menu > li > .drop-menu ul li {
        border-bottom:1px solid #333;
    }

    #mega-mobile > ul.menu > li > .drop-menu ul li a {
        color:#f5f5f5;
        font-size:12px;
        padding:8px 0;
        display:block;
    }

    #mega-mobile > ul.menu > li > .drop-menu .show,
    #mega-mobile > ul.menu > li > .drop-menu .one-third:nth-child(3) {
        display:none;
    }


    /* This css for Responsive*/
    @media only screen and (max-width:1900px) {

        footer.style1 {
            margin:0px;
        }

        .header-bottom.style1 .grid-left,
        .flat-slider.style1 .grid-left {
            width:240px;
        }

        .header-bottom.style1 .grid-right,
        .flat-slider.style1 .grid-right {
            width:calc(100% - 260px);
        }

        .header-bottom.style1 .grid-right {
            padding:7px 15px 7px 15px;
        }

        .header-bottom.style1 .grid-right ul.flat-infomation {
            margin-right:5px;
        }

        .header-bottom.style1 .grid-right .top-search.style1 {
            width:53%;
        }

        .header-bottom.style1 .grid-left #mega-menu {
            width:100%;
        }

        .slider .slider-item.style10 .item-text {
            width:50%;padding:30px;
        }

        .slider .slider-item.style10 .item-image {
            padding-top:100px;padding-right:30px;width:50%;
        }

        .banner-box.style1 {
            width:50%;
        }

        .banner-box.style1.v1 .inner-box {
            display:none;
        }

        #mainnav.style2 {
            float:right;padding-left:0px;
        }

        #mainnav.style2 ul.menu > li.has-mega-menu:hover > .submenu {
            top:90px;
        }

        .flat-unstyled.style1 {
            line-height:50px;height:50px;margin-right:0px;
        }

        .boxed.style2 .container-fluid {
            width:1170px;max-width:100%;
        }

        .counter.style1.v2,
        .bestsellers, .featured, .hot-sale {
            width:50%;padding-left:15px !important;padding-right:15px !important;
        }

        footer.style4 {
            width:1200px;
        }

        footer.style4 .widget-about {
            padding-left:0px;
        }

        footer.style4 .widget-newsletter {
            padding-right:0px;margin-left:0px;
        }

        .boxed.style2 .footer-bottom.style1 p.copyright {
            margin-left:0px;
        }

        .boxed.style2 .footer-bottom.style1 p.btn-scroll {
            margin-right:0px;
        }


    }

    @media only screen and (min-width:1200px) and (max-width:1366px) {

        #mega-menu > ul.menu > li .drop-menu {
            left:258px;width:879px;
        }

        .flat-location .location-detail {
            width:300px;
        }

        .flat-location .location {
            width:380px;
        }

        .flat-location #flat-map-2 {
            width:calc(100% - 300px - 380px);
        }

        .location .location-content .select-location select {
            width:92px;margin-right:7px;
        }

        .location .location-content .select-location .select:before {
            right:30px;
        }

        .boxed.style2 .flat-imagebox .container-fluid .box-product .row .col-xl-2 {
            max-width:33.333%;
        }


    }

    @media only screen and (max-width:1366px) {

        .product-detail-bar {
            padding-left:0px;
        }

        .boxed.style2 .container-fluid {
            padding:0 30px;
        }

        .boxed.style2 .container-fluid .flat-row-title {
            margin-left:0px;margin-right:0px
        }

        .flat-highlights.style2 .container-fluid {
            padding:20px 30px;
        }

        footer.style4 {
            width:auto;
        }

        footer.style2 .container-fluid {
            padding:40px 30px;
        }

        footer.style4 .widget-categories-ft {
            padding-left:60px;
        }


    }

    @media only screen and (max-width:1199px) {

        body.background section.flat-row {
            margin-left:15px;margin-right:15px;
        }

        body.background .flat-imagebox.style4 .owl-carousel-3.owl-theme .owl-controls .owl-nav div.owl-prev {
            left:-45px;
        }

        body.background .flat-imagebox.style4 .owl-carousel-3.owl-theme .owl-controls .owl-nav div.owl-next {
            right:-45px;
        }

        #mega-menu > ul.menu > li .drop-menu {
            width:704px;left:255px;
        }

        #mega-menu > ul.menu > li .drop-menu > .one-third {
            padding-left:0px;padding-right:3px;
        }

        .box-cart .inner-box ul.menu-compare-wishlist li {
            margin-right:5px;
        }

        .mainnav {
            padding-left:0px;
            margin-top: 14px!important;
        }

        .mainnav ul.menu > li > a {
            padding:0 20px;
        }

        #mega-menu {
            width:250px;
        }

        .flat-team {
            padding:10px 0 50px;
        }

        ul.brands-tablist {
            padding:20px 20px;
        }

        article.main-post.style3,
        article.main-post.style3 .content-post {
            padding:0px;
        }

        .table-cart tr td .quanlity input {
            width:100%;
        }

        .table-cart tr td .quanlity span.btn-up {
            right:20px;
        }

        .flat-location .location,
        .flat-location .location-detail {
            width:50%;
        }

        .flat-location #flat-map-2 {
            width:100%;
        }

        .flex-control-thumbs li {
            margin-right:10px;margin-bottom:10px;
        }

        .box-cart.style2 .btn-add-cart a {
            width:100%;
        }

        .box-cart.style2 .compare-wishlist,
        .box-cart.style2 .btn-add-cart {
            display:block;margin-left:0px;text-align:center;
        }

        .imagebox .box-content .cat-name a:before,
        .imagebox .box-content .cat-name a:after {
            width:20%;
        }

        .flat-imagebox.style2 .product-wrap .tab-item .row .col-md-6 .product-box .imagebox .box-content .cat-name a:before,
        .flat-imagebox.style2 .product-wrap .tab-item .row .col-md-6 .product-box .imagebox .box-content .cat-name a:after {
            width:30%;
        }

        .imagebox.style5 {
            overflow:hidden;
        }

        .imagebox.style5 .box-text {
            padding:20px 0 20px;margin-right:0px;
        }

        .slider .slider-item.style6 .item-text {
            padding:30px 30px;
        }

        .slider .slider-item.style7 {
            position:relative;height:400px;
        }

        .slider .slider-item.style7 .item-text {
            padding:80px 0 0 30px;
        }

        .slider .slider-item.style7 .item-image {
            width:30%;position:absolute;padding:0;bottom:0;right:10px;
        }

        .top-search.style1 {
            width:520px;padding-left:30px;
        }

        .box-cart.style1 .inner-box > a > .price,
        .header-bottom.style1 .grid-right ul.flat-infomation {
            display:none;
        }

        .mainnav.style1 ul.menu > li > a {
            margin-right:22px;
        }

        .slider .slider-item.style8 .item-image {
            width:50%;margin-top:40px;
        }

        .box-6 {
            width:50%;padding:0 10px 0 10px;
        }

        .box-6.big {
            padding-right:10px;padding-left:10px;
        }

        .box-6 .product-box,
        .box-6.big .product-box {
            width:100%;
        }

        .header-bottom.style1 .grid-right .top-search.style1 {
            width:70%;
        }


    }

    @media only screen and (min-width:992px) and (max-width:1199px) {

        #mainnav ul.menu > li > a {
            padding:0 18px;
        }

        .imagebox.style1.v3 .box-price {
            width:200px;padding:30px 2px 0 20px;
        }

        .imagebox.style1.v3 .box-content {
            width:250px;
        }

        .imagebox.style1.v3 .box-image {
            width:calc(100% - 465px);
        }

        .drop-menu {
            width:710px;left:260px;
        }

        .drop-menu > .one-third {
            padding-left:0px;padding-right:0px;
        }

        .drop-menu > .one-third:first-child {
            padding-left:15px;n
        }

        .box-right .img-line {
            padding-left:45px;margin-top:-100px;
        }

        .box-right .img-line img:first-child {
            margin-right:-60px;
        }

        .box-cart.style2 .compare-wishlist a.compare {
            display:block;margin-right:0px;
        }

        .product-detail.style2 .footer-detail .quanlity-box > div.quanlity {
            width:110px;margin-right:10px;
        }

        .product-detail .footer-detail .quanlity-box > div.colors {
            display:block;margin-bottom:20px;margin-left:0px;
        }

        .counter.style1 .counter-content .count-down .square {
            width:55px;
        }

        .top-search form.form-search .box-search .search-suggestions {
            width:670px;
        }

        .slider .slider-item .item-text {
            width:58%;padding:80px 40px;
        }

        .slider .slider-item.style5 .item-text {
            width:40%;
        }

        .slider .slider-item.style2 .item-text {
            width:40%;padding:30px 40px;
        }

        #mainnav.style1 ul.menu > li > a {
            padding:0 12px 0 12.5px;margin-right:0px;
        }

        #mainnav.style1 ul.menu > li.has-mega-menu .submenu {
            width:97%;
        }

        #mainnav.style2 ul.menu > li.has-mega-menu .submenu {
            width:97%;
        }


        .flexslider.style2 {
            width:56%;
        }
        #mega-menu > ul.menu > li .drop-menu {
            padding-left: 15px;
        }
        .slider .slider-item.style7 {
            height: 485px;
        }


    }



    @media only screen and (min-width:992px) {

        ul.submenu {
            word-spacing:2px;
        }

        .submenu {
            position:absolute;top:100px;right:15px;width:1140px;background-color:#fff;opacity:0;visibility:hidden;z-index:99;padding:30px;word-spacing:2px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow:0px 2px 3px 0px rgba(0, 0, 0, 0.3);-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;
        }


    }

    @media only screen and (min-width:992px) and (max-width:1199px) {
        ul.menu > li.has-mega-menu .submenu {
            width: 130%;
        }

    }

    @media only screen and (max-width:991px) {

        .header-middle #logo.style1 {
            line-height:70px;
            margin-bottom:0px;
        }

        ul.flat-infomation.style1 li.phone {
            line-height:70px;margin-right:40px;
        }

        .owl-carousel-11.owl-theme .owl-controls .owl-dots {
            bottom: 0;
        }

        .btn-menu.style1 {
            background:#333;top:17px;
        }

        .btn-menu.style1.v1 {
            background:transparent;top:10px;
        }

        .btn-menu.style1.v2 {
            background:#333;top:10px;
        }

        .top-search.style1 {
            width:370px;padding-left:0px;right:15px;
        }

        .top-search.style1 form.form-search .box-search input {
            padding-left:20px;
        }

        .flat-row,
        .flat-iconbox.style1 {
            padding:30px 0;
        }

        .flat-product-content .container {
            padding:30px 15px;
        }

        .box-cart .inner-box > a > .price {
            display:none;
        }

        .top-search {
            padding-left:0px;margin-right:0px;
        }

        .top-search form.form-search .cat-wrap select {
            padding:1px 35px 0 20px;
        }

        .top-search form.form-search .box-search input {
            padding-left:140px;
        }

        .btn-menu,
        .btn-menu-mega {
            display:none;
        }

        .btn-menu-mega {
            float:left;
        }

        .mainnav > ul.menu > li {
            height:auto;
        }

        .mainnav ul.menu > li > a:after {
            width:0px;
        }

        .mainnav ul.menu > li:hover > .submenu {
            top:100%;
        }

        #mainnav-mobi ul > li > a >.submenu {
            position:relative;top:0px;right:0px;width:100%;background-color:#222222;opacity:1;visibility:visible;z-index:99;padding:30px;word-spacing:4px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow:0px 2px 3px 0px rgba(0, 0, 0, 0.3);-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;
        }

        #mainnav-mobi ul.menu li.has-mega-menu .submenu .row h3 {
            word-spacing:2px;cursor:pointer;font-weight:400;font-size:15px;margin-bottom:0px;padding:15px 0 15px 20px;
        }

        #mainnav-mobi ul.menu li.has-mega-menu .submenu .row .btn-submenu {
            top:-15px;
        }

        #mainnav-mobi ul.menu li.has-mega-menu .submenu .row ul {
            padding-left:30px;word-spacing:2px;padding-right:40px;
        }

        #mainnav-mobi ul.menu li.has-mega-menu .submenu .row ul li {
            border-top:none;border-bottom:1px solid #333;
        }

        #mainnav-mobi ul.menu li.has-mega-menu .submenu .row ul li > a {
            padding-left:5px;
        }

        #mainnav-mobi ul.menu li.has-mega-menu .submenu .row:nth-child(2),
        #mainnav-mobi ul.menu li.has-mega-menu .submenu .row .show,
        .box-right .img-line img:first-child,
        .box-left .img-line img:first-child,
        .flat-newsletter .form-newsletter .right {
            display:none;
        }

        #mainnav-mobi ul > li > a >.submenu li a {
            color:#484848;
        }

        ul.menu li.column-1 .submenu {
            width:100%;background:#222222;border-radius:0px;position:relative;top:-3px;opacity:1;word-spacing:2px;visibility:visible;padding:0;
        }

        .today-deal {
            margin-left:20px;
        }

        .image-about img,
        .box-flexslider, .product-detail.style5 {
            width:100%;
        }

        .product-detail.style5 {
            padding:0 30px;
        }

        .product-detail.style5 .header-detail .reviewed .status-product {
            text-align:left;
        }

        .product-detail.style5 .header-detail .reviewed .status-product span {
            display:inline-block;
        }

        .flexslider .slides img {
            width:auto;max-width:100%;
        }

        .iconbox.style1 {
            margin-bottom:30px;
        }

        .brands-list .brands-item {
            width:20%;
        }

        .imagebox.style1.v1 {
            margin-bottom:30px;
        }

        .imagebox.style1.v1 .box-content,
        .flat-contact {
            padding-top:0px;
        }

        .imagebox.style1.v1 .box-content .cat-name a {
            font-size:15px;
        }

        .flat-tab ul.tab-list {
            padding-left:0px;
        }

        .flat-tab .tab-content {
            padding:30px;
        }

        .progres {
            padding-right:0px;
        }

        .progress-circle {
            text-align:center;
        }

        .progress-circle .circle-item {
            margin-right:80px;
        }

        .order-tracking {
            padding:50px;
        }

        .term-conditions .text-wrap {
            margin-bottom:40px;
        }

        .term-conditions .text-wrap p {
            padding-right:0px;
        }

        .table-cart {
            margin-bottom:30px;
        }

        .form-login, .form-register {
            padding:30px;
        }

        .form-coupon {
            margin-top:40px;
        }

        .cart-totals form .btn-cart-totals {
            margin-top:50px;
        }

        .compare-content .table-compare {
            width:840px;overflow:auto;
        }

        .table-compare tr th {
            padding-left:20px;
        }

        .blog-pagination span {
            display:block;float:none;text-align:center;
        }

        ul.flat-pagination.style1,
        .reviewed .status-product,
        .product-detail.style3 .reviewed .status-product {
            float:none;
        }

        .product-box.style3 {
            height:360px;margin-bottom:30px;
        }

        .imagebox.style1.v3 {
            min-height:380px;padding:15px 20px 20px 20px;
        }

        .imagebox.style1.v3 .box-price {
            text-align:left;padding:0px 55px 0 0px;
        }

        .imagebox.style1.v3 .box-image {
            margin-right:0px;
        }

        .iconbox.style2 {
            margin-bottom:50px;
        }

        .box-right .img-line,
        .box-left,
        .box-right.style1 .img-line {
            text-align:center;margin-top:0px;
        }

        .box-left .img-line {
            margin-bottom:0px;
        }

        .product-detail .footer-detail .quanlity-box > div.colors {
            margin-bottom:20px;margin-right:20px;
        }

        .box-cart.style2 {
            margin:20px 0 20px;
        }

        .box-cart.style2 .btn-add-cart {
            margin-bottom:15px;
        }

        .flexslider.style1 .flex-viewport {
            margin:50px 0 50px;
        }

        .flexslider.style1 .flex-control-nav {
            top:auto;margin-top:0px;width:100%;position:relative;
        }

        .flexslider.style1 .flex-control-nav li {
            display:inline-block;width:auto;
        }

        .flexslider.style1 .slides img {
            display:inline-block;float:none;
        }

        .product-detail.style3 {
            margin-left:0px;
        }

        .box-cart.style2 .compare-wishlist, .box-cart.style2 .btn-add-cart {
            text-align:left;
        }

        .box-cart.style2 .btn-add-cart a {
            width:auto;padding:0 30px;
        }

        .flat-product-content.style2 > .row > .col-md-12 > .row {
            padding:50px 30px;
        }

        .description-text.style1 .box-text:first-child,
        .description-text.style1 .box-text:nth-child(3),
        .description-text.style1 .box-text:nth-child(4) {
            margin-right:0px;margin-top:30px;
        }

        .description-image.style1 {
            margin:0px;text-align:center;
        }

        .box-right.style1 .box-text,
        .box-right.style1 {
            margin-left:0px;
        }

        .box-counter .product-item,
        .counter {
            width:100%;padding:0;
        }

        .counter span.special {
            right:0px;
        }

        .count-down {
            text-align:center;
        }

        .count-down .square {
            margin:0 15px 15px;
        }

        .count-down .square:last-child {
            margin-right:15px;
        }

        .count-down .square .text {
            margin-left:0px;
        }

        .imagebox.style3 {
            padding:20px 20px;
        }

        .imagebox.style3 .box-image {
            float:none;margin-right:0;margin-bottom:20px;text-align:center;
        }

        .imagebox.style3 .box-image.save span {
            top:20px;
        }

        .imagebox.style3 .box-bottom .btn-add-cart a {
            width:auto;padding:0 50px;
        }

        .imagebox.style3 .box-content,
        .imagebox.style3 .box-bottom {
            text-align:center;
        }

        .box-wrap.style1 {
            height:auto;
        }

        .flat-newsletter .form-newsletter {
            padding:50px 20px;margin-top:30px;
        }

        .flat-newsletter .form-newsletter .left {
            float:none;text-align:center;padding-top:0px;
        }

        .widget-categories-ft,
        .box-left .img-product,
        .form-review.style2 {
            padding-left:0px;
        }

        .widget-ft {
            margin-bottom:20px;
        }

        footer {
            padding:30px 0;
        }

        .box-cart .inner-box .dropdown-box:before {
            right:15px;
        }

        .top-search form.form-search .box-search .search-suggestions {
            width:0;
        }

        .imagebox.style5 .box-text {
            text-align:center;float:none;width:100%;margin-right:0px;
        }

        .flexslider.style1 .slides img {
            padding-left: 0px;
        }

        .flexslider.style2 {
            width:100%;float:left;
        }

        .flexslider.style2 .flex-viewport {
            margin:50px 50px 0;
        }

        .flexslider.style2 .flex-control-nav {
            right:auto;left:0;width:20%;
        }

        .slider .slider-item .item-image {
            display:none;
        }

        .slider .slider-item.style4 .item-text {
            padding:80px 48px;width:100%;
        }

        .slider .slider-item.style5 .item-image,
        .slider .slider-item.style7 .item-image,
        .slider .slider-item.style2 .item-image {
            display:block;
        }

        .slider .slider-item.style6 .item-text {
            width:100%;padding-top:80px;
        }

        .slider .slider-item.style7 .item-text,
        .slider .slider-item.style2 .item-text {
            width:52%;padding-top:20px;
        }

        .slider .slider-item.style7 .item-text .content-item .regular {
            display:none;
        }

        .slider .slider-item.style7 .item-image,
        .slider .slider-item.style2 .item-image {
            width:45%;padding-right:20px;
        }

        .slider .slider-item.style8 .item-text .header-item h2 {
            font-size:52px;
        }

        .flat-iconbox.style6 .col-md-3 .iconbox {
            padding:0 0 !important;
        }

        footer.style4 .widget-menu,
        footer.style4 .widget-categories-ft {
            padding-left:0px;
        }

        .flat-unstyled.style1 {
            height:auto;line-height:100px;
        }

        .header-middle .grid-left #logo {
            line-height:100px;
            float:left;
        }

        .header-bottom.style1 .grid-left {
            width:15%
        }

        .flat-slider.style1 .grid-left {
            width:0;
        }

        .header-bottom.style1 .grid-right,
        .flat-slider.style1 .grid-right {
            width:100%;margin-left:0px;
        }

        .slider .slider-item.style10 .item-image {
            display:block;
        }

        .boxed.style2 .header-bottom .container-fluid {
            padding:0 15px;
        }

        .grid-right .show-search {
            display:block;float:right;margin-top:4px;
        }

        .grid-right .top-search.style1 {
            padding:10px 0;margin-right:0px;position:absolute;top:100px;right:15px;width:100%;opacity:0;visibility:hidden;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;
        }

        .header-bottom.style1 .grid-right .top-search.style1.active {
            top:64px;opacity:1;visibility:visible;
        }

        .grid-right .box-cart.style1 {
            float:right;margin-right:15px;
        }

        .grid-left .btn-menu {
            background:#333;
        }

        .owl-carousel-4 .owl-item .imagebox.style4 {
            height:340px;
        }


    }

    @media only screen and (min-width:768px) and (max-width:991px) {

        ul.flat-unstyled {
            margin-left:-30px;
        }

        ul.flat-support {
            margin-right:-35px;
        }

        .text-about {
            padding:30px 50px;
        }

        .imagebox.style1.v3 .box-image {
            width:168px;
        }

        .box-owl-carousel .rows .imagebox.style1.v1 {
            padding:0 15px;
        }

        .top-search form.form-search .cat-wrap {
            display:none;
        }

        .top-search form.form-search .box-search input {
            padding-left:15px;
        }

        .owl-carousel-3 .imagebox.style4 {
            height:310px;
        }

        .banner-box.style2 .inner-box,
        .banner-box.style2 .inner-box:nth-child(2),
        .banner-box.style2 .inner-box a img {
            width:100%;
        }

        .banner-box.style2 .inner-box:nth-child(2) {
            margin-top:20px;
        }

        .slider .slider-item.style8 .item-image {
            display:block;
        }

        .slider .slider-item.style8 .item-text {
            width:50%;padding-top:30px;
        }
        .slider .slider-item.style9 .item-text {
            padding: 25px 20px;
        }
    }

    @media only screen and (max-width:767px) {
        ul.flat-unstyled,
        ul.flat-support {
            text-align:center;
        }

        .header-middle #logo {
            text-align:center;
            line-height:60px;
            margin:0px;
        }

        .top-search {
            padding:15px 0 5px;
        }

        .top-search.style1 {
            padding:10px 0;margin-right:0px;position:absolute;top:100px;right:0;width:100%;opacity:0;visibility:hidden;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;
        }

        .top-search.style1 .cat-wrap {
            display:none;
        }

        .top-search.style1.active {
            top:44px;right:15px;opacity:1;visibility:visible;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;
        }

        .top-search.style1.active form.form-search .box-search input {
            border:1px solid #484848;
        }

        .top-search.style2 {
            padding:15px 0 15px;width:100%;float:none;
        }

        .show-search {
            display:block;float:right;margin-top:4px;
        }

        .box-cart.style1.v1 {
            padding:10px 0 15px;float:none;text-align:center;
        }

        .box-cart.style1 {
            text-align:right;float:right;margin-right:15px;
        }

        .slider .slider-item .item-text .header-item h2 {
            font-size: 44px;
        }

        .product-box.style2.v1 {
            float:none;
        }

        .iconbox {
            margin-bottom:30px;
        }

        .text-about {
            margin-left:0px;margin-right:0px;padding:30px;
        }

        article.main-post.style4 {
            text-align:center;
        }

        .member {
            text-align:center;
        }

        .brands-list .brands-item {
            width:25%;
        }

        .progress-circle .circle-item {
            margin-right:19px;
        }

        .order-tracking {
            padding:30px 30px;
        }

        .order-tracking form .one-half {
            width:100%;padding:0px;margin-bottom:20px;
        }

        .order-tracking form .btn-track button {
            margin-top:0px;margin-left:0px;
        }

        article.main-post.style2,
        article.main-post .featured-post a img,
        .box-counter.style1 .counter,
        .box-counter.style1 .product-item {
            width:100%;
        }

        .box-counter.style1 .product-item {
            padding-left:0px;
        }

        .imagebox.style3.v1 .box-image.save span {
            left:-29px;top:-25px;
        }

        .form-login,
        #shop .sidebar .widget,
        .box-wrap.style1 {
            margin-bottom:30px;
        }

        .form-login, .form-register {
            height:420px;
        }

        .form-login .title, .form-register .title {
            margin-bottom:40px;
        }

        .sort-product.style1 {
            padding:15px 25px;
        }

        .sort-product.style1 .icons,
        .sort-product.style1 .sort {
            float:none;
        }

        .sort-product .sort > div.popularity {
            margin-left:0px;
        }

        .description-image {
            margin-top:0px;text-align:center;
        }

        .box-right .img-line {
            padding-left:0px;
        }

        .product-detail.style1 > span {
            width:0px;
        }

        .product-detail.style4 {
            padding:15px;
        }

        .counter.style1 {
            margin-left:0px;width:100%;margin-top:30px;text-align:center;
        }

        .counter.style1 .item-sale {
            margin:0px 15px 15px;
        }

        .box-owl-carousel .rows {
            margin:0 15px;
        }

        .box-owl-carousel .rows .imagebox.style1.v1 {
            width:100%;padding-bottom:20px;margin-bottom:0px;border-right:none;border-bottom:1px solid #e5e5e5;
        }

        .box-owl-carousel .rows .imagebox:nth-child(3),
        .box-owl-carousel .rows .imagebox.style1.v1:nth-child(3) {
            border-bottom:none;
        }

        .banner-box {
            display:none;
        }

        .flat-newsletter .form-newsletter .left .title {
            float:none;margin-right:0px;margin-bottom:15px;
        }

        .footer-bottom.style3 {
            text-align:center;
        }

        .footer-bottom.style3 p.copyright,
        .footer-bottom.style3 .btn-scroll {
            float:none;
        }

        .product-box.style1.v1 {
            height:250px;
        }

        .flat-imagebox.style2 .product-wrap .tab-item .row .col-md-6 .product-box {
            padding-left:0px;
        }

        .box-cart {
            text-align:center;padding:18px 0;
        }

        .box-cart .inner-box ul.menu-compare-wishlist li {
            margin-right:25px;
        }

        .table-wishlist {
            width:750px;
        }

        .table-wishlist tbody tr td > div.delete {
            margin-right:30px;
        }

        .popup-newsletter .popup-text {
            width:100%;
        }

        .popup-newsletter .popup-image {
            display:none;
        }

        .popup-newsletter .container {
            width:720px
        }

        .slider .slider-item.style5 {
            height:400px;
        }

        .slider .slider-item.style8 .item-text {
            width:100%;
        }

        .slider .slider-item:before {
            right:50px;
        }

        .slider .slider-item.style2 .item-text {
            padding:20px;
        }

        .divider90 {
            display:none;
        }

        .owl-carousel-3 .imagebox.style4 {
            height:300px;
        }

        .counter.style1.v2, .bestsellers, .featured, .hot-sale,
        .box-6.big {
            width:100%;
        }

        .product-wrap.style1 .tab-item {
            padding:0 10px;
        }

        .header-middle .grid-left,
        .header-middle .grid-right {
            width:100%;margin-left:0px;text-align:center;
        }

        .header-middle .grid-right .flat-unstyled.style1 {
            float:none;line-height:50px;
        }

        .header-middle .grid-left #logo {
            line-height:60px;
        }

        .slider .slider-item.style10 .item-text {
            width:100%;
        }

        .slider .slider-item.style10 .item-image {
            display:none;
        }

        .header-bottom.style1 .grid-right .top-search.style1.active {
            top:64px;
        }

        .box-filter .widget {
            width: 50%;
        }


    }

    @media only screen and (max-width:575px) {

        .container {
            max-width:100%;
        }

        .header-middle #logo.style1 {
            float:none;width:100%;
        }

        ul.flat-infomation.style1 {
            float:left;
        }

        ul.flat-infomation.style1 li.phone {
            height:auto;
        }

        ul.flat-infomation.style1 li img {
            display:none;
        }

        .widget-apps .widget-title h3 {
            margin-top:0px;
        }

        ul.app-list li {

        }

        ul.app-list li.app-store {
            margin-bottom:20px;margin-right:0px;
        }

        .brands-list .brands-item {
            width:33.333%;
        }

        .flat-tab ul.tab-list li {
            padding:14px 25px;
        }

        .progress-circle .circle-item {
            margin-right:0px;display:block;margin-bottom:30px;
        }

        .progress-circle .circle-item .demo {
            position:relative;left:50%;margin-left:-83.5px;
        }

        article.main-post.style1 .featured-post {
            float:none;margin-right:0;margin-bottom:20px;
        }

        article.main-post .featured-post a img,
        .comment-respond .form-comment form .comment-form-name,
        .comment-respond .form-comment form .comment-form-email,
        .comment-respond .form-comment form .comment-form-comment {
            width:100%;
        }

        article.main-post.single .content-post .entry-post blockquote {
            padding-left:50px;
        }

        article.main-post.single .content-post .entry-post blockquote span {
            left:3px;
        }

        .fields-content .field-row .field-one-half,
        #form-contact .form-box.one-half {
            width:100%;padding:0px !important;
        }

        .table-cart table {
            width:650px;overflow:hidden;
        }

        .table-cart tr td .quanlity span.btn-up {
            right:20px;
        }

        .table-cart tr td .img-product {
            margin-right:15px;
        }

        .flat-location .location,
        .flat-location .location-detail,
        .flat-location #flat-map-2 {
            width:100%;
        }

        .product-box.style3 {
            min-height:580px;height:auto;
        }

        .imagebox.style1.v3 {
            text-align:center;min-height:600px;height:auto;
        }

        .imagebox.style1.v3 .box-image,
        .imagebox.style1.v3 .box-content,
        .imagebox.style1.v3 .box-price {
            width:100%;padding:0px;text-align:center;
        }

        .imagebox.style1.v3 .box-price .btn-add-cart a {
            display:inline-block;padding:0 40px;
        }

        .flex-control-thumbs {
            margin-top:30px;
        }

        .product-detail-bar li {
            padding:12px 12px;font-size:16px;
        }

        .product-detail-bar.style1 li {
            padding:12px;
        }

        body.background section.flat-row .container {
            padding:10px 15px 0;
        }

        .box-owl-carousel.style1 .imagebox.style7 {
            width:100%;border-right:none;
        }

        .popup-newsletter .container {
            width:480px
        }

        .flexslider.style2 .flex-viewport {
            margin:0 0 30px;
        }

        .flexslider.style2 .flex-control-nav {
            width:100%;position:relative;margin-top:0px;
        }

        .flexslider.style2 .flex-control-thumbs li {
            float:left;margin-bottom:10px;
        }

        .slider .slider-item.style6 .item-text {
            padding-top:30px;
        }

        .slider .slider-item.style7 .item-text,
        .slider .slider-item.style2 .item-text,
        .box-6 {
            width:100%;
        }

        .slider .slider-item.style7 .item-image,
        .slider .slider-item.style2 .item-image {
            display:none;
        }

        .slider .slider-item.style2 .item-text {
            padding:20px 20px;
        }

        .slider .slider-item.style4 .item-text .header-item h2 {
            font-size:50px;
        }

        .boxed.style1 .flat-row.flat-highlights {
            padding-top:30px;
        }

        .box-6.big .imagebox .box-bottom .btn-add-cart a {
            padding:0 35px;
        }

        .boxed.style2 .footer .container-fluid {
            padding:0 15px;
        }

        .imagebox.style3 .box-bottom .btn-add-cart a {
            padding:0 35px;
            width: 100%;
            margin-left: 0px;
        }

        .imagebox.style3 .box-bottom .compare-wishlist{
            text-align: center;
        }

        .imagebox.style3 .box-bottom .compare-wishlist a.compare{
            margin-left: 0px;
        }

        .box-filter .widget {
            width: 100%;
        }


        .slider .slider-item .item-text .header-item h2{font-size: 40px;}

    }

    @media only screen and (min-width:480px) and (max-width:767px) {

        .banner-box .inner-box a {
            margin-top:30px;text-align:center;
        }

        .slider .slider-item.style5 .item-image {
            width:43%;padding-right:30px;
        }


    }

    @media only screen and (min-width:480px) {

    }

    @media only screen and (max-width:480px) {

        .flat-breadcrumb ul.breadcrumbs li.trail-item a {
            margin-right:10px;
        }

        .wrap-error .content-error .form-search-error {
            padding:30px 30px;
        }

        .wrap-error .content-error .form-search-error form .search-input input {
            width:100%;margin-right:0px;display:block;margin-bottom:15px;
        }

        .brands-list .brands-item {
            width:50%;
        }

        .progres .progress-item .perc span {
            top:17px;
        }

        .btn-radio.style2 .radio-info label {
            width:180px;
        }

        .accordion-toggle .toggle-title:before {
            right:19.5px;
        }

        .accordion-toggle .toggle-title:after {
            right:12.5px;
        }

        .tabs ul.menu-tab {
            margin-bottom:20px;
        }

        .tabs ul.menu-tab li {
            margin-right:15px;font-size:16px;
        }

        ol.comment-list li.comment .comment-text .comment-metadata .name {
            float:none;
        }

        ol.comment-list li.comment .comment-text .comment-metadata .queue {
            text-align:left;line-height:24px;
        }

        .cart-totals {
            padding:35px 20px 30px 30px;
        }

        .btn-order {
            padding:0px;
        }

        .form-coupon {
            padding:30px 15px;
        }

        .form-coupon form input {
            width:100%;margin-bottom:20px;margin-right:0px;
        }

        .sort-product .icons,
        .sort-product .sort,
        .wrap-imagebox .flat-row-title span {
            float:none;
        }

        .sort-product .sort > div {
            margin-left:0px;margin-bottom:15px;display:block;
        }

        .sort-product .sort > div select {
            width:100% !important;
        }

        .main-shop .wrap-imagebox .flat-row-title h3 {
            display:block;float:none;padding:0px 0 10px;
        }

        .owl-carousel-4.owl-theme .owl-controls .owl-nav div.owl-prev,
        .owl-carousel-4.owl-theme .owl-controls .owl-nav div.owl-next {
            border-radius:50%;border:1px solid #e5e5e5;left:-15px;width:45px;height:45px;line-height:42px;background-color:#fff;
        }

        .owl-carousel-4.owl-theme .owl-controls .owl-nav div.owl-next {
            right:-15px;left:auto;
        }

        .product-detail {
            padding:20px;
        }

        .rating .queue-box li span,
        .rating .score .queue {
            display:block;
        }

        .rating .queue-box li span.numb-star,
        .rating .score .queue {
            margin-left:0px;
        }

        .rating .score .queue {
            margin-top:20px;
        }

        .product-tab ul.tab-list li,
        .product-tab ul.tab-list li.active {
            margin-right:18px;font-weight:300;font-size:16px;
        }

        .product-tab ul.tab-list li {
            margin-right:15px;
        }

        .product-tab ul.tab-list li:hover {
            font-weight:400;
        }

        .banner-box {
            margin-bottom:20px;
        }

        .banner-box.one-half .inner-box {
            width:100%;margin-bottom:20px;
        }

        .banner-box.one-half {
            margin-bottom:0px;
        }

        .banner-box .inner-box a img,
        .banner-box.style2 .inner-box:nth-child(2) {
            width:100%;
        }

        .imagebox.style3 .box-content,
        .imagebox.style3 .box-bottom {
            text-align:left;
        }

        .flat-newsletter .form-newsletter .left form {
            display:block;
        }

        .flat-newsletter .form-newsletter .left form input {
            width:100%;
        }

        .flat-imagebox.style2 .product-wrap .tab-item .row .col-md-6 .product-box .imagebox .box-bottom .btn-add-cart a {
            padding:0 30px;
        }

        .top-search.style1 {
            width:290px;
        }

        .top-search form.form-search .cat-wrap {
            display:none;
        }

        .top-search form.form-search .box-search input {
            padding-left:15px;
        }

        .box-cart .inner-box .dropdown-box {
            right:-57px;width:310px;padding:25px 15px;
        }

        .box-cart .inner-box .dropdown-box:before {
            right:73px;
        }

        .popup-newsletter .container {
            width:320px
        }

        .popup-newsletter .popup-text h2 {
            font-size:20px;
        }

        .popup-newsletter .popup-text p.subscribe {
            margin:15px 0 15px;
        }

        .popup-newsletter .popup-text .form-popup .checkbox {
            margin-top:0px;
        }

        .slider .slider-item.style4 .item-text {
            padding:15px 10px;
        }

        .slider .slider-item.style8 .item-text {
            padding:25px;
        }

        .owl-carousel-3 .imagebox.style4 {
            height:310px;
        }

        .slider .slider-item.style10 .item-text .header-item h2 {
            font-size:50px;
        }

        .header-bottom.style1 .grid-right .top-search.style1 {
            width:91%;
        }

        .owl-carousel-4 .imagebox.style4 {
            text-align:center;
        }

        .slider .slider-item .item-text {
            width:100%;padding:30px !important;
        }

        .owl-carousel-item .product-box.style1:last-child {
            margin-bottom:80px;
        }

        .slider .slider-item.style7 .item-text .header-item h2 {
            margin-top:0px;margin-bottom:0px;
        }

        .box-cart.style1.v1 .inner-box .dropdown-box {
            right:-80px;
        }

        .box-cart.style1.v1 .inner-box .dropdown-box:before {
            right:95px;
        }

        .slider .slider-item.style8 .item-text .header-item h2 {
            line-height:42px;
        }

        .flat-breadcrumb ul.breadcrumbs li.trail-item {
            margin-right:6px;
        }

        .slider .slider-item:before,
        .slider .slider-item.style1:before {
            right: 20px;
        }

    }

    @media (max-width:320px) {

    }

</style>
{{--   <--------------------style header end--------------->--}}

{{--   <--------------------style addbanner --------------->--}}
<style>
    #bill-pay-ad {
        background: #3888E1;
        background: -webkit-linear-gradient(#3888E1, #307CD1);
        background: -o-linear-gradient(#3888E1, #307CD1);
        background: -moz-linear-gradient(#3888E1, #307CD1);
        background: linear-gradient(#3888E1, #307CD1);
        color: #FFF;


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
        height: auto;
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
        /*border-top: 1px solid;*/
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
        margin-right: 8px;
        width: 23px!important;
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

{{--<--------------------style adbanner  end--------------->--}}
<section id="header" class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="flat-support">
                        <li>
                            <a href="#" title="">Support</a>
                        </li>
                        <li>
                           <img src="">
                        </li>
                        <li>
                           @if(!empty(\Illuminate\Support\Facades\Auth::user()))
                            {{Auth::user()->email}}
                            @endif
                        </li>
{{--                        <li>--}}
{{--                            <a href="#" title="">Track Your Order</a>--}}
{{--                        </li>--}}
                    </ul><!-- /.flat-support -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <ul class="flat-infomation">
                        <li class="phone">
                            Call Us: <a href="#" title="">(+91) 90129 83208</a>
                        </li>
                    </ul><!-- /.flat-infomation -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <ul class="flat-unstyled">
                        <li class="account">
                            <a href="#" title="">My Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="unstyled">
                                @if(\Illuminate\Support\Facades\Auth::user())
                                <li>
                                    <a  href="{{url('/logout')}}" title="">logout</a>
                                </li>
                                    <li>
                                        <a href="{{url('/wishlist')}}" title="">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#" title="">My Account</a>
                                    </li>
                                @else
                                    <li>
                                        <a  href="{{url('/loginview')}}" title="">login</a>
                                    </li>
                                    <li>
                                        <a  href="{{url('/loginview')}}" title="">register</a>
                                    </li>
                                @endif
{{--                                <li>--}}
{{--                                    <a href="#" title="">My Cart</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" title="">Checkout</a>--}}
{{--                                </li>--}}
                            </ul>
                        </li>
{{--                        <li>--}}
{{--                            <a href="#" title="">USD<i class="fa fa-angle-down" aria-hidden="true"></i></a>--}}
{{--                            <ul class="unstyled">--}}
{{--                                <li>--}}
{{--                                    <a href="#" title="">Euro</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" title="">Dolar</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li>
                            <a href="#" title="">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="unstyled">
{{--                                <li>--}}
{{--                                    <a href="#" title="">Turkish</a>--}}
{{--                                </li>--}}
                                <li>
                                    <a href="#" title="">malayalam</a>
                                </li>
                                <li>
                                    <a href="#" title="">English</a>
                                </li>
                                <li>
                                    <a href="#" title="">اللغة العربية</a>
                                </li>
{{--                                <li>--}}
{{--                                    <a href="#" title="">Español</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" title="">Italiano</a>--}}
{{--                                </li>--}}
                            </ul>
                        </li>
                    </ul><!-- /.flat-unstyled -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="logo" class="logo">
                        <a href="{{url('/')}}" title="">
                            <!--<img src="logo.png" alt="">-->
                            <?php
                            $logo = \App\Models\LogoModel::first();
                            $categortpagina = \App\Models\CategoryModel::orderBy('category_name')->get();
                            ?>
                            @if($logo)
                                <?php
                                $logoimg = env('image_path');
                                ?>
                                <img style="font-weight: bolder;width: 191px;" src="<?php echo $logoimg?>{{$logo->logo}}">
                                {{--                                    <h3 style="font-weight: bolder;margin-top: 18px;">KOOLIPANI</h3>--}}
                            @endif
                        </a>
                    </div><!-- /#logo -->
                </div><!-- /.col-md-3 -->


                <div class="col-md-6">
                    <div class="top-search">
                        <form action="#" method="get" class="form-search" accept-charset="utf-8">
                            <div class="cat-wrap" style="z-index: 1">
                                <select name="category">
                                    <option  value="">All Category</option>
                                    <option  value="">Cameras</option>
                                    <option  value="">Computer</option>
                                    <option  value="">Laptops</option>
                                </select>
                                <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                <div class="all-categories">
                                    <div class="cat-list-search">
                                        <div class="title">
                                            Electronics
                                        </div>
                                        <ul>
                                            <li>Components</li>
                                            <li>Laptop</li>
                                            <li>Monitor</li>
                                            <li>Mp3 player</li>
                                            <li>Scanners</li>
                                        </ul>
                                    </div><!-- /.cat-list-search -->
                                    <div class="cat-list-search">
                                        <div class="title">
                                            Furniture
                                        </div>
                                        <ul>
                                            <li>Bookcases</li>
                                            <li>Barstools</li>
                                            <li>TV stands</li>
                                            <li>Desks</li>
                                            <li>Accent chairs</li>
                                        </ul>
                                    </div><!-- /.cat-list-search -->
                                    <div class="cat-list-search">
                                        <div class="title">
                                            Accessories
                                        </div>
                                        <ul>
                                            <li>Software</li>
                                            <li>Mobile</li>
                                            <li>TV stands</li>
                                            <li>Printers</li>
                                            <li>Media</li>
                                        </ul>
                                    </div><!-- /.cat-list-search -->
                                </div><!-- /.all-categories -->
                                <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                            </div><!-- /.cat-wrap -->
                            <div class="box-search">
                                <input type="text" name="search" placeholder="Search what you looking for ?">
                                <span class="btn-search">
                                        <button type="submit" class="waves-effect"><i class="fa fa-search"></i></button>
                                        </span>
                            </div><!-- /.box-search -->
                        </form><!-- /.form-search -->
                    </div><!-- /.top-search -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-3 notificationrow">
                    <ul>
                        @if(\Illuminate\Support\Facades\Auth::user())
                        <li><a href="{{url('/myadsview')}}">My Ads</a></li>
                        @else
                         <li><a href="{{url('/loginview')}}">My Ads</a></li>
                        @endif
                        <li>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                <?php
                                $wishlistcount = \App\Models\WishlistModel::where('wishlist.user_id',\Illuminate\Support\Facades\Auth::user()->id)->count()
                                ?>
                            <a href="{{url('/wishlist')}}">
                                <div class="container">
                                    <button data-notification-count="{{$wishlistcount}}" id="wishlist-btn">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                </div>
                            </a>
                            @else
                                <a href="{{url('/loginview')}}">
                                    <div class="container">
                                        <button data-notification-count="0" id="wishlist-btn">
                                            <i class="fa fa-heart"></i>
                                        </button>
                                    </div>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-middle -->
    {{-----------------------------------header bottom------------------------------}}
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">

                {{-- ---------------sidebar position-------------------}}
                <div class="col-md-1" style="left: 28px;">
                    <input type="checkbox" id="check">
                    <label class="labelsidebar" for="check">
                        <i class="fa fa-bars" id="btn"></i>
                        <i class="fa fa-times" id="cancel"></i>
                    </label>
                    <style>
                        .wrapper{
                            min-height:0!important;
                            /*height: 122px!important;*/
                            width: 122px!important;
                            position: relative!important;
                            border: 5px solid black;
                            border-radius: 50%;
                            background-size: 100% 100%;
                            overflow: hidden;
                        }
                        .wrapper img{
                            height: 122px!important;
                            width: 122px!important;
                            position: relative!important;
                            border-radius: 50%!important;
                            margin-left: 0!important;
                            background-size: 100% 100%;
                            overflow: hidden;
                        }
                        .myfiles{
                            position: absolute;
                            bottom: -42px;
                            left: -2px;
                            outline: none;
                            color: transparent;
                            box-sizing: border-box;
                            width: 172px;
                            height: 74px;
                            cursor: pointer;
                            padding: 15px 120px;
                            transition: 0.5s;
                            background: rgba(0,0,0,0.5);
                        }
                        .myfiles::-webkit-file-upload-button{
                            visibility: hidden;
                        }
                        .myfiles::before{
                            content: '\f030';
                            font-size: 21px;
                            font-family: FontAwesome;
                            color: #ffff;
                            left: 48px;
                            bottom: 21px;
                            z-index: 9999999;
                            position: absolute;
                            display: inline-block;
                            -webkit-user-select: none;
                        }
                        .buttonprofileimg{
                            width: 0px;
                            height: 23px;
                            top: -25px;
                            left: 28px;
                            background: transparent!important;
                            color: black!important;
                            border: 1px solid gray;
                            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                        }
                        .buttonprofileimg:hover{
                            width: 0px;
                            height: 23px;
                            top: -25px;
                            left: 28px;
                            background: green!important;
                            color: white!important;
                            border: 1px solid black;
                        }
                        .buttonprofileimg2{
                            font-size: 11px;
                            width: 56px!important;
                            height: 23px;
                            border: 1px solid gray;
                            top: -13px;
                            left: 26px;
                            position: relative;
                            color: black;
                            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                        }
                        .buttonprofileimg2:hover{
                            color: white;
                            background: red;
                        }
                        .buttonprofileimg i{
                            position: absolute;
                            top: -23px;
                            left: 4px;
                            font-size: 12px;
                            height: 0px;
                        }
                        .buttonprofileimg2 i{
                            position: absolute;
                            top: -24px;
                            left: 2px;
                            font-size: 12px;
                            height: 0px;
                        }
                    </style>
                    <div class="sidebarslider">
                        <header style="text-align: -webkit-center;">
                            @if (Auth::user())
                             @if(!empty($profileimage))
                             <form action="{{url('/updateprofilepick/'.$profileimage->id)}}" method="post" enctype="multipart/form-data">
                                 @csrf
                            <div class="wrapper">
                                <?php
                                 $profileimg = env('image_path2')
                                ?>
                                <img src="<?php echo $profileimg?>{{$profileimage->profileimage}}">
                                <input name="profilepic" type="file" class="myfiles">
                            </div>
                            <button class="buttonprofileimg" type="submit">
                                <i>UPDATE</i>
                            </button>
                            <a  href="{{url('/removeprofilepic/'.$profileimage->id)}}" class="buttonprofileimg2" type="submit"><i>REMOVE</i></a>
                            @if(!empty(\Illuminate\Support\Facades\Auth::user()))
                            <small style="left: -59px;;top: 12px;position: relative;">{{Auth::user()->name}}</small>
                            @endif
                            </form>
                             @else
                             <form action="{{url('/postprofilepick')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="wrapper">
                                            <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=">
                                            <input name="profilepic" type="file" class="myfiles">
                                        </div>
                                        <button class="buttonprofileimg" type="submit">
                                            <i>upload</i>
                                        </button>
                                        @if(!empty(\Illuminate\Support\Facades\Auth::user()))
                                            <small style="left: -28px;top: 12px;position: relative;">{{Auth::user()->name}}</small>
                                        @endif
                                    </form>
                             @endif
                            @else
                                <a href="{{url('loginview')}}">
                                    <div class="wrapper">
                                        <img src="">
                                        <input name="profilepic" type="file" class="myfiles">
                                    </div>
                                </a>
                            @endif
                        </header>
                        <ul>
                            @if (Auth::user())
                            <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i>LOG OUT</a></li>
                            <li><a href="#"><i class="fa fa-desktop"></i>My Account</a></li>
{{--                            <li><a href="#"><i class="fa fa-first-order"></i>Orders & payment</a></li>--}}
                            <li><a href="{{url('/myadsview')}}"><i class="fa fa-address-book"></i>My ADS</a></li>
                            @else
                                <li><a href="{{url('/loginview')}}" title=""><i class="fa fa-sign-in"></i>Login/Register</a></li>
                            @endif
                            <header>CATEGORY SERVICE</header>
                            @foreach($categortpagina as $show)
                                <li>
                                    <a href="{{url('/categoryworker/'.$show->id)}}">
                                        <?php
                                        $imagesicon = env('image_path')
                                        ?>
                                        <img src="<?php echo $imagesicon?>{{$show->category_image}}" id="editimage"/>
                                        {{$show->category_name}}
                                    </a>
                                </li>
                            @endforeach
                            <header>OTHER</header>
                            <li><a href="#"><i class="fa fa-qrcode"></i>Download app</a></li>
                            <li><a href="#"><i class="fa fa-qrcode"></i>Settings</a></li>
                            <li><a href="#"><i class="fa fa-qrcode"></i>privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                {{-- ---------------sidebar position-------------------}}
                <div class="col-md-2" style="left: 26px;">
                    <div class="top-search" style="width: 219px;">
                        <form action="{{url('/searchbylocation')}}" method="get" class="form-search" accept-charset="utf-8" style="margin-bottom: -49px;">
                            <div class="box-search">
                                <?php
                                $getcategoryval = Session::get('key5');
                                ?>
                                <input style="font-size: 15px;padding-left: 5px!important;" name="location" id="autocomplete" class="form-control" placeholder="SEARCH CITY , AREA" type="text" @if(!empty($value)) value="{{$value}}" @else value="" @endif>
                                <input style="font-size: 15px;padding-left: 5px!important;" name="categoryid2" type="hidden" id="autocomplete" class="form-control" placeholder="" type="text" @if(!empty($categortpagina3->catid)) value="{{$categortpagina3->catid}}" @else value="" @endif>
                                <input style="font-size: 15px;padding-left: 5px!important;" name="city" type="hidden" class="form-control field" id="locality">
                                <input style="font-size: 15px;padding-left: 5px!important;" name="state" type="hidden" class="form-control field" id="administrative_area_level_1">
                                <input style="font-size: 15px;padding-left: 5px!important;" name="pincode" type="hidden" class="form-control field" id="postal_code">
                                <input style="font-size: 15px;padding-left: 5px!important;" name="country" type="hidden" class="form-control field" id="country">
                                <input style="font-size: 15px;padding-left: 5px!important;" name="latitude" type="hidden" class="form-control field"  id="latitude"@if(!empty($sessionlat2)) value="{{$sessionlat2}}" @endif">
                                <input style="font-size: 15px;padding-left: 5px!important;" name="loungnitude" type="hidden" class=" form-control field" id="longitude" @if(!empty($sessionlong2)) value="{{$sessionlong2}}" @endif">
                                <button style="top: -49px;left: 153px;" type="submit" class="waves-effect"><i class="fa fa-location-arrow"></i></button>
                            </div><!-- /.box-search -->
                        </form><!-- /.form-search -->
                    </div><!-- /.top-search -->
                </div><!-- /.col-md-3 -->




                <div class="col-md-8 col-10" style="left: 45px;">
                    <div class="nav-wrap">
                        <div id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="column-1">
                                    <a href="{{url('/')}}" title="">Home</a>
{{--                                    <ul class="submenu">--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 01</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 01</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 02</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 03</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 04</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 05</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 06</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 07</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 08</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 09</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Layout 10</a>--}}
{{--                                        </li>--}}
{{--                                    </ul><!-- /.submenu -->--}}
                                </li><!-- /.column-1 -->
                                <li class="column-1">
                                    <a href="shop.html" title="">Discounts on Premium Ads</a>
                                </li><!-- /.column-1 -->
                                <li class="column-1">
                                    <a href="#" title="">Download The App</a>
{{--                                    <ul class="submenu">--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Home Theater Systems</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Receivers & Amplifiers</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>Speakers</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>CD Players & Turntables</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>High-Resolution Audio</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i>4K Ultra HD TVs</a>--}}
{{--                                        </li>--}}
{{--                                    </ul><!-- /.submenu -->--}}
                                </li><!-- /.column-1 -->
                                <li class="has-mega-menu">
                                    <a href="#" title="">For Businesses</a>
{{--                                    <div class="submenu">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-3 col-md-12">--}}
{{--                                                <h3 class="cat-title">Accessories</h3>--}}
{{--                                                <ul class="submenu-child">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Electronics</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Furniture</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Accessories</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Divided</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Everyday Fashion</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Modern Classic</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Party</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="show">--}}
{{--                                                    <a href="#" title="">Shop All</a>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- /.col-lg-3 col-md-12 -->--}}
{{--                                            <div class="col-lg-3 col-md-12">--}}
{{--                                                <h3 class="cat-title">Laptop And Computer</h3>--}}
{{--                                                <ul class="submenu-child">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Networking & Internet Devices</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Laptops, Desktops & Monitors</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Hard Drives & Memory Cards</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Printers & Ink</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Networking & Internet Devices</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Computer Accessories</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Software</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="show">--}}
{{--                                                    <a href="#" title="">Shop All</a>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- /.col-lg-3 col-md-12 -->--}}
{{--                                            <div class="col-lg-4 col-md-12">--}}
{{--                                                <h3 class="cat-title">Audio & Video</h3>--}}
{{--                                                <ul class="submenu-child">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Headphones & Speakers</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Home Entertainment Systems</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">MP3 & Media Players</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="show">--}}
{{--                                                    <a href="#" title="">Shop All</a>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- /.col-lg-4 col-md-12 -->--}}
{{--                                            <div class="col-lg-2 col-md-12">--}}
{{--                                                <h3 class="cat-title">Home Audio</h3>--}}
{{--                                                <ul class="submenu-child">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Home Theater Systems</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Receivers & Amplifiers</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">Speakers</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">CD Players & Turntables</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">High-Resolution Audio</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#" title="">4K Ultra HD TVs</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="show">--}}
{{--                                                    <a href="#" title="">Shop All</a>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- /.col-lg-2 col-md-12 -->--}}
{{--                                        </div><!-- /.row -->--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="banner-box">--}}
{{--                                                    <div class="inner-box">--}}
{{--                                                        <a href="#" title="">--}}
{{--                                                            <img src="#" alt="">--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <div class="banner-box">--}}
{{--                                                    <div class="inner-box">--}}
{{--                                                        <a href="#" title="">--}}
{{--                                                            <img src="#" alt="">--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div><!-- /.row -->--}}
{{--                                    </div><!-- /.submenu -->--}}
                                </li><!-- /.has-mega-menu -->
                            </ul><!-- /.menu -->
                        </div><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                    <div class="today-deal">
                        @if(\Illuminate\Support\Facades\Auth::user())
                        <a href="{{'/PostWorkController'}}"  title="">POST FREE ADD</a>
                        @else
                        <a href="{{'/loginview'}}" title="">POST FREE ADD</a>
                         @endif
                    </div><!-- /.today-deal -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-bottom -->
</section><!-- /#header -->
{{-----------------------------------header bottom end------------------------------}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGMYS-RP5r37u2t6ToQDKxyjerY-jDZj8&amp;libraries=places"></script>
@push('scripts')
<script type="text/javascript">
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
</script>
@endpush
