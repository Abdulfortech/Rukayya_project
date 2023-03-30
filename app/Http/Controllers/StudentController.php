<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Project;
use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('studentHome', [
            'projects' => DB::table('projects')
            ->select('projects.*','users.name', 'users.id as user_id') 
            ->where('student_id', auth()->user()->id) 
            ->leftJoin('users', 'projects.lecturer_id', '=', 'users.id')
            ->get()
        ]);
    }

    public function lecturer(User $user)
    {
        return view('studentLecturer', [
            'user' => $user,
        ]);
    }

    public function project(Project $project)
    {
        return view('studentProject', [
            'project' => $project,
            'chapters' => Chapter::where('project_id', $project->id)->get(),
        ]);
    }
    public function addChapter(Project $project)
    {
        return view('studentChapter', [
            'project' => $project
        ]);
    }

    public function storeChapter(Request $request)
    {
        $data = $request->validate([
            'student_id' => ['required'],
            'project_id' => ['required'],
            'category' => ['required', 'min:3'],
            'name' => ['required', 'min:3'],
            'file' => ['required'],
        ]);
        $data['score'] = 0;
        $data['file'] = $request->file('file')->store('chapters', 'public');
        // dd($data);

        Chapter::create($data);
        return redirect('/student/home')->with('message','Chapter has been added');
    } 
}
