@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.studentSidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Add Chapter</p>
        <form method="POST" enctype="multipart/form-data" action="{{ route('addChapter') }}" class="form-signin col-md-8 mx-auto">
            @csrf
            <input type="text" class="form-control" name="student_id" value="{{ auth()->user()->id}}" hidden>
            <input type="text" class="form-control" name="project_id" value="{{$project->id}}" hidden>
            <div class="form-group text-start">
                <label>Chapter Category</label>
                <select class="form-control" name="category" required>
                    <option value="">Choose..</option>
                    <option>Chapter One</option>
                    <option>Chapter Two</option>
                    <option>Chapter Three</option>
                    <option>Chapter Four</option>
                    <option>Chapter Five</option>
                </select>
                @error('category')
                    <span class="text-danger">{{$message}}</span> 
                @enderror
            </div>
            <div class="form-group text-start row">
                <div class="col-md-12">
                    <label>Chapter Name</label>
                    <input type="text" class="form-control" name="name" required>
                    @error('name')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
                <div class="col-md-12">
                    <label>File</label>
                    <input type="file" class="form-control " name="file" required>
                    @if ($errors->has('file'))
                    <span class="text-danger">{{ $errors->first('file') }}</span>
                    @endif
                </div>
            </div>
            <button type="sumbit" class="btn peach-bg text-white col-lg-12 rounded font-16 pt-2 pb-2">Add Chapter</button>
        </form>
    </div>
</div>