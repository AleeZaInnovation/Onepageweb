<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sahacpa</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- roboto link  --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    {{-- roboto link  --}}
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>
<body>
    @yield('content')
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @yield('footer_script')
</body>
</html>
