<?php
/**
 * Created by PhpStorm.
 * User: maggie
 * Date: 2015-03-17
 * Time: 13:30
 */

class Connection{

    public function dbConnect(){
        return new PDO("mysql:host=localhost; dbname:Login", "root", "");
    }
}