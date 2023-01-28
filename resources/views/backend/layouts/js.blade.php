<script src="{{url('assets/vendors/js/base/jquery.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}



  <script src="{{ asset('common/js/summernote/summernote-lite.min.js') }}"></script>
        <script src="{{url('assets/vendors/js/base/core.min.js')}}"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="{{url('assets/vendors/js/nicescroll/nicescroll.min.js')}}"></script>
        <script src="{{url('assets/vendors/js/chart/chart.min.js')}}"></script>
        <script src="{{url('assets/vendors/js/progress/circle-progress.min.js')}}"></script>
        <script src="{{url('assets/vendors/js/calendar/moment.min.js')}}"></script>
        <script src="{{url('assets/vendors/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{url('assets/vendors/js/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{url('assets/vendors/js/app/app.js')}}"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="{{url('assets/js/dashboard/db-default.js')}}"></script>
        <!-- End Page Snippets -->
  <script src="{{ asset('common/js/summernote/summernote-lite.min.js') }}"></script>

        <!-- Sweetalert -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script type="text/javascript">
        $(document).ready(function () {
                $('#image').change(function(e){
                        //alert(1);
                        var reader = new FileReader();
                        reader.onload = function(e){
                        $('#showImage').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                });
                $(document).on("click",".confirmDelete",function(){
                        var module = $(this).attr('module');
                        var moduleid = $(this).attr('moduleid');
                        //alert(module);
                        Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                        Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                        )

                        window.location = "/"+module+"-delete/"+moduleid;
                        }
                        })
                });
        });
</script>
