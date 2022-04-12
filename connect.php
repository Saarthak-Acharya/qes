<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwrd = $_POST['passwrd'];

    //database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);

    }else{
      $start = $conn->prepare("insert into registration(username, email, passwrd)
                                values(?,?,?)");
      $stmt->bind_para("sss",$username, $email, $passwrd);
      $stmt->execute();
      echo "Registration Successfull!!";
      $stmt->close();
      $stmt->close();
    }
?>
