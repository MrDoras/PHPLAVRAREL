<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop - Product Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="http://localhost/gcs1007/public/default/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="http://localhost/gcs1007/public/default/assets/css/font-awesome.css">

    <link rel="stylesheet" href="http://localhost/gcs1007/public/default/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="http://localhost/gcs1007/public/default/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="http://localhost/gcs1007/public/default/assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('lobby')}}" class="logo">
                          
                            <img src="http://localhost/gcs1007/public/default/assets/images/logo1.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('lobby')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('default/product-list')}}">Our Product</a></li>
                            
                           
                            <li class="submenu">
                                <a href="javascript:;">Login</a>
                                <ul>
                                    <li><a href="log">Login</a></li>
                                    <li><a href="register">Register</a></li>
                                </ul>
                            </li>
                        </ul>            
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img src="http://localhost/gcs1007/public/pro_img\{{$data->productImage}}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                  
                   
                    <h4>{{$data->productName}}</h4>
                    <span class="price">{{$data->productPrice}}$</span>
                    <span>{{$data->productDetails}}</span>
                    <div class="quantity-content">
                      <div class="left-content">
                        <h6>Orders:</h6>
                      </div>
                      <div class="right-content">
                        <div class="quantity buttons_added">
                          <input type="button" value="-" class="minus">
                          <input type="number" step="1" min="1" max="" name="quantity" id="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                          <input type="button" value="+" class="plus">
                        </div>
                      </div>
                    </div>
                    <div class="total">
                      <h4>PRICE: </h4>
                      <h4>{{$data->productPrice}}$</h4>
                    </div>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <button type="submit" class="btn btn-primary" onclick="return alert('You need to login first');">
                            <i class="bi bi-x-square"></i> Add To Cart
                          </button>   
                        </form>
                        <br/>
                        <br/>
                        <button type="submit" class="btn btn-primary" onclick="return alert('You need to login first');">
                            <i class="bi bi-x-square"></i> Buy Now
                          </button>                        
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="http://localhost/gcs1007/public/default/assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="http://localhost/gcs1007/public/default/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="http://localhost/gcs1007/public/default/assets/js/popper.js"></script>
    <script src="http://localhost/gcs1007/public/default/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="http://localhost/gcs1007/public/default/assets/js/owl-carousel.js"></script>
    <script src="http://localhost/gcs1007/public/default/assets/js/accordions.js"></script>
    <script src="http://localhost/gcs1007/public/default/assets/js/datepicker.js"></script>
    <script src="http://localhost/gcs1007/public/default/assets/js/scrollreveal.min.js"></script>
    <script src="http://localhost/gcs1007/public/default/assets/js/waypoints.min.js"></script>
    <script src="http://localhost/gcs1007/public/default/assets/js/jquery.counterup.min.js"></script>
    <script src="http://localhost/gcs1007/public/default/assets/js/imgfix.min.js"></script> 
    <script src="http://localhost/gcs1007/public/default/assets/js/slick.js"></script> 
    <script src="http://localhost/gcs1007/public/default/assets/js/lightbox.js"></script> 
    <script src="http://localhost/gcs1007/public/default/assets/js/isotope.js"></script> 
    <script src="http://localhost/gcs1007/public/default/assets/js/quantity.js"></script>
    
    <!-- Global Init -->
    <script src="http://localhost/gcs1007/public/default/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
