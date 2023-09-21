<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Product Edit</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="http://localhost/gcs1007/public/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="http://localhost/gcs1007/public/admin/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="http://localhost/gcs1007/public/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="http://localhost/gcs1007/public/admin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="http://localhost/gcs1007/public/admin/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="http://localhost/gcs1007/public/admin/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Layout styles -->
    <link rel="stylesheet" href="http://localhost/gcs1007/public/admin/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="http://localhost/gcs1007/public/admin/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="http://localhost/gcs1007/public/admin/assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="http://localhost/gcs1007/public/admin/assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +8431309518</li>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-vn"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">Vietnamese</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="http://localhost/gcs1007/public/admin/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="http://localhost/gcs1007/public/admin/assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="http://localhost/gcs1007/public/admin/assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="http://localhost/gcs1007/public/admin/assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="http://localhost/gcs1007/public/admin/assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">{{ $user->FirstName . ' ' . $user->LastName }}</p>
                  <p class="font-weight-light text-muted mb-0">{{ $user->email}}</p>
                </div>
                <a class="dropdown-item"  href="{{ url('admin/index/profile')}}\{{$user->email}}\{{$user->password}}">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="{{ url('lobby')}}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="http://localhost/gcs1007/public/admin/assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ $user->FirstName . ' ' . $user->LastName }}</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/index/' . $user->email . '/' . $user->password) }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Product Management</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/product-list/' . $user->email . '/' . $user->password) }}">Product List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/product-add/' . $user->email . '/' . $user->password) }}">Add New Product</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Category Management</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/category-list/' . $user->email . '/' . $user->password) }}">Category List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/category-add/' . $user->email . '/' . $user->password) }}">Add New Category</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-1" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Customer Management</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/customer-list/' . $user->email . '/' . $user->password) }}">Customer List</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/customer-order/' . $data->email . '/' . $user->password) }}">Customer's Order</a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
        </nav>
        <!-- partial -->

        <body>
          <div class="container mt-3" style="margin-top:20px">
              <h2>Edit product</h2>
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
              <form action="{{url('admin/customer-update')}}" method="POST">
                  @csrf
                  <div class="mb-3 mt-3">
                      <label for="id">ID:</label>
                      <input type="text" class="form-control" id="id" 
                             value="{{$data->UserID}}" readonly name="id">
                  </div>
                  <div class="mb-3">
                      <label for="email">email:</label>
                      <input type="text" class="form-control" id="email" 
                             value="{{$data->email}}" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="password">password:</label>
                    <input type="password" class="form-control" id="password" 
                           value="{{$data->password}}" name="password">
                  </div>
                    <div class="mb-3">
                      <label for="LastName">LastName:</label>
                      <input type="text" class="form-control" id="LastName" 
                            value="{{$data->LastName}}" name="LastName">
                  </div>
                    <div class="mb-3">
                      <label for="FirstName">FirstName:</label>
                      <input type="text" class="form-control" id="FirstName" 
                            value="{{$data->FirstName}}" name="FirstName">
                  </div>
                  <div class="mb-3">
                    <label for="phone">Phone Number:</label>
                    <input type="text" class="form-control" id="phone" 
                          value="{{$data->UserPhone}}" name="phone">
                  </div>
                  <div class="mb-3">
                    <label for="Gender">Gender:</label>
                    <input type="text" class="form-control" id="Gender" 
                          value="{{$data->Gender}}" name="Gender">
                  </div>
                  <div> 
                    <label for="Country">Country</label>
                    <select id="Country" name="Country" class="form-control">
                      @foreach ($country as $item)
                        <option value="{{ $item->CounID }}" {{ $user->CounID == $item->CounID ? 'selected' : '' }}>
                          {{ $item->CounName }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                  <div> 
                    <label for="cityName">City</label>
                    <select id="cityName" name="cityName" class="form-control">
                      @foreach ($city as $item)
                        <option value="{{ $item->CityID }}" data-country="{{ $item->CounID }}" {{ $user->CityID == $item->CityID ? 'selected' : '' }}>
                          {{ $item->CityName }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                  <script>
                    document.getElementById('Country').addEventListener('change', function() {
                      var selectedCountryID = this.value;
                      var citySelect = document.getElementById('cityName');
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
                  <div class="mb-3">
                    <label for="Address">Address:</label>
                    <input type="text" class="form-control" id="Address" 
                          value="{{$data->UserAddress}}" name="Address">
                  </div>
                  
                <div>
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{url('admin/customer-list'. $user->email . '/' . $user->password) }}" class="btn btn-primary">Back</a>
                </div>
              </form>
          </div>
      </body>
          <!-- partial -->
        </div>
        <!-- content-wrapper ends -->
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="http://localhost/gcs1007/public/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="http://localhost/gcs1007/public/admin/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="http://localhost/gcs1007/public/admin/assets/js/shared/off-canvas.js"></script>
    <script src="http://localhost/gcs1007/public/admin/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="http://localhost/gcs1007/public/admin/assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="http://localhost/gcs1007/public/admin/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>