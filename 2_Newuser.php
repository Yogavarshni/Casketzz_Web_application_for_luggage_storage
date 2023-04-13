<?php
include("db.php");
/*$table= "create table Rajasthan
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer 
)";
mysqli_query($conn,$table);
$table= "create table Kashmir
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer
)";
 mysqli_query($conn,$table);
 $table= "create table UttarPradesh
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer
)";
 mysqli_query($conn,$table);
 $table= "create table Haryana
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer
    
)";
 mysqli_query($conn,$table);
 $table= "create table WestBengal
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer
    
)";
 mysqli_query($conn,$table);
 $table= "create table Assam
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer
    
)";
 mysqli_query($conn,$table);
 $table= "create table Maharasthra
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer
    
)";
 mysqli_query($conn,$table);
 $table= "create table MadhyaPradesh
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer
    
)";
 mysqli_query($conn,$table);
 $table= "create table Karnataka
(
    Name varchar(100),
    Age varchar(100),
    Mobile varchar(100),
    Mail varchar(100),
    City varchar(100),
    Bags integer,
    hours integer
    
)";
 mysqli_query($conn,$table);
 $table= "create table Kerala
 (
     Name varchar(100),
     Age varchar(100),
     Mobile varchar(100),
     Mail varchar(100),
     City varchar(100),
     Bags integer,
     hours integer
     
 )";
  mysqli_query($conn,$table);
  $table= "create table TamilNadu
  (
      Name varchar(100),
      Age varchar(100),
      Mobile varchar(100),
      Mail varchar(100),
      City varchar(100),
      Bags integer,
      hours integer
      
  )";
   mysqli_query($conn,$table);
   $table= "create table Payment
   (
       Name varchar(100),
       Method varchar(100),
       Bags integer,
       hours integer,
       amt integer
   )";
    mysqli_query($conn,$table);*/
$showAlert=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $servername = "localhost";
    $username="root";
    $password="";
    $database="Casketzz";
    $conn = mysqli_connect($servername, $username, $password, $database);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    // $exists=false;
     
    /*$table= "create table users
    (
        Username varchar(100),
        Password varchar(100),
        dt datetime
    )";
    mysqli_query($conn,$table);*/
    //Check if username exists
    $existSql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn,$existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows>0){
        //$exists=true;
        $showError = "Username already exists";
    } 
    else
    {
        if($password==$cpassword)
        {
            $showAlert = true;
            $sql="INSERT INTO `users` (`Username`,`Password`,`dt`) VALUES('$username','$password',current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="topnav">
          <img id="logo" src="My project.png">
          <a class="active" href="./3_Login.php"><h3>Login</h3></a>
          <a href="./index.html"><h3> Home </h3></a>
        </div>
    <?php
        if($showAlert)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Success!Your account is now created and you can login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }   
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Error!'
            .$showError.'  
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }   
    ?>
    <div id="box">
        <div id="text">
        <div class="container my-4">
            <br><br><br>
            <h1 class="text-center">Hello new users sign up</h1>
            <form action="2_Newuser.php" method="post">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"> 
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type same password</div>
                </div>
                <button id="but" type="submit" class="btn btn-warning">SignUp</button>     
                <br><br><br><br><br>   
            </form>
</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        #text
        {
            font-weight: bold;
            color: black;
        }
        #box
        {
            margin: 30px;
            background-color: #ffffff;
            border: 1px solid black;
            opacity: 0.6;
        }
        #but
        {
            margin-left:47%;
        }
        body
        {
            background-color: wheat;
            font-family: sans-serif;
        }
        #logo
        {
          width: 7%;
          height: 2%;
        }
        .topnav 
        {
          overflow: hidden;
          background-color: #2e0606;
        }
        .topnav a 
        {
          float: right;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        .topnav a:hover 
        {
          background-color: #ddd;
          color: black;
        }
        .topnav a.active 
        {
          background-color:rgba(205, 120, 50, 0.406); 
          height: 70px;
          color: white;
        }
    </style>
  </body>
 
</html>

