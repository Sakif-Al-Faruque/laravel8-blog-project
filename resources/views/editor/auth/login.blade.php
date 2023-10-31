<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor - Sign In</title>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@100;200;300;400;500;600;800&family=Nunito:wght@200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Oswald:wght@200;300;600;700&family=Raleway:wght@200;400;500;700;800&family=Roboto+Slab:wght@100;300;400;500;600;700;800;900&family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/auth-style.css')}}">

    
</head>
<body>
    

    
    <div class="login-container">
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-content-holder">
                            <div class="login-img-holder">
                                <img src="{{url('frontend/asset/auth/leaf.jpg')}}" alt="" height="100%" width="100%">
                            </div>
                            <div class="login-form-holder">
                                <form action="#">
                                    <h3 class="mb-5">sign in</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" name="email">
                                                <small class="text-danger">Lorem, ipsum.</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Password</label>
                                            <input type="password" class="form-control" id="inputEmail4" placeholder="Enter Your Password" name="password">
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>

                                        

                                        <div class="form-group col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">Remember Me</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <div class="input-group mb-3">
                                                <button type="submit" class="btn btn-outline-success btn-size mt-3">sign in</button>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="input-group mb-3">
                                                <a class="input-group-link" href="#">sign up</a>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <div class="input-group mb-3">
                                                <a class="input-group-link" href="#">forget password</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{url('frontend/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/js/all.min.js')}}"></script>
    <script src="{{url('frontend/js/countMe.min.js')}}"></script>
    <script src="{{url('frontend/js/custom.js')}}"></script>
</body>
</html>