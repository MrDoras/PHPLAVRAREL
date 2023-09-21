<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="http://localhost/gcs1007/public/default/assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="http://localhost/gcs1007/public/assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/gcs1007/public/assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/gcs1007/public/default/assets/css/bootstrap.min.css">


    
</head>
<body>
    <header class="foi-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
                <a class="navbar-brand" href="{{url('user/index')}}\{{$user->email}}\{{$user->password}}">
                    <img src="http://localhost/gcs1007/public/assets/images/logo.png" alt="FOI">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user/index')}}\{{$user->email}}\{{$user->password}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user/index/product-list')}}\{{$user->email}}\{{$user->password}}">Our Product</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$user->email}}s</a>
                            <div class="dropdown-menu" aria-labelledby="pagesMenu">
                                <a class="dropdown-item" href="{{url('user/index/profile')}}\{{$user->email}}\{{$user->password}}">profile</a>
                                <a class="dropdown-item" href="{{url('user/index/cart')}}\{{$user->email}}\{{$user->password}}">Cart</a>
                                <a class="dropdown-item" href="{{url('user/index/order')}}\{{$user->email}}\{{$user->password}}">Order</a>
                                <a class="dropdown-item" href ="{{url('lobby')}}">Log Out</a>
                               
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="page-header">
                <h2>Payment</h2>
            </section>
            <section class="contact-form-wrapper">
                <div class="container mt-3" style="margin-top: 20px">
                    <table class="table table-hover">
                        <caption><h2>Payment</h2></caption>
                        <thead>
                            <tr>
                               
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div style="margin-right: 10%; margin-bottom:20px; float: right;">
                                <form action="{{url('user/index/payment-save')}}\{{$user->email}}\{{$user->password}}" method="post">
                                    @csrf
                                
                                @foreach ($data as $item)
                                    <tr>
                                        
                                        <input type="hidden" name="id[]" value="{{$item->PaymentID}}">
                                        <input type="hidden" name="productName[]" value="{{$item->productName}}">
                                        <input type="hidden" name="productPrice[]" value="{{$item->productPrice}}">
                                        <input type="hidden" name="productImage[]" value="{{$item->productImage}}">
                                        <input type="hidden" name="productDetails[]" value="{{$item->productDetails}}">
                                        <input type="hidden" name="catID[]" value="{{$item->catID}}">
                                        <input type="hidden" name="UserID[]" value="{{$user->UserID}}">
                                        <input type="hidden" name="quantity[]" value="{{$item->quantity}}">
                                        <td>{{$item->productName}}</td>
                                        <td>{{$item->productPrice}}$</td>
                                        <td>{{$item->productDetails}}</td>
                                        <td>
                                            <img src="http://localhost/gcs1007/public/pro_img/{{$item->productImage}}" title="Xem chi tiết sản phẩm" style="height:100px;width:120px">
                                        </td>
                                        <td>{{$item->catID}}</td>
                                        <td>{{$item->quantity}}</td>
                                    </tr>  
                            @endforeach
                        </tbody>
                        <br/>
                        
                            <br/>

                            @php
                                $totalMoney = 0; // Khởi tạo biến tổng số tiền
                            @endphp

                            @foreach ($data as $item)
                                @php
                                    $totalMoney += $item->productPrice; // Cộng dồn giá sản phẩm vào tổng số tiền
                                @endphp
                            @endforeach

                            <caption><h2>Total Money: {{ $totalMoney }}$ </h2> </caption>
                        
                    </table>
                    <button type="submit" class="btn btn-primary">Purchase</button>
                </form>
            </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="foi-footer text-white">
        <div class="container">
            <div class="row footer-content">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <h2 class="mb-0">Do you want to know more or just have a question? write to us.</h2>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-6 py-3 py-md-0 d-md-flex align-items-center justify-content-end">
                    <a href="contact.html" class="btn btn-danger btn-lg">Contact form</a>
                </div>
            </div>
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <div class="py-3">
                        <img src="http://localhost/gcs1007/public/assets/images/logo-white.png" alt="FOI">
                    </div>
                    <p class="font-os font-weight-semibold mb3">Get our mobile app</p>
                    <div>
                        <button class="btn btn-app-download mr-2"><img src="http://localhost/gcs1007/public/assets/images/ios.svg" alt="App store"></button>
                        <button class="btn btn-app-download"><img src="http://localhost/gcs1007/public/assets/images/android.svg" alt="play store"></button>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <nav>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{url('user/index/profile')}}\{{$user->email}}\{{$user->password}}" class="nav-link">Account</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('user/index/cart')}}\{{$user->email}}\{{$user->password}}" class="nav-link">My cart</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('user/index/product-list')}}\{{$user->email}}\{{$user->password}}" class="nav-link">Our Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('user/index/edit-account')}}\{{$user->email}}\{{$user->password}}" class="nav-link">Edit profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('user/index')}}\{{$user->email}}\{{$user->password}}" class="nav-link">Activity</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <p>
                        &copy; foi. 2020 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a>.
                    </p>
                    <p>All rights reserved.</p>
                    <nav class="social-menu">
                        <a href="#!"><img src="http://localhost/gcs1007/public/assets/images/facebook.svg" alt="facebook"></a>
                        <a href="#!"><img src="http://localhost/gcs1007/public/assets/images/instagram.svg" alt="instagram"></a>
                        <a href="#!"><img src="http://localhost/gcs1007/public/assets/images/twitter.svg" alt="twitter"></a>
                        <a href="#!"><img src="http://localhost/gcs1007/public/assets/images/youtube.svg" alt="youtube"></a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
     <!-- jQuery -->
     <script src="http://localhost/gcs1007/public/default/assets/js/jquery-2.1.0.min.js"></script>

     <!-- Bootstrap -->
     <script src="http://localhost/gcs1007/public/default/assets/js/popper.js"></script>
 
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
    <script src="http://localhost/gcs1007/public/assets/vendors/jquery/jquery.min.js"></script>
    <script src="http://localhost/gcs1007/public/assets/vendors/popper.js/popper.min.js"></script>
    <script src="http://localhost/gcs1007/public/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>