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
              <th>File</th>
            </tr>
          </thead>
          <tbody>
          @foreach($files as $file)
            <tr>
              <td>{{$file->attachment}}</td>
              <td>{{$file->attachment}}</td>
              <!-- <td><a href="chat"><i class="fa fa-comment"></i></a></td> -->
            </tr>
            @endforeach
            
          </tbody>
        </table>
    </div>
</div>