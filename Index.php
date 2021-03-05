<?php
include("includes/config.php"); 
include("includes/footer.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Yucel Films</title>

	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../carousel.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

	<header class="menu">
        <nav class="nav-header">
            <ul>
                <li><a href="Index.php" id="home">HOME </a></li>
                <li><a href="worksdemo2.php">WORKS</a></li>            
                <li><a href="About.php">ABOUT US </a></li>                
                <li><a href="Contacts.php">CONTACTS </a></li>
            </ul>
        </nav>
 	</header>
 	<div class="banner">
        <img src="assets/icon/YucelFilms_Logo.svg" class=banner-logo>
        <img src="assets/icon/Tagline.svg" class=banner-tagline>
    </div>

    <script>
        var ids=document.getElementById("home");
        ids.setAttribute('style', "color: #ff6238"); 
    </script>
</body>
</html>

