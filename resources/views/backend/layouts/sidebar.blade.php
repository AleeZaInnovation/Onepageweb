<nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
                        <ul class="list-unstyled">
                            <li class="active"><a href="{{url('dashboard')}}" ><i class="la la-columns"></i><span>Dashboard</span></a>
                                <!-- <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                                    <li><a class="active" href="db-default.html">Default</a></li>
                                    <li><a href="db-clean.html">Clean</a></li>
                                    <li><a href="db-compact.html">Compact</a></li>
                                    <li><a href="db-modern.html">Modern</a></li>
                                    <li><a href="db-social.html">Social</a></li>
                                    <li><a href="db-smarthome.html">Smarthome</a></li>
                                    <li><a href="db-all.html">All</a></li>
                                </ul> -->
                            </li>
                            @if(Auth::User()->usertype=='Admin')
                            <li><a href="#dropdown-a" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i><span>User</span></a>
                                <ul id="dropdown-a" class="collapse list-unstyled pt-0">
                                    <li><a href="{{ route('user.view')}}">All User</a></li>
                                    <li><a href="{{ route('user.add')}}">Add User</a></li>
                                </ul>
                            </li>
                            @endif
                            <li><a href="#dropdown-b" aria-expanded="false" data-toggle="collapse"><i class="la la-wrench"></i><span>Profile</span></a>
                                <ul id="dropdown-b" class="collapse list-unstyled pt-0">
                                    <li><a href="{{ route('profile.view')}}">View Profile</a></li>
                                    <li><a href="{{ route('password.view')}}">Change Password</a></li>
                                </ul>
                            </li>
                            
                                
                                    <li><a href="{{ route('banner.view')}}">All Banner</a></li>
                                                                  
                                    
                                    <li><a href="{{ route('logo.view')}}"><i class="la la-bullseye"></i><span>Logo</span></a></li>
                                                                    
                                
                                    <li><a href="{{ route('blog.view')}}"><i class="la la-bank"></i><span>Home Page</span></a></li>
                                                                    
                                                                    
                                    <li><a href="{{ route('social.media.view')}}"><i class="la la-group"></i><span>Social Media </span></a></li>
                                                                    
                                                                    
                                    <li><a href="{{ route('faq')}}"><i class="la la-question"></i><span>Faq </span></a></li>
                                                                    
                                            
                                            <li><a href="{{ route('contact.view')}}"><i class="la la-phone-square"></i><span>Contact Us</span></a></li>
                                                                    
                                                                    
                                            <li><a href="{{ route('menu.view')}}"><i class="la la-align-justify"></i><span>Menu Item </span></a></li>
                                                                    
                                                                    
                            </li>
                        </ul>
                        <!-- End Main Navigation -->
                    </nav>
