@extends('backend.layouts.layout')

@section('content')
                <!-- End Left Sidebar -->
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Manage Faq</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Blocks</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Default -->
                                <div class="widget has-shadow">
                                    @if(Auth::User()->usertype=='Admin')
                                    <div class="page-header-tools">
	                                    <a class="btn btn-gradient-01" href="{{route('addfaq')}}">Add Faq</a>
	                                  </div>
                                    @endif
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th  >SL.</th>

                                                        <th >Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($faqs as $key=>$faq)

                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>{!! $faq->description  !!}</td>
                                                        <td>
                                                             <a href="{{ route('edit.faq',$faq->id) }}" class="btn btn-sm btn-success mb-2">Edit</a>
                                                            <a href="{{ route('del.faq',$faq->id) }}" class="btn btn-sm btn-danger">Del</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Default -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
@endsection
