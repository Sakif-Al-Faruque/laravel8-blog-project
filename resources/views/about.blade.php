@extends('layout.main')
@push('title')<title>Blog - About Us</title>@endpush
@section('main-section')
    <main>
        <section id="founder" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="founder-container">
                            <div class="founder-content">
                                <h1>message </h1>
                                <h3>from founder - </h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi animi nobis, dolore repellat nemo quaerat eos cum cumque consequuntur sunt esse in, assumenda ipsum facere molestiae ullam ut, ad adipisci itaque. Nam beatae ipsum excepturi, illum eaque iste molestiae rerum. A, sunt aliquam fugiat nihil soluta atque, non minus quod cumque ea ut consequuntur labore mollitia! Saepe, soluta ea cupiditate quia iste beatae dicta placeat asperiores, quasi necessitatibus quas obcaecati.</p>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi animi nobis, dolore repellat nemo quaerat eos cum cumque consequuntur sunt esse in, assumenda ipsum facere molestiae ullam ut, ad adipisci itaque. Nam beatae ipsum excepturi, illum eaque iste molestiae rerum. A, sunt aliquam fugiat nihil soluta atque, non minus quod cumque ea ut consequuntur labore mollitia! Saepe, soluta ea cupiditate quia iste beatae dicta placeat asperiores, quasi necessitatibus quas obcaecati.</p>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi animi nobis, dolore repellat nemo quaerat eos cum cumque consequuntur sunt esse in, assumenda ipsum facere molestiae ullam ut, ad adipisci itaque. Nam beatae ipsum excepturi, illum eaque iste molestiae rerum. A, sunt aliquam fugiat nihil soluta atque, non minus quod cumque ea ut consequuntur labore mollitia! Saepe, soluta ea cupiditate quia iste beatae dicta placeat asperiores, quasi necessitatibus quas obcaecati.</p>
                            </div>
                            <div class="founder-photo-holder">
                                <img src="{{url('frontend/asset/about/founder.jpg')}}" alt="founder photo" height="100%" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="authors" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 py-3">
                        <div class="section-title">
                            <h3>our authors</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="author-card">
                            <div class="author-img-holder">
                                <img src="{{url('frontend/asset/about/author.jpg')}}" alt="author" height="100%" width="100%">
                            </div>
                            <div class="author-details">
                                <h3>Lorem, ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio architecto veniam praesentium eius culpa est laudantium voluptatum esse tenetur ipsam id quibusdam at unde iure, voluptatem sit porro alias! Doloremque, magni debitis facilis quod veritatis vitae, quo mollitia ea rem voluptates illo ut hic inventore blanditiis, nam doloribus. Excepturi, aperiam?</p>
                            </div>
                        </div>

                        <div class="author-card">
                            <div class="author-img-holder">
                                <img src="{{url('frontend/asset/about/author.jpg')}}" alt="author" height="100%" width="100%">
                            </div>
                            <div class="author-details">
                                <h3>Lorem, ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio architecto veniam praesentium eius culpa est laudantium voluptatum esse tenetur ipsam id quibusdam at unde iure, voluptatem sit porro alias! Doloremque, magni debitis facilis quod veritatis vitae, quo mollitia ea rem voluptates illo ut hic inventore blanditiis, nam doloribus. Excepturi, aperiam?</p>
                            </div>
                        </div>

                        <div class="author-card">
                            <div class="author-img-holder">
                                <img src="{{url('frontend/asset/about/author.jpg')}}" alt="author" height="100%" width="100%">
                            </div>
                            <div class="author-details">
                                <h3>Lorem, ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio architecto veniam praesentium eius culpa est laudantium voluptatum esse tenetur ipsam id quibusdam at unde iure, voluptatem sit porro alias! Doloremque, magni debitis facilis quod veritatis vitae, quo mollitia ea rem voluptates illo ut hic inventore blanditiis, nam doloribus. Excepturi, aperiam?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>
@endsection()