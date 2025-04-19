<?php
  
require 'session.php';
confirm_logged_in();
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Book Storage System</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-image: linear-gradient(gray,#2144);">

      <a class="navbar-brand mr-1" href="index.php" style="text-shadow: 0px 1px 5px black;">Book Storage System</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            <?php
            echo " ".$_SESSION['fname'];
            echo " ".$_SESSION['lname'];
            ?>

<i class="fas fa-sign-out-alt fa-fw" href="#" data-toggle="modal" data-target="#logoutModal" style="color: red">logout</i>
</a>
          </div>
         </li>
    </ul>
    </nav>


    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background-image: linear-gradient(,#2144);">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">
            <i class="fas fa-fw fa-home"></i>
            <span>HOMEPAGE</span>
          </a>
        </li>
         </li>
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw  fa-cloud"></i>
            <span>SERVICES</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item " href="urns.php">URNS</a> 
            <a class="dropdown-item " href="caskets.php">CASKETS</a>
            <a class="dropdown-item " href="vehicles.php">VEHICLES</a>
          </div> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userbooks.php">
            <i class="fas fa-fw fa-book  "></i>
            <span>Books</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaction.php">
            <i class="fas fa-fw fa-handshake"></i>
            <span>Transaction</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">