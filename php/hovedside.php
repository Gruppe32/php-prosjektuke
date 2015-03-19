<?php
    session_start();
    if (isset($_SESSION['brukernavn'])) {
        echo $_SESSION['brukernavn'];
    } else {
        header("Location: index.php?error");
    }
?>
<!DOCTYPE html> 

<html>
<head>

	<meta charset="UTF-8">	
	<title>Booking</title>
	<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="../css/hovedsidecss.css"/>

</head>
<body>  

 <!-- Kilde for logo: http://westerdals.modulez.no/public/article/196-hovedlogo
	  Favicon kilde: http://www.westerdals.no/content/themes/westerdals/assets/images/favicon.png-->  
<a href="hovedside.php"><img src="../img/midtlogo.jpg" alt="logo" id="logo"></a>

<!-- Kilder for dropdown menu: http://line25.com/tutorials/how-to-create-a-pure-css-dropdown-menu -->
<div id="dropdownmenu">
<nav>
	<ul>
		<li class="hovedfane" id="fane1"><a href="../html/kalender.html">Kalender</a></li>
		<li class="hovedfane" id="fane2"><a href="#">QuickBook</a>
			<ul>
				<li><a href="#">2 personer</a>
					<ul>
						<li><a href="#">Uten prosjektor</a></li>
						<li><a href="#">Med prosjektor</a></li>
					</ul>
				</li>
				<li><a href="#">3 personer</a>
					<ul>
						<li><a href="#">Uten prosjektor</a></li>
						<li><a href="#">Med prosjektor</a></li>
					</ul>
				</li>
				<li><a href="#">4 personer</a>
					<ul>
						<li><a href="#">Uten prosjektor</a></li>
						<li><a href="#">Med prosjektor</a></li>
					</ul>
				</li>

			</ul>
		</li>
		<li class="hovedfane" id="fane3"><a href="../html/Faq.html">FAQ</a></li>
		<li class="hovedfane" id="fane4"><a href="../html/Kart.html">Kart</a></li>
		<li class="hovedfane" id="fane5"><a href="#">Dine reservasjoner</a></li>
	</ul>
</nav>
</div> 
    
<div id="hovedboks">
	<a href="../html/romBookTest.html">
		<div class="boks" id="b1">
			<h1 class="text">Rom 1</h1>
			<img src="../img/2people.png" alt="2 personer" class="people">
		</div>
	</a>
	<a href="#">
		<div class="boks" id="b2">
			<h1 class="text">Rom 2</h1>
			<img src="../img/3people.png" alt="3 personer" class="people">
		</div>
	</a>
	<a href="#">
		<div class="boks" id="b3">
			<h1 class="text">Rom 3</h1>
			<img src="../img/4people.png" alt="4 personer" class="people">
		</div>
	</a>
	<a href="#">
		<div class="boks" id="b4">
			<h1 class="text">Rom 4</h1>
			<img src="../img/2people.png" alt="2 personer" class="people">
			<img src="../img/projector.png" alt="projector" class="projector">
		</div>
	</a>
	<a href="#">
		<div class="boks" id="b5">
			<h1 class="text">Rom 5</h1>
			<img src="../img/3people.png" alt="3 personer" class="people">
			<img src="../img/projector.png" alt="projector" class="projector">
		</div>
	</a>
	<a href="#">
		<div class="boks" id="b6">
			<h1 class="text">Rom 6</h1>
			<img src="../img/4people.png" alt="4 personer" class="people">
			<img src="../img/projector.png" alt="projector" class="projector">
		</div>
	</a>
</div>

<div class="border"></div>

<a href="loggut.php">
	<div class="logout">
		<h2 id="logouttext">Logg ut</h2>
	</div>
</a>

</body>
</html>