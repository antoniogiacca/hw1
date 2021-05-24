<?php
    
    $contents = array();
    $conn=mysqli_connect("127.0.0.1", "root", "", "CONCESSIONARIA");
    if(isset($_GET['value'])){
        $testo = mysqli_real_escape_string($conn, $_GET['value']);
        $query = "SELECT titolo, immagine, descrizione, prezzo, id FROM veicolo where titolo like '%$testo%';";
        $res = mysqli_query($conn, $query);
        while($row=mysqli_fetch_assoc($res)){
            $contents[] = array('titolo'=>$row['titolo'], 'immagine'=>$row['immagine'], 'prezzo'=>$row['prezzo'], 'id'=>$row['id'], 'descrizione'=>$row['descrizione']);
        }
    }
    echo json_encode($contents);
?>