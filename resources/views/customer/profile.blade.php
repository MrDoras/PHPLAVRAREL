<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="http://localhost/gcs1007/public/assets/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/gcs1007/public/assets/css/style.css">
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
                <h2>Your Information</h2>
            </section>
            <section class="contact-form-wrapper">
                <form action="{{url('user/index/edit-account')}}\{{$user->email}}\{{$user->password}}">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">YOUR ID <sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{$user->UserID}}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">YOUR EMAIL ADDRESS <sup>*</sup></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="{{$user->email}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="subject">YOUR PASSWORD <sup>*</sup></label>
                            <input type="password" class="form-control" id="name" name="subject" placeholder="****************" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR FIRST NAME <sup>*</sup></label>
                            <input type="text" class="form-control" id="FName" name="FName" placeholder="{{$user->FirstName}}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR LAST NAME <sup>*</sup></label>
                            <input type="text" class="form-control" id="LName" name="LName" placeholder="{{$user->LastName}}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR GENDER  <sup>*</sup></label>
                            <input type="text" class="form-control" id="Gender" name="Gender" placeholder="{{$user->Gender}}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR COUNTRY  <sup>*</sup></label>
                            <input type="text" class="form-control" id="Country" name="Country" placeholder="{{$country->CounName}}" readonly >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR CITY  <sup>*</sup></label>
                            <input type="text" class="form-control" id="Country" name="Country" placeholder="{{$city->CityName}}" readonly >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR ADDRESS  <sup>*</sup></label>
                            <input type="text" class="form-control" id="Country" name="Country" placeholder="{{$user->UserAddress}}" readonly >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">YOUR PHONE NUMBER  <sup>*</sup></label>
                            <input type="text" class="form-control" id="Country" name="Country" placeholder="{{$user->UserPhone}}" readonly >
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-4">Edit Information</button>
                    </div>
                </form>
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
    <script src="http://localhost/gcs1007/public/assets/vendors/jquery/jquery.min.js"></script>
    <script src="http://localhost/gcs1007/public/assets/vendors/popper.js/popper.min.js"></script>
    <script src="http://localhost/gcs1007/public/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>