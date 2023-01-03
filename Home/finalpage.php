<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="car_style.css">
    <link rel="stylesheet" href="./homecss.css">
</head>
<body class="bg-img">
    <nav class="navbar">
        <div style="width:350px;">
          <img class="navbar-logo" src="./Images/logo.jpg" align="right">
        </div>
        <?php
    if(isset($_COOKIE["user"]))
    {
        echo("Welcome ".$_COOKIE["user"]);
    }else{
        header("location:error.html");
    }
?>
    </nav>
    <button class="navbar-burger" onclick="toggleMenu()"></button>
    <nav class="menu">
      <a href="index.html" style="animation-delay: 0.1s">Home</a>
      <a href="about.html" style="animation-delay: 0.2s">About</a>
      <a href="car-index.html" style="animation-delay: 0.3s">Services</a>
      <a href="http://localhost/Home/login.php" style="animation-delay: 0.4s">Login</a>
      <a href="contact.html" style="animation-delay: 0.5s">Contact</a>
      <a href="logout.php" style="animation-delay: 0.6s">Logout</a>
    <script type="text/javascript">
      const toggleMenu = () => {
        document.body.classList.toggle("open");
      };
    </script> 
    </div>
        
        </nav>
    <br><br><br><br><br>
        <div class="fonts" style="color:#ff9f00;position: absolute; top: 130px; left: 350px; padding-top:133px; padding-left: 100px;">
        Vehicle status
        <div style="position:relative;height:4px;width:700px;background-color:#f4581f;left: 0px;"></div>
    <div class="fonts" style="color:#f9f9f9;position:relative;top:0px;">
        <?php
            if(isset($_COOKIE["user"]))
            {
                echo($_COOKIE["user"]);
            }
            ?>
        ,Your Booking has been confirmed us.<br>Have a safe journey.<br>
        <?php echo("Car model : ".$_COOKIE['carname']);
        echo("<br>Car ID : ".$_COOKIE['carID']);
        echo("<br>No of seats : ".$_COOKIE['no_of_seats']);
        echo("<br>Amount to be paid : ".$_GET['cost']);
        $conn=new mysqli("localhost","root","","carrental");
        $sql="insert into customerdetails values('".$_COOKIE['user']."','".$_COOKIE['carID']."','"
                            .$_COOKIE['carname']."','".$_COOKIE['no_of_seats']."','".$_GET['distance']."','".$_GET['cost']."')";
                                try{
                                    $result=$conn->query($sql);
                                }
                                catch(Exception){
                                    echo("Error");
                                }
                            $conn->close();
                        ?>
        </div>
        </div>
    </div>
</body>
</html>

