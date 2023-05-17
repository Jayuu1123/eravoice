<?php
session_start();

// check if the user is already logged in
if(!isset($_SESSION['username']))
{
    //echo "hello";
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ERA VOICE</title>
    <meta name="description" content="ROSA is an enchanting Parallax Restaurant WordPress Theme that allows you to tell your story in an enjoyable way, perfect for restaurants or coffee shops.">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->

    <link rel="stylesheet" href="homepage.css">
  
</head>

<body class="stop-scroll">

  <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!--Start loader-->
  <div class="loader-wrap">
      <div class="loader">
          <span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item">
            
          </span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span>
      </div>
  </div>
  <!--End loader-->



 <!--Start Header-->
  <header>
      <nav>
          <div class="logo">
              <a href="index.php"><img src="era littil.png" alt="Rosa Logo"></a>
          </div>
          <div class="toggle">
              <span class="first"></span>
              <span class="middle"></span>
              <span class="last"></span>
          </div>
          <div class="navigation-bar">
              <ul>
                  <li class="active"><a href="#">Home<span class="underline"></span></a></li>
                
                  <li><a href="logout.php">LOGOUT<span class="underline"></span></a></li>
                  <li><a href="aboutus.php">ABOUTUS<span class="underline"></span></a></li>
                 
              </ul>
          </div>
      </nav>
      <div class="text">
          <h2>Welcome</h2><br><br>
          <h1>TO ERA VOICE ASSISTANT</h1><br><br>
          <div class="arrow">
              <span class="left"></span>
              <i class="fas fa-asterisk"></i>
              <span class="right"></span>
          </div>
        
  </header>
  <!--End Header-->

  <!-- Add your site or application content here -->
  <script src="homepage.js"></script>
  
</body>

</html>
