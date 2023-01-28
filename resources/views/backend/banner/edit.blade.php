@extends('backend.layouts.layout')

@section('content')
                <!-- End Left Sidebar -->
                  <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Manage Banner</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="{{url('banner.view')}}">Banners</a></li>
			                                <li class="breadcrumb-item active">Edit Banner</li>
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
                                        <a class="btn btn-gradient-01" href="{{route('banner.view')}}"> Banner List</a>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" method="post" action="{{ route('banner.update', $edits->id) }}" id="myForm" enctype="multipart/form-data">
                                                @csrf
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="title" placeholder="Write title here" value="{{$edits->title}}"class="form-control">
                                                    <font style="color: red;">{{($errors->has('title'))?($errors->first('title')):''}}</font>
                                                </div>
                                            </div>
                                            <div class="row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Summary  </label>
                                                <div class="col-lg-9">
                                                    <div class="mt-5 mb-5 position-relative">
                                                    <div class="group material-input">
                                                      <textarea name="summary" id="summary" class="form-control" cols="5" rows="2" placeholder = "Write description here">{{$edits->summary}}</textarea>
                                                      <font style="color: red;">{{($errors->has('summary'))?($errors->first('summary')):''}}</font>
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
                                                    <img id="showImage" src="{{(!empty($edits->image))?url('assets/backend/images/blogs/'.$edits->image):url('assets/backend/no_image.jpg')}}" style="width: 150px; height: 160px; border:1px; solid:#000;">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                            <div class="col-lg-9">
                                            </div>
                                            <div class="col-lg-3">
                                                    <input type="submit" value="Update" class=" btn btn-warning btn-block">
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
      