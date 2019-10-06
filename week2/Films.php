<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 04/10/2019
 * Time: 19:53
 */
require_once 'includes/conn.php';

$db = getConn();

$sql = "SELECT title, rating, description FROM nfc_film";

$stmt = $db->query($sql);

while ($line = $stmt->fetchObject()){
    echo $line->title . " - " . $line->rating . " - " . $line->description."<br/>";
}
$db = close();