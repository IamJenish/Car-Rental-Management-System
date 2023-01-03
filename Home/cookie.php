<?php
    $cookie_name="user";
    $cookie_value="Ram";
    setcookie($cookie_name,$cookie_value,time()+3600,"/");
    #header("location: http://localhost/Home/test1.php");

?>
<html>
    <button><a href="http://localhost/Home/test1.php">index</a></button>
</html>