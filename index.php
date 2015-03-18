<?php
    session_start();
    require 'db.php';
?>
<html>
<head><head>
<body>
    <?php if(isset($_SESSION['brukernavn'])) echo 'Hei, ' . $_SESSION['brukernavn']; ?>
    <form method="post" action="test.php">
        Brukernavn: <input type="text" name="user"/>@westerdals.no
        Passord: <input type="password" name="pass"/>
        <input type="submit" name="submit" value="Logg inn"/>
    </form>
    <?php if(isset($_SESSION['brukernavn'])) echo '<a href="loggut.php">Logg ut</a>'; ?>
</body>
</html>