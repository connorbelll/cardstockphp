<?php
/**
 * Created by PhpStorm.
 * User: connorbell
 * Date: 1/18/16
 * Time: 5:00 PM
 */
function getDB(){
    $mysqli = new mysqli("localhost", "root", "cardstock", "cardstock");
    if ($mysqli->connect_errno) {
        //echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        return null;
    }
    return $mysqli;
}



