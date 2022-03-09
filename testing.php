<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
///1. gender 2. addresss 3. email 4.
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admission </title>

  </head>

  <body>
   <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body>
<title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
  
    <?php require 'partials/_nav.php' ?>
    
    <div class="container my-2">
     <h1 class="text-center">Admission Form</h1>
     <br>
     <form  class="form-horizontal"  action="testdata.php" method="GET">
     <div class="form-group" style="
    display: flex;
    flex-direction: column;
    align-items: center;
">
        <div class="form-group">
        <div class="form-group col-md-8">
        
            <label   for="username">Student name</label>
            
            <input type="text" class="form-control" id="username" name="sname" aria-describedby="emailHelp " >
            
        </div>
        <br></br>
        <div class="center">
        <div class=" col-md-8">
            <label for="text">Father's Name</label>
            <input type="text" class="form-control" id="text" name="fname" >
        </div>
        <br>
        <div class="form-group col-md-8">
            <label for="text">Date of Birth</label>
            <input type="text" class="form-control" id="text" name="cname"  placeholder="YYYY-MM-DD">
        </div>
        
        <br></br>
        <label>Gender</label>
<select name="gname">
<option >Select your Gender</option>
  <option value="Male">Male</option>
  <option value="Female" >Female</option>
  
</select>

    
<Label> Degree</label>
<select name="dk">
<option >Select your Stream</option>
  <option value="Bsc (Physical Science)">Bsc (Physical Science)</option>
  <option value="Bsc(Major Maths)" >Bsc(Major Maths)</option>
  <option value="Bsc (Major Physics)">Bsc (Major Physics)</option>
  <option value="Bsc (Major Physics)">Bsc (Major Chemistry)</option>
</select>
<br></BR>

<div class="form-group col-md-8">
            <label for="text">Email id</label>
            <input type="text" class="form-control" id="text" name="ename">
        </div>
        <br></br>
<div class="form-group">
<div class="form-group col-md-8">
            <label for="int">Mobile No</label>
            <input type="int" class="form-control" id="text" name="mname">
        </div>
        <BR>
        <div class="form-group col-md-8">
            <label for="text">Address</label>
            <input type="text" class="form-control" id="text" name="aname">
        </div>
<br></br>
        <Label> State</label>
<select name="stname">
<option >Select State</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
 
</select>

<Label> District</label>
<select name="dname">
<option >Select District</option>
  <option value="Hamirpur">Hamirpur</option>
  <option value="Kangra">Kangra</option>
  <option value="kullu">kullu</option>
  <option value="kinnaur">kinnaur</option>
  <option value="Solan">Solan</option>
  <option value="Shimla">Shimla</option>
  <option value="sirmaur">Sirmaur</option>
  <option value="Mandi">Mandi</option>
  <option value="Bilaspur">Bilaspur</option>
  <option value="Una">Una</option>
  <option value="Chamba">Chamba</option> 
  <option value="Lahul Spiti">Lahul Spiti</option>
</select>
<br></br>
<div class="form-group col-md-8">
            <label for="text">Pincode</label>
            <input type="text" class="form-control" id="text" name="pinname">
        </div>
<br></BR>

<Label> Qualification</label>
<select name="qname">
<option >Select your Qualification</option>
  <option value="10th">10th</option>
  <option value="12th">12th</option>
</select>
<br></br>
<div class="form-group col-md-4">
            <label for="text">12th %</label>
            <input type="text" class="form-control" id="text" name="zname" placeholder="90">
        </div>
        <br>


        
        
        <form>
        <form>
  

<button type="submit" class="btn btn-primary">Submit Application</button>
</div>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

