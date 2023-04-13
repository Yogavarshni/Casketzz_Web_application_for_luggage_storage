<!DOCTYPE html>
<html>
    <head>
        <title>Kerala</title>
    </head>
    <body>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="topnav">
          <img id="logo" src="My project.png">
          <a class="active" href="./index.html"><h3>Home</h3></a>
        </div>
        <br><br><br>
        <h1> Select your city </h1>
        <div class="part">
            <div class="cbox">
                <a class="txt" href="kasform.php" > <img class="city" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/9f/38/e1/facciata.jpg?w=500&h=400&s=1">
                <p>Kochi</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-s/02/7b/9b/75/eco-friendly-river-front.jpg?w=500&h=400&s=1">
                <p>Thiruvananthapuram</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/5e/59/d4/alleppey-backwater-tour.jpg?w=500&h=400&s=1">
                <p>Alappuzha</p> </a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://www.tourmyindia.com/blog//wp-content/uploads/2021/11/Best-Places-to-Visit-in-Palakkad-Kerala.jpg">
                <p>Palakkad</p></a> 
            </div>
        </div>
        <style>
        .cbox
        {
            display: flex;
            flex-direction: column;
            border: 1px #2e0606;
            background: gold;
            text-align: center;
            margin: 1%;
            width: 260px;
            font-size: large;
        }
        .city
        {
            width: 250px;
            height: 250px;
            margin: 2%;
        }
        img:hover 
        {
            opacity: 0.5;
        }
        .part
        {
            display: flex;
            flex-direction: row;
            margin: 3%;
        }
        h1
        {
            text-align: center;
        }
        body
        {
          background-color: wheat;
          font-family: sans-serif;
          color: #2e0606;
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
          height: 50px;
          color: white;
        }
        .txt
            {
                text-decoration: none;
                color: inherit;
                cursor: pointer;
            }
        </style>
    </body>
</html>
<?php
    session_start();
    $_SESSION['state']='Kerala';
?>