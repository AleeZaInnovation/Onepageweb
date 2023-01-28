<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
@include('backend.layouts.head')
<html lang="en">

    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="{{url('frontend/image/logo.png')}}" alt="logo" class="loader-logo">
                <div class="spinner"></div>
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            @include('backend.layouts.header')
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    @include('backend.layouts.sidebar')
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                @yield('content')
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    @include('backend.layouts.footer')
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->

                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->

        </div>
        <!-- Begin Success Modal -->
        <!-- <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <!-- <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        @include('backend.layouts.js')
        @include('sweetalert::alert')
         
        @yield('footer_script')
        {{-- sammer note asa ai khan ay  --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
{{-- sammer note asa ai khan ay  --}}


    </body>
</html>
