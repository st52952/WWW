<?php

$db = mysqli_connect('localhost','','','test');

if(!$db){
    die('error connecting to database');
}

echo 'connected.';

?>