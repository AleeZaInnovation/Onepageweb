@extends('backend.layouts.layout')

@section('content')
                <!-- End Left Sidebar -->
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Menu</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Menu</li>
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
	                                    <a class="btn btn-gradient-01" href="{{route('menu.add')}}">Add Menu</a>
	                                  </div>
                                    @endif
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table width="100" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th  >SL.</th>
                                                        <th >Title</th>
                                                        <th>Action</th> 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($data as $key => $item)
                                                  <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{$item->title}}</td>
                                                    <td class="td-actions">
                                                      <a title="Edit" href="{{ route('menu.edit', $item->id) }}"><i class="la la-edit edit"></i></a>
                                                      @if(Auth::User()->usertype=='Admin')
                                                      <a title="Delete" class="confirmDelete" href="javascript:void(0)" module="menu" moduleid="{{ $item['id']}}"><i class="la la-close delete"></i></a>
                                                      @endif
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
      