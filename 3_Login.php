<?php
$login=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include("db.php");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * from `users` where `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location: location.php");
    }
    else{
        $showError = "Invalid Credentials";
    }
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="topnav">
          <img id="logo" src="My project.png">
          <a href="./index.html"><h3> Home </h3></a>
        </div>
    <?php
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Success!You are logged in!
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
        <h1 class="text-center">Store your luggage here and enjoy your trip!</h1>
        <form action="3_login.php" method="post">
            <div class="form-group my-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                
            </div>
            <div class="form-group my-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <br><br>
            <button id="but" type="submit" class="btn btn-warning">Login</button>        
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
<?php 
    session_start();
    if(isset($_POST["Submit"]))
    {
        $uname = $_POST["username"];
        $_SESSION["username"] = $uname;
        $pw = $_POST["password"];
        $sql = "SELECT Password FROM studentslogin WHERE Username = '$uname'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($result);
        if($pw==$row[0])
        {
            header("Location: Homepage.html"); 
        }
        else 
        {
            header("Location: 2_Newuser.php");
        } 
    }
?>