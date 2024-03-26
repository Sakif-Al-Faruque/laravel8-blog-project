@include('layout.header')
    <div class="nav-bar-container py-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand nav-icon-color" href="{{route('root')}}">Blog.</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars navbar-toggler-icon"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog.about')}}">about us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">authors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog.collection')}}">collections</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('editor.auth.log')}}">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @yield('main-section')


    <footer class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><p class="text-center">&copy; Copyright - {{date("Y")}}</p></div>
            </div>
        </div>
    </footer>
@include('layout.footer')
