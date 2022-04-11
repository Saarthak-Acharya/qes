<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);

    }else{
      $start = $conn->prepare("insert into registration(username, email, password)
                                values(?,?,?)");
      $stmt->bind_para("sss",$username, $email, $password);
      $stmt->execute();
      echo "Registration Successfull!!";
      $stmt->close();
      $stmt->close();
    }
?>