<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CourseFormRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseController
{
    /**
     * Display a listing of courses.
     */
    public function index()
    {
        return view('admin.courses.index', [
            'courses' => Course::orderBy('created_at', 'desc')->paginate(25),
            'course' => new Course()
        ]);
    }

    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        $course = new Course();

        return view('admin.courses.form', [
            'course' => $course
        ]);
    }

    /**
     * Store a newly created course in storage.
     */
    public function store(CourseFormRequest $request)
    {
        Course::create($this->handlePostVideoAndGetData(new Course(), $request));
        return to_route('admin.course.index')->with('success', 'le cours a bien été créé');
    }

    /**
     * Display the specified course.
     */
    public function show(Course $course)
    {
        return view('admin.courses.show', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit(Course $course)
    {
        return view('admin.courses.form', [
            'course' => $course
        ]);
    }

    /**
     * Update the specified course in storage.
     */
    public function update(CourseFormRequest $request, Course $course)
    {
        $course->update($this->handlePostVideoAndGetData($course, $request));
        return to_route('admin.course.index')->with('success', 'le cours a bien été modifié');
    }

    /**
     * Remove the specified course from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return to_route('admin.course.index')->with('success', 'le cours a bien été supprimé');
    }

    private function handlePostVideoAndGetData(Course $course, CourseFormRequest $request): array
    {
        $data = $request->validated();
        $video = array_key_exists('video', $data) ? $data['video'] : null;

        if($video == null || $video->getError()) {
            return $data;            
        }

        //TODO: delete old video if exists
        if($course->video) {
            Storage::disk('public')->delete($course->video);
        }

        //TODO: store the video
        //$videoPath = $request->file('image')->storePublicly('blog', 'public'); other alternative
        $videoPath = $request->file('video')->store('course', 'public');
        $data['video'] = $videoPath;
        return $data;
    }
}
