@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.sidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Add Project</p>
        <form method="POST" action="{{ route('createProject') }}" class="form-signin col-md-8 mx-auto">
            @csrf
            <input type="text" class="form-control" name="lecturer_id" value="{{ auth()->user()->id}}" hidden>
            <input type="text" class="form-control" name="status" value="Active" hidden>
            <div class="form-group text-start row">
                <div class="col-md-12">
                    <label>Project Title</label>
                    <input type="text" class="form-control" name="title" required>
                    @error('title')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
                <div class="col-md-12">
                    <label>Student</label>
                    <select class="form-control" name="student_id" required>
                        <option value="">Choose..</option>
                        @foreach($students as $student)
                        <option value="{{$student->id}}">{{$student->name}}</option>
                        @endforeach
                    </select>
                    @error('student_id')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
                <div class="col-md-12">
                    <label>Faculty</label>
                    <input type="text" class="form-control" name="faculty" required>
                    @error('faculty')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
                <div class="col-md-12">
                    <label>Department</label>
                    <input type="text" class="form-control" name="department" required>
                    @error('department')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
            </div>
            <div class="form-group text-start row">
                <div class="col-md-6">
                    <label>Session</label>
                    <input type="text" class="form-control" name="session" required>
                    @error('session')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>Project Code</label>
                    @php
                    $code = substr(date("Y"),2,4) . strtoupper(substr(uniqid(sha1(time())),0,6));
                    @endphp
                    <input type="text" class="form-control" name="code" value="{{$code}}" readonly>
                    @error('code')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
            </div>
                <button type="sumbit" class="btn peach-bg text-white col-lg-12 rounded font-16 pt-2 pb-2">Add Project</button>
            </form>
    </div>
</div>