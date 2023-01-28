<head>
<?php
$logo = App\Models\Logo::get()->first();
?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SahaCpa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        {{-- summernote  --}}
         <!-- include libraries(jQuery, bootstrap) -->
         {{-- sammer note asa ai khan ay  --}}
        <link href="{{ asset('common/css/summernote/summernote.min.css') }}" rel="stylesheet">
        <link href="{{ asset('common/css/summernote/summernote-lite.min.css') }}" rel="stylesheet">
        {{-- sammer note asa ai khan ay  --}}


        <!-- include summernote css/js-->



        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}">
        <!-- Stylesheet -->
        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{url('assets/vendors/css/base/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/vendors/css/base/elisyam-1.5.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/owl-carousel/owl.theme.min.css')}}">

        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->
    </head>
