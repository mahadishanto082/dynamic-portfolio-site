<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Company Portfolio')</title>

    <link href="{{ asset('assets/website/css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('_css')
</head>
<body>

<div id="main-wrapper">
    @include('website.share.header')

    @yield('content')

   
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/website/js/custom.js') }}"></script>

@if (session('success'))
<script>
    toastr.success("{{ session('success') }}");
</script>
@endif

@stack('_js')

</body>
</html>