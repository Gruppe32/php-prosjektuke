<?php


include_once('user.php');

if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $pass = $_POST['pass'];

    $object = new User();
    $object->Login($name, $pass);
}


?>



<html>
<head><head>
<body>

    <form method="post" action="index.php">
        Brukernavn: <input type="text" name="user"/>@westerdals.no
        Passord: <input type="password" name="pass"/>
        <input type="submit" name="submit" value="Logg inn"/>
    </form>
</body>
</html>