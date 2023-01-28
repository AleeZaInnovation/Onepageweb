@extends('frontend.layout')
@section('content')
<?php
$blog = App\Models\Blogs::all();
$logo = App\Models\Logo::get()->first();
$banner = App\Models\Banner::get()->first();
?>
{{-- Header part start  --}}

{{-- <div class="bar_set" >
   <span class="menu_line"></span>
   <span class="menu_line_tow mt-2"></span>
   <span class="menu_line_three mt-2"></span>
</div> --}}
{{-- <div class="mainnav ">
    <div class="header_menu">
      <div class="shows">
        <div class="rotate">
            <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
      <div class="menu_part">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

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
              </div>
            </div>
          </nav>
    </div>
    </div>
</div>
</div> --}}
{{-- Header part end --}}
{{-- Banner part start  --}}
<div class="banner"  style="background: url({{ asset('assets/backend/images/blogs/'.$banner['image']) }});background-repeat: no-repeat;background-position: center;background-size: cover;">
    <div class="header_part d-flex justify-content-end ">
        <div class="header_btn_part d-flex justify-content-end ">
          @foreach($blog as $item)
           <div class="header_btn me-2">
                <a id="{{$item->id}}" href="#Block-{{$item->id}}"  >{{$item->title}}</a>
           </div>
           @endforeach

        </div>
      </div>
      <div class="logo">
        <img width="300" src= "{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}"alt="mainlogo" class="img-fluid">
     </div>
    <div class="banner_description d-flex justify-content-end">
       <div class="banner_text">
        <h3>{{$banner['summary']}}</h3>
        <div class="banner_text_btn">
        <a class="btn btn-primary  " href="#alian_modal"  ><i class="fa-solid fa-arrow-down me-2"></i>Discover how yor can benefit</a>
         </div>
       </div>
    </div>
</div>
{{-- Banner part end --}}
{{-- COVID-19  part start --}}
 <section class="covid_virus" id="Block-{{$blog[0]['id']}}">
    <div class="container">

          <div class="covid_img_dui d-flex">
                <div class="row">
                    <div class="col-lg-6  col-sm-12 col-md-12 col-12">
                    <div class="covid_text">
                        <h3>{{$blog[0]['title']}}
                         </h3>
                        <p>{{$blog[0]['summary']}}</p>
                        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalOne" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 col-12">
                      <div class="covid_pic">
                          <img class="img-fluid" src="{{ asset('assets/backend/images/blogs/'.$blog[0]['image']) }}" alt="">
                      </div>
                </div>
                </div>
           </div>

    </div>
 </section>
 {{-- COVID-19 end  --}}
 {{-- Our End-to-End Solution start --}}
    <section class="back_color" id="Block-{{$blog[1]['id']}}">
         <div class="solution"  style="background:url({{ asset('assets/backend/images/blogs/'.$blog[1]['image']) }});background-repeat: no-repeat;background-position: center;background-size: cover;width:100%">
       <div class="overlay">
           <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-12 col-md-6">  </div>
                <div class="col-lg-6 col-sm-6 col-12 col-md-6">
                    <div class="solution_text">
                      <h3 class="mb-5">{{$blog[1]['title']}} </h3>
                        <p>{{$blog[1]['summary']}}</p>
                         <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#Modalfive" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="rotated"></div>
                </div>
            </div>
        </div>
       </div>
     </div>
    </section>
 {{-- Our End-to-End Solution end --}}
 {{-- product part start  --}}
 <section class="covid_virus product_up" id="Block-{{$blog[2]['id']}}">
    <div class="container">
      <div class="row">
          <div class="covid_img_dui d-flex">
                 <div class="col-lg-8 col-12 col-sm-12 col-md-12">
                    <div class="covid_text products">
                        <h3>{{$blog[2]['title']}} </h3>
                        <p>{{$blog[2]['summary']}}</p>
                        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalTwo" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-sm-12 col-md-12">
                      <div class="product_pic">
                          <img class="img-fluid" src="{{ asset('assets/backend/images/blogs/'.$blog[2]['image']) }}" alt="">
                      </div>
                </div>
           </div>
      </div>
    </div>
 </section>
 {{-- product part end --}}
 {{-- service part start  --}}
<section class="service_color" id="Block-{{$blog[3]['id']}}">
      <div class="solution"  style="background:url({{ asset('assets/backend/images/blogs/'.$blog[3]['image']) }});background-repeat: no-repeat;background-position: center;background-size: cover;width:100%">
     <div class="overlay_add">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 col-sm-12 col-md-12">
                <div class="covid_text products servicess">
                        <h3 >{{$blog[3]['title']}} </h3>
                        <p>{{$blog[3]['summary']}}</p>
                        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalThree" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
            </div>
            <div class="col-lg-6 col-12 col-sm-12 col-md-6"></div>
        </div>
     </div>
     </div>
 </div>
</section>
 {{-- service part end  --}}
 {{-- Technology part start --}}
 <section class="covid_virus technology_up" id="Block-{{$blog[4]['id']}}">
    <div class="container">
      <div class="row">
          <div class="covid_img_dui d-flex">
                <div class="col-lg-6 col-12 col-sm-12 col-md-12">
                      <div class="technology_pic">
                          <img class="img-fluid" src="{{ asset('assets/backend/images/blogs/'.$blog[4]['image']) }}" alt="">
                      </div>
                </div>
                <div class="col-lg-6 col-12 col-sm-12 col-md-12">
                    <div class="covid_text products">
                        <h3>{{$blog[4]['title']}} </h3>
                        <p>{{$blog[4]['summary']}}</p>
                        <a class="btn btn-primary " href="#" data-bs-toggle="modal" data-bs-target="#ModalFour" >More information  &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
           </div>
      </div>
    </div>
 </section>
 {{-- Technology part end --}}
 @include('frontend.footer')
 @include('frontend.modal_one')
 @include('frontend.modal_two')
 @include('frontend.modal_three')
 @include('frontend.modal_four')
 @include('frontend.modal_banner')
 @include('frontend.modal_five')
@endsection
@section('footer_script')
@if (session('success'))

<script>

 Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: '{{ session('success') }}',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif
@endsection
