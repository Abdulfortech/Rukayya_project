@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.studentSidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Supervisor Information </p>
        <table class="table">
          <thead> 
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
            </tr>
          </tbody>
        </table>
    </div>
</div>