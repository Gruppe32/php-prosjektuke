<?php
/**
 * Created by PhpStorm.
 * User: maggie
 * Date: 2015-03-17
 * Time: 13:47
 */

include_once('connect.php');

class User{
     /*
    private $db;
    public function __construct(){
        $this->db = new Connection();
        $this->db = $this->db->dbConnect ();


    }
     */

    $database = new PDO("mysql:host=localhost;dbname=Login", "root", "");
     //START login
    public function Login($name, $pass){
        if(!empty($name) && !empty($pass)){
            $st = $database->prepare("select * from user where name = :name and pass = :pass");
            $st->bindParam(':name', $name);
            $st->bindParam(':pass', $pass);
            $st->execute();


            if($st->rowCount() == 1){
                echo "Bruker verifisert, tilgang innvilget!";
            }else {
                echo "Feil brukernavn eller passord!";
            }
        }else{
            echo "Vennligst tast inn brukernavn eller passord";
        }
    } // END login
} // END class


?>