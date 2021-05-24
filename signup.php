<?php
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Luxury Car Catania: Registrazione</title>

        <link rel="stylesheet" href="signup.css">

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">

        <script src="signup.js" defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <div id='overlay'></div>
        
        <main>
            <div id="header">
                <img src='logo.png'>
                <h1>Registrati</h1>
                <a href="home.php">
                    <img id="close" src="close.png">
                </a>
            </div>

            <form name='nome_form' id='form' method='post' action='upload.php' enctype="multipart/form-data">
                <div id="name_surname">
                    <input type="text" name='name' placeholder="Nome"></input>
                    <input type="text" name='surname' placeholder="Cognome"></input>
                </div>
                <div id="other">
                    <input type="text" name='email' placeholder="Email"></input>
                    <input type='text' name='username' placeholder='Username'></input>
                    <input type="password" name='password' placeholder="Password"></input>
                    <input type="password" name='conf_password' placeholder="Conferma password"></input>
                    <input name='try' type='submit' class='btn' value='Conferma'></input>
                </div>
                
            </form>
            <div id='login'>
                <a href='login.php'>Sei gia membro?</a>
            </div>
 
        </main>
    </body>

</html>