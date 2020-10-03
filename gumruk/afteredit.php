<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query="SELECT * FROM `users` WHERE id='".$id."'";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUMRUK SİTESİ</title>
    <link href="layout.css" rel="stylesheet">
    <script type="text/javascript" src="login.js"></script>

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
        table{
    border: 5px outset red;
  background-color:green;
  text-align: center;
  margin:20px;
  margin-right:150px;
  float: left;
  }
  .uyeformm{
    border: 5px outset red;
    background-color:green;
      
      margin-left:20px;
     
      margin-bottom:20px;
      
  }
  td{
    border: 2px outset blue;
  background-color:green;
  
 
  
  }
  #logout{
    border: 2px outset blue;
  background-color:green;
  position:relative;
  bottom:200px;
  left:1602px;
  }
  #bilgi{
    border: 2px outset blue;
  background-color:green;
  position:relative;
  bottom:250px;
  left:1520px;
  }
  .form{
     position:relative;
     width:1000px; 
     height:500px;
     
  }
  
        </style>

        
</head>
<body>
    <nav>
        <ul>
            <li><a href="gumruk.html" id="ctl00_gtipmenu">ANA SAYFA</a></li>

            <li><a href="mevzuat.html" id="ctl00_mevzuatmenu" >MEVZUAT</a></li>
            <li><a href="sss.html" id="ctl00_sssmenu" >S.S.S.</a></li>

            <li><a href="sorgulama.html"  id="ctl00_gumrukmenu">SORGULAMA</a></li>
            
        </ul>

        <ul class="dene">
            <li id="üyesol"><a href="gumrukforum.php" id="ctl00_A12">ÜYE GİRİŞİ</a></li>
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
 

    <div class="uyeformm">
        <p>Welcome  <?php echo $_SESSION['username'];?>!</p>
        
     
    </div>
  





<table>
    <tr>
        <td>Ürün Adı</td>
        <td>Katogeri</td>
        <td>Vergi</td>
    </tr>
    <?php 
                $server="localhost:3306";
                 $con=mysqli_connect($server,"root","","userdb") or die("Hata");
                 $sql="select * from gumruk";
                 $res=mysqli_query($con,$sql);
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
               // $verileriCek = mysqli_query("SELECT username,password FROM users");
               
                
                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysqli_fetch_array($res)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $ad = $b['name'];
                    $cato = $b['cato'];
                    $vergi = $b['vergi'];
                     
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "<tr>
                    <td>$ad</td>
                    <td>$cato</td>
                    <td>$vergi</td>
                </tr>";
                     
                }
                 
   ?>
                 
</table>



<div class="form" >
        
        <?php
        $status="";
        if(isset($_POST['new']) && ($_POST['new']==1))
        {
        $id=$_REQUEST['id'];
        
        $name=$_REQUEST['username'];
        $pass=$_REQUEST['password'];
        
        $update="UPDATE `users` SET username='".$name."',password='".$pass."' WHERE id=1";
        mysqli_query($con,$update);
        $status="Record updated successfully.<br><br><a href='afterlogin.php'> Go Back</a>";
        echo '<p style="color:"red";>'.$status.'</p>';
        }
        else{
        ?>
        <div>
            <form name="form" method="POST" action="">
                <input type="hidden" name="new" value="1"/>
                <input type="hidden" name="id" value="<?php echo $rows['id']?>"/>
                <p><input type="text" name="username" placeholder="UserName" required value="<?php echo $rows['username'];?>" /></p>
                <p><input type="text" name="password" placeholder="Password" required value="<?php echo $rows['password'];?>" /></p>
                <p>
                    <input type="submit" name="submit" value="Update"/>
                </p>
            </form>
        <?php }?>
        </div>
    </div>



    
    <a href="logout.php" id="logout">LogOut</a> 
    
    <a id="bilgi" href="afteredit.php" > Bilgi</a> 
    
    

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
</body>
</html>