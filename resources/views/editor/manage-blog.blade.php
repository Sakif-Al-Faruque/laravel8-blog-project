@extends('editor.layout.main')

@section('editor-main-bar')
    <div class="manage-blog-form my-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h2 class="manage-blog-form-title">post the blog</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Title</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter blog title" name="title">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Description</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter blog description" name="description">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Image</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose an image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Category</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <input type="hidden" name="author" value="">
                        </div>
                        <div class="form-row mt-5">
                            <div class="offset-lg-10"></div>
                            <div class="col-lg-2 text-right">
                                <button class="btn btn-primary mr-3" type="reset">Reset</button>
                                <button class="btn btn-success" type="submit">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection