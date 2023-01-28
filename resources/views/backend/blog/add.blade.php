@extends('backend.layouts.layout')

@section('content')
                <!-- End Left Sidebar -->
                  <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Manage Block</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="{{url('blog.view')}}">Blocks</a></li>
			                                <li class="breadcrumb-item active">Add Block</li>
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
                                        <a class="btn btn-gradient-01" href="{{route('blog.view')}}"> Blocks List</a>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" method="post" action="{{ route('blog.store') }}" id="myForm" enctype="multipart/form-data">
                                                @csrf
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="title" placeholder="Write title here" class="form-control">
                                                    <font style="color: red;">{{($errors->has('title'))?($errors->first('title')):''}}</font>
                                                </div>
                                            </div>
                                            <div class="row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Summary  </label>
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                      <textarea name="summary" id="summary" class="form-control" cols="5" rows="2" placeholder = "Write description here"></textarea>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Description  </label>
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                      <textarea name="description" id="description" cols="5" rows="15" class="form-control" placeholder = "Write description here"></textarea>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Image</label>
                                                <div class="col-lg-9">
                                                    <input type="file" name="image" placeholder="Chosse image" id="image" class="form-control">                                                 
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Show Image </label>
                                                <div class="col-lg-9">
                                                    <img id="showImage" src="{{url('assets/backend/no_image.jpg')}}" style="width: 150px; height: 160px; border:1px; solid:#000;">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                            <div class="col-lg-9">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="submit" name="submit" class=" btn btn-success btn-block">
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
          title: {
            required: true,
          },
          summary: {
            required: true,

          },
        },
        messages: {
          title: {
            required: "Please select title"
          },
          summary: {
            required: "Please enter a summary",
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
      