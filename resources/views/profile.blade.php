<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Virtual Manage</title>
  <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqQWZaC4guIbS5Dd1gCZBL1LDPRCwEpoM-5x1r0RbfIFc5s5iVEg">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

   <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />

   <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-green.min.css")}}" rel="stylesheet" type="text/css" />

</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  @include('layouts.header')

  @include('layouts.sidebar')

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Profile
      </h1>
      <ol class="breadcrumb">
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <h1><i class="fa fa-laptop"></i></h1>
      <a href="github.com/vinyex"></a><h1>This is your <b>profile</b></h1>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.footer')

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

 <!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

</body>
</html>
