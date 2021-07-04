<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Tutor;
use App\Models\Course;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function userList()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.userList', compact('users'));
    }
}
