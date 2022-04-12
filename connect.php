<?php
    $servername = "localhost";
    $username = "username";
    $email = "email";
    $passwrd = "passwrd";

    //database connection
try{
    $conn = new PDO("mysql:host=$servername;dbname=Studentdb",$username,$passwrd);
    $conn-
        >setAttribute(PDO::ATTR_ERRMODE,PDOERRMODE_EXCEPTION);
    echo "Registered successfully";
} catch(PDOException $e) {
  echo "Registration Failed" . 
    $e->getMessage();
}
?>
