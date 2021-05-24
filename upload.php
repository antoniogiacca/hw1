<?php


if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])){
    //connessione al database
    $conn=mysqli_connect("127.0.0.1", "root", "", "CONCESSIONARIA");
    //injection
    $username= mysqli_real_escape_string($conn, $_POST['username']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $password = password_hash($password, PASSWORD_BCRYPT);
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $surname=mysqli_real_escape_string($conn, $_POST['surname']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    

    $query = "insert into utente(username, password, email, nome, cognome) values('$username','$password','$email','$name','$surname');";
    $res=mysqli_query($conn,$query);

    header("Location: login.php");
    exit;
    }
//}



?>