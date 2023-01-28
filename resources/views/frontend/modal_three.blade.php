<?php
$blog = App\Models\Blogs::all();

?>
<div class="modal fade" id="ModalThree" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header mb-4" style="background: #F2A12B;color:#fff">
        <h5 class="modal-title ps-4" id="exampleModalToggleLabel" >{{$blog[4]['title']}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="text_modal">
                <p>{{$blog[4]['description']}}</p>
              </div>
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
            <div class="mt-3 contact_name">
              <input type="number" class="form-control" name="phone" id="" placeholder="Your Phone">
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




