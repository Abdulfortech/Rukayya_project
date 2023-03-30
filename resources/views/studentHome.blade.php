@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.studentSidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">My Projects</p>
        <table class="table">
          <thead>
            <tr>
              <th>S/N</th>
              <th>Title</th>
              <th>Supervisor</th>
              <th>Session</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($projects as $project)
            <tr>
              <td>{{$project->code}}</td>
              <td>{{$project->title}}</td>
              <td>{{$project->name}}</td>
              <td>{{$project->session}}</td>
              <td>
                <a href="/student/project/{{$project->id}}" class="btn btn-primary btn-sm p-1 m-1">View</a>
                <a href="/student/chapter/{{$project->id}}" class="btn btn-primary btn-sm p-1 m-1">Add Chapter</a>
                <a href="/student/lecturer/{{$project->user_id}}" class="btn btn-primary btn-sm p-1 m-1">View Lecturer</a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
    </div>
</div>