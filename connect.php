<?php
    $host='localhost';
    $username ='username';
    $email ='email';
    $password ='passwrd';
    $db='studentdb';
    $con=mysqli_connect($host_$user,$pass,$db);
    if($con)
    echo'connected successfully to studentdb database';
    $sql="insert into(username,email,passwrd)values('Ganesh','ganesha@gmail.com','ganesha169')";
    $query=mysqli query($con,$sql);
    if($query)
    echo'data inserted successfully';
?>
