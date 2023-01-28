@extends('frontend.layout')
@section('content')
<?php 
$blog = App\Models\Blogs::all();
?>
{{-- Header part start  --}}

<div class="mainnav ">
    {{-- <div class="bar_set" >
       <span class="menu_line"></span>
       <span class="menu_line_tow mt-2"></span>
       <span class="menu_line_three mt-2"></span>
    </div> --}}
    <div class="header_menu">
      <div class="shows">
        <div class="rotate">
            <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
      <div class="menu_part">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                {{-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
              </div>
            </div>
          </nav>
    </div>
    </div>
</div>
</div>
{{-- Header part end --}}
{{-- Banner part start  --}}
<div class="banner"  style="background: url({{ asset('assets/backend/images/blogs/'.$blog[0]['image']) }})">
    <div class="header_part d-flex justify-content-end ">
        <div class="header_btn_part d-flex justify-content-end ">
           <div class="header_btn me-2">
                <a href="" >Doctors Accountant</a>
           </div>
           <div class="header_btn header_btn_two me-2">
                <a href="">Broker  Accountant</a>
           </div>
           <div class="header_btn  header_btn_three me-2">
                <a href="">Lawyer  Accountant</a>
           </div>
           <div class="header_btn header_btn_four">
                <a href="">Business  Accountant</a>
           </div>
        </div>
      </div>
      <div class="logo">
        <img width="300" src= "{{ asset('frontend/image/logo.png') }}"alt="mainlogo" class="img-fluid">
     </div>
    <div class="banner_description d-flex justify-content-end">
       <div class="banner_text">
        <h3>{{$blog[0]['summary']}}</h3>
        <div class="banner_text_btn">
        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalBanner" ><i class="fa-solid fa-arrow-down me-2"></i>Discover how yor can benefit</a>
         </div>
       </div>
    </div>
</div>
{{-- Banner part end --}}
{{-- COVID-19  part start --}}
 <section class="covid_virus">
    <div class="container">
      <div class="row">
          <div class="covid_img_dui d-flex">
                <div class="col-lg-6">
                    <div class="covid_text">
                        <h3>{{$blog[1]['title']}} </h3>
                        <p>{{$blog[1]['summary']}}</p>
                        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalOne" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                      <div class="covid_pic">
                          <img src="{{ asset('assets/backend/images/blogs/'.$blog[1]['image']) }}" alt="">
                      </div>
                </div>
           </div>
      </div>
    </div>
 </section>
 {{-- COVID-19 end  --}}
 {{-- Our End-to-End Solution start --}}
     <div class="solution"  style="background:url({{ asset('assets/backend/images/blogs/'.$blog[2]['image']) }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">  </div>
                <div class="col-lg-6">
                    <div class="solution_text">
                      <h3>{{$blog[2]['title']}} </h3>
                        <p>{{$blog[2]['summary']}}</p>
                    </div>
                    <div class="rotated"></div>
                </div>
            </div>
        </div>
     </div>
 {{-- Our End-to-End Solution end --}}
 {{-- product part start  --}}
 <section class="covid_virus product_up">
    <div class="container">
      <div class="row">
          <div class="covid_img_dui d-flex">
                 <div class="col-lg-8">
                    <div class="covid_text products">
                        <h3>{{$blog[3]['title']}} </h3>
                        <p>{{$blog[3]['summary']}}</p>
                        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalTwo" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                      <div class="product_pic">
                          <img src="{{ asset('assets/backend/images/blogs/'.$blog[3]['image']) }}" alt="">
                      </div>
                </div>
           </div>
      </div>
    </div>
 </section>
 {{-- product part end --}}
 {{-- service part start  --}}
 <div class="solution" style="background:url({{ asset('assets/backend/images/blogs/'.$blog[4]['image']) }})">
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="covid_text products servicess">
                        <h3>{{$blog[4]['title']}} </h3>
                        <p>{{$blog[4]['summary']}}</p>
                        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalThree" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
     </div>
 </div>
 {{-- service part end  --}}
 {{-- Technology part start --}}
 <section class="covid_virus technology_up">
    <div class="container">
      <div class="row">
          <div class="covid_img_dui d-flex">
                <div class="col-lg-6">
                      <div class="technology_pic">
                          <img src="{{ asset('assets/backend/images/blogs/'.$blog[5]['image']) }}" alt="">
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="covid_text products">
                        <h3>{{$blog[5]['title']}} </h3>
                        <p>{{$blog[5]['summary']}}</p>
                        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalFour" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
           </div>
      </div>
    </div>
 </section>
 {{-- Technology part end --}}
 @include('frontend.modal_one')
 @include('frontend.modal_two')
 @include('frontend.modal_three')
 @include('frontend.modal_four')
 @include('frontend.modal_banner')
@endsection
