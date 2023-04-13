<!DOCTYPE html>
<html>
    <head>
        <title>Jammu and Kashmir</title>
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
                <a class="txt" href="kasform.php"> <img class="city" src="https://static2.tripoto.com/media/filter/tst/img/255077/TripDocument/12719269_10208909410072272_113893792629030036_o.jpg">
                <p>Ladakh</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://www.shutterstock.com/image-photo/kids-seen-playing-pigeons-ghanta-260nw-2046295028.jpg">
                <p>Sri Nagar</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://thumbs.dreamstime.com/b/india-tourism-maa-vaishno-devi-katra-hinduism-holy-place-jammu-kashmir-hindu-goddess-who-slays-bairavnath-169468205.jpg"> 
                <p>Katra Tehsil</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://media.gettyimages.com/id/1237840478/photo/a-view-after-the-fresh-snowfall-at-tangmarg-approximately-35-kilometers-north-of-srinagar-on.jpg?s=612x612&w=gi&k=20&c=6AlUKSzhhx73FJf8Bu_3Y1_1eQGw6vkxG2SZNiNOm4c="> 
                <p>Tang Marg</p></a>
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
    $_SESSION['state']='Uttar Pradesh';
?>