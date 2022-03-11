<?php include ('config/dbconnect.php');

if(!isset($_SESSION)){
  session_start();
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About</title>
    <link rel="stylesheet"  href="style.css">
    <script type="js/validimi_contact.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    
  </head>
  <body>
<div class="pink-div" >
      <?php include 'includes/header.php'; ?>
      
           <div class="about-div">
      <h1 class="heading">About us</h1>
      <div class="row">
        <div class="slideshow-div">
          
          <img id="slideshow" />
        </div>

      <!--Slider-->
        <script type="text/javascript">
        var i=0;
          function ndrysho_Foto(){
           let foto = document.getElementById("slideshow"); //qasja apo selektimi i elementit me id=“slideshow”
        foto.src="images/img"+(i++ % 4)+".jpg";
        }
        function slider(){
        setInterval(ndrysho_Foto,700)
        }
        document.body.addEventListener('load',slider());
        </script>
        
        <div class="content">
          <br>
          <h3>Dyqani jone</h3>
          <p>Ekipi jone është i përkushtuar t'ju ofrojë lule te bukra të cilësisë më të lartë të disponueshme
             me çmimin më të drejtë të mundshëm. Çdo klient është shumë i rëndësishëm për ne dhe ne përpiqemi 
             t'i kushtojmë vëmendjen tonë maksimale profesionale çdo porosie të vetme.Porosit mund ti
              beni online ne faqen tone ose te vizitoni dyqanin tone.I gjithë stafi ynë është i 
              përkushtuar për të ofruar shërbimin më të lartë ndaj klientit.</p>
          
        </div>
        <br>
       
          <div class="foot_3" style="margin-left:25%; padding-top:6%;">
          <h1 style="text-align:center; font-family: 'Courgette', cursive; font-size:20pt;">Lokacioni</h1>
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5868.36880370575!2d21.152887574486236!3d42.65744755687039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee58f5b053d%3A0xeeb0fb139ed6917b!2sQyteza%20Pejton%2C%20Pristina!5e0!3m2!1sen!2s!4v1646399949644!5m2!1sen!2s" 
          width="700" height="400" frameborder="0" style="border:4px solid grey;"
            allowfullscreen=""  aria-hidden="false" tabindex="0" ></iframe>
        </div>
      </div>
      </div>

    <?php include 'includes/footer.php' ?>
  </body>
  
</html>