<?php


   session_start();

    if(isset($_SESSION['username'])){
        $conn=mysqli_connect("127.0.0.1", "root", "", "CONCESSIONARIA");
        $query="INSERT INTO preferiti(utente, veicolo) values('".$_SESSION['username']."', '".$_POST['id']."');";
        $res=mysqli_query($conn,$query);  //or die(mysqli_error($conn));
        if($res===TRUE){
            echo "Aggiunto ai preferiti";
            exit;
        }else{
            echo "Non aggiutno ai preferiti";
            exit;
        }
    }


    ?>