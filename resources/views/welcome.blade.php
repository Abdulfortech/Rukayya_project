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
  <title>Welcome</title>
</head>

<body>
  <div class="container-md container-fluid">
    <!-- header -->
    <div class="col-lg-12 peach-bg pb-1"></div>
    <!-- header end -->
    <div class="col-lg-9 vh-100px">
      <!-- heading -->
      <div>
        <h1 class="peach-color font-weight-bold text-center mt-5">Welcome to Rukayya Sa'id's </h1>
        <p class="peach-color font-30 font-weight-bold text-center mt-5">Final Year Project</p>
      </div>
      <!-- heading end -->
        <center>
            <a href="/login" class="btn btn-lg peach-bg text-white">Sign In</a>
            <a href="/signup" class="btn btn-lg peach-bg text-white">Sign Up</a>
        </center>
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