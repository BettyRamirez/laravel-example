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

        //NOTE: Validations are in StoreCourseRequest

        //create and save course example for few data
        // $course = Course::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category
        // ]);

        //create and save course example for many data
        $course = Course::create($request->all());

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

        //Example for validate with Request class
        //other forms of validation are in the request folder
        //and change Request for name of the created request
        //show store method for application example
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.show', $course->id);
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index');
    }
}
