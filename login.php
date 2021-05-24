<?php

    session_start();

    if(isset($_COOKIE["user"])){
        $_SESSION["username"] = $_COOKIE["user"];

        header("Location: home.php");
        exit;
    }


    if(isset($_POST["username"]) && isset($_POST["password"])){

        $conn = mysqli_connect("127.0.0.1", "root", "", "CONCESSIONARIA");

        $user= mysqli_real_escape_string($conn, $_POST['username']);
        $pass= mysqli_real_escape_string($conn, $_POST['password'] );

        $query = "SELECT password FROM utente WHERE username = '$user';";
        $res = mysqli_query($conn, $query);
        if(mysqli_num_rows($res) > 0){
            $entry=mysqli_fetch_assoc($res);
            if(password_verify($_POST['password'],$entry['password'])){
                $_SESSION['username']=$_POST['username'];
                header("Location: home.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;
            }
        }

?>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Luxury Car Catania: Login</title>

        <link rel='stylesheet' href='login.css'>

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <div id='overlay'></div>    

        <main>
            <div id="header">
                <img src='logo.png'>
                <h1>Effettua il Login</h1>
                <a href="home.php">
                    <img id="close" src="close.png">
                </a>
            </div>

            <form name='nome_form' id='form' method='post' >
                <p>
                    <span>Username:</span>
                        <label><input type='text' name='username'></label>
                </p>
                <p>
                    <span>Password:</span>
                        <label><input type='password' name='password'></label>
                </p>
                <p>Memorizza dati accesso<input type='checkbox' name='ricorda' value='yes'></p>
                <p>
                    <label>&nbsp;<input type='submit' class='btn' value='Entra'></label>
                </p>
            </form>

            <div id='signup'>
                <a href='signup.php'>Devi ancora registrarti?</a>
            </div>
 
        </main>
        
    </body>
</html>