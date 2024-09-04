<?php
    $servername="localhost";
    $username="root";
    $pass="";
    $dbname="data";

    $conn=mysqli_connect($servername,$username,$pass,$dbname);

    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    if(!$conn){
        dir("connection failed");
    }
    else{
        dir("connectin successfull");
    }

    $sql="INSERT INTO `user`(`name`,`email`,`subject`,`message`) VALUES('$name','$email','$subject','$message')";

    if (mysqli_query($conn,$sql)) {
        # code...
        echo "record successfully inserted";
    }
    else{
        echo "some error are occured";
    }

  $conn->close();

?>