<?php
  session_start();
    
  if(isset($_COOKIE['user'])){
    $_SESSION['username']=$_COOKIE['user'];
    }
?>


<html>
  <head>
    <meta charset="utf-8">
    <title>Luxury Car Catania: Veicoli</title>

    <link rel="stylesheet" href="veicoli.css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">


    <script src="script.js" defer="true"></script>

    <script src="API_news.js" defer="true"></script>

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
          <a href="home.php #details2"class="button">Marchi Veicoli</a>
          <a href="home.php #main"class="button">Servizi</a>
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
        <!--<a class="button">Parla con un venditore </a>
        <a class="button">Effettua un prestito</a>-->
      </h2>

    </header>

    <section>
      <div id="main">
        <h1>i nostri veicoli</h1>
        <p>Effetua il Login per poter aggiungere e conservare i veicoli che attirano la tua attenzione ai preferiti</p>
      </div>
      <div id='search'>
        <h2>Ricerca veicoli:</h2>
        <input type="text" placeholder="cerca veicolo">
      </div>
    </section>

    <article id="lista">
      <section id="ricerca" class="tipo, hide">
        <h2>Ricerca</h2>
        <div class="show-case"></div>
      </section>

      <section id="preferiti" class="tipo, hide">
        <h2>I tuoi veicoli preferiti</h2>
        <div class="show-case"></div>
      </section>

      <section id="veicoli" class="tipo" > 
        <h2>Tutti i veicoli</h2>     
        <div class="show-case"></div>
      </section>

    </article>
       
    <section id="news">
      <h4>Cerca una notizia</h4>
        <form>
          Inserisci parola chiave
            <input type='text' id='key_news'>
            <input type='submit' value='Cerca'>
        </form>
        <div class="articoli"></div>

    </section>

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
          <div>
            <img src="posizione.png">
            <p>SS192, Km 185, 95100 Catania CT</p>
          </div>
        </div>
      </div>
    </footer>

  </body>

</html>
