<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;

class BasicController extends Controller
{

    public function index()
    {
        return view('general.index');
    }

    public function faq()
    {
        return view('general.faq');
    }

    public function about()
    {
        return view('general.about');
    }

    public function pricing()
    {
        return view('general.pricing');
    }

    public function contact()
    {
        return view('general.contact');
    }

    public function show(string $slug, Course $course)
    {
        if ($slug !== $course->getSlug()) {
            return redirect()->route('general.course.show', ['slug' => $course->getSlug(), 'course' => $course->id]);
        }

        return view('general.show', [
            'course' => $course
        ]);
    }

    public function courses()
    {
        return view('general.courses', [
            'courses' => Course::select(['id', 'title'])->paginate(15)
        ]);
    }
}
