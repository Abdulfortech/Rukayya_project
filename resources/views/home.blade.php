@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.sidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Projects</p>
        <table class="table">
          <thead>
            <tr>
              <th>S/N</th>
              <th>Title</th>
              <th>Student</th>
              <th>Session</th>
              <th>Faculty</th>
              <th>Department</th>
              <th>Status</th>
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
              <td>{{$project->faculty}}</td>
              <td>{{$project->department}}</td>
              <td>{{$project->status}}</td>
              <td><a href="/project/{{$project->id}}"><i class="fa fa-eye"></i></a></td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
    </div>
</div>