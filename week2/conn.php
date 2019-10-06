<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 04/10/2019
 * Time: 19:54
 */

function getConn(){
    return new PDO('sqlite:nfc_films_v2.sqlite');
}