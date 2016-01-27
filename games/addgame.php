<?php
/**
 * Created by PhpStorm.
 * User: connorbell
 * Date: 1/18/16
 * Time: 4:58 PM
 */
require_once('../database/csdb.php');
header('Content-Type: application/json');

$mysqli = getDB();
$toInsert = $_POST["name"];
$query = "INSERT INTO `games` (`name`) VALUES ('" . $toInsert . "')";
if ($mysqli->query($query) === TRUE) {
    $status =  "New record created successfully";
} else {
    $status =  "Error: " . $query . "<br>" . $mysqli->error;
}
echo json_encode(array($status,$toInsert));