<?php

use Illuminate\Support\Facades\Route;

use App\Models\Blog;
use App\Models\Editor;
use App\Models\Category;
use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//viewer
Route::get('/', function () {
    return view('home');
})->name('root');

Route::get('/about', function(){
    return view('about');
})->name('blog.about');

Route::get('/collection', [BlogController::class, 'getBlogs'])->name('blog.collection');











/* editor */
Route::get('/editor/dashboard', function(){
    return view('editor.editor');
})->name('editor.dashboard');

Route::get('/editor/blog/add', function(){
    return view('editor.manage-blog');
})->name('editor.blog.add');


Route::get('/editor/blog/all', function(){
    return view('editor.all-blog');
})->name('editor.blog.all');

Route::get('/editor/blog/view/{id}', function($id){
    return view('editor.blog-view');
})->name('editor.blog.view');

Route::get('/editor/blog/trash', function(){
    return view('editor.trash-blog');
})->name('editor.blog.trash');



/* editor */
Route::get('/admin/dashboard', function(){
    return view('admin.admin');
})->name('admin.dashboard');

Route::get('/admin/blog/add', function(){
    return view('admin.manage-blog');
})->name('admin.blog.add');


Route::get('/admin/blog/all', function(){
    return view('admin.all-blog');
})->name('admin.blog.all');

Route::get('/admin/blog/view/{id}', function($id){
    return view('admin.blog-view');
})->name('admin.blog.view');

Route::get('/admin/blog/trash', function(){
    return view('admin.trash-blog');
})->name('admin.blog.trash');







//auth
Route::get('/editor/auth/signup', function(){
    return view('editor.auth.registration');
})->name('editor.auth.reg');

Route::get('/editor/auth/signin', function(){
    return view('editor.auth.login');
})->name('editor.auth.log');




























//CRUD Test

//Blog -
Route::get('/add-blog', function(){
    $blog = new Blog;
    $blog->title = "sky is orange";
    $blog->description = "Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."; //charter under 245 is allowing
    $blog->image = "my-img.jpg";
    $blog->date = "2023-10-20 01:31:45";
    $blog->author = 1;
    $blog->category = 1;

    $blog->save();
    return "blog is added";
});



//Editor -
Route::get('/add-editor', function(){
    $editor = new Editor;
    $editor->editor_name = "john";
    $editor->email = "john@g.c";
    $editor->password = "mypass";
    $editor->gender = "M";
    $editor->save();

    return "editor is added";
});


//Category -
Route::get('/add-category', function(){
    $category = new Category;
    $category->cat_name = "international";
    $category->save();

    return "category is added";
});

