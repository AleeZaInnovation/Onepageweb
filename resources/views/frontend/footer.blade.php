{{-- Footer part start  --}}
<div class="footer">
    <div class="container ">
        {{-- <div class="row  mt-5 ">
            <div class="col-lg-4 col-md-3 col-sm-6 mt-4 col-12">
                <div class="footer_logo other_logo">
                    <img class="img-fluid" src="{{ asset('frontend/image/logo.png') }}" alt="mainlogo">
                     <h4>Follow us :</h4>
                     <div class="contact_social foter_social d-flex">
                        <div class="social_item">
                          <a href="" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                        <div class="social_item">
                          <a href=""><i class="fa-brands fa-twitter"></i></a>
                        </div>
                        <div class="social_item">
                          <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="social_item">
                          <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div class="social_item">
                          <a href="" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                       </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 col-12">
                <div class="footer_midddle">
                      <div class="footer_text_part other_footer ">
                    <h3>Services:</h3>
                    <h5>Doctors Accounting</h5>
                    <h5>Brokers Accounting</h5>
                    <h5>Lawyers Accounting</h5>
                    <h5>Business Accounting</h5>
                    <h5>Estate Taxes</h5>
                </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-md-6 ">
                <div class="foooter_last">
                    <div class="contact_info_text">
                    <h3>Contact information</h3>

                    <h5 class="mt-2"><i class="fa-solid fa-phone me-3"></i>+416 855 9033</h5>
                    <h5 class="mt-2"><i class="fa-regular fa-message me-3"></i>Info@Shahacpa.Ca</h5>
                    <div class="location d-flex">
                     <h6 class="mt-2"><i class="fa-solid fa-location-dot "></i> </h6>
                     <h5 class="mt-2">2 Bloor St W Swite 700
                       <span >Toranto, ON M4W 3E2, Canada</span></h5>
                    </div>
                 </div>
                </div>
            </div>


        </div> --}}

        <div class="row last_footer_border ">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="footer_last_text">
                    <p>All right reserved. <a href="">sahacpa.ca</a> Designed and Developed by  <a href="https://www.aniyanetworks.net">Aniya Network Solutions Inc.</a>. </p>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- Footer part end  --}}
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
