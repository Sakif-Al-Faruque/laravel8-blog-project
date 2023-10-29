@extends('editor.layout.main')

@section('editor-main-bar')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-3">
                <h1 class="dashboard-headline">editor dashboard</h1>
            </div>
        </div>
    </div>

    <div class="stats my-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="stat-container">
                        <div class="stat-item">
                            <div class="stat-title">posted blog - 0000</div>
                            <div class="stat-img-holder">
                                <img src="{{url('frontend/asset/stats/check.png')}}" alt="check icon" height="100%" width="100%">
                            </div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="stat-title">submitted blog - 0000</div>
                            <div class="stat-img-holder">
                                <img src="{{url('frontend/asset/stats/wall-clock.png')}}" alt="check icon" height="100%" width="100%">
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-title">rejected blog - 0000</div>
                            <div class="stat-img-holder">
                                <img src="{{url('frontend/asset/stats/bin.png')}}" alt="bin icon" height="100%" width="100%">
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-title">total views - 0000</div>
                            <div class="stat-img-holder">
                                <img src="{{url('frontend/asset/stats/view.png')}}" alt="view icon" height="100%" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="recent-blogs mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">recently posted blogs</div>
                </div>
                <div class="col-lg-12">
                    <div class="recent-blog-container">
                        <div class="recent-blog-item">
                            <div class="blog-item-pic">
                                <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog pic" height="100%" width="100%">
                            </div>
                            <div class="blog-item-text-content">
                                <div class="blog-item-title">Lorem ipsum dolor sit, amet consectetur</div>
                                <div class="blog-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam fugiat omnis sed quibusdam id dignissimos unde iure nisi rem.</div>
                            </div>
                        </div>
                        
                        <div class="recent-blog-item">
                            <div class="blog-item-pic">
                                <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog pic" height="100%" width="100%">
                            </div>
                            <div class="blog-item-text-content">
                                <div class="blog-item-title">Lorem ipsum dolor sit, amet consectetur</div>
                                <div class="blog-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam fugiat omnis sed quibusdam id dignissimos unde iure nisi rem.</div>
                            </div>
                        </div>

                        <div class="recent-blog-item">
                            <div class="blog-item-pic">
                                <img src="{{url('frontend/asset/blog-img/b-1.jpg')}}" alt="blog pic" height="100%" width="100%">
                            </div>
                            <div class="blog-item-text-content">
                                <div class="blog-item-title">Lorem ipsum dolor sit, amet consectetur</div>
                                <div class="blog-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt laboriosam fugiat omnis sed quibusdam id dignissimos unde iure nisi rem.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection