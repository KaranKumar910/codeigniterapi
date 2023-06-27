<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-blue" style="color: #111acf;">
    <div class="container">
      <a href="<?=site_url('welcome/index')?>" class="navbar-brand">
       
        <span class="brand-text font-weight-heavy" style="color: white;"> <b>Dashboard</b></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?=site_url('welcome/index')?>" class="nav-link" style="color: white;"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('welcome/profile')?>" class="nav-link" style="color: white;"><b>profile</b></a>
          </li>
          
        </ul>

        <!-- SEARCH FORM -->
        
          <div class="input-group input-group-sm">
            <a href="<?=site_url('welcome/test')?>">
              <button class="btn btn-navbar" type="submit" style="float:left">
                <i class="fas fa-search"></i>
              </button>
            </a>
            <!-- </div> -->
          </div>
        
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto" style="color:white;">
        <!-- Messages Dropdown Menu -->
        <li >
            <i class="fa fa-user"style="margin-left: -125px;"></i>
        </li>
        <!-- Notifications Dropdown Menu -->
       <!--  <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li> -->
        <li class="nav-item">
          <a href="<?=site_url('welcome/logout')?>" role="button" class="nav-link">
          
           <i class="fa fa-power-off"></i>
         </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  


  <!-- <script type="text/javascript">
    var API_KEY = '37858573-5e4c79008a89542259f6d4c81';
    var query = 
  var URL = "https://pixabay.com/api/?key="+API_KEY+"&q="+encodeURIComponent('red roses');
  $.getJSON(URL, function(data){
  if (parseInt(data.totalHits) > 0)
      $.each(data.hits, function(i, hit){ console.log(hit.pageURL); });
  else
      console.log('No hits');
  });
  </script> -->



