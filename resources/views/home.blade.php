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
    </main>

@endsection
    

