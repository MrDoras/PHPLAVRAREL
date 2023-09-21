<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Information</title>
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
                <h2>Edit Information</h2>
            </section>
            <section class="contact-form-wrapper">
                <form action="{{url('user/index/account-save')}}" method="POST">
                    @csrf
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if (Session::has('error'))
                        <script>
                            alert("{{ Session::get('error') }}");
                        </script>
                    @endif
                    <div class="mb-3 mt-3">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" id="id" 
                               value="{{$user->UserID}}" readonly name="id">
                    </div>
                    <div class="mb-3">
                        <label for="email">email:</label>
                        <input type="text" class="form-control" id="email" 
                               value="{{$user->email}}" name="email" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="password">password:</label>
                      <input type="password" class="form-control" id="password" placeholder="*********************************"  value="{{$user->password}}" name="password">
                    </div>
                      <div class="mb-3">
                        <label for="LastName">LastName:</label>
                        <input type="text" class="form-control" id="LastName" 
                              value="{{$user->LastName}}" name="LastName">
                    </div>
                      <div class="mb-3">
                        <label for="FirstName">FirstName:</label>
                        <input type="text" class="form-control" id="FirstName" 
                              value="{{$user->FirstName}}" name="FirstName">
                    </div>
                    <div> 
                        <label for="Phone">Phone Number</label>
                        <input type="text" class="form-control" id="Phone" 
                              value="{{$user->UserPhone}}" name="Phone">
                    </div>
                    <div class="mb-3">
                      <label for="Gender">Gender:</label>
                      <input type="text" class="form-control" id="Gender" 
                            value="{{$user->Gender}}" name="Gender" readonly>
                    </div>
                    <div> 
                        <label for="Country">Country</label>
                        <select id="Country" name="Country" class="form-control">
                          @foreach ($countries as $item)
                            <option value="{{ $item->CounID }}" {{ $user->CounID == $item->CounID ? 'selected' : '' }}>
                              {{ $item->CounName }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      
                      <div> 
                        <label for="City">City</label>
                        <select id="city" name="City" class="form-control">
                          @foreach ($cities as $item)
                            <option value="{{ $item->CityID }}" data-country="{{ $item->CounID }}" {{ $user->CityID == $item->CityID ? 'selected' : '' }}>
                              {{ $item->CityName }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      
                      <script>
                        document.getElementById('Country').addEventListener('change', function() {
                          var selectedCountryID = this.value;
                          var citySelect = document.getElementById('city');
                          var cityOptions = citySelect.options;
                      
                          for (var i = 0; i < cityOptions.length; i++) {
                            var option = cityOptions[i];
                            if (option.getAttribute('data-country') === selectedCountryID) {
                              option.style.display = 'block';
                              option.disabled = false; // Enable the option
                            } else {
                              option.style.display = 'none';
                              option.disabled = true; // Disable the option
                            }
                          }
                        });
                      </script>
                      
                      <div> 
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" id="Address" value="{{ $user->UserAddress }}" name="Address">
                      </div>
                      
                      <script>
                        document.getElementById('Country').addEventListener('change', function() {
                          var selectedCountryID = this.value;
                          var addressField = document.getElementById('Address');
                      
                          if (selectedCountryID !== '') {
                            addressField.style.display = 'block';
                          } else {
                            addressField.style.display = 'none';
                          }
                        });
                      </script>

                  <div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mb-4">Save Information</button>
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