<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		

		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Bree's Portfolio</title>
</head>
<body>
	<div id="container">
		<div id="mainContainer">
			<img src="images/bree2.png" id="bgImage" alt="">
			<div id="flexContainer">
				<div id="infoContainer">
					<h2 id="hello">Hello,</h2>
					<h1 id="myName">I'm Bree</h1>
					<p id="introPara">A Freelance Full-Stack Web Developer from Birmingham.</p>
					<button id="hireMe" onclick="openNav3()">Hire Me</button>
				</div>
				<div id="sideMenu" class="">
					<ul id="menuBar" class="">
						<li id="kitty" class="liMenu animate__animated " ><img src="images/cat.png" id="catImage" class="" alt="Cat Icon"></li>
						<li id="abtBtn" class="liMenu" onclick="openNav1()"><a>About Me</a></li>
						<li id="projectsBtn"class="liMenu" onclick="openNav2()">Projects</li>
						<li id="contactBtn" class="liMenu" onclick="openNav3()">Contact</li>
						<li id="funBtn" class="liMenu" onclick="openNav4()">Fun</li>
					</ul>
				</div>
				<div id="menuHTMLWrapper">
					<div id="aboutHTML" class="show position">
						<p>A website is the bedrock of all digital activities. Without a website, a business has no digital headquarters.</p>
						<p>Hello, I'm Bree! I design and build beautiful, responsive (mobile friendly) websites designed to engage your audience, deliver your message, and establish your brand.</p>
						<p>I've been in the industry since earning my certification from Jefferson State College in the Spring of 2021.</p>
						<div id="skills">
							<strong><u>Skills</u></strong>
							<span>
							<p>HTML</p>
							<p>CSS</p>
							<p>Javascript</p>
							<p>jQuery</p>
							<p>MySQL</p>
							<p>PHP</p>
							</span>
							</div>
					</div>
					<div id="portfolioHTML" class="show position">
						



						<!-- Carousel -->

						<div class="slideshow-container">
							<h4>One Destiny Designs</h4>
							<div class="mySlides fade">
								<div class="numbertext">1 / 3</div>
								<img src="images/odd_thumbnail_one.png" style="width:200px">	
							</div>
							<div class="mySlides fade">
								<div class="numbertext">2 / 3</div>
								<img src="images/odd_thumbnail_two.png" style="width:200px">	
							</div>
							<div class="mySlides fade">
								<div class="numbertext">3 / 3</div>
								<img src="images/odd_thumbnail_three.png" style="width:200px">	
							</div>
							<!-- Next and previous buttons -->
								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next" onclick="plusSlides(1)">&#10095;</a>
							</div>
							<br>
							<!-- The dots/circles -->
							<div style="text-align:center">
								<span class="dot" onclick="currentSlide(1)"></span>
								<span class="dot" onclick="currentSlide(2)"></span>
								<span class="dot" onclick="currentSlide(3)"></span>
						</div>
						<div class="thumbnailBtns">
							<button class="githubBtn"><a href="https://github.com/breetucker?tab=repositories" target="_blank">View Code</a></button>
							<button id="siteOdd"><a href="https://onedestinydesigns.com" target="_blank">View Site</a></button>
						</div>
					 </div>
						<!-- Fun HTML-->
					
				
					<div id="funHTML" class="show position">
						<div id="weather" class="">
							<div id="location">
								<h1 id="locationTimezone">Timezone</h1>
								<p id="iconsW">ICON</p>
							</div>
							<div id="temperature">
								<div id="degreeWrapper">
									<h2 id="tempDegree">34</h2>
									<span>F</span>
								</div>
								<div id="tempDescription">This data will only display if you accept location services.</div>
							</div>
						</div>
						<!-- <p id="gamePara">Care to play a game?</p>
						<a id="pongLink" href="pong.php" target="popup" 
						onclick="window.open('pong.php', 'popup','width=600, height=400, scrollbars=no,resizeable=no'); return false;">Click me!</a> -->

					</div>
				</div>
			</div>
			<form>
				<div id="contactHTML" class="contactCss">
					<label for="contactForm">
						<h3>Contact:</h3>
						<p>Email:<a href="mailto: breetucker@live.com">  Breetucker@live.com</a></p>
						<input type="text" placeholder="Please enter your name here." required />
						<input type="email" placeholder="Email" required />
						<input type="number" name="contactPhoneNumber" id="contactNumber" placeholder="Contact #">
						<textarea placeholder="Message goes here..." ></textarea>
						<input type="submit" value="Message Me">
					</label>
				</div>
			</form>
			<div id="icons">
				<ul id="ulIcons">
					<li class="liIcons"><a href="https://www.instagram.com/breejot/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li class="liIcons"><a href="https://www.facebook.com/Breefuss" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
					<li class="liIcons"><a href="https://www.linkedin.com/in/breetucker" target="_blank"><i class="fab fa-linkedin"></i>
					</a></li>
					<li class="liIcons"><a href="https://github.com/breetucker" target="_blank"><i class="fab fa-github"></i>
					</a></li>
				</ul>
				<?php
				include("includes/footer.php");
				?>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>