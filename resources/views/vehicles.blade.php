




<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Carpooling</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->

        <!-- Bootstrap -->
        <link href="css1/bootstrap.min.css" rel="stylesheet">
        <!-- Forms -->
        <link href="css1/jquery.idealforms.css" rel="stylesheet">
        <!-- Select  -->
        <link href="css1/jquery.idealselect.css" rel="stylesheet">
        <!-- Slicknav  -->
        <link href="css1/slicknav.css" rel="stylesheet">
        <!-- Main style -->
        <link href="css1/style.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet">
        <!-- Modernizr -->
        <script src="js1/modernizr.js"></script>

        <!-- Fonts -->
        <link href="css1/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <header class="header">


            <div class="main-baner">

                <div class="fullscreen background parallax clearfix" style="background-image:url('img1/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

                    <div class="main-parallax-content">

                        <div class="second-parallax-content">

                            <section class="container-fluid">

                                <div class="row">

                                    <div class="main-header-container clearfix container-fluid">

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <div class="logo">
                                                <h1>Carpool</h1>
                                            </div><!-- end .logo -->

                                        </div><!-- end .col-sm-4 -->

                                        <div class="col-md-8 col-sm-8 col-xs-12">

                                            <nav id="nav" class="main-navigation">

                                                <ul class="navigation">
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="rides.html">Ride</a>
                                                    </li>
                                                    <li>
                                                        <a href="add-ride.html">Driver</a>
                                                    </li>

                                                    <li>
                                                        <a href="contact-page.html">Contact</a>
                                                    </li>

                                                    <!-- <li class="float-right">
                                                        <a  href="contact-page.html">{{Auth::user()->name}}</a>
                                                    </li> -->
                                                    <li class="nav-item dropdown float-right ">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle bg-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </nav><!-- end .main-navigation -->

                                        </div><!-- end .col-md-8 -->

                                    </div><!-- end .main-header-container -->

                                </div><!-- end .row -->

                            </section><!-- end .container -->

                        </div><!-- end .second-parallax-content -->

                    </div><!-- end .main-parallax-content -->

                </div><!-- end .background .parallax -->

            </div><!-- end .main-baner -->

        </header><!-- end .header -->

        <section class="main-content">

            <div class="container">
                <div class="row">

                    <div class="page-content">

                        <div class="services clearfix">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                              <div class="col-md-9 col-sm-12 col-xs-12">

                     <div class="page-content">

                         <form id="cantact-form" action="" novalidate autocomplete="off" class="idealforms">

                             <div class="field">
                                 <input name="username" type="text" placeholder="Name">
                                 <span class="error"></span>
                             </div>

                             <div class="field">
                                 <input name="email" type="email" placeholder="Email address" >
                                 <span class="error"></span>
                             </div>



                             <div class="field">
                                 <input name="registration_no" type="number" placeholder="Enter Registration Number" >
                                 <span class="error"></span>
                             </div>

                             <div class="field">
                                 <input name="vehicle_model" type="text" placeholder="Enter Vehicle Model" >
                                 <span class="error"></span>
                             </div>

														 <div class="field">
																 <input name="model_year" type="text" placeholder="Enter Vehicle Model Year" >
																 <span class="error"></span>
														 </div>

														 <div class="field">
																 <input name="psv_insurance" type="text" placeholder="Enter PSV Insurance" >
																 <span class="error"></span>
														 </div>

														 <div class="field">
																 <input name="password" type="password" placeholder="Password" >
																 <span class="error"></span>
														 </div>

														 <div class="field">
																 <input name="confirmpassword" type="password" placeholder="Confirm Password" >
																 <span class="error"></span>
														 </div>

                             <div class="field buttons">
                                 <button type="submit" class="btn btn-lg blue-color">Register</button>
                             </div>

                             <span id="invalid"></span>

                         </form>

                     </div><!-- end .page-content -->

                 </div><!-- end .col-md-9 -->

                        <div class="clearfix"></div>


        <footer id="footer">

            <div class="footer-copyright">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            Copyright by Carpooling
                        </div>

                    </div><!-- end .row -->
                </div><!-- end .container -->

            </div><!-- end .footer-copyright -->

        </footer><!-- end #footer -->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div><!-- end .modal-header -->

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms login">

                            <div class="log-header">
                                <span class="log-in">Log in</span>
                            </div>

                            <div class="field">
                                <input name="username" type="text" placeholder="Username">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Log in</button>
                            </div>

                            <a href="#" class="log-twitter twitter"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="log-facebook facebook"><i class="fa fa-facebook"></i>Facebook</a>

                            <div class="clearfix"></div>

                        </form><!-- end .login -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="" novalidate autocomplete="off" class="idealforms reg">

                            <div class="log-header">
                                <span class="log-in">Sign up</span>
                            </div>

                            <div class="field">
                                <input name="name" type="text" placeholder="Enter Name">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="email" type="email"  placeholder="E-Mail">
                                <span class="error"></span>
                            </div>

														<div class="field">
                                <input name="registration_no" type="number" placeholder="Car Registration Number">
                                <span class="error"></span>
                            </div>

														<div class="field">
                                <input name="vehicle_model" type="text" placeholder="Vehicle Model">
                                <span class="error"></span>
                            </div>

														<div class="field">
                                <input name="model_year" type="number" placeholder="Model Year">
                                <span class="error"></span>
                            </div>

														<div class="field">
                                <input name="psv_insurance" type="text" placeholder="PSV Insurance">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input type="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field">
                                <input name="confirmpassword" type="password"  placeholder="Password">
                                <span class="error"></span>
                            </div>

                            <div class="field buttons">
                                <button type="submit" class="submit btn green-color">Sign up</button>
                            </div>

                            <div class="clearfix"></div>

                        </form><!-- end .reg -->
                    </div><!-- end .modal-body -->

                </div><!-- end .modal-content -->
            </div><!-- end .modal-dialog -->
        </div><!-- end .modal -->

        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="js1/bootstrap.min.js"></script>
        <!-- Main jQuery -->
        <script type="text/javascript" src="js1/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js1/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js1/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="js1/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js1/hoverIntent.js"></script>
        <script type="text/javascript" src="js1/superfish.js"></script>
        <!-- Counter-Up  -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script type="text/javascript" src="js1/jquery.counterup.min.js"></script>
        <!-- Rating  -->
        <script type="text/javascript" src="js1/bootstrap-rating-input.min.js"></script>
        <!-- Slicknav  -->
        <script type="text/javascript" src="js1/jquery.slicknav.min.js"></script>

    </body>
</html>