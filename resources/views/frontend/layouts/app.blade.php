<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logo/favicon.ico')}}"/>
    
    <title>Homepage</title>

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="wrap_page">

        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('logo/logo-toya.png')}}" />
                </a>
                <div class="menu-head">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#sidemenu" aria-controls="sidemenu">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                </div>
            </div>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="sidemenu" aria-labelledby="sidemenuLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="sidemenuLabel">Menu</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div class="side-menu">
                    <ul>
                        <li><a href="#">Stories
                                <ul>
                                    <li><a href="#">Latest</a></li>
                                    <li><a href="#">Nurture</a></li>
                                </ul>    
                            </a>
                         </li>
                         <li><a href="#">About
                            <ul>
                                <li><a href="#">Our story</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>    
                        </a>
                     </li>
                    </ul>
                  </div>
                </div>
            </div>


        </nav>


        @yield('content')

        <footer>
            <div class="wrap_subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <h3>Join our newsletter</h3>
                        </div>
                        <div class="col-12 col-md-3">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email Address">
                                    <button class="btn_susbcribe"><i class="fas fa-arrow-right"></i></button>
                                   </div>
                            </form>
                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <h6 class="title-menu">Our Email</h6>
                        <ul class="list-menu">
                            <li><a href="#">hello@toya.com</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2">
                        <h6 class="title-menu">Stories</h6>
                        <ul class="list-menu">
                            <li><a href="#">Latest</a></li>
                            <li><a href="#">Nurture</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2">
                        <h6 class="title-menu">About</h6>
                        <ul class="list-menu">
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-1">
                        <h6 class="title-menu">Help</h6>
                        <ul class="list-menu">
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2">
             
                        <ul class="list-menu sosmed">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="logo-footer">
                            <img src="{{asset('logo/logo-toya.png')}}" />
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</body>



<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>

</html>