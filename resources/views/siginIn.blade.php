<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('Assets/Css/auth.css') }}">
    <title>Login</title>
</head>
<body>
    <!-- Container Start -->
    <div class="container" id="screen">
        <div class="row">   <!--row Start-->
            <div class="col-lg-6 my-auto">  <!--col-lg-6 Start-->
                <div id="login">
                    <form action="{{ route('signin.auth') }}" method="POST">   <!-- Form Start -->
                        @csrf  <!-- Add this to include a CSRF token -->
                        <h4>
                            Welcome to Our Application
                        </h4>
                        <p class="text-muted">
                            Please login to use the platform
                        </p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Enter Email" required>
                            <label for="floatingInput">
                                Enter Email
                            </label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Enter Password" required>
                            <label for="floatingPassword">
                                Enter Password
                            </label>
                        </div>
                        <div class="n-psw text-end">
                            <a href="{{ route('password.request') }}" class="text-primary">
                                <span style="font-size:14px;">
                                    Forget Password?
                                </span>
                            </a>
                        </div>
                        <button type="submit" class="btn btn-login">
                            SIGN IN
                        </button>
                    </form>  <!-- Form End -->
                    
                    <!--Sign Up-->
                    <div class="text-center text-muted mt-2 mb-0" style="font-size:14px;"> 
                        Don't have an account? 
                        <a href="{{ route('signUp') }}" class="text-primary text-decoration-none">
                            Sign up
                        </a>
                    </div>  
                    <!--Sign Up End-->

                    <div class="other-login">   <!-- Other-Login Start -->
                        <a href="{{ route('google.login') }}" class="btn btn-other-login">
                            <img src="{{ asset('Assets/Img/google-icon.png') }}" alt="Google-icon">
                            Login with Google
                        </a>
                        <a href="{{ route('facebook.login') }}" class="btn btn-other-login">
                            <img src="{{ asset('Assets/Img/facebook-icon.png') }}" alt="Facebook-icon">
                            Login with Facebook
                        </a>
                    </div>    <!-- Other-Login End -->
                </div>
            </div>  <!--col-lg-6 End-->
            <div class="col-lg-6 login-image d-none d-lg-block my-auto">
                <img src="{{ asset('Assets/Img/login-image.png') }}" class="w-100" alt="Login Image">
            </div>
        </div>  <!--row End-->
    </div> <!-- Container End-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
