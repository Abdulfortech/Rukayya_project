@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.sidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Plagiarism Detection Tool</p>
        <!-- <form method="POST" action="{{ route('check') }}" enctype="multipart/form-data" class="form-signin col-md-8 mx-auto">
            @csrf
            <div class="form-group">
                <label>Project Thumbnail</label>
                <input type="file" class="form-control " name="file" required>
                @if ($errors->has('file'))
                <span class="text-danger">{{ $errors->first('file') }}</span>
                @endif
            </div>
            <div class="form-group text-start row">
                <div class="col-md-12">
                    <label>Content</label>
                    <textarea class="form-control" rows="5" maxlength="249" name="content" placeholder="Copy some content from project file to check if its copied somewhere. the content shoud note exceed 250 characters." required></textarea>
                    @error('title')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
            </div>
            <button type="sumbit" class="btn peach-bg text-white col-lg-12 rounded font-16 pt-2 pb-2">Check</button>
        </form> -->
        <iframe width="800" height="550" style="border:none;" src="https://quillseotools.com/plagiarism-checker#mainbox"></iframe>
    </div>
</div>
