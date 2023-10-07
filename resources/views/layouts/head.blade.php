<link type="text/css" rel="stylesheet" href="{{ URL::asset('/css/homepage.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/layouts/Utilities/Chico-effect.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('/layouts/Utilities/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}">
<script src="{{ URL::asset('/layouts/Utilities/jQuery-1.x/jquery-1.11.3.min.js') }}"></script>
<script src="{{ URL::asset('/layouts/Utilities/bootstrap-3.3.5-dist/js/bootstrap.min.js') }}"></script>
<link rel="stylesheet" type="text/css" media="all"
    href="{{ URL::asset('/layouts/Utilities/autocomplete-suggestions/style.css') }}">
<script type="text/javascript"
    src="{{ URL::asset('/layouts/Utilities/autocomplete-suggestions/jquery.autocomplete.min.js') }}"></script>
<script type="text/javascript"
    src="{{ URL::asset('/layouts/Utilities/autocomplete-suggestions/locations-autocomplete.js') }}"></script>
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
{{-- notifation --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<link rel="stylesheet" href="{{ URL::asset('/css/flatpickr.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap-glyphicons.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/dropzone.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/slick.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/animate.min.css') }}">
{{-- slick --}}
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/engine1/style.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/engine1/jquery.js') }}"></script>
<style>
    header {
        width: 100%;
    }

    body {
        padding-right: 0 !important;
    }

    #left-header {
        float: left;
        margin-left: 16px;
        line-height: 60px;
    }

    #left-header a:hover {
        text-decoration: none;
    }

    #right-header {
        float: right;
        line-height: 60px;
    }

    #right-header a {
        color: black;
    }

    #right-header a:hover {
        text-decoration: none;
    }

    #language {
        cursor: pointer;
    }

    button[type="button"].mybtn-style1 {
        border: 0;
    }

    #welcome {
        float: left;
        margin-right: 10px;
        display: none;
    }

    .dropdown-menu a {
        cursor: pointer;
    }

    footer {
        background-color: rgb(46, 45, 45);
        background-image: url('../img/img/footer.png'), url('../img/img/footer.png');
        background-size: 50% 100px;
        background-position: left bottom, right bottom;
        background-repeat: no-repeat;
        clear: both;
        padding-bottom: 150px;
    }

    #left-footer {
        float: left;
        margin-left: 34px;
        margin-top: 30px;
        color: #EEEEEE;
        font-family: 'Merienda', cursive;
    }

    #left-footer a:nth-child(1):hover {
        text-decoration: none;
    }

    #icon-socialnetwork a:hover .fa:before {
        color: rgb(197, 196, 196);
    }

    #icon-socialnetwork .fa {
        transition-property: all;
        transition-duration: 200ms;
        transition-timing-function: ease;
        /* transition-timing-function: ease (default); in: vao dau cham, out: ket thuc cham, linear: toc do nhu* nhau */
        /**/
        -webkit-transition-property: all;
        -webkit-transition-duration: 200ms;
        -moz-transition-property: all;
        -moz-transition-duration: 200ms;
    }

    #icon-socialnetwork a:hover .fa {
        transform: scale(1.2);
        -webkit-transform: scale(1.2);
        -o-transform: scale(1.2);
        -moz-transform: scale(1.2);
    }

    #right-footer {
        float: right;
        margin-top: 15px;
    }

    #right-footer a {
        color: #EEEEEE;
        font-family: 'Montserrat', sans-serif;
    }

    #right-footer a:hover {
        text-decoration: none;
        cursor: pointer;
    }

    .row .infomation {
        font-family: 'Merienda', cursive;
        color: #EEEEEE;
        font-size: 20px;
    }

    .myTitle {
        font-size: 18px;
        font-weight: bold;
        color: rgb(197, 197, 197);

    }
</style>
<script type="text/javascript" language="javascript">
    toastr.options = {
        "positionClass": "toast-top-center"
    }
    $(document).ready(function() {
        var timer;
        var delay = 1000;
        timer = setTimeout(function() {
            if (localStorage.check_login === 'true') {
                $('#welcome').fadeIn(10);
                $('#signup-signin').fadeOut(10);
            } else {
                $('#welcome').fadeOut(10);
                $('#signup-signin').fadeIn(10);
            }
        }, delay);
    });
</script>
