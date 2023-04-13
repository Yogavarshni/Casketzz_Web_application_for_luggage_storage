<!DOCTYPE html>
<html>
    <head>
        <title>Uttar Pradesh</title>
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
                <a class="txt" href="kasform.php" > <img class="city" src="https://www.uptourism.gov.in/images/rumigate.jpg">
                <p> Lucknow </p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxHH2uJjVOPxTHa4-PusoqwrzQ--BYoCToyw&usqp=CAU">
                <p>Agra</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://ngs-space1.sgp1.digitaloceanspaces.com/am/uploads/mediaGallery/image/1639312222956.jpg-org">
                <p>Varanasi</p> </a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://i0.wp.com/bestplaces2visit.in/wp-content/uploads/2021/08/premmandir4974992454515097877..jpg?resize=467%2C283&ssl=1">
                <p>Madhura</p></a> 
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
    $_SESSION['state']='UttarPradesh';
?>