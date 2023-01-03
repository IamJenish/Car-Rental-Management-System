<html>
<?php
$conn=new mysqli("localhost","root","","carrental");
$sql="insert into cardetails values(27,'tata',4,45);";
try{
echo($sql);
$result=$conn->query($sql);
if($conn->query($sql)==true)
{
    echo("<h2>success</h2>");
}
else{
    echo("<h2>error</h2>");
}
}
catch(Exception){
    echo("");
}
$conn->close();
?>
</html>

<html>
    <body>
<?php
$a=$_GET['car-name'];
echo($a);
?>
</body>
</html>

