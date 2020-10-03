<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUMRUK SİTESİ</title>
    <link href="gumrukforum.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="tryjs.js" type="text/javascript"></script> 
    <style>
        .parallax {
          /* The image used */
          background-image: url("images/unnamed.jpg");
        
          /* Set a specific height */
          min-height: 200px; 
        
          /* Create the parallax scrolling effect */
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        </style>
</head>
<body>
  <?php
  require('db.php');
  session_start();
    
    if(isset($_POST['username']) && isset($_POST['email']))
   {
       $username=stripslashes($_REQUEST['username']);
       $username=mysqli_real_escape_string($con,$username);

       $email=stripslashes($_REQUEST['email']);
       $email=mysqli_real_escape_string($con,$email);
   
       $password=stripslashes($_REQUEST['password']);
       $password=mysqli_real_escape_string($con,$password);
       
       

       $query="INSERT INTO `users`(username,email,password) VALUES ('$username','$email','$password')";
       $result=mysqli_query($con,$query);

       if($result)
       {
           echo "<div class='form'><h3>You are registered successfully. </h3><br> Click here to<a href='gumrukforum.php'>Login</a></div>";
       }
    } 
    else if(isset($_POST['username']))
    {
        $username=stripslashes($_REQUEST['username']);
        $username=mysqli_real_escape_string($con,$username);
    
        $password=stripslashes($_REQUEST['password']);
        $password=mysqli_real_escape_string($con,$password);
    
        $query="SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $result=mysqli_query($con,$query);
        $rows=mysqli_num_rows($result);
        if($rows==1)
        {
            $_SESSION['username']=$username;
            header("location:afterlogin.php");
        }
        else{
            echo "<div class='form'><h3> Username/password is incorrect. </h3> <br> Click here to <a href='loging.php'>Login</a></div>";
        
        }
    }
     else{
     ?> 
    else{
     ?>
    <nav>
        <ul>
          <li><a href="gumruk.html" id="ctl00_gtipmenu">ANA SAYFA</a></li>

          <li><a href="mevzuat.html" id="ctl00_mevzuatmenu" >MEVZUAT</a></li>
          <li><a href="sss.html" id="ctl00_sssmenu" >S.S.S.</a></li>

          <li><a href="sorgulama.html"  id="ctl00_gumrukmenu">SORGULAMA</a></li>

 
            
        </ul>

        <ul class="dene">
            <li id="üyesol"><a href="#" id="ctl00_A12">ÜYE GİRİŞİ</a></li>
        </ul>
    </nav>

    <div class="containe demo" id="cd">
        <div class="content">
           <div id="large-header" class="large-header">
              <canvas id="demo-canvas"></canvas>
              <h1 class="main-title"><span class="thin">GÜMRÜK Sitesi</span> </h1>
           </div>
        </div>
     </div>
    <div class="parallax"></div>
    <div class="login-page">
        <div class="form">
            
          <form class="register-form" action="" method="POST" name="register">
            <input type="text" placeholder="username" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <input type="text" name="email" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form>
          <form class="login-form" action="" method="POST" name="Login">
            <input type="text" placeholder="username" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <button>login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
            <script>
              $('.message a').click(function(){
  $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

          </script>

            
          </form>
        </div>
      </div>
      <div class="parallax"></div>
      <div class="social">
        <a href="https://facebook.com" class="link facebook" target="_blank">   <img  src="images/social-facebook-button-blue-icon.png" width="50px"  height="50px"/>  <span class="fa fa-facebook-square"></span></a>
        <a href="https://twitter.com" class="link twitter" target="_blank">    <img  src="images/twitter-icon.png" width="50px"  height="50px"/><span class="fa fa-twitter"></span></a>
        <a href="https://instagram.com" class="link google-plus" target="_blank">  <img  src="images/Instagram-icon.png" width="50px"  height="50px"/><span class="fa fa-google-plus-square"></span></a>
      </div>
    
    
    
    
    
        <footer>
    
            <div class="clearfix"></div>
            </div>
            <!-- end of home-box-container -->
    
            <!-- COPYRIGHT INFO -->
            <div class="gl-copyright-info-wrapper">
                <p>Copyright © 2020 Gümrük</p>
            </div>
    
        </footer>
        <?php }?>
</body>
</html>