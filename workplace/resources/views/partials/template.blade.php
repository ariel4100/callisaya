<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

    <title>CR - @yield('title','titulo')</title>

    <link rel="stylesheet" href="{{ asset('frontend/mdb/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/mdb/css/mdb.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/mdb/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>
<body>
@include('partials.nav')

@yield('content')

<script src="{{ asset('frontend/mdb/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('frontend/mdb/js/bootstrap.js') }}"></script>
<script src="{{ asset('frontend/mdb/js/popper.min.js') }}" ></script>
<script src="{{ asset('frontend/mdb/js/mdb.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>
