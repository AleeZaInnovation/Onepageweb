@extends('frontend.layout')
@section('content')
<?php
$blog = App\Models\Blogs::all();
$logo = App\Models\Logo::get()->first();
$banner = App\Models\Banner::get()->first();
$SM = App\Models\SocialMedia::all();
$contact = App\Models\Contact::get()->first();
$menus = App\Models\Menu::all();
?>

{{-- Header part start  --}}
{{--
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
                <ul class="navbar-nav me-auto  mb-lg-0">
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
{{-- Acclounting  part start --}}
 {{-- @foreach($blog as $item)
           <div class="header_btn me-2">
                <a id="{{$item->id}}" href="#Block-{{$item->id}}"> {{$item->title}} </a>
           </div>
           @endforeach --}}

<section class="accounting">
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
         <img  src= "{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}"   alt="mainlogo" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
 {{-- <i class="fa-solid fa-bars"></i> --}}
      <span class="navbar-toggler-icon"></span>
    </button>
    @if($menus != null)
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      @foreach($menus as $item)
        <li class="nav-item">
          <a class="nav-link" id="{{$item->id}}" href="#Block-{{$item->id}}">{{$item->title}}</a>
        </li>
      @endforeach
        <li class="nav-item">
          <a class="nav-link" href="#ModalFour" data-bs-toggle="modal" data-bs-target="#ModalFour">FAQ</a>
        </li>
      </ul>
    </div>
    @else
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="#Block-{{$blog[0]['id']}}">Doctors Accounting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Block-{{$blog[1]['id']}}">Broker Accounting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Block-{{$blog[2]['id']}}">Lawyer Accounting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Block-{{$blog[3]['id']}}">Business accounting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Block-{{$blog[4]['id']}}">Taxes at Death</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ModalFour" data-bs-toggle="modal" data-bs-target="#ModalFour">FAQ</a>
        </li>
      </ul>
    </div>
    @endif
  </div>
</nav>
  {{-- <div class="header_part d-flex justify-content-end mt-3">
    <div class="header_btn_part d-flex justify-content-end">
      <div class="header_btn me-2">
           <a href="#doctor">Doctors Accountant</a>
      </div>
      <div class="header_btn me-2">
           <a href="#doctor">Broker Accountant</a>
      </div>
      <div class="header_btn me-2">
           <a href="#doctor">Doctors Accountant</a>
      </div>
      <div class="header_btn me-2">
           <a href="#doctor">Doctors Accountant</a>
      </div>
      <div class="header_btn me-2">
           <a href="#doctor">Doctors Accountant</a>
      </div>
    </div>
  </div>
  <div class="logo">
    <img width="300" src= "{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}"   alt="mainlogo" class="img-fluid">
 </div> --}}
   <div class="accounting_part">
   <div class="container-fluid ">
    <div class="row">
      <div  class="accounting_img">
        <img  class="img-fluid" src="{{ asset('assets/backend/images/blogs/'.$blog[0]['image']) }}" alt="">
      </div>
       <div class="accounting_text">
         <div class="covid_text accounting_text_paragraph">
           <h3>{{$blog[0]['title']}} </h3>
           <p>{{$blog[0]['summary']}}</p>
         </div>
      </div>
    </div>
   </div>
   </div>
</section>
{{-- Acclounting  part start --}}
{{-- ============================================================================================ --}}
{{-- Doctors  part start --}}
<section class="doctors"  id="Block-{{$blog[0]['id']}}">
  <div class="doctors_part d-flex">
    <div class="doctors_text_part">
      <div class="doctors_text">
        <h3>{{$blog[1]['title']}} </h3>
        <p>{{$blog[1]['summary']}}  </p>
        <div class="btn_part d-flex mt-3" >
         <a href="#contact_us" class="doctors_btn me-3">Contact us      <i class="fa-regular fa-comments icontact"></i></a>
         <a href="" class="doctors_btn_two"    data-bs-toggle="modal" data-bs-target="#ModalBanner">Learn more <i class="fa-solid fa-arrow-right me-2 ilearn"></i></a>
        </div>
     </div>
    </div>
    <div class="doctors_img">
      <img class="img-fluid" src="{{ asset('assets/backend/images/blogs/'.$blog[1]['image']) }}" alt="">
    </div>
  </div>
</section>
{{-- Doctors  part end --}}
{{--Accounting for Brokers. part start --}}
<section class="doctors"id="Block-{{$blog[1]['id']}}">
  <div class="doctors_part d-flex">
    <div class="doctors_img">
      <img class="img-fluid" src="{{ asset('assets/backend/images/blogs/'.$blog[2]['image']) }}" alt="">
    </div>
    <div class="doctors_text_part">
      <div class="doctors_text">
        <h3>{{$blog[2]['title']}} </h3>
       <p>{{$blog[2]['summary']}}  </p>
       <div class="btn_part d-flex mt-3" >
        <a href="#contact_us" class="doctors_btn me-3" >Contact us <i class="fa-regular fa-comments icontact"></i></a>
         <a href="" class="doctors_btn_two"    data-bs-toggle="modal" data-bs-target="#ModalOne">Learn more <i class="fa-solid fa-arrow-right me-2 ilearn"></i></a>
       </div>
    </div>
    </div>
  </div>
</section>
{{--Accounting for Brokers. part end --}}
{{--Accounting for Small Business. part start --}}
<section class="doctors" id="Block-{{$blog[2]['id']}}">
  <div class="doctors_part d-flex">
    <div class="doctors_img">
      <img class="img-fluid" src="{{ asset('assets/backend/images/blogs/'.$blog[3]['image']) }}" alt="">
    </div>
    <div class="doctors_text_part acconting_color">
      <div class="doctors_text">
        <h3>{{$blog[3]['title']}} </h3>
        <p>{{$blog[3]['summary']}}  </p>
        <div class="btn_part d-flex mt-3" >
         <a href="#contact_us" class="doctors_btn me-3" >Contact us <i class="fa-regular fa-comments icontact"></i></a>
          <a href="" class="doctors_btn_two"    data-bs-toggle="modal" data-bs-target="#ModalTwo">Learn more <i class="fa-solid fa-arrow-right me-2 ilearn"></i></a>
        </div>
    </div>
    </div>
  </div>
</section>
{{--Accounting for Small Business. part end --}}
{{--Lawyers Accounting part start --}}
<section class="doctors" id="Block-{{$blog[3]['id']}}">
  <div class="doctors_part d-flex">
    <div class="doctors_text_part">
      <div class="doctors_text">
        <h3>{{$blog[4]['title']}} </h3>
       <p>{{$blog[4]['summary']}}  </p>
       <div class="btn_part d-flex mt-3" >
         <a href="#contact_us" class="doctors_btn me-3" >Contact us <i class="fa-regular fa-comments icontact"></i></a>
         <a href="" class="doctors_btn_two"    data-bs-toggle="modal" data-bs-target="#ModalThree">Learn more <i class="fa-solid fa-arrow-right me-2 ilearn"></i></a>
       </div>
    </div>
    </div>
    <div class="doctors_img">
      <img class="img-fluid"  src="{{ asset('assets/backend/images/blogs/'.$blog[4]['image']) }}" alt="">
    </div>
  </div>
</section>
{{-- Taxes at Death or Trustee part start --}}
{{--Lawyers Accounting part start --}}
<section class="doctors" id="Block-{{$blog[4]['id']}}">
  <div class="doctors_part d-flex">
    <div class="doctors_img">
      <img class="img-fluid" src="{{ asset('assets/backend/images/blogs/'.$blog[5]['image']) }}" alt="">
    </div>
    <div class="doctors_text_part">
      <div class="doctors_text">
        <h3>{{$blog[5]['title']}} </h3>
        <p>{{$blog[5]['summary']}}  </p>
        <div class="btn_part d-flex mt-3" >
         <a href="#contact_us" class="doctors_btn me-3" >Contact us <i class="fa-regular fa-comments icontact"></i></a>
          <a href="" class="doctors_btn_two"    data-bs-toggle="modal" data-bs-target="#Modalfive">Learn more <i class="fa-solid fa-arrow-right me-2 ilearn"></i></a>
        </div>
    </div>
    </div>
  </div>
</section>
{{-- Taxes at Death or Trustee part end --}}
{{-- Taxes at Death or Trustee part start --}}
<section class="contact" id="contact_us">
    <div class="contact_head">
      <h3 class="text-center">Contact</h3>
    </div>
    <div class="contact_part d-flex justify-content-between">
      <div class="contact_info">
        <div class="contact_info_text">
            @if($contact !=null)
           <h3>Contact information</h3>
           <p>Fill up the form, our team will contact with you within 24 hours.</p>
           <h5 class="mt-2"><i class="fa-solid fa-phone me-3"></i>{{$contact->mobile}}</h5>
           <h5 class="mt-2"><i class="fa-regular fa-message me-3"></i>{{$contact->email}}</h5>
           <div class="location d-flex">
            <h6 class="mt-2"><i class="fa-solid fa-location-dot "></i> </h6>
            <h5 class="mt-2">{{$contact->address}}</h5>
            @else
            <h3>Contact information</h3>
              <p>Fill up the form, our team will contact with you within 24 hours.</p>
              <h5 class="mt-2"><i class="fa-solid fa-phone me-3"></i>+416 855 9033</h5>
              <h5 class="mt-2"><i class="fa-regular fa-message me-3"></i>Info@Shahacpa.Ca</h5>
              <div class="location d-flex">
              <h6 class="mt-2"><i class="fa-solid fa-location-dot "></i> </h6>
              <h5 class="mt-2">2 Bloor St W Swite 700
              <span >Toranto, ON M4W 3E2, Canada</span></h5>
            @endif
           </div>
           <div class="footer_logo other_logo mt-3">
                    <img class="img-fluid" src="{{(!empty($logo->image))?url('assets/backend/images/blogs/'.$logo->image):url('assets/backend/no_image.jpg')}}" alt="mainlogo">
                     <h4>Follow us :</h4>
                    </div>
           <div class="contact_social d-flex">
            @if($SM[0]!=null)
            <div class="social_item">
              <a href="{{($SM[0]['link'])}}" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>              
            </div>
            @else
            <div class="social_item">
              <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>              
            </div>
            @endif
            @if($SM[1]!=null)
            <div class="social_item">
              <a href="{{($SM[1]['link'])}}"><i class="fa-brands fa-twitter"></i></a>
            </div>
            @else
            <div class="social_item">
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
            @endif
            @if($SM[2]!=null)
            <div class="social_item">
              <a href="{{($SM[2]['link'])}}"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            @else
            <div class="social_item">
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            @endif
            @if($SM[3]!=null)
            <div class="social_item">
              <a href="{{($SM[3]['link'])}}"><i class="fa-brands fa-instagram"></i></a>
            </div>
            @else
            <div class="social_item">
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            @endif
            @if($SM[4]!=null)
            <div class="social_item">
              <a href="{{($SM[4]['link'])}}" class="youtube"><i class="fa-brands fa-youtube"></i></a>
            </div>
            @else
            <div class="social_item">
              <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
            </div>
            @endif
           </div>
           <div class="others_img ">
            <img width="160" class="img-fluid" src="{{ asset('/frontend/image/Ellipse 1 (1).png') }}" alt="">
            <div class="round_img">
              <img width="130" class="img-fluid" src="{{ asset('/frontend/image/Ellipse 2.png') }}" alt="">
            </div>
           </div>

        </div>
      </div>
      <div class="contact_form" >
        <form action="{{ route('add.customer') }}" method="POST">
            @csrf
            <div class="row">
                   <div class="col-lg-6">
            <div class="contact_form_item">
              <div class="mt-3">
                <label for="" class="form-label">First name</label>
                <input type="text" name="customer_name" class="form-control" placeholder="Your first name">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact_form_item">
              <div class="mt-3">
                <label for="" class="form-label">Last name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Your last name">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact_form_item">
              <div class="mt-3">
                <label for="" class="form-label">Email Address</label>
                <input type="email" name="customer_email" class="form-control" placeholder="youremail@gmail.com">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact_form_item">
              <div class="mt-3">
                <label for="" class="form-label">Phone Number</label>
                <input type="number"  name="phone" class="form-control" placeholder="your phone number">
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="contact_form_item">
              <div class="mt-3">
                <label for="" class="form-label">Your Thoughts</label>
                 <textarea  name="customer_msg" placeholder="your Thoughts" class="form-control" cols="20" rows="5"></textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="contact_form_item">
              <div class="mt-3">
                <div  class="mt-3" >
                  <button type="submit" class="btn  docts_send_msg">Send Message</button>
                 </div>
              </div>
            </div>
          </div>
            </div>
        </form>
      </div>
    </div>
</section>
{{-- Taxes at Death or Trustee part end --}}


{{-- =========================================================================================================== --}}
{{-- Banner part start  --}}
{{-- <div class="banner"  style="background: url({{ asset('assets/backend/images/blogs/'.$banner['image']) }});background-repeat: no-repeat;background-position: center;background-size: cover;">
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
        <a class="btn btn-primary  " href="#alian_modal" data-bs-toggle="modal" data-bs-target="#ModalBanner" ><i class="fa-solid fa-arrow-down me-2"></i>Discover how yor can benefit</a>
         </div>
       </div>
    </div>
</div> --}}
{{-- Banner part end --}}

 {{-- Our End-to-End Solution start --}}
    {{-- <section class="back_color" id="Block-{{$blog[1]['id']}}">
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
    </section> --}}
 {{-- Our End-to-End Solution end --}}
 {{-- product part start  --}}
 {{-- <section class="covid_virus product_up" id="Block-{{$blog[2]['id']}}">
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
 </section> --}}
 {{-- product part end --}}
 {{-- service part start  --}}
{{-- <section class="service_color" id="Block-{{$blog[3]['id']}}">
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
</section> --}}
 {{-- service part end  --}}
 {{-- Technology part start --}}
 {{-- <section class="covid_virus technology_up" id="Block-{{$blog[4]['id']}}">
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
 </section> --}}
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
