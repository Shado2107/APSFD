<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>APSFD-TOGO</title>
  <link rel="shortcut icon" type="image/x-icon" href="../utilisateurs/img/favicon.PNG">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="  {{URL::asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}} ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="  {{URL::asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" {{URL::asset('admin/bower_components/Ionicons/css/ionicons.min.css')}} ">
  <!-- jvectormap -->
  <link rel="stylesheet" href=" {{URL::asset('admin/bower_components/jvectormap/jquery-jvectormap.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{URL::asset('admin/dist/css/AdminLTE.min.css')}} ">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" {{URL::asset('admin/dist/css/skins/_all-skins.min.css')}} ">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js">
  {{-- C:\Users\pd39a\Documents\GitHub\TogoImmo_web\node_modules\chart.js\dist\Chart.js --}}

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition skin-green-light sidebar-mini">
        <div class="wrapper">

          <header class="main-header">

            <!-- Logo -->
            <a href="index2.html" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>APSFD</b>TOGO</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>APSFD-</b>TOGO</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="../client-face1.jpg" class="user-image" alt="User Image">
                      {{-- <span class="hidden-xs">{{Auth::User()->Nom}} {{Auth::User()->prenom}}</span> --}}
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="../client-face1.jpg" class="img-circle" alt="User Image">

                        <p>
                            {{-- {{Auth::User()->Nom}} {{Auth::User()->prenom}} --}}
                          <small></small>
                        </p>
                      </li>
                      <!-- Menu Body -->

                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profil</a>
                        </div>
                        <div class="pull-right">
                          <a href="/logout" class="btn btn-default btn-flat">Deconnexion</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!-- Control Sidebar Toggle Button -->

                </ul>
              </div>

            </nav>
          </header>

