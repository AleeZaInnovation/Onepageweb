<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sahacpa</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style>
        body {
          font-family: Lato, Helvetica, sans-serif;
        }
        .sidebar {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #FFFFE0;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }
        
        .sidebar a {
          padding: 5px 5px 5px 20px;
          text-decoration: none;
          font-size: 20px;
          color: #FFEFD5;
          display: block;
          transition: 0.3s;
        }
        
        .sidebar a:hover {
          color: #f1f1f1;
        }
        
        .sidebar .closebtn {
          position: absolute;
          top: 0;
          color: #000;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        .openbtn {
          font-size: 20px;
          cursor: pointer;
          background-color: #fff;
          color: black;
          padding: 10px 15px;
          border: none;
        }
        
        .openbtn:hover {
          background-color: #fff;
        }
        
        #main {
          /* transition: margin-left .5s; */
          margin-left: 250px;
          
        }
        
        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 10px;}
        }
        @media screen and (min-height: 720px) {
          .sidebar {width: 250px;}
        }
        </style>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');


        .menu{
            width: 100%;
            margin-top: 80px;
        }

        .menu .item{
            position: relative;
            cursor: pointer;
        }

        .menu .item a{
            color: #000;
            background: #FFEFD5;
            font-size: 16px;
            text-decoration: none;
            display: block;
            padding: 5px 30px;
            line-height: 60px;
        }

        .menu .item a:hover{
            background: #353434;
            transition: 0.3s ease;
        }

        .menu .item i{
            margin-right: 15px;
        }

        .menu .item a .dropdown{
            position: absolute;
            right: 0;
            margin: 20px;
            transition: 0.3s ease;
        }

        .menu .item .sub-menu{
            background: rgba(255,255,255,0.1);
            display: none;
            
        }
        .menu .item .sub-menu a{
            padding-left: 80px;
        }

        .rotate{
            transform: rotate(90deg);
        }

        .close-btn{
            color: #000;
            font-size: 20px;
            right: 0;
            margin: 25px;
            position: absolute;
            cursor: pointer;
        }

        .menu-btn{
            color: #fff;
            font-size: 20px;
            margin: 25px;
            position: absolute;
            cursor: pointer;
        }
        

        footer {
          position:absolute;
          bottom:0;
          width:100%;
          height:60px;   /* Height of the footer */
          background:#EE82EE;
          cursor: pointer;
          padding: 15px 20px;                   
        }
    </style>
</head>
<body>
    <div id="app">


        <main>
        <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

                <div class="menu">
                    <div class="item"><a href="/" class=""><i class="fas fa-home"></i>Home</a></div>
                    @if(Auth::User()->usertype=='Admin')
                    <div class="item">
                        <a href="#" class="sub-btn"><i class="fas fa-user"></i>Manage User<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="{{ route('user.view')}}" class="sub-item">All User</a>
                        </div>
                    </div>
                    @endif
                    <div class="item">
                        <a href="#" class="sub-btn"><i class="fas fa-cog"></i>Manage Profile<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="{{ route('profile.view')}}" class="sub-item">Your Profile</a>
                            <a href="{{ route('password.view')}}" class="sub-item">Change Password</a>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#" class="sub-btn"><i class="fas fa-blog"></i>Manage Pages<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="{{ route('blog.view')}}" class="sub-item">All Blocks</a>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#" class="sub-btn"><i class="fas fa-blog"></i>Email Notification<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="{{ route('customer.list')}}" class="sub-item">Customer list</a>
                            <a href="{{ route('manage.message')}}" class="sub-item">Manage Message</a>
                        </div>
                    </div>
                    <div class="item">
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        style="margin: 10px">
                        Logout

                    </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                      @csrf
                      </form>
                    </div>
                    {{-- <div class="item">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                    </div> --}}
                    <footer>
                      <ul>
                        <a href="{{url('https://www.aniyanetworks.net/')}}">Aniyanetworks</a>
                      </ul>
                    </footer>
                </div>
        </div>

              <div id="main">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="nav-item" href="{{ url('/') }}">
                            <img width="100" src= "{{ asset('frontend/image/logo.png') }}"alt="mainlogo" class="img-fluid">                            
                            </a>
                            <br>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('api.login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('api.register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                      User Name : {{ Auth::user()->name }}
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid" style="background-color: #fff">
                  <button class="openbtn" onclick="openNav()">☰</button>
                </div>

                @yield('content')
              </div>

        </main>
    </div>

    <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
        </script>

        <script>
            $(document).ready(function(){
                $('.sub-btn').click(function(){
                    $(this).next('.sub-menu').slideToggle();
                    $(this).find('.dropdown').toggleClass('rotate');
                });
            });
        </script>
          <!---- Success Message -->
  @if(session()->has('success'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{ session()->get('success') }}",{globalPosition:'top right',className:'success'});
      });
    </script>
  @endif
  <!---- Error Message -->
  @if(session()->has('error'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{ session()->get('error') }}",{globalPosition:'top right',className:'error'});
      });
    </script>
  @endif
<!--- Notify js End --->
<!---- Select2 ---->
<script type="text/javascript">
  $(document).ready(function(){
     $(".select2").select2();
  });
</script>

<script type="text/javascript">
  $(document).ready(function () {
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
  });

</script>
</body>
</html>