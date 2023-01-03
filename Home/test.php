<html>
<?php
                            $conn=new mysqli("localhost","root","","carrental");
                            $sql="select car_ID from cardetails where car_name='".$_GET['car-name']."'";
                                try{
                                    $result=$conn->query($sql);
                                    $value=$result->fetch_object();
                                    echo($value->car_ID);

                                }
                                catch(Exception){
                                    echo("");
                                }
                            $conn->close();
    ?>
</html>