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
    <title>Register</title>
</head>
<body>
    <!-- Container Start -->
    <div class="container" id="screen">
        <div class="row">   <!--row Start-->
            <div class="col-lg-6 my-auto">  <!--col-lg-6 Start-->
                <div id="register">
                    <form action="{{ route('signUp.store') }}" method="POST">   <!-- Form Start -->
                        @csrf  <!-- Add this to include a CSRF token -->
                        <h4>
                            Create an Account
                        </h4>
                        <p class="text-muted">
                            Please fill in the form to create an account
                        </p>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" name="name" placeholder="Enter Name" required>
                            <label for="floatingName">
                                Enter Name
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Enter Email" required>
                            <label for="floatingInput">
                                Enter Email
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Enter Password" required>
                            <label for="floatingPassword">
                                Enter Password
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPasswordConfirm" name="password_confirmation" placeholder="Confirm Password" required>
                            <label for="floatingPasswordConfirm">
                                Confirm Password
                            </label>
                        </div>
                        <button type="submit" class="btn btn-login">
                            SIGN UP
                        </button>
                    </form>  <!-- Form End -->

                    <!--Sign In-->
                    <div class="text-center text-muted mt-2 mb-0" style="font-size:14px;"> 
                        Already have an account? 
                        <a href="{{ route('signIn') }}" class="text-primary text-decoration-none">
                            Sign In
                        </a>
                    </div>  
                    <!--Sign In End-->
                </div>
            </div>  <!--col-lg-6 End-->
            <div class="col-lg-6 login-image d-none d-lg-block my-auto">
                <img src="{{ asset('Assets/Img/register-image.png') }}" class="w-100" alt="Register Image">
            </div>
        </div>  <!--row End-->
    </div> <!-- Container End-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
