<?php

use Illuminate\Support\Facades\Route;

use App\Models\Blog;
use App\Models\Editor;
use App\Models\Category;

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

Route::get('/', function () {
    return view('home');
})->name('root');

Route::get('/about', function(){
    return view('about');
})->name('blog.about');

Route::get('/collection', function(){
    return view('collection');
})->name('blog.collection');


Route::get('/editor/dashboard', function(){
    return view('editor.editor');
});

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

