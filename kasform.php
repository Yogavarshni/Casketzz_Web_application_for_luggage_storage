<?php
  session_start();
  include('db.php');
  $state=$_SESSION['state'];
  if(isset($_POST["but"]))
  {
    $name=$_POST['cname'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $mail=$_POST['mail'];
    $city=$_POST['city'];
    $lug=$_POST['lug'];
    $hrs=$_POST['hrs'];
    $_SESSION['cname']=$name;
    $_SESSION['lug']=$lug;
    $_SESSION['hrs']=$hrs;
    $_SESSION['age']=$age;
    $_SESSION['mobile']=$mobile;
    $_SESSION['mail']=$mail;
    $_SESSION['city']=$city;
    $sql="INSERT INTO `".$state."` VALUES('$name','$age','$mobile','$mail','$city','$lug','$hrs')";
    $result = mysqli_query($conn,$sql);
    header("Location: bill.php");
  }
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="topnav">
          <img id="logo" src="My project.png">
          <a href="./index.html"><h3> Home </h3></a>
        </div>
        <div id="box">
            <div id="text">
                <div class="container my-4">
                    <br><br><br>
                    <h1 class="text-center">Fill the details</h1>
                    <form action="kasform.php" method="post">
                        <div class="form-group">
                            <label for="cname" class="form-label">Enter your name</label>
                            <input type="text" class="form-control" id="cname" name="cname" require> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="age" class="form-label">Enter your age</label>
                            <input type="text" class="form-control" id="age" name="age" require>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="mobile" class="form-label">Enter yout mobile number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" require>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="mail" class="form-label">Enter yout Mail Id</label>
                            <input type="text" class="form-control" id="mail" name="mail" require>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="city" class="form-label">Enter the city</label>
                            <input type="text" class="form-control" id="city" name="city" require>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="lug" class="form-label">Enter the number of bags</label>
                            <input type="number" class="form-control" id="lug" name="lug" require>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="hrs" class="form-label">Enter the number of hours</label>
                            <input type="number" class="form-control" id="hrs" name="hrs" require>
                        </div>
                        <br>
                        <button id="but" name="but" type="submit" class="btn btn-warning">Submit</button>     
                        <br><br><br><br><br>   
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
              </script>
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



