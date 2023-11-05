@include('editor.auth.header')
    

    
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
                                                <a class="input-group-link" href="{{route('editor.auth.reg')}}">sign up</a>
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
@include('editor.auth.footer')