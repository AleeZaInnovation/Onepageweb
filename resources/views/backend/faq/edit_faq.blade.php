
@extends('backend.layouts.layout')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
                <h3> Edit Faq
                <a class="btn btn-success my-3 float-sm-right" href="{{ route('faq') }}"><i class="fa fa-list"></i> Faq List </a>
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">

                <div class="tab-content p-0">
                  <form method="post" action="{{ route('update.faq',$faq->id ) }}"  enctype="multipart/form-data">
                  @csrf

                  <div class="form-group">
                        <label>Description</label>
                        <textarea name="description"  cols="30" class="form-control" rows="30">{!! $faq->description !!}</textarea>
                  </div>


                  <div class="form-group">
                        <input type="submit" value="Update" class=" btn btn-success btn-block">
                  </div>
            </form>

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
@section('footer_script')
 <script src="https://cdn.tiny.cloud/1/78ofknroy4138w6meqz3rd912g5sxf12f6cczddkizitgsgq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
          <script>
            tinymce.init({
              selector: 'textarea',
              plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
              toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
              tinycomments_mode: 'embedded',
              tinycomments_author: 'Author name',
              mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
              ]
            });
</script>
@endsection

