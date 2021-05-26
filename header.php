<?php
require_once('lib/database.php');
$database = new Database();
session_start();
if (!isset($_SESSION['name'])) {
	header('Location: index.php');
	exit();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <title>Hotels Project</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="index.php">Hotel Projects</a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
	 </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_hotel.php">Add a hotel</a>
      </li>
     </ul>

        
          <form action="search.php" method="GET" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="city_or_hotel" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
          <li class="nav-item">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
      </li>
          
 </div>  
  </nav> 
  <div class="container">    