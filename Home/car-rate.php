<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modal 3</title>
    <link rel="stylesheet" type="text/css" href="./car-rate-design.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <?php
    $cookie_name="carname";
    $cookie_value=$_GET['car-name'];
    setcookie($cookie_name,$cookie_value,time()+3600,"/");
?>
    <script src="jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#finalrate").hide();
            $("#but").click(function(){
                $val=$("#dist").val();
                $fval=$("#finalrate").html();
                $bookingcost=($fval/5)*$val; 
                $("#para").text(($fval/5)*$val);
            });
        });
    </script>  
    <script src="jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#subbut').click(function(){
                $c=$('#para').html();
                alert($c);
                $d=$("#dist").val();
                location.replace("http://localhost/Home/finalpage.php?cost="+$c+"&distance="+$d);}
        );});
    </script>
  </head>
  <body>
    <main class="page-content">
      <button onclick="toggleModal()" type="button" class="button">Find Your Trip Expense</button>
    </main>
    <div class="background" onclick="toggleModal()"></div>
    <div class="modal">
      <div class="modal-content">
        <h2 style="text-align:center;color:#f4581f;">
            <?php
                $a=$_GET['car-name'];
                echo($a);
            ?>
        </h2>
        <div>
            <div>
                <img src="<?php
                $img=$_GET['image'];
                echo($img);
                ?>" style="width:400px;height:250px;padding-left:200px;">
            </div><br>
            <div style="position:relative;height:4px;width:78%;background-color:#f4581f;left:80px;"></div><br>
            <div style="padding-left:280px;">
                car ID : <?php
                            $conn=new mysqli("localhost","root","","carrental");
                            $sql="select car_ID from cardetails where car_name='".$_GET['car-name']."'";
                                try{
                                    $result=$conn->query($sql);
                                    $value=$result->fetch_object();
                                    echo($value->car_ID);
                                    $cookie_name="carID";
                                    $cookie_value=$value->car_ID;
                                    setcookie($cookie_name,$cookie_value,time()+3600,"/");

                                }
                                catch(Exception){
                                    echo("");
                                }
                            $conn->close();
                        ?> <br>
                No of Seats : <?php
                            $conn=new mysqli("localhost","root","","carrental");
                            $sql="select no_of_seats from cardetails where car_name='".$_GET['car-name']."'";
                                try{
                                    $result=$conn->query($sql);
                                    $value=$result->fetch_object();
                                    echo($value->no_of_seats);
                                    $cookie_name="no_of_seats";
                                    $cookie_value=$value->no_of_seats;
                                    setcookie($cookie_name,$cookie_value,time()+3600,"/");

                                }
                                catch(Exception){
                                    echo("");
                                }
                            $conn->close();
                        ?><br>
                Cost per 5 km : <?php
                            $conn=new mysqli("localhost","root","","carrental");
                            $sql="select cost from cardetails where car_name='".$_GET['car-name']."'";
                                try{
                                    $result=$conn->query($sql);
                                    $value=$result->fetch_object();
                                    echo($value->cost);

                                }
                                catch(Exception){
                                    echo("");
                                }
                            $conn->close();
                        ?><br>
                Distance : <input type="text" id="dist">
                <button id="but" style="width:100px;height:25px;text-align:center;background-color:#101012;color: #f9f9f9;">Submit</button><br>
                Total cost : <span>&#8377;</span><span id="para" name="para" style="color:#f9f9f9;"></span>
            </div>
            <div id="finalrate" style="display:hidden;"><?php
                            $conn=new mysqli("localhost","root","","carrental");
                            $sql="select cost from cardetails where car_name='".$_GET['car-name']."'";
                                try{
                                    $result=$conn->query($sql);
                                    $value=$result->fetch_object();
                                    echo($value->cost);

                                }
                                catch(Exception){
                                    echo("");
                                }
                            $conn->close();
                        ?></div>
            <div style="padding-left:350px;padding-top:15px;">
            <button style="height:50px;width:120px;background-color:#101012;color:white;" id="subbut">Submit</button></div>
        </div>
      </div>
    </div>
    <script>
      const toggleModal = () => document.body.classList.toggle("open");
    </script>
  </body>
</html>