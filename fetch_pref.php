<?php
    
    $contents = array();
    $conn=mysqli_connect("127.0.0.1", "root", "", "CONCESSIONARIA");
    session_start();
    if(isset($_SESSION['username'])){
        $username = mysqli_real_escape_string($conn, $_SESSION['username']);
        $query = "SELECT v.titolo, v.immagine, v.descrizione, v.prezzo, v.id FROM veicolo v join preferiti p on v.id=p.veicolo where utente='$username'";
        $res = mysqli_query($conn, $query);
        while($row=mysqli_fetch_assoc($res)){
            $contents[] = array('titolo'=>$row['titolo'], 'immagine'=>$row['immagine'], 'prezzo'=>$row['prezzo'], 'id'=>$row['id'], 'descrizione'=>$row['descrizione']);
        }
    }
    echo json_encode($contents);
?>