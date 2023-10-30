@extends('editor.layout.main')

@section('editor-main-bar')
    <div class="blog-view-container my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <img class="card-img-top" src="{{url('frontend/asset/blog-img/test.jpg')}}" alt="Card image cap" height="400px">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, itaque officiis pariatur, distinctio illum aspernatur labore provident similique nobis soluta doloribus aliquid? Nihil odit animi totam eligendi, quam ad commodi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, sequi! Quibusdam, ab eius expedita sequi soluta distinctio nisi! Dolorem necessitatibus ab vero reprehenderit libero porro, possimus sunt! Rem officia molestiae exercitationem dolorem fuga nisi sint quod? Dolores quae atque itaque nobis, porro sapiente consequatur debitis cum minima quas consequuntur vero officiis at. Libero eius deserunt soluta quaerat quidem nesciunt laudantium!</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>date:</b> 12-10-2023</li>
                            <li class="list-group-item"><b>views:</b> 00 <b>|</b> <b>likes:</b> 00</li>
                            <li class="list-group-item"><b>author:</b> Lorem, ipsum.</li>
                            <li class="list-group-item"><b>status:</b> <span class="badge badge-pill badge-success">approved</span></li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-info mr-3">edit</a>
                            <a href="#" class="btn btn-outline-danger">move to bin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection