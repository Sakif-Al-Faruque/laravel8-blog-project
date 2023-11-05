@extends('editor.layout.main')

@section('editor-main-bar')
    <div class="blog-list">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                <table class="table text-center table-striped">
                    <thead class="thead-deep-green">
                        <tr>
                        <th scope="col">#SL</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><img src="" alt="" height="50px" width="100px"></td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td><a class="btn btn-success" href="{{route('editor.blog.view', ['id' => 1])}}">Preview</a></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><img src="" alt="" height="50px" width="100px"></td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td><a class="btn btn-success" href="{{route('editor.blog.view', ['id' => 1])}}">Preview</a></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><img src="" alt="" height="50px" width="100px"></td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td><a class="btn btn-success" href="{{route('editor.blog.view', ['id' => 1])}}">Preview</a></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><img src="" alt="" height="50px" width="100px"></td>
                            <td><span class="badge badge-success">approved</span></td>
                            <td><a class="btn btn-success" href="{{route('editor.blog.view', ['id' => 1])}}">Preview</a></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><img src="" alt="" height="50px" width="100px"></td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td><a class="btn btn-success" href="{{route('editor.blog.view', ['id' => 1])}}">Preview</a></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><img src="" alt="" height="50px" width="100px"></td>
                            <td><span class="badge badge-danger">rejected</span></td>
                            <td><a class="btn btn-success" href="{{route('editor.blog.view', ['id' => 1])}}">Preview</a></td>
                        </tr>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection