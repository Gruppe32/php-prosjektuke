<?php
    session_start();
    if(isset($_SESSION['brukernavn'])) {
        header('Location: hovedside.php');
        exit();
    }
    require 'db.php';
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../css/logincss.css">
    </head>
<body>
    <!-- Kilde for logo: http://westerdals.modulez.no/public/article/196-hovedlogo -->
	<img src="../img/midtlogo.jpg" alt="logo" id="logo">
    <?php
        if (isset($_GET['error'])) {
            echo '<h2>Du må logge inn for å bruke denne bookingsiden</h2>';   
        }
    ?>
	<div id="hovedboks">      
    <form method="post" action="logginn.php">
        	Brukernavn:<br>  <input type="text" name="user" class="boks" id="brukernavn"/><br>    
        	Passord:<br>  <input type="password" name="pass" class="boks"/>        
       	 <input type="submit" name="submit" value="Logg inn" id="login" />
    </form>
</body>
</html>