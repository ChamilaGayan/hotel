@extends('layouts.app')

@section('content')


        <!--loader-->
        <div class="loader-wrap">
            <div class="pin">
                <div class="pulse"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            @include('layouts.header')
            <!--  header end -->
            <!--  wrapper  -->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- section-->
                    <section class="flat-header color-bg adm-header">
                        <div class="wave-bg wave-bg2"></div>
                        <div class="container">
                            <div class="dasboard-wrap fl-wrap">
                                <div class="dasboard-breadcrumbs breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Profile page</span></div>
                                <!--dasboard-sidebar-->
                                <div class="dasboard-sidebar">
                                    <div class="dasboard-sidebar-content fl-wrap">
                                        <div class="dasboard-avatar">
                                            <img src="images/avatar/4.jpg" alt="">
                                        </div>
                                        <div class="dasboard-sidebar-item fl-wrap">
                                            <h3>
                                                <span>Welcome </span>
                                                Jessie Manrty
                                            </h3>
                                        </div>
                                        <a href="dashboard-add-listing.html" class="ed-btn">Add Hotel</a>
                                        <div class="user-stats fl-wrap">
                                            <ul>
                                                <li>
                                                    Listings
                                                    <span>4</span>
                                                </li>
                                                <li>
                                                    Bookings
                                                    <span>32</span>
                                                </li>
                                                <li>
                                                    Reviews
                                                    <span>9</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#" class="log-out-btn color-bg">Log Out <i class="far fa-sign-out"></i></a>
                                    </div>
                                </div>
                                <!--dasboard-sidebar end-->
                                <!-- dasboard-menu-->
                                <div class="dasboard-menu">
                                    <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                                    <ul class="dasboard-menu-wrap">
                                        <li>
                                            <a href="dashboard.html" class="user-profile-act"><i class="far fa-user"></i>Profile</a>
                                            <ul>
                                                <li><a href="dashboard-myprofile.html">Edit profile</a></li>
                                                <li><a href="dashboard-password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="dashboard-messages.html"><i class="far fa-envelope"></i> Messages <span>3</span></a></li>
                                        <li>
                                            <a href="dashboard-listing-table.html"><i class="far fa-th-list"></i> My listigs  </a>
                                            <ul>
                                                <li><a href="#">Active</a><span>5</span></li>
                                                <li><a href="#">Pending</a><span>2</span></li>
                                                <li><a href="#">Expire</a><span>3</span></li>
                                            </ul>
                                        </li>
                                        <li><a href="dashboard-bookings.html"> <i class="far fa-calendar-check"></i> Bookings <span>2</span></a></li>
                                        <li><a href="dashboard-review.html"><i class="far fa-comments"></i> Reviews </a></li>
                                    </ul>
                                </div>
                                <!--dasboard-menu end-->
                                <!--Tariff Plan menu-->
                                <div   class="tfp-btn"><span>Tariff Plan : </span> <strong>Extended</strong></div>
                                <div class="tfp-det">
                                    <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                                    <a href="#" class="tfp-det-btn color2-bg">Details</a>
                                </div>
                                <!--Tariff Plan menu end-->
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section-->
                    <section class="middle-padding">
                        <div class="container">
                            <!--dasboard-wrap-->
                            <div class="dasboard-wrap fl-wrap">
                                <!-- dashboard-content-->
                                <div class="dashboard-content fl-wrap">
                                    <div class="box-widget-item-header">
                                        <h3> Your Profile</h3>
                                    </div>
                                    <!-- profile-edit-container-->
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Your Name <i class="far fa-user"></i></label>
                                            <input type="text" placeholder="Jessie Manrty" value=""/>
                                            <label>Email Address<i class="far fa-envelope"></i>  </label>
                                            <input type="text" placeholder="JessieManrty@domain.com" value=""/>
                                            <label>Phone<i class="far fa-phone"></i>  </label>
                                            <input type="text" placeholder="+7(123)987654" value=""/>
                                            <label> Adress <i class="fas fa-map-marker"></i>  </label>
                                            <input type="text" placeholder="USA 27TH Brooklyn NY" value=""/>
                                            <label> ID Number <i class="fa fa-address-card" aria-hidden="true"></i>  </label>
                                            <input type="text" placeholder="1234567890 V" value=""/>
                                            <label> Website <i class="far fa-globe"></i>  </label>
                                            <input type="text" placeholder="themeforest.net" value=""/>
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <label> Notes</label>
                                                    <textarea cols="40" rows="3" placeholder="About Me"></textarea>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Change Avatar</label>
                                                    <div class="add-list-media-wrap">
															<form class="fuzone">
																<div class="fu-text">
																	<span><i class="far fa-cloud-upload-alt"></i> Click here or drop files to upload</span>
																	<div class="photoUpload-files fl-wrap"></div>
																</div>
																<input type="file" class="upload">
															</form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end-->
                                    <div class="box-widget-item-header mat-top">
                                        <h3>Your  Tariff Plan</h3>
                                    </div>
                                    <!-- profile-edit-container-->
                                    <div class="profile-edit-container add-list-container">
                                        <div class="custom-form">
                                            <div class="row">
                                                <!--col -->
                                                <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline">
                                                        <input type="radio" name="gender">
                                                        <span>Basic 99$</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end-->
                                                <!--col -->
                                                <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline">
                                                        <input type="radio" name="gender"  checked>
                                                        <span>Extended 99$</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end-->
                                                <!--col -->
                                                <div class="col-md-4">
                                                    <div class="add-list-media-header">
                                                        <label class="radio inline">
                                                        <input type="radio" name="gender">
                                                        <span>Professional 149$</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--col end-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end-->
                                    <div class="box-widget-item-header mat-top">
                                        <h3>Your  Socials</h3>
                                    </div>
                                    <!-- profile-edit-container-->
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Facebook <i class="fab fa-facebook"></i></label>
                                            <input type="text" placeholder="https://www.facebook.com/" value=""/>
                                            <label>Twitter<i class="fab fa-twitter"></i>  </label>
                                            <input type="text" placeholder="https://twitter.com/" value=""/>
                                            <label>Vkontakte<i class="fab fa-vk"></i>  </label>
                                            <input type="text" placeholder="https://vk.com" value=""/>
                                            <label> Instagram <i class="fab fa-instagram"></i>  </label>
                                            <input type="text" placeholder="https://www.instagram.com/" value=""/>
                                            <button class="btn    color2-bg  float-btn">Save Changes<i class="fal fa-save"></i></button>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end-->
                                </div>
                                <!-- dashboard-list-box end-->
                            </div>
                            <!-- dasboard-wrap end-->
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!-- content end-->
            </div>
            <!--wrapper end -->
            <!--footer -->
            @include('layouts.header')
            <!--footer end -->
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <h3>Hotel Title</h3>
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <a href="#" class="btn color2-bg">View Details <i class="fal fa-angle-right"></i></a>
                        <div class="map-modal-close"><i class="far fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content">
                                    <h3>Sign In <span>Easy<strong>Book</strong></span></h3>
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <h3>Sign Up <span>Easy<strong>Book</strong></span></h3>
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >Full Name <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>


@endsection
