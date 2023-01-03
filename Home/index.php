<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrental</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet"
    />
    <link href="./homecss.css" rel="stylesheet" />
  </head>
  <body class="background">
    <div>
      
      <div style='position: absolute; top: 130px; left: 10px; color:aliceblue; padding-top:133px; padding-left: 100px;'  >
        <div style="height:4px;width:60%;background-color:#f4581f"></div>
        <h1>Book a Car Near You<br> and Drive in<br> Minutes!  </h1>
        <div style="height:4px;width:15%;background-color:#f4581f"></div><br>
        <div class="sub-text">Book the selected car effortlessly, pay for driving only.<br>
Join our service instantly by installing our app.</div>
      </div>
    
    <nav class="navbar">
    <div style="width:350px;">
      <img class="navbar-logo" src="./Images/logo.jpg" align="right">
    </div>

    <?php
    if(isset($_COOKIE["user"]))
    {
        echo("Welcome ".$_COOKIE["user"]);
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
    </nav>
    <script type="text/javascript">
      const toggleMenu = () => {
        document.body.classList.toggle("open");
      };
    </script> 
    </div>
    <div class="second-phase">
      <div style="position: absolute; top: 1000px; left: 590px; padding-top:133px; padding-left: 100px;color:grey;">HOW IT WORKS</div>
      <div style="position: absolute; top: 1050px; left: 370px; padding-top:133px; padding-left: 100px;font-size: 40px;">Carsharing Has Never Been That Easy</div>
      <div style="height:4px;width:120px;background-color:#f4581f;top:1250px;position: absolute;left:690px;"></div> 
      <div style="position: absolute; top: 1150px; left: 385px; padding-top:133px; padding-left: 100px;font-size: 18px;">Book a car when you need to drive, save greatly, and enjoy freedom of movement.</div>
    </div>
    <div class="third-phase">
      <div class="inline">
        <div class="span-image">
        <img src="images/icon1.svg" class="img">
        </div>
        <div class="img-text">
          <h3>&nbsp;&nbsp;&nbsp;Visit Our Website</h3>
        </div>
      </div>
      <div class="inline">
        <div class="span-image">
        <img src="images/icon2.svg" class="img">
        <div class="img-text">
          <h3>&nbsp;Book a Car</h3>
        </div>
        </div>
      </div>
      <div class="inline">
        <div class="span-image">
          <img src="images/icon3.svg" class="img">
          <div class="img-text">
            <h3>Enjoy Your Ride</h3>
          </div>  
        </div>
      </div>
      <div class="inline">
        <div class="span-image">
          <img src="images/icon4.svg" class="img">
          <div class="img-text">
            <h3>&nbsp;Return Car</h3>
          </div>
          </div>
        </div>
    </div>
    <div style="height:100px;width:100%;position:absolute;top:1700px;"></div>
    <div class="final">
      <div style="position: absolute; top: 200px; left: 590px; padding-top:133px; padding-left: 100px;color:white;">FAQ</div>
      <div style="position: absolute; top: 250px;font-family:sans-serif;font-weight:bold;color:#ff8c00; left: 380px; padding-top:133px; padding-left: 100px;font-size: 40px;">Answering Your Questions</div>
      <div style="height:4px;width:120px;background-color:#4166f5;position: absolute;top:450px;left:650px;"></div> 
      <div style="position: absolute; top: 350px; left: 305px; padding-top:133px; padding-left: 100px;font-size: 18px;color:#ff8c00;font-family:sans-serif;">We have made the conditions for using our carsharing service as simple as possible. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you still have any questions, please contact us in any convenient way.</div>
      
      
      <div style="position:relative;top:600px;left:200px;" >
        <div style="position:absolute">
        <div>
        <div class="one faq">
          <h2>What cars can I rent?</h2><br>You can book cars of any class for short-term rent,<br> from compact city coupes to minivans.
        </div>
        <div class="one faq">
          <h2>What if I need extra time?</h2><br>
          When booking a car, you specify the duration of your rental.<br> If you need some extra time, a special tariff will be applied.
        </div>
        </div>
        <div>
        <div class="two faq">
          <h2>Can I increase the mileage limit?</h2><br>
          Yes, in this case, select the appropriate option <br>when booking a car.
        </div>  
        <div class="two faq">
            <h2>How much does carsharing cost?</h2><br>
            We have different tariffs based on the class of the car you select<br> and on the trip length. The minimum cost is $ 1 per minute.
        </div>
        </div>
        <div>
          <div class="three faq">
            <h2>Are the cars insured?</h2><br>
            Yes, we provide secondary insurance for all trips.<br><br><br>
          </div>  
          <div class="three faq">
              <h2>What cities do you cover?</h2><br>We cover the majority of US cities, including New York,
              Washington, Miami, Boston, etc.The UDRIVE carsharing app is available  for iOS and Android. You can
              download it from Google Play and App Store.
          </div>
          </div>
    </div>
    </div>
    </div>
  </body>
</html>

