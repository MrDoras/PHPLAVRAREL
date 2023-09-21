<!DOCTYPE html>
<html lang="en">
 <head>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="styles.scss">
    <script src="https://use.fontawesome.com/4ecc3dbb0b.js"></script>

    <link rel="stylesheet" type="text/css" href="http://localhost/gcs1007/public/default/assets/css/font-awesome.css">

    <link rel="stylesheet" href="http://localhost/gcs1007/public/default/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="http://localhost/gcs1007/public/default/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="http://localhost/gcs1007/public/default/assets/css/lightbox.css">
    
</head>
<body>
    <div class="form_wrapper">
        <div class="form_container">
        <div class="title_container">
            <h2>Responsive Registration Form</h2>
        </div>
        <div class="row clearfix">
            <div class="">
                <head>
                  @if (Session::has('error'))
                        <script>
                            alert("{{ Session::get('error') }}");
                        </script>
                    @endif

                    @if (Session::has('success'))
                    <script>
                        var successMessage = "{{ Session::get('success') }}";
                        alert(successMessage);
                        window.location.href = "{{ url('log') }}";
                    </script>
                @endif
                @if (Session::has('Fail'))
                <script>
                  alert("{{ Session::get('Fail') }}");
              </script>
        @endif
            <form action="{{url('account-save')}}" method="POSt">
                @csrf
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                <input type="email" name="email" placeholder="email" id="email" required />
                </div>
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <input type="password" name="password" placeholder="password" id="password"required />
                </div>
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                <input type="password" name="passwordRegis2" id="passwordRegis2" placeholder="Re-type Password" required />
                </div>
                <div class="row clearfix">
                    <div class="col_half">
                        <div class="input_field">
                          <span><i aria-hidden="true" class="fa fa-user"></i></span>
                          <input type="text" name="FirstName" placeholder="First Name" id="FName" required oninput="checkInput(this)" />
                        </div>
                      </div>
                      <div class="col_half">
                        <div class="input_field">
                          <span><i aria-hidden="true" class="fa fa-user"></i></span>
                          <input type="text" name="LastName" placeholder="Last Name" id="LName" required oninput="checkInput(this)" />
                        </div>
                      </div>

                      
                      <div id="error" class="error-message">Please do not input special characters</div>
                      
                      <style>
                        .error-message {
                          display: none;
                        }
                        
                        .error-message.show {
                          display: block;
                          color: red;
                        }
                      </style>
                      <script>
                        var errorDisplayed = false;
                        
                        function checkInput(input) {
                          var regex = /^[a-zA-Z\sÀÁÂÃẠẢẤẦẨẪẬẮẰẲẴẶÈÉÊẾỀỂỄỆÌÍÒÓÔÕỌỎỐỒỔỖỘỚỜỞỠỢÙÚỦŨỤỰỨỪỬỮỲÝĐàáâãạảấầẩẫậắằẳẵặèéêếềểễệìíòóôõọỏốồổỗộớờởỡợùúủũụựứừửữỳýđ\s]+$/u;                        if (!regex.test(input.value)) {
                            errorDisplayed = true;
                            document.getElementById("error").classList.add("show");
                            input.classList.add("error");
                            input.setCustomValidity("Invalid");
                          } else {
                            input.setCustomValidity("");
                            if (!document.getElementById("FName").value && !document.getElementById("LName").value) {
                              errorDisplayed = false;
                              document.getElementById("error").classList.remove("show");
                            }
                          }
                        
                          if (errorDisplayed) {
                            var firstName = document.getElementById("FName").value;
                            var lastName = document.getElementById("LName").value;
                            if (firstName && lastName && regex.test(firstName) && regex.test(lastName)) {
                              errorDisplayed = false;
                              document.getElementById("error").classList.remove("show");
                            }
                          }
                        }
                        
                        document.getElementById("FName").addEventListener("click", function() {
                          if (errorDisplayed) {
                            errorDisplayed = false;
                            document.getElementById("error").classList.remove("show");
                            this.classList.remove("error");
                          }
                        });
                        
                        document.getElementById("LName").addEventListener("click", function() {
                          if (errorDisplayed) {
                            errorDisplayed = false;
                            document.getElementById("error").classList.remove("show");
                            this.classList.remove("error");
                          }
                        });
                      </script>
                </div>
                <div class="input_field">
                  <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                  <input type="text" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number" pattern="[0-9]+" required />
                </div>
                    <div class="input_field radio_option">
                      <input type="radio" name="gender" id="Male" value="Male">
                      <label for="Male">Male</label>
                      <input type="radio" name="gender" id="Female" value="Female">
                      <label for="Female">Female</label>
                    </div>


                    
                    
                    <div class="input_field select_option">
                      <select id="country" name="country" class="form-control">
                        <option value="" disabled selected >Select a country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->CounID }}">{{ $country->CounName }}</option>
                        @endforeach
                    </select>
                      <div class="select_arrow"></div>
                    </div>
                    
                    <div class="input_field select_option" id="cityField" style="display: none;">
                      <select id="city" name="city" class="form-control">
                        @foreach ($cities as $city)
                          <option value="{{ $city->CityID }}" data-country="{{ $city->CounID }}">{{ $city->CityName }}</option>
                        @endforeach
                      </select>
                      <div class="select_arrow"></div>
                    </div>
                    
                    <script>
                         document.getElementById('country').addEventListener('change', function() {
                          var selectedCountryID = this.value;
                          var cityField = document.getElementById('cityField');
                          var citySelect = document.getElementById('city');
                          var cityOptions = citySelect.options;

                          for (var i = 0; i < cityOptions.length; i++) {
                            var option = cityOptions[i];
                            if (option.getAttribute('data-country') === selectedCountryID) {
                              option.style.display = 'block';
                              option.disabled = false; // Bỏ chế độ không hoạt động
                            } else {
                              option.style.display = 'none';
                              option.disabled = true; // Chế độ không hoạt động
                            }
                          }

                          cityField.style.display = selectedCountryID !== '' ? 'block' : 'none';
                        });

                    </script>


                <div class="input_field" id="addressField" style="display: none;">
                  <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                  <input type="text" name="address" id="address" placeholder="address" required />
                </div>

                <script>
                  document.getElementById('country').addEventListener('change', function() {
                    var selectedCountryID = this.value;
                    var cityField = document.getElementById('cityField');
                    var addressField = document.getElementById('addressField');

                    if (selectedCountryID !== '') {
                      addressField.style.display = 'block';
                    } else {
                      addressField.style.display = 'none';
                    }
                  });
                </script>
                    
                <div class="input_field checkbox_option">
                    <input type="checkbox" id="cb1" name="cb1" required>
                    <label for="cb1">I agree with terms and conditions</label>
                </div>
                <div class="input_field checkbox_option">
                    <input type="checkbox" id="cb2"name="cb1" required>
                    <label for="cb2">I want to receive the newsletter</label>
                </div>
                <input class="button" type="submit" value="Register" />
                <div class="total">
                  <a href="{{url('log')}}" type="submit"class="button"><h4>Back To Login</h4></a>
                </div>
              
            </form>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p>
</body>
</html>