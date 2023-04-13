<!DOCTYPE html>
<html>
    <head>
        <title>States</title>
    </head>
    <body>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="topnav">
          <img id="logo" src="My project.png">
          <a class="active" href="./index.html"><h3>Home</h3></a>
        </div>
        <br><br><br>
        <h1> Select your State </h1>
        <div class="part">
            <div class="cbox">
                <a class="txt" href="kashmir.php"> <img class="city" src="https://www.greavesindia.co.uk/wp-content/uploads/2016/10/Vivanta-by-Taj-Dal-View-Srinagar-1-500x500-c-default.jpg">
                <p>Kashmir</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="rajas.php"><img class="city" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/c4/4e/96/thar-desert.jpg?w=1200&h=1200&s=1">
                <p>Rajasthan</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="up.php"><img class="city" src="https://thumbs.dreamstime.com/b/view-taj-mahal-walkway-garden-square-reflecting-pool-visitors-unesco-world-heritage-agra-uttar-pradesh-india-has-165802923.jpg"> 
                <p>Uttar Pradesh</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="haryana.php"><img class="city" src="https://www.tutorialathome.in/postimg/2018/10/the-india-gate-01.jpg">
                <p>Haryana</p></a>
            </div>
        </div>
        <div class="part">
            <div class="cbox">
                <a class="txt" href="wb.php"> <img class="city" src="https://st3.depositphotos.com/35781598/37136/i/600/depositphotos_371363434-stock-photo-howrah-bridge-historic-cantilever-bridge.jpg">
                <p>West Bengal</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="assam.php"><img class="city" src="https://img.staticmb.com/mbcontent//images/uploads/2022/6/circle-rate-assam_1655129216338.jpg">
                <p>Assam</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="mp.php"><img class="city" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwM3Kflc0px9AYZztC6dZoY18rnHa-0SsmdVM2ThMFC6d1gFsluvYNQwgw0ok1pXIdigs&usqp=CAU"> 
                <p>Madhya Pradesh</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="mh.php"><img class="city" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Mumbai_03-2016_30_Gateway_of_India.jpg">
                <p>Maharastra</p></a>
            </div>
        </div>
        <div class="part">
            <div class="cbox">
                <a class="txt" href="karnataka.php"><img class="city" src="https://t4.ftcdn.net/jpg/01/90/73/15/360_F_190731504_WE66nyhdR4MNW5kWFoVHnpa3TsYxTLKp.jpg">
                <p>Karnataka</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="ap.php"> <img class="city" src="https://c8.alamy.com/comp/D44DE8/gate-of-hyderabads-public-garden-india-andhra-pradesh-D44DE8.jpg">
                <p>Andhra Pradesh</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="kerala.php"><img class="city" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbXeYaUm2gp-XIN5G6LwEWOUB39GElVbuYrg&usqp=CAU"> 
                <p>Kerala</p></a>
            </div>
            <div class="cbox">
                <a class="txt" href="tn.php"> <img class="city" src="https://www.joonsquare.com/usermanage/image/state/31-tamil-nadu/tamil-nadu-tamil-nadu-02.jpg">
                <p>Tamil Nadu</p></a>
            </div>
        </div>
        <style>
            .txt
            {
                text-decoration: none;
                color: inherit;
                cursor: pointer;
            }
            
        h1
        {
            text-align: center;
        }
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
        </style>
    </body>
</html>