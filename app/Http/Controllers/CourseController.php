<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isEmpty;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search != null){
            // dd($request->search);
            $courses = Course::where('title', 'LIKE', '%'.$request->search.'%')->get();
            // dd($courses);
        }
        else{
            $courses = Course::all();
        }
        $categories = Category::all();

        return view('courses', ['courses' => $courses, 'categories' => $categories]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Lecturer.add_course', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
        $data = [
            'title' => $request['title'],
            'category' => $request['category'],
            'description' => $request['desc'],
            'lecturer_id' => session('user')->id,
            'category_id' => $request['category'],
            'created_at' =>  Date::now(),
            'updated_at' => Date::now(),
            ];

        if(Course::where('title', $data['title'])->count() < 1){
            $image_path = $request->file('cover')->store('image', 'public');
            $data['image'] = $image_path;
            Course::create($data);
            return redirect()->route('lecturer.dashboard');
        }

        Alert::error('title', 'This title has been taken');

        return back()->withErrors(['title' => 'This title has been taken']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request ,Course $course)
    {
        if($request->user()->cannot('view', $course)){
            Alert::error('Error', 'You cannot view this course');
            return back();
        }
        return view('Lecturer.course', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('Lecturer.update_course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        if($request->user()->cannot('update', $course)){
            Alert::error('Error', 'You cannot update this post');
            return redirect()->route('lecturer.dashboard');
        }
        $course->update($request->all());
        return redirect()->route('lecturer.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Course $course)
    {
        if($request->user()->cannot('delete', $course)){
            Alert::error('Error', 'You cannot delete this post');
            return redirect()->route('lecturer.dashboard');
        }
        unlink('storage/'.$course->image);
        $course->delete();
        return redirect()->route('lecturer.dashboard');
    }
}
