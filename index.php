# php-sqlite-search
simpe search engine using php and sqlite
<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('data.sqlite');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "\n";
   }

   ?>
<!DOCTYPE html>
<html>
<head>
 <title>Search engine</title>
  <meta charset="utf-8">

  <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #90EE90;
  }
  </style>
 
	<title>Clinvirome</title>
</head>
<body>


 <nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	 <li class="active"><a href="index.php">Home</a></li>
        <li ><a href="downloads.html ">Downloads</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </div>
  </div>
</nav>


 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search engine</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
      <style>

body
{
  background-color: #000;
  background-image: url("");
  background-size: cover;
  background-repeat:no-repeat;

}

</style>
   
        <div id="back">
      <div id="header">
        <div class="logoheader" style="width: 25%">
        <h1 id="logo">
        <a target="_blank" href="http://www.pondiuni.edu.in/">
        <image img src="pondiuni.png" alt="Pondicherry University" style="width: 100%"/></a></image>
        <span class="header1">
        </span></h1>
        </div><!-- end logoheader -->          
      </div> <!-- header end line -->
     </div>

<div class=" text-center"  style="margin-bottom:0 ; color: #BC8F8F ; font-family: Times New Roman, Times, serif;   ">
  <h1 style="font-size: 40px;" >Search engine</h1>
  <p style="font-size: 20px;"> a simple search engineusing php and sqlite</p> 
</div>
     
        

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<form action="searchname.php" method="GET" style=" position: absolute; left:490px; top:400px; "> 

  <div class="row" >
    <div class="col-xs-6 col-md-4">
      <div class="input-group">
        <input type="text" name="search" style="width: 500px;"class="form-control" placeholder="Search" id="txtSearch"/>
        <div class="input-group-btn">
          <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
