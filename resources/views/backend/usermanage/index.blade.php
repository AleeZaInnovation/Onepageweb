@extends('backend.layouts.layout')

@section('content')
                <!-- End Left Sidebar -->
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Manage Users</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Users</li>
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
                                    <div class="page-header-tools">
	                                    <a class="btn btn-gradient-01" href="{{route('user.add')}}">Add User</a>
	                                </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                      <th>SL.</th>
                                                      <th>Role</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>Number</th>
                                                      <th>Designation</th>
                                                      <th>Address</th>
                                                      <th>Gender</th>
                                                      <th>Image</th>
                                                      <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($users as $key => $user)
                                                  <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $user->usertype }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->mobile }}</td>
                                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">{{ $user->designation }}</span></span></td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->gender }}</td>
                                                    <td>
                                                      <img width="50" style="width: 100px; height: 110px; border:1px; solid:#000;" src="{{(!empty($user->image))?url('assets/backend/images/'.$user->image):url('assets/backend/no_image.jpg')}}">
                                                    </td>
                                                    <td class="td-actions">
                                                      <a title="Edit" href="{{ route('user.edit', $user->id) }}"><i class="la la-edit edit"></i></a>
                                                      <a title="Delete" title="Delete" class="confirmDelete" href="javascript:void(0)" module="user" moduleid="{{ $user['id']}}"><i class="la la-close delete"></i></a>
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
      