<?php
    session_start();
    $state=$_SESSION['state'];
    $name = $_SESSION['cname'];
    $lug=$_SESSION['lug'];
    $hrs=$_SESSION['hrs'];
    if(isset($_POST['but']))
    {
       header("Location: confirm.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPI</title>
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
                    <?php $sum = $hrs*$lug*50 ?>
                    <h1 class="text-center">Payment</h1>
                    <?php echo "<h3> Total Amount: $sum </h3>" ?>
                    <br><br>
                    <form action="upi.php" method="post">
                        <div class="form-group">
                            <label for="pay" class="form-label">Enter UPI Id</label>
                            <input type="text" class="form-control" id="pay" name="pay" require> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pay" class="form-label">Enter Pin</label>
                            <input type="password"  class="form-control" id="pay" name="pay"  require>
                        </div>
                        <br>
                        <button id="but" name="but" type="submit" class="btn btn-warning">Pay</button>     
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



