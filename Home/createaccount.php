<?php
    $uname=$_GET['uname'];
    $email=$_GET['email'];
    $cno=$_GET['cno'];
    $pass=$_GET['pass'];
    $conn=new mysqli("localhost","root","","carrental");
    $sql="insert into customers values('".$uname."','".$email."','".$cno."','".$pass."')";
    try{
        $result=$conn->query($sql);
        header("location:login.php");
    }catch(PDOException $e){
        echo("Error: ".$e->getMessage());
    }
?>