<!DOCTYPE html>
<html>
    <head>
        <title>Rajasthan</title>
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
                <a class="txt" href="kasform.php" > <img class="city" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/86/fa/37/pink-square-mall.jpg?w=1200&h=1200&s=1">
                <p> Jaipur </p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbqmmbSKLqn9HWHH4aqMxQLx0WMAMA2GOGwe6-e1nFyNYS1HuBpb2DZHUv4cs4OKgyyqQ&usqp=CAU">
                <p>Udaipur</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://scontent.fmaa2-4.fna.fbcdn.net/v/t39.30808-6/277747703_395051422625122_808058422296447928_n.jpg?stp=dst-jpg_s960x960&_nc_cat=104&ccb=1-7&_nc_sid=e3f864&_nc_ohc=8sOcO1Mz8WUAX9DyIei&_nc_ht=scontent.fmaa2-4.fna&oh=00_AfClxf4OwVtlA1Z-PTw-PBInHGIdkeWku6spZcpU33HJEA&oe=6435A673">
                <p>Jodhpur</p> </a>
            </div>
            <div class="cbox">
                <a class="txt" href="kasform.php"><img class="city" src="https://assets.isu.pub/document-structure/220401163954-b91d7c73a7633e9ea5667ed5496dd3f8/v1/b5cb9606ac1d50d14b996c3de22883a0.jpeg">
                <p>Jai Selmer</p></a> 
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
    $_SESSION['state']='Rajasthan';
?>