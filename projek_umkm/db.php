<?php

$host="localhost";
$username="root";
$password="";
$database="db_login";

$conn= mysqli_connect($host,$username,$password,$database);

if($conn->connect_error){
    echo "Koneksi error";
    die ("error");
}

?>