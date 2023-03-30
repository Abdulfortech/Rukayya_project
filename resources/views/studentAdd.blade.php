@extends('layout.layout')

@section('content')

<div class="row">
    {{-- navigation bar --}}
    @include('components.sidebar')
    {{-- end navigation bar --}}

    <div class="accordion" id="accordion">
        <p class="font-30 peach-color font-weight-bold pt-5 pb-2">Add Student</p>
        <form method="POST" action="{{ route('createStudent') }}" class="form-signin col-md-8 mx-auto">
            @csrf
            <input type="text" class="form-control" name="role" value="Student" hidden>
            <div class="form-group text-start row">
                <div class="col-md-12">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Your full name" required>
                    @error('name')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
            </div>
            <div class="form-group text-start row">
                <div class="col-md-6">
                    <label>Reg No.</label>
                    <input type="text" class="form-control" name="reg" required>
                    @error('reg')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" name="phone" required>
                    @error('phone')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
            </div>
            <div class="form-group text-start">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="email" required>
                @error('email')
                    <span class="text-danger">{{$message}}</span> 
                @enderror
            </div>
            <div class="form-group text-start row">
                <div class="col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                    @error('password')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
                <div class="col-md-6">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" required>
                    @error('Password')
                        <span class="text-danger">{{$message}}</span> 
                    @enderror
                </div>
            </div>
            <button type="sumbit" class="btn peach-bg text-white col-lg-12 rounded font-16 pt-2 pb-2"> Add Student</button>
        </form>
    </div>
</div>