@extends('layouts.admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="mt-5 text-end"><strong> Email Notifications Msg </strong></h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notifications msg</li>
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
          <div class="col-md-8">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3><strong> Notifications msg</strong>
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
                      <th>Sl</th>
                      <th >Customer Registration msg</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($register_msgs as $key=>$register_msg )

                    <tr>
                      <td>{{  $key+1 }}</td>
                      <td>{{ $register_msg->register_msg }}</td>
                      <td>

                          <a href="" class="btn btn-sm btn-success">Acitve</a>
                          {{-- <a href="" class="btn btn-sm btn-secondary">Deactive</a> --}}
                      </td>
                      <td>
                        <a href="{{ route('detele.msg',$register_msg->id) }}" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
              <!-- /.card-body -->
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><strong>Add Message</strong></h3>
              </div>
              <div class="card-header">
                <form action="{{ route('register.msg') }}" method="POST">
                  @csrf
                  <div class="mt-2">
                    <label class="form-label">Msg</label>
                    <input type="text" class="form-control" name="register_msg">
                  </div>
                  <div class="mt-2">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
            <!-- /.card -->
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

