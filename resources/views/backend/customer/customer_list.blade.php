@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="mt-5 text-end"><strong>Customer Email List</strong></h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3> Customer List
                {{-- @if(Auth::User()->usertype=='Admin')
                <a class="btn btn-success my-3 float-sm-right" href=""><i class="fa fa-plus-circle" ></i>Add Blog
                @endif
              </a> --}}
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Check</th>
                      <th>SL.No</th>
                      <th >Name</th>
                      <th >Phone</th>
                      <th >Email</th>
                      <th >MSG</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <form action="{{ route('multiple.email') }}" method="POST">
                      @csrf
                      @foreach ($customer_lists as $key=>$customer_list)

                      <tr>
                        <td>
                          <input type="checkbox" name="check[]"  value="{{ $customer_list->id }}">
                        </td>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $customer_list->customer_name }}</td>
                        <td>{{ $customer_list->phone }}</td>
                        <td>{{ $customer_list->customer_email }}</td>
                        <td>{{ $customer_list->customer_msg }}</td>
                        <td>
                            <a href="{{ route('send.email.customer',$customer_list->id) }}" class="btn btn-sm btn-info">Send</a>
                             <a href="{{ route('delete.email.customer',$customer_list->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                      <td>
                        <button type="submit" class="btn btn-info">All send</button>
                      </td>
                    </tr>
                  </form>
                  </tbody>
                </table>

                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
