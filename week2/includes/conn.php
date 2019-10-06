<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 04/10/2019
 * Time: 19:54
 */

function getConn(){
    try {
        return new PDO('sqlite:db/nfc_films_v2.sqlite');
    }
    catch (Exception $e){
        //just print for debug
        echo $e->getMessage();
        exit();
    }
}
function close(){
    return $db = null;
}