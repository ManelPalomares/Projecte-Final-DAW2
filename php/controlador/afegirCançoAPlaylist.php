<?php
    include("BBDD.php");  
    $connexio=sql();

    $idLlista = $_POST["idL"];
    $idCanço = $_POST["idC"];

    $sql = "SELECT * FROM pertenencia WHERE id_llista = '".$idLlista."' AND id_canço = '".$idCanço."'";
    $r = mysqli_query($connexio,$sql);

    $fila = mysqli_fetch_assoc($r);

    if(empty($fila["id_pertenencia"])){
        $sql2 = "INSERT INTO pertenencia (id_llista, id_canço) VALUES ('".$idLlista."','".$idCanço."')";
        mysqli_query($connexio,$sql2);
    }
    else{
        echo -1;
    }
    
    mysqli_close($connexio);
?>