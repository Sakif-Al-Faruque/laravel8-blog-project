@include('editor.auth.header')
    

    
    <div class="reg-container">
        <div class="reg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="reg-content-holder">
                            <div class="reg-img-holder">
                                <div class="reg-img-box">
                                    <img src="{{url('frontend/asset/auth/registration.jpg')}}" alt="" height="100%" width="100%">
                                </div>
                                
                            </div>
                            <div class="reg-form-holder">
                                <form>
                                    <h3 class="mb-5">sign up, here!</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Editor Name</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your name">
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4">E-mail</label>
                                            <input type="email" class="form-control" id="inputPassword4" placeholder="Enter your e-mail">
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Phone</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Enter your phone number">
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Gerder</label>
                                            <div class="form-control">
                                                <input class="ml-2" type="radio" name="gridRadios" id="gridRadios1" value="m" checked> Male
                                                <input class="ml-2" type="radio" name="gridRadios" id="gridRadios1" value="f" checked> Female
                                                <input class="ml-2" type="radio" name="gridRadios" id="gridRadios1" value="o" checked> Others
                                            </div>
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>



                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Date of Birth</label>
                                            <input type="date" class="form-control" id="inputPassword4">
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Put your photo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose</label>
                                                </div>
                                            </div>
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>
                                        

                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your password">
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4">Confirm Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Re-enter your password">
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="inputPassword4">Address</label>
                                            <textarea name="address" id="" rows="5" class="form-control"></textarea>
                                            <small class="text-danger">Lorem, ipsum.</small>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="offset-md-8"></div>
                                        <div class="form-group col-md-4">
                                            <button class="ml-2 btn btn-outline-info">Reset</button>
                                            <button class="ml-2 btn btn-outline-success">Register</button>
                                        </div>
                                    </div>
                                    <p class="text-center mt-5">Already have an account? <a href="{{route('editor.auth.log')}}" class="ml-2 btn btn-outline-primary">Sign In</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('editor.auth.footer')