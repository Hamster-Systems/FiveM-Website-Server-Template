<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>State Of California : RPC - Gallery</title> <!-- < set your community's name here -->
	<link rel="stylesheet" href="/backend/css/main.css"> <!-- do not touch this, unless you know what u are doing.. -->
	<script src="https://kit.fontawesome.com/af48d48999.js" crossorigin="anonymous"></script>
    <meta property="og:title" content="State Of California RPC"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:description" content="Go patrol or get fired.."> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:image" content="/backend/img/promo2.png"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:url" content=""> <!-- meta if u send links on discord etc includes this -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		$temp.remove();
		}
	</script>
</head>


<!-- ACTUAL SITE -->
<body>
	<header>
		<div class="wrapper">
			<nav>
				<!-- <img src="logo" alt="header_logo"> --> <!-- set your community logo here make sure to hide the community name if you do change=! --> 
				<h2>State Of <span>California</span></h2> <!-- set your community name here --> 
				<div class="right">
                    <a href="/index.php"><button class="custom-button custom-button-primary">Home</button></a> <!-- to be added to next update -->
					<a href="#"> <button class="custom-button custom-button-primary">Forum</button></a>  <!-- change the discord link to your discord's server link -->
					<a href="https://www.discord.gg/XTvjfhQzDz"><button class="custom-button custom-button-primary">Discord</button></a>  <!-- change the discord link to your discord's server link -->
					<a href="/team.php"><button class="custom-button custom-button-primary">Staff Team</button></a> <!-- The Staff Team Page! -->
					<a href="/partners.php"><button class="custom-button custom-button-primary">Our Partners</button></a> <!-- The Partner Page! -->
					<a href="https://github.com/Coldalliance/FiveM-Website-Template"> <button class="custom-button custom-button-info">Made By Charley J</button></a> <!-- Made By Charley J, Please Keep Credits! -->

				</div>
			</nav>
		</div>
	</header>

    <!-- BANNER --> 

    <main>
		<div class="wrapper">
			<div class="section-promo">
				<div class="promo-background">
				
					<h1>Serve & Protect the Citizens of State of California.</h1> <!-- set here title of the promo header -->
				</div>
			</div>
    

    <!-- MAIN GALLERY SECTION --> 
    
    <link href="/backend/css/caption-gallery.css" rel="stylesheet"> <!-- LOCATION OF THE CSS FILE FOR GALLERY! -->
    <script src="/js/gallery.js"></script> <!-- LOCATION OF THE JAVA SCRIPT FOR GALLERY --> 
  </head>
  <body>

    <div class="gallery"><?php

    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "backend/img/GalleryPhotos" . DIRECTORY_SEPARATOR; // LOCATION OF GALLERY PHOTOS! 
    $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

    // (C) OUTPUT IMAGES
    foreach ($images as $i) {
      $img = basename($i);
      $caption = substr($img, 0, strrpos($img, "."));
      printf("<figure><img src='/backend/img/GalleryPhotos/%s'/><figcaption>%s</figcaption></figure>", $img, $caption); // TAKING THE NAME OF PHOTO AND THE PHOTO AND PUTTING IT ON THE SITE
    }
    ?></div>
    </body>
    </head>


    <!-- FOOTER --> 

    <footer>
		<div class="wrapper">
			<p><h2>  [RP Community Name] </h2><br><h3>© 2023 Made By Hamster-Systems</h3></p>		</div>
	</footer>


</body>   
</html> 
