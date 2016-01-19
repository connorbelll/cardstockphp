<?php
/**
 * Created by PhpStorm.
 * User: connorbell
 * Date: 1/18/16
 * Time: 5:41 PM
 */
require_once('../database/csdb.php');
header('Content-Type: application/json');

$mysqli = getDB();
$res = $mysqli->query("SELECT * FROM games ORDER BY id ASC");

$res->data_seek(0);
$return = array();
while ($row = $res->fetch_assoc()) {
    $return[] = $row;
}
echo json_encode($return);