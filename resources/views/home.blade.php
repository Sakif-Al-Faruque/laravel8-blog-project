@extends('layout.main')
@push('title')<title>Blog App - Home</title>@endpush
@section('main-section')

    <main>
        <section id="headline" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="headline-container">
                            <div class="headline-item">
                                <img src="{{url('frontend/asset/blog-img/test.jpg')}}" alt="" height="100%" width="100%">
                                <div class="headline-item-details">
                                    <span class="title">Lorem ipsum dolor sit amet.</span>
                                    <span class="category">Lorem, ipsum.</span>
                                    <span class="date">10-01-2023</span>
                                </div>
                            </div>

                            <div class="headline-item">
                                <img src="{{url('frontend/asset/blog-img/test.jpg')}}" alt="" height="100%" width="100%">
                                <div class="headline-item-details">
                                    <span class="title">Lorem ipsum dolor sit amet.</span>
                                    <span class="category">Lorem, ipsum.</span>
                                    <span class="date">10-01-2023</span>
                                </div>
                            </div>

                            <div class="headline-item">
                                <img src="{{url('frontend/asset/blog-img/test.jpg')}}" alt="" height="100%" width="100%">
                                <div class="headline-item-details">
                                    <span class="title">Lorem ipsum dolor sit amet.</span>
                                    <span class="category">Lorem, ipsum.</span>
                                    <span class="date">10-01-2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>



        <section id="top3" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 py-2">
                        <div class="section-title ">
                            <h3>most popular</h3>
                            <img src="{{url('frontend/asset/logo/top-badge.png')}}" alt="" >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-container">
                            <div class="blog-item">
                                <div class="blog-img-holder"><img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%"></div>
                                <div class="blog-text-content">
                                    <div class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                    <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione commodi harum quae soluta nihil velit animi qui odit illo officia.</div>
                                    <a href="#">read more</a>
                                    <div class="blog-meta">
                                        <span class="author">Lorem, ipsum.</span>
                                        <span class="blog-date">20-05-2023</span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="blog-img-holder"><img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%"></div>
                                <div class="blog-text-content">
                                    <div class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                    <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione commodi harum quae soluta nihil velit animi qui odit illo officia.</div>
                                    <a href="#">read more</a>
                                    <div class="blog-meta">
                                        <span class="author">Lorem, ipsum.</span>
                                        <span class="blog-date">20-05-2023</span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="blog-img-holder"><img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%"></div>
                                <div class="blog-text-content">
                                    <div class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                                    <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione commodi harum quae soluta nihil velit animi qui odit illo officia.</div>
                                    <a href="#">read more</a>
                                    <div class="blog-meta">
                                        <span class="author">Lorem, ipsum.</span>
                                        <span class="blog-date">20-05-2023</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            

        </section>






        <section id="latest" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title ">
                            <h3>latest</h3>
                            <img src="{{url('frontend/asset/logo/new.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="latest-blog-container">

                            <div class="latest-blog-item">
                                <div class="latest-blog-img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%">
                                    <div class="latest-blog-img-holder-inner-content">
                                        <p><span><i style="color: #F0FAF7 !important;" class="fa-solid fa-eye"></i></span><span>00</span></p>
                                        <p><span><i style="color: #F0FAF7 !important;" class="fa-solid fa-heart"></i></span><span>00</span></p>
                                    </div>
                                    
                                </div>
                                <a href="#" class="latest-blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                            </div>

                            
                            <div class="latest-blog-item">
                                <div class="latest-blog-img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%">
                                    <div class="latest-blog-img-holder-inner-content">
                                        <p><span><i class="fa-solid fa-eye"></i></span><span>00</span></p>
                                        <p><span><i class="fa-solid fa-heart"></i></span><span>00</span></p>
                                    </div>
                                    
                                </div>
                                <a href="#" class="latest-blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                            </div>


                            <div class="latest-blog-item">
                                <div class="latest-blog-img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%">
                                    <div class="latest-blog-img-holder-inner-content">
                                        <p><span><i class="fa-solid fa-eye"></i></span><span>00</span></p>
                                        <p><span><i class="fa-solid fa-heart"></i></span><span>00</span></p>
                                    </div>
                                    
                                </div>
                                <a href="#" class="latest-blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                            </div>


                            <div class="latest-blog-item">
                                <div class="latest-blog-img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%">
                                    <div class="latest-blog-img-holder-inner-content">
                                        <p><span><i class="fa-solid fa-eye"></i></span><span>00</span></p>
                                        <p><span><i class="fa-solid fa-heart"></i></span><span>00</span></p>
                                    </div>
                                    
                                </div>
                                <a href="#" class="latest-blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                            </div>


                            <div class="latest-blog-item">
                                <div class="latest-blog-img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%">
                                    <div class="latest-blog-img-holder-inner-content">
                                        <p><span><i class="fa-solid fa-eye"></i></span><span>00</span></p>
                                        <p><span><i class="fa-solid fa-heart"></i></span><span>00</span></p>
                                    </div>
                                    
                                </div>
                                <a href="#" class="latest-blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                            </div>


                            <div class="latest-blog-item">
                                <div class="latest-blog-img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="" height="100%" width="100%">
                                    <div class="latest-blog-img-holder-inner-content">
                                        <p><span><i class="fa-solid fa-eye"></i></span><span>00</span></p>
                                        <p><span><i class="fa-solid fa-heart"></i></span><span>00</span></p>
                                    </div>
                                    
                                </div>
                                <a href="#" class="latest-blog-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </section>






        <section id="blog-counter" class="py-5 mb-5">
            <div class="blog-counter-item text-center">
                <h3>authors</h3>
                <img src="{{url('frontend/asset/logo/writer.png')}}" alt="" height="100px" width="100px">
                <h4 class="mt-3" id="num1">60</h4>
            </div>
            <div class="blog-counter-item text-center">
                <h3>blogs</h3>
                <img src="{{url('frontend/asset/logo/blog.png')}}" alt="" height="100px" width="100px">
                <h4 class="mt-3" id="num2">100</h4>
            </div>
            <div class="blog-counter-item text-center">
                <h3>viewers</h3>
                <img src="{{url('frontend/asset/logo/user.png')}}" alt="" height="100px" width="100px">
                <h4 class="mt-3" id="num3">150</h4>
            </div>
        </section>




        <section id="testimonials" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title ">
                            <h3>testimonials</h3>
                            <img src="{{url('frontend/asset/logo/review.png')}}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="testimonial-container">
                            <div class="testimonial-profile">
                                <img src="{{url('frontend/asset/testimonials/t1.jpg')}}" alt="" height="100%" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>
    </main>

@endsection
    

