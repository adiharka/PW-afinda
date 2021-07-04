<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Tutor;
use App\Models\Course;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = Tutor::get();
        return view('admin.tutor.index', compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tutor.create');
    }

    public function createCourse($id)
    {
        return view('admin.tutor.course', compact('id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:tutors',
        ]);

        $tutor = new Tutor();
        $tutor->name = $request->name;
        $tutor->email = $request->email;
        $tutor->phone = $request->phone;
        $tutor->address = $request->address;
        $save = $tutor->save();


        if ($save) {
            Session::flash('success', 'Sukses menambah tutor');
            return redirect()->route('admin.tutor.index');
        } else {
            Session::flash('errors', ['' => 'Gagal menambah tutor!']);
            return redirect()->route('admin.tutor.create');
        }
    }

    public function storeCourse(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $course = new Course();
        $course->tutor_id = $id;
        $course->course = $request->name;
        $course->detail = $request->detail;
        $save = $course->save();


        if ($save) {
            Session::flash('success', 'Sukses menambah course');
            return redirect()->route('admin.tutor.show', $id);
        } else {
            Session::flash('errors', ['' => 'Gagal menambah course!']);
            return redirect()->route('admin.tutor.createCourse', $id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutor = Tutor::find($id);
        $courses = Course::where('tutor_id', $id)->get();
        return view('admin.tutor.show', compact('tutor', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = Tutor::find($id);
        $courses = Course::where('tutor_id', $id)->get();
        return view('admin.tutor.edit', compact('tutor', 'courses', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $tutor = Tutor::find($id);
        $tutor->name = $request->name;
        $tutor->email = $request->email;
        $tutor->phone = $request->phone;
        $tutor->address = $request->address;
        $save = $tutor->save();


        if ($save) {
            Session::flash('success', 'Sukses mengedit tutor');
            return redirect()->route('admin.tutor.index');
        } else {
            Session::flash('errors', ['' => 'Gagal mengedit tutor!']);
            return redirect()->route('admin.tutor.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::where('tutor_id', $id)->delete();
        Tutor::destroy($id);

        return redirect()->route('admin.tutor.index')
            ->with('success', 'Sukses menghapus Tutor');
    }

    public function destroyCourse($id)
    {
        $tutor_id = Course::find($id)->tutor->id;
        Course::destroy($id);

        return redirect()->route('admin.tutor.show', $tutor_id)
            ->with('success', 'Sukses menghapus Course');
    }
}
