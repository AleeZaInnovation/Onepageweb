@extends('backend.layouts.layout')

@section('content')
                <!-- End Left Sidebar -->
                  <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Manage Menu</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="{{url('menu.view')}}">Logo</a></li>
			                                <li class="breadcrumb-item active">Add Menu</li>
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
                                        <a class="btn btn-gradient-01" href="{{route('menu.view')}}"> Logo List</a>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Title</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="title" placeholder="Write title here" class="form-control">
                                                    <font style="color: red;">{{($errors->has('title'))?($errors->first('title')):''}}</font>
                                                </div>
                                    </div>
                                    
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
@endsection
      