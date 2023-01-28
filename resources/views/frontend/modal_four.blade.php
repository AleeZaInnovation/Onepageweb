<?php
$blog = App\Models\Blogs::all();
$faq = App\Models\Faq::all();

?>
<div class="modal fade" id="ModalFour" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header mb-4" style="background: #F2A12B;color:#fff">
        <h5 class="modal-title ps-4" id="exampleModalToggleLabel" >{{$blog[3]['title']}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="faq">
            <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 ">
                   <div class="faq_part">
                        <p>{!! $faq[0]['description'] !!}</p>
                     {{-- <div class="faq_text">
                        <h3 class="py-2">FAQ</h3>
                        <h3>01.	When do I file my corporation income tax return?</h3>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <h3>Example</h3>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i>If your tax year ends March 31, your filing due date is September 30.</h6>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i> If your tax year ends August 31, your filing due date is February 28.</h6>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i>If your tax year ends September 23, your filing due date is March 23.</h6>
                        <p class="mt-3">When the T2 filing deadline falls on a Saturday, Sunday, or public holiday recognized by the CRA, they will consider the return filed on time if it is sent on the first business day after the filing deadline. You must file your return on time to avoid penalties. (Source : CRA website)</p>

                     </div>
                     <div class="faq_text">
                        <h3>01.	When do I file my corporation income tax return?</h3>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <h3>Example</h3>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i>If your tax year ends March 31, your filing due date is September 30.</h6>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i> If your tax year ends August 31, your filing due date is February 28.</h6>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i>If your tax year ends September 23, your filing due date is March 23.</h6>
                        <p class="mt-3">When the T2 filing deadline falls on a Saturday, Sunday, or public holiday recognized by the CRA, they will consider the return filed on time if it is sent on the first business day after the filing deadline. You must file your return on time to avoid penalties. (Source : CRA website)</p>

                     </div>
                     <div class="faq_text">
                        <h3>01.	When do I file my corporation income tax return?</h3>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <p>File your return no later than six months after the end of each tax year. The tax year of a corporation is its fiscal period.</p>
                        <h3>Example</h3>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i>If your tax year ends March 31, your filing due date is September 30.</h6>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i> If your tax year ends August 31, your filing due date is February 28.</h6>
                        <h6><i class="fa-solid fa-circle kaka_paji"></i>If your tax year ends September 23, your filing due date is March 23.</h6>
                        <p class="mt-3">When the T2 filing deadline falls on a Saturday, Sunday, or public holiday recognized by the CRA, they will consider the return filed on time if it is sent on the first business day after the filing deadline. You must file your return on time to avoid penalties. (Source : CRA website)</p>

                     </div> --}}

                   </div>
                </div>
                 <div class="col-lg-2"></div>

            </div>
          </div>
          </div>
      </div>
      <div class="modal-footer d-flex align-items-end m-4">
        {{-- <button class="btn btn-primary " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Contact us</button> --}}
        <button class="btn btn-danger" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>


      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content">

      <div class="modal-header" style="background: #14284B;color:#fff">
        <h5 class="modal-title" style="font-size:25px" id="exampleModalToggleLabel2">Contact us</h5>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <div class="text_modal">
          <form action="{{ route('add.customer') }}" method="POST">
            @csrf
            <div class="mt-3 contact_name">
              <input type="text" class="form-control" name="customer_name" id="" placeholder="Your Name">
            </div>
            {{-- @error('customer_name')
                 <strong>{{  }}</strong>
            @enderror --}}
            <div class="mt-3 contact_name">
              <input type="text" class="form-control" name="phone" id="" placeholder="Your Phone">
            </div>
            <div class="mt-3 contact_name">
              <input type="email" class="form-control" name="customer_email" id="" placeholder="Your Eamil">
            </div>

            <div class="mt-3 contact_name">
              <textarea class="form-control" name="customer_msg" id="" placeholder="Message"></textarea>
            </div>
            <div class="mt-3 mb-2 contact_name d-flex aligns-items-start">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

        </div>
      </div>
      <div class="modal-footer modal_footer_btn">
        <button class="btn btn-danger " data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




