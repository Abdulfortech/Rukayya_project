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
              <th>Reg. No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
            </tr>
          </thead>
          <tbody>
            @php
            $count = 1;
            @endphp
          @foreach($students as $student)
          
            <tr>
              <td>{{$count}}</td>
              <td>{{$student->reg}}</td>
              <td>{{$student->name}}</td>
              <td>{{$student->email}}</td>
              <td>{{$student->phone}}</td>
            </tr>
            @php
            $count++;
            @endphp
            @endforeach
            
          </tbody>
        </table>
    </div>
</div>