@extends('backend.layouts.layout')

@section('content')
                <!-- End Left Sidebar -->
                  <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Manage Profile</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Edit Profile</li>
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
                                        <form class="form-horizontal" method="post" action="{{ route('profile.update') }}" id="myForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="name" value="{{ $edits->name }}" placeholder="Write name here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Email</label>
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" name="email" id="email" value="{{ $edits->email }}" readonly>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Mobile</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="mobile" value="{{ $edits->mobile }}" placeholder="Write mobile no here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Designation</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="designation" value="{{ $edits->designation }}" placeholder="Write designation here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Address</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="address" value="{{ $edits->address }}" placeholder="Write address here" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Gender</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="gender" value="{{ $edits->gender }}" placeholder="Write gender here" class="form-control">
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
                                                    <img id="showImage" src="{{(!empty($edits->image))?url('assets/backend/images/'.$edits->image):url('assets/backend/no_image.jpg')}}" style="width: 150px; height: 160px; border:1px; solid:#000;">
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
@endsection
      