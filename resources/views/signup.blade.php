<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font awesome cdn -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!-- bootstrap cdn -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <title>Sign Up</title>
</head>

<body>
  <div class="container-md container-fluid">
    <!-- header -->
    <div class="col-lg-12 peach-bg pb-1"></div>
    <!-- header end -->
    <div class="col-lg-9 vh-100px">
      <!-- heading -->
      <div>
        <p class="peach-color font-30 font-weight-bold text-center">SIGN UP</p>
      </div>
      <!-- heading end -->
      <!-- form div -->
      <!-- <form class="form-signin col-md-8 mx-auto" mehod="POST" action="{{ route('createAccount') }}" >
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control font-14 pt-3 pb-3" placeholder="First Name" name="fname" required />
                @error('fname')
                <div class="msg">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <input type="text" class="form-control font-14 pt-3 pb-3" placeholder="Surname" name="sname" required>
                @error('sname')
                <div class="msg">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <input type="text" class="form-control font-14 pt-3 pb-3" placeholder="Last Name" name="lname" required>
                @error('lname')
                <div class="msg">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-8">
                <input type="email" class="form-control font-14 pt-3 pb-3" placeholder="Email Address" name="email" required>
                @error('email')
                <div class="msg">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <select class="form-control" name="role" required>
                    <option value="">Select Role</option>
                    <option value="0">Lecturer</option>
                </select>
                @error('role')
                <div class="msg">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group input-group col-md-6">
                <input type="password" class="form-control font-14 pt-3 pb-3" placeholder="Password" name="password" required>
                @error('password')
                <div class="msg">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group input-group col-md-6">
                <input type="password" class="form-control font-14 pt-3 pb-3" placeholder="Confirm Password" name="password_confirmation" required>
                @error('password_confirmation')
                <div class="msg">{{$message}}</div>
                @enderror
            </div>
        </div>

        <div class="form-group align-items-center">
            <button type="submit" class="btn peach-bg text-white col-lg-12 rounded font-16 pt-2 pb-2" name="submit">Create an
                Account</button>
        </div>

        <div class="text-center">
          <hr>
          <p class="font-16">Already Have Account? <a href="/signin" class="peach-color">Sign In</a></p>
        </div>
      </form> -->
        <form method="POST" action="{{ route('createAccount') }}" class="form-signin col-md-8 mx-auto">
            @csrf
            <input type="number" class="form-control" name="role" value="Lecturer" hidden>
            <div class="form-group text-start row">
                <div class="col-md-12">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Your full name" required>
                    @error('name')
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
            <button type="sumbit" class="btn peach-bg text-white col-lg-12 rounded font-16 pt-2 pb-2" name="sendMail">Send</button>
        </form>
      <!-- form div end -->
      <!-- Footer -->
      <footer class="text-center bg-white text-muted">
        <!-- Copyright -->
        <div class="text-center pb-0 mt-5 pt-5">
          <p class="font-16">© 2023 Rukayya SaId. All rights reserved.</p>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </div>
  </div>
</body>

<!-- ##### All Javascript Files ##### -->
<!-- jquery 2.2.4  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</html>