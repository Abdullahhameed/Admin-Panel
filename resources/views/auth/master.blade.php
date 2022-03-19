<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/backend/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/backend/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/backend/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="width: 500px;">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  @yield('content')
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('js/backend/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/backend/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/backend/adminlte.min.js') }}"></script>
</body>
</html>
