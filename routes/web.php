<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



Route::get('/posts', [BasicController::class, 'index'])->name('posts');
Route::get('/posts/{slug}-{post}', [BasicController::class, 'show'])
->where([
    'slug' => '[a-z0-9\-]+',
    'post' => '[0-9]+'
])->name('blog.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/')->name('general.')->controller(BasicController::class)->group(function() {

    Route::get('', 'index')->name('home');
    Route::get('faq', 'faq')->name('faq');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('courses', 'courses')->name('courses');
    Route::get('courses/{slug}-{course}', 'show')->name('course.show')->where([
        'course' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ]);
});

Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('course', CourseController::class);
    Route::resource('category', CategoryController::class)->except(['show']);
});

Route::post('/comment', [CommentController::class, 'store'])->name('comment');

require __DIR__.'/auth.php';
