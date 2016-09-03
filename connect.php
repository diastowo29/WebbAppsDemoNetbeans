<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "webappsdemo";

$con = new mysqli($host, $username, $password, $db);
    if ($con->connect_error) {
       exit('Connect Error (' . mysqli_connect_errno() . ') '
              . mysqli_connect_error());
    }
//echo 'connect success!';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

