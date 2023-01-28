@extends('backend.layouts.layout')

@section('content')
                <!-- End Left Sidebar -->
                  <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Manage Password</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Update Password</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="page-header-tools">
                                        <a class="btn btn-gradient-01" href="{{route('profile.view')}}"> Profile VIew</a>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" method="post" action="{{ route('password.update') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Current Password</label>
                                                <div class="col-lg-9">
                                                    <input type="password" name="current_password" id="current_password"  placeholder="Write current password here" class="form-control">
                                                    <font style="color: red;">{{($errors->has('current_password'))?($errors->first('current_password')):''}}</font>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">New Password</label>
                                                <div class="col-lg-9">
                                                    <input type="password" name="password" id="password"  placeholder="Write new password here" class="form-control">
                                                    <font style="color: red;">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Confirm Password</label>
                                                <div class="col-lg-9">
                                                    <input type="password" name="password_confirmation" id="password_confirmation"  placeholder="Write confirm password here" class="form-control">
                                                    <font style="color: red;">{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</font>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                            <div class="col-lg-9">
                                            </div>
                                            <div class="col-lg-3">
                                              <input type="submit" Value="Update" class=" btn btn-warning btn-block">
                                            </div> 
                                            </div>          
                                        </form>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <script>
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
          current_password: {
            required: true,
          },
          password: {
            required: true,
            minlength: 5
          },
          password_confirmation: {
            required: true,
            equalTo: '#password'
          },
        },
        messages: {
          current_password: {
            required: "Please provide current password",
          },
          password: {
            required: "Please provide a new password",
            minlength: "Your password must be at least 5 characters long"
          },

          password_confirmation: {
            required: "Please provide confirm new password",
            equalTo: "Confirm new password does not match"
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
@endsection
      