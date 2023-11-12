@extends('layout.main')
@push('title')<title>Blog - Collections</title>@endpush
@section('main-section')




<!-- @php 
print_r($blogs);

@endphp -->
    <section id="collection">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 py-5 my-5"></div>
                <div class="col-lg-8 py-5">
                    <form action="" class="blog_search_form">
                        <input type="text" class="blog_search_field" name="blog_title" placeholder="enter title to search">
                        <input type="submit" class="blog_search_button" value="search">
                    </form>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="cat-container py-3">
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                        <span><a href="#">national</a></span>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12 py-2">
                    <div class="collection-content py-5">

                        <div class="collection-container">
                            
                            @foreach($blogs as $blog)
                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">{{$blog->title}}<a href="#">Read More</a></p>
                            </div>
                            @endforeach

                            <!-- <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>

                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>


                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>

                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>

                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>


                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>


                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>


                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>


                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div>


                            <div class="collection-item">
                                <div class="img-holder">
                                    <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog image" height="100%" width="100%">
                                </div>
                                <p class="title">Lorem ipsum dolor sit amet Lorem, ipsum ipsum ipsum ipsum.... <a href="#">Read More</a></p>
                            </div> -->

                            {{$blogs->links()}}
                        </div>


                    </div>
                    
                </div>
            </div>



        </div>        
    </section>
@endsection