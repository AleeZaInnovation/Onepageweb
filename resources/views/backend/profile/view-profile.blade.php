@extends('backend.layouts.layout')

@section('content')
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Profile</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboaord')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Profile</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row flex-row">
                            <!-- Begin Widget 13 -->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                
                            </div>
                            <!-- End Widget 13 -->
                            <!-- Begin Widget 14 -->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="widget widget-13 has-shadow">
                                    <div class="widget-body p-0">
                                        <div  class="avatar">
                                            <img  src="{{(!empty(Auth::user()->image))?url('assets/backend/images/'.Auth::user()->image):url('assets/backend/no_image.jpg')}}" alt="..." class="img-fluid rounded-circle border-dark">
                                        </div>
                                        <div class="author-name">
                                            {{Auth::user()->name}}
                                            <span>{{Auth::user()->designation}}</span>
                                        </div>
                                        <div class="follow-btn text-center mt-4">
                                            <a class="btn btn-shadow" href="#">{{Auth::user()->gender}}</a>
                                        </div>
                                        <div class="follow-btn text-center mt-4">
                                            <a class="btn btn-shadow" href="#">{{Auth::user()->mobile}}</a>
                                        </div>
                                        <div class="follow-btn text-center mt-4">
                                            <a class="btn btn-shadow" href="#">{{Auth::user()->address}}</a>
                                        </div>
                                        <div class="follow-btn text-center mt-4">
                                            <a class="btn btn-shadow" href="#">{{Auth::user()->email}}</a>
                                        </div>
                                        <div class="follow-btn text-center mt-4">
	                                          <a class="btn btn-gradient-01" href="{{route('profile.edit')}}">Edit Profile</a>
	                                      </div>
                                        <div class="social-stats mt-5">
                                            <div class="row d-flex justify-content-between">
                                                <div class="col-4 text-center">
                                                    <div class="counter"></div>
                                                    <div class="heading"></div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="counter"></div>
                                                    <div class="heading"></div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="counter"></div>
                                                    <div class="heading"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shape-container">
                                            <svg class="wavy" viewbox="00 0 85 25">
                                                <path fill="#e4e8f0" d="M0 30 V15 Q30 3 60 15 V30z" />
                                                <path fill="#5d5386" d="M0 30 V5 Q30 20 55 12 T100 11 V30z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget 14 -->
                            <!-- Begin Widget 15 -->
                            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                
                            </div>
                            <!-- End Widget 15 -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Success Modal -->
@endsection
