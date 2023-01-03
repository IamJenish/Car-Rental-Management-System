<?php
    $uname=$_GET['cname'];
    $pass=$_GET['pass'];
    $conn=new mysqli("localhost","root","","carrental");
    $sql="select * from customers";
    try{
        $result=$conn->query($sql);
        $flag=0;
        while($row=$result->fetch_assoc()){
            if(($row['cname']==$uname) and ($row['pass']==$pass)){
                $cookie_name="user";
        $cookie_value=$uname;
        setcookie($cookie_name,$cookie_value,time()+3600,"/");
        header("location: http://localhost/Home/index.php");
                $flag=1;
        }
        if ($flag==0){
            echo("Sorry");
        }
    }
    }catch(PDOException $e){
        echo("Error: ".$e->getMessage());
    }
?>