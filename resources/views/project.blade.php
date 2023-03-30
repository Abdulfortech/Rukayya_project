@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.sidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Project</p>
        <div class="container">
        @foreach($project as $project)
          <p> Student : {{$project->userName}} </p>
          <p> Student Registration No. : {{$project->userName}} </p>
          <p> Student Phone No. : {{$project->userPhone}} </p>
          <p> Project Title : {{$project->title}} </p>
          @endforeach
        </div>
        
        <p class="font-20 peach-color font-weight-bold pt-5 pb-2">Chapters</p>
        <table class="table">
          <thead> 
            <tr>
              <th>S/N</th>
              <th>Category</th>
              <th>Filename</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($chapters as $chapter)
          @php
            $count=1;
            @endphp
            <tr>
              <td>{{$count}}</td>
              <td>{{$chapter->category}}</td>
              <td>{{$chapter->name}}</td>
              <td><a href="{{ asset('storage/'.$chapter->file) }}" target="_blank"><i class="fa fa-eye"></i>View</a></td>
            </tr>
            @php
            $count++;
            @endphp
            @endforeach
            
          </tbody>
        </table>
    </div>
</div>