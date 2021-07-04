<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function schedule()
    {
        switch (Auth::user()->paket) {
            case 'Platinum':
                $count = 6;
                break;
            case 'Gold':
                $count = 4;
                break;
            case 'Silver':
                $count = 2;
                break;
            default:
                $count = 0;
        }
        $schedules = Schedule::where('user_id', Auth::id())->get();
        $hak = $count;
        $count = $count - count($schedules);
        return view('user.schedule', compact('count', 'schedules', 'hak'));
    }

    public function tutor()
    {
        $schedules = Schedule::where('user_id', Auth::id())->get();
        return view('user.tutor', compact('schedules'));
    }

    public function selectCourse()
    {
        $courses = Course::get();
        return view('user.course', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'Course' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        $jadwal = new Schedule();
        $jadwal->course_id = $request->Course;
        $jadwal->user_id = Auth::id();
        $jadwal->hari = $request->day;
        $jadwal->jam = $request->time;
        $jadwal->meetingid = rand(100000000, 999999999);
        $jadwal->meetingpass = Str::random(2) . rand(100, 999);
        $save = $jadwal->save();


        if ($save) {
            Session::flash('success', 'Sukses menambah course');
            return redirect()->route('user.schedule');
        } else {
            Session::flash('errors', ['' => 'Gagal menambah course!']);
            return redirect()->route('user.schedule');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
