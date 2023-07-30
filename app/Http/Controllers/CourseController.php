<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        //Example with all no work with pagination   {{ $courses->links() }}
        //$courses = Course::all();

        //$courses = Course::paginate(25);
        // $courses = Course::latest()->paginate(25);
        $courses = Course::orderBy('id', 'Desc')->paginate(25);
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(StoreCourseRequest $request)
    {

        //added in storeCourseRequest in request file
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required|max:255',
        //     'category' => 'required',
        // ]);

        $course = new Course();

        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();

        return redirect()->route('courses.show', $course->id);
    }

    public function show($id)
    {
        //compact('course') = ['course' => $course]
        //whit show(Course $course) === $course-> (and next line is unnecessary)
        //example is used for update method in this page
        $course = Course::find($id);

        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);


        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();

        return redirect()->route('courses.show', $course->id);
    }
}
