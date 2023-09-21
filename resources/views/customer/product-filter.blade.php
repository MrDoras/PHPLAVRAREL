<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop - Product Listing Page</title>


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
                        <a href="{{url('user/index')}}\{{$user->email}}\{{$user->password}}" class="logo">
                            <img src="http://localhost/gcs1007/public/default/assets/images/logo1.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('user/index')}}\{{$user->email}}\{{$user->password}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('user/index/product-list')}}\{{$user->email}}\{{$user->password}}">Our Product</a></li>
                            
                           
                            <li class="submenu">
                                <a href="javascript:;">{{$user->email}}</a>
                                <ul>
                                    <li><a href="{{url('user/index/profile')}}\{{$user->email}}\{{$user->password}}">profile</a></li>
                                    <li><a href="{{url('user/index/cart')}}\{{$user->email}}\{{$user->password}}">Cart</a></li>
                                    <li><a href="{{url('user/index/order')}}\{{$user->email}}\{{$user->password}}">Order</a></li>
                                    <li><a href="{{url('lobby')}}">Log Out</a></li>

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
                        <h2>Check Our Products</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <style>
        .dropbtn {
            background-color: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            display: flex;
            justify-content: center;
            margin-right: 10px; /* Tùy chỉnh khoảng cách giữa nút và phần nhập liệu */
        }
        
        .dropbtn:hover, .dropbtn:focus {
            background-color: #ddd;
        }
        
        #myInput {
            box-sizing: border-box;
            background-image: url('searchicon.png');
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 20px 12px 45px;
            border: none;
            border-bottom: 1px solid #ddd;
            margin: 0; /* Xóa thuộc tính margin */
            display: inline-block; /* Thêm thuộc tính display: inline-block; */
            vertical-align: middle; /* Căn giữa theo chiều dọc */
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f6f6f6;
            min-width: 230px;
            overflow: auto;
            border: 1px solid #ddd;
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown a:hover {background-color: #ddd;}
        
        .show {display: block;}
    </style>
    
    <body style="background-color:white;">
    
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Filter</button>
            <div id="myDropdown" class="dropdown-content">
                    <a href="{{url('user/index/product-list')}}\{{$user->email}}\{{$user->password}}">All</a>
                @foreach ($cat as $item)
                    <a href="{{url('user/index/product-list')}}\{{$user->email}}\{{$user->password}}\{{$item->catID}}">{{$item->catName}}</a>
                @endforeach
            </div>
        </div>
        <input type="text" placeholder="Search.." id="myInput" name="myInput" onkeypress="handleKeyPress(event)">

        <script>
        function handleKeyPress(event) {
          if (event.keyCode === 13) { // Kiểm tra nếu phím nhấn là Enter (keyCode 13)
            var input = document.getElementById("myInput").value; // Lấy giá trị đã nhập
            var url = "{{url('user/index/product-Search')}}/{{$user->email}}/{{$user->password}}/" + input; // Tạo URL chứa giá trị đã nhập
            window.location.href = url; // Chuyển đến trang mới với URL tạo ra
          }
        }
        </script>
            <script>
            /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            function filterFunction() {
              var input, filter, ul, li, a, i;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              div = document.getElementById("myDropdown");
              a = div.getElementsByTagName("a");
              for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  a[i].style.display = "";
                } else 
                {
                  a[i].style.display = "none";
                }
              }
            }
            </script>
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        
                        <h2>Our Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($data as $pro)   
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="{{url('user/index/single-product')}}\{{$user->email}}\{{$user->password}}\{{$pro->productID}}"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                            <img src="http://localhost/gcs1007/public/pro_img\{{$pro->productImage}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{$pro->productName}}</h4>
                            <span>{{$pro->productPrice}}$</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    
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
                        @foreach ($cat as $item)
                        <li><a href="{{url('user/index/product-list/')}}\{{$user->email}}\{{$user->password}}\{{$item->catID}}" class="nav-link">{{$item->catName}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{url('user/index')}}\{{$user->email}}\{{$user->password}}">Homepage</a></li>
                        <li><a href="{{url('user/index/cart')}}\{{$user->email}}\{{$user->password}}">My Cart</a></li>
                        <li><a href="{{url('user/index/product-list')}}\{{$user->email}}\{{$user->password}}">Product List</a></li>
                        <li><a href="{{url('user/index/edit-account')}}\{{$user->email}}\{{$user->password}}">Edit Profile</a></li>
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
