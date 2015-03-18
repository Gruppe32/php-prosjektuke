<?php
    require 'db.php';
    session_start();

    if(isset($_POST['submit'])){
        
        $name = $_POST['user'];
        $pass = $_POST['pass'];
        
        if(!empty($name) && !empty($pass)){
            $st = $database->prepare("select * from user where name = :name and pass = :pass");
            $st->bindParam(':name', $name);
            $st->bindParam(':pass', $pass);
            $st->execute();

            if($st->rowCount() == 1){
                $_SESSION['brukernavn'] = $name;
                header('Location: html/index.html');
                exit();
            } else {
                echo "Feil brukernavn eller passord!";
            }
        } else{
            echo "Vennligst tast inn brukernavn eller passord";
        }
    }
?>