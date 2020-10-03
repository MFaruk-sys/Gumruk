<?php
include("auth.php");

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
  left:102px;
  }
  #bilgi{
    border: 2px outset blue;
  background-color:green;
  position:relative;
  bottom:250px;
  left:20px;
  }
  iframe{
     position:relative;
  }
  
        </style>

        <script>
            function hideToggle(button, elem) {
  $(button).toggle( function () {
    $(elem).hide();
  },function () {
    $(elem).show();
  });
}

hideToggle(".button", "iframe");
        </script>
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



<iframe src="https://www.hurriyet.com.tr/haberleri/gumruk" frameborder="0" width="1000px" height="500px"></iframe>

    
    <a href="logout.php" id="logout">LogOut</a> 
    
    <a id="bilgi" href="afteredit.php" > Bilgi</a> 
    
    

      <div class="parallax"></div>

      <ul class="nav2">
        <li ><a href="https://www.gumruk.com.tr/gtip/" id="ctl00_gtipmenu" target="_blank">
            <img src="images/gtip-icon-s.png" alt="G.T.I.P. Tespiti">
        
        <h3>G.T.I.P. Tespiti</h3></a></li>
        <li ><a href="https://www.mevzuat.gov.tr/Metin.Aspx?MevzuatKod=7.5.13472&MevzuatIliski=0&sourceXmlSearch=" id="ctl00_mevzuatmenu" target="_blank"> 
            <img src="images/mevzuat-icon-s.png" alt="Mevzuat">
       
        <h3>Mevzuat</h3></a></li>
        <li ><a href="https://uygulama.gtb.gov.tr/BeyannameSorgulama/"  target="_blank">
            <img src="images/sorgulamalar-icon-s.png" alt="Sorgulamalar">
        
        <h3>Sorgulamalar</h3></a></li>
        <li ><a href="https://ticaret.gov.tr/gumruk-islemleri/sikca-sorulan-sorular-frequently-asked-questions" id="ctl00_sssmenu" target="_blank">
            <img src="images/sss-icon.png" alt="S.S.S.">
        
        <h3>S.S.S</h3></a></li>
        
    </ul>


   

                             
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