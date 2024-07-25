



<?php

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pswd=$_POST['pswd'];
    echo $fname;




/*
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $e_mail=$_POST['email'];
    $gender=$_POST['optradio'];
    $password=$_POST['pswd'];
    //database connection;
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);

    }else{
        $stmt=$conn->prepare("Insert into registeration(firstName,lastName,e_mail,gender,password)
        values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$firstName,$lastName,$e_mail,$gender,$password);
        $stmt->execute();
        echo "registeartion Succesfully...";
        $stmt->close();
        $conn->close();

    }
    */
?>