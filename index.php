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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>om - Virtual Assistant</title>

    
    <link rel="stylesheet" href="style.css">

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>


    <section class="main">
        <div class="image-container">
            <div class="image">
                <img src="sirilike.gif" alt="image">
            </div>


            <h1>E R A</h1>
            <p>I'm ERA Your Persnol Voice Assistent </p>
            
            <p>How Can I Help You</p>
        </div>
        <div class="input">
            <button class="talk"><i class="fas fa-microphone-alt"></i></button>
            <h1 class="content"> Click here to speak</h1>
        </div>
        


  
    <script src="app.js"></script>
</body>

</html>