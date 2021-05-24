<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_POST['id'])){
        $conn=mysqli_connect("127.0.0.1", "root", "", "CONCESSIONARIA");
        
        $username=mysqli_real_escape_string($conn,$_SESSION['username']);
        $id=mysqli_real_escape_string($conn,$_POST['id']);

        $query="DELETE FROM preferiti WHERE utente='$username' AND veicolo='$id';";
        $res=mysqli_query($conn,$query);
        mysqli_close($conn);
        echo "rimosso dai preferiti";
        exit;
    }
    echo "non rimosso dai preferiti";
    exit;
    
    ?>