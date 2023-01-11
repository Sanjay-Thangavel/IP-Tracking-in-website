<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website Layout | CodingLab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.js">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  </head>
  <body>
   

    
    <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Dynamic Content using IP Address</a>
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">Create Amazing Website</div>
    
    <div class="btns">
      <button>Learn More</button>
      <button>Subscribe</button>
    </div>
  </div>







    <a href="data.php">Data</a>
    
    <script type="text/javascript">
      $.getJSON('https://ipapi.co/json/', function(ip){
        var data = {
          ip: ip.ip,
          isp: ip.org,
          country: ip.country_name,
          city: ip.region,
          latt: ip.latitude,
          long: ip.longitude
          
        };
        
        if(data.country=='India')
      {
        console.log(data.country);
        console.log(data.long);
        $(".title").text("Exclusive Offer for India !");
       
        $(".img").css({"background-image": "url(ind.png)"});  
      }

      if(data.country=='Netherlands')
      {
        console.log(data.country);
        $(".title").text("Exclusive Offer for Netherlands !");
       
        $(".img").css({"background-image": "url(nethers.png)"});  
      }

      if(data.country=='United States')
      {
        console.log(data.country);
        $(".title").text("Exclusive Offer for United States !");
        
        $(".img").css({"background-image": "url(us.jpg)"});  
      }


        $.ajax({
          url: 'index.php',
          type: 'post',
          data: data
        })
      } )


      
      // $(document).ready(function())
      // {

      //   console.log("hi");
      //   console.log(data.country);
      //   if(data.country=='India')
      //   {
      //      $("#d1").text("hello world");
      //   }

      // } 

    </script>

     <p id ='d1'> Normal </p>
  
  <div>
         
         <img  id = "myimg" src="design2.png" alt="E commerce web page" width="1550" height="1000">
      </div>


  </body>

  

</html>
<?php
require 'config.php';
if(isset($_POST["ip"])){
  $ip = $_POST["ip"];
  $isp = $_POST["isp"];
  $country = $_POST["country"];
  $city = $_POST["city"];
  $latt = $POST["latt"];
  $long = $POST["long"];

  $query = "INSERT INTO tb_data VALUES('', '$ip', '$isp', '$country', '$city')";
  mysqli_query($conn, $query);
}
?>
