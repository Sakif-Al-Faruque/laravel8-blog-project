@extends('layout.main')
@push('title')<title>Blog - Collections</title>@endpush
@section('main-section')
    <section id="collection">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 py-5"></div>
                <div class="col-lg-8 py-5">
                    <form action="" class="blog_search_form">
                        <input type="text" class="blog_search_field" name="blog_title" placeholder="">
                        <input type="submit" class="blog_search_button" value="search">
                    </form>
                </div>
            </div>
        </div>        
    </section>
@endsection