@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.sidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Chapters' Scores</p>
        <table class="table">
          <thead> 
            <tr>
              <th>S/N</th>
              <th>Category</th>
              <th>Filename</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
          @php
            $count = 1;
            @endphp
          @foreach($chapters as $chapter)
            <tr>
              <td>{{$count}}</td>
              <td>{{$chapter->category}}</td>
              <td>{{$chapter->name}}</td>
              <td><a href="/{{ asset('storage/'.$chapter->file) }}" target="_blank"><i class="fa fa-eye"></i>View</a></td>
            </tr>
            @php
            $count++;
            @endphp
            @endforeach
            
          </tbody>
        </table>
    </div>
</div>