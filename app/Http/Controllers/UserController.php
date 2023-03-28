<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    // homepage
    public function index()
    {
        return view('home', [
            'projects' => DB::table('projects')->leftJoin('users', 'projects.student_id', '=', 'users.id')
            ->get()
        ]);
    }

    public function students()
    {
        return view('students', [
            'students' => DB::table('users')->where('role', 'Student')
            ->get()
        ]);
    }

    // add project
    public function projectAdd()
    {
        return view('projectAdd', [
            'students' => User::where('role', 'Student')->get(),
        ]);
    }

    public function projectShow(Request $request)
    {
        return view('project', [
            'files' => DB::table('ch_messages')->where('from_id', $request->id)
            ->get()
        ]);
        // dd($request->id);
    }

    //creating project
    public function storeProject(Request $request) {
        // dd($request);
        $data = $request->validate([
            'lecturer_id' => ['required'],
            'student_id' => ['required'],
            'title' => ['required', 'min:3'],
            'code' => ['required'],
            'faculty' => ['required', 'min:3'],
            'department' => ['required', 'min:3'],
            'session' => ['required'],
            'status' => ['required', 'min:3']
        ]);

        // dd($data);
        $project = Project::create($data);

        return redirect('/home')->with('message', 'Project created successfully');
    }


    // student homepage
    public function studentAdd()
    {
        return view('studentAdd');
    }

    //creating student
    public function storeStudent(Request $request) {
        // dd($request->all());
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'role' => ['required'],
            'password' => 'required|confirmed|min:4'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        // dd($formFields);
        $user = User::create($formFields);

        return redirect('/home')->with('message', 'student has been added successfully');
    }
}
