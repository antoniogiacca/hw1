<?php
  session_start();
    
  if(isset($_COOKIE['user'])){
    $_SESSION['username']=$_COOKIE['user'];
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Luxury Car Catania</title>
    
    <link rel="stylesheet" href="home.css" >
    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <script src="API_maps.js" defer="true"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVZgZR-PCxaGJaIUzAp3eZ3XoE6AJUFzQ&callback=initMap&libraries=&v=weekly" async></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  </head>
  
  <body>
    <header>
      <div id="overlay"></div>
      <nav>
        <div id="logo">
          <img src="logo.png">
          Luxury Car
        </div>
        <div id="links1">
          <a href="home.php" class="button">Home</a>
          <a href="#details2" class="button">Marchi Veicoli</a>
          <a href="#main" class="button">Servizi</a>
        </div>
        <div id="links"> 
          <?php
            if(empty($_SESSION['username'])){
              echo "<a href='login.php' class='button'>Login</a>
                    <a href='signup.php' class='button'>Iscriviti</a>";
            }

            if(isset($_SESSION['username'])){
                echo "<a href='logout.php' class='button'>Logout</a>";
            }
          ?>
          <a href="#info" class="button">Contatti</a>
        </div>

        <div id="menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>
      
      <h1>
        <strong>Change your car, Change your life </strong>
      </h1>
      <h2>
        <a href="veicoli.php" class="button">Visualizza tutti i veicoli</a>
    <!--    <a class="button">Parla con un venditore </a>
        <a class="button">Effettua un prestito</a>-->
      </h2>
    </header>
    
    <section>
      <div id='main'>
      <?php
            if(isset($_SESSION['username'])){
                $user = $_SESSION['username'];
                echo "<p> Benvenuto $user</p>";
            }
          ?>
        <h1>Ogni tuo desiderio, pu?? essere soddisfatto</h1>
        <p>La concessioniaria pi?? grande della provincia.</br>Nuovo e usato garantito con il supporto costante di venditori qualificati, esperti e sopratutto appassionati. </p>
      </div>
      <div id='details'>
        <div>
          <img src="prestito.png">
          <h1>Prestito</h1> 
          <p> Attraverso la spiegazione dettagliata dei nostri consulenti, potrai avere l'auto dei tuoi sogni rateizzando il costo. La presenza di pi?? piani permette l'adattamento a qualsiasi esigenza </p>
        </div>
        <div>
          <img src="km_garantiti.png">
          <h1>Km garantiti</h1>
          <p>Oltre ai veicoli di nuova immatricolazione, offriamo anche una vasta gamma di veicoli usati. Quest'ultimi sono dotati di una certificazione che attesta i km veri del veicolo, assicurando all'acquirente sicurezza e affidabilit??</p>
        </div>
      </div>

      <div id='details2'>
        <div>
          <img src="audi.png">
          <h1>Audi</h1> 
        </div>
        <div>
          <img src="bmw.png">
          <h1>Bmw</h1> 
        </div>
        <div>
          <img src="alfaromeo.png">
          <h1>Alfa Romeo</h1> 
        </div>
        <div>
          <img src="fiat.png">
          <h1>Fiat</h1> 
        </div>
      </div>
    </section>

    <article>
      <h3>Raggiungici facilmente!</h3>
      <div id="map"></div>
    </article>
    
    <footer>
      <div>
        <h1>Antonio Giacca O46002131</h1>
        <h2>INFO</h2>
        <div id='info'>
          <div>
            <img src="instagram.png">
            <p>@Luxury_Car</p>
          </div>
          <div>
            <img src="facebook.png">
            <p>Luxury Car Catania</p>
          </div>
          <div id="posizione">
            <img src="posizione.png">
            <p>SS192, Km 185, 95100 Catania CT</p>
          </div>
        </div>
      </div>
    </footer>


  </body>
</html>