<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Grand Coffee</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset("Frontend/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset("Frontend/css/style.css")}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset("Frontend/css/responsive.css")}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset("Frontend/images/fevicon.png")}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset("Frontend/css/jquery.mCustomScrollbar.min.css")}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset("Frontend/css/owl.carousel.min.css")}}">
      <link rel="stylesheet" href="{{asset("Frontend/css/owl.theme.default.min.css")}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding</h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding </h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding </h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->

      @section('section')
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <h1 class="gallery_taital">Our Products</h1>
                 <p class="gallery_text">Lorem Ipsum is simply dummy text of printing typesetting ststry lorem Ipsum the industry'ndard dummy text ever since of the 1500s, when an unknown printer took a galley of type and scra make a type specimen book. It has</p>
              </div>
           </div>
           <div class="">
              <div class="gallery_section_2">
                 <div class="row">
                    @foreach ($product as $row)
                        
                    
                    <div class="col-md-4">
                       <div class="container_main">
                        <img src="{{asset('images/'.$row->product_image)}}" width="320px" height="100px">
                          
                          {{-- <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                            
                          </div> --}}
                       </div>
                       <h3 class="text-center">{{$row->product_name}}</h3>
                          <p class="text-center">{{$row->product_discription}}</p>
                          <p class="text-center">{{$row->product_price}}</p>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-4">
                       <div class="container_main">
                        <img src="{{asset('images/'.$row->product_image)}}" width="100px" height="100px">
                          <h3>{{$row->product_name}}</h3>
                          <p>{{$row->product_discription}}</p>
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                        
                            </div>
                       </div>
                    </div> --}}
                  
                    {{-- <div class="col-md-4">
                       <div class="container_main">
                          <img src="images/img-3.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="gallery_section_2">
                 <div class="row">
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="images/img-4.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="images/img-5.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="overlay">
                                <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="images/img-6.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="overlay">
                                <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="gallery_section_2">
                 <div class="row">
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="images/img-7.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="images/img-8.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-4">
                       <div class="container_main">
                          <img src="images/img-9.png" alt="Avatar" class="image">
                          <div class="overlay">
                             <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div> --}}
           </div>
        </div>
           </div>
           <div class="seemore_bt"><a href="#">See More</a></div>
        </div>
     </div>
     <!-- gallery section end -->

       <!-- footer section start -->
       <div class="footer_section layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-3 col-sm-6">
                 <h3 class="useful_text">About</h3>
                 <p class="footer_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h3 class="useful_text">Menu</h3>
                 <div class="footer_menu">
                    <ul>
                       <li><a href="index.html">Home</a></li>
                       <li><a href="about.html">About Us</a></li>
                       <li><a href="gallery.html">Gallery</a></li>
                       <li><a href="services.html">Services</a></li>
                       <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                 </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h1 class="useful_text">Useful Link</h1>
                 <p class="dummy_text">Adipiscing Elit, sed do Eiusmod Tempor incididunt </p>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h1 class="useful_text">Contact Us</h1>
                 <div class="location_text">
                    <ul>
                       <li>
                          <a href="#">
                          <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address : Loram Ipusm</span>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                          <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +01 1234567890</span>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                          <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : demo@gmail.com</span>
                          </a>
                       </li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- footer section end -->
     <!-- copyright section start -->
     <div class="copyright_section">
        <div class="container">
           <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
        </div>
     </div>
     <!-- copyright section end -->
     <!-- Javascript files-->
     <script src="{{asset("Frontend/js/jquery.min.js")}}"></script>
     <script src="{{asset("Frontend/js/popper.min.js")}}"></script>
     <script src="{{asset("Frontend/js/bootstrap.bundle.min.js")}}"></script>
     <script src="{{asset("Frontend/js/jquery-3.0.0.min.js")}}"></script>
     <script src="{{asset("Frontend/js/plugin.js")}}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     <!-- sidebar -->
     <script src="{{asset("Frontend/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
     <script src="{{asset("Frontendjs/custom.js")}}"></script>     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
  </body>
</html>