<?php
session_start();

if (isset($_SESSION['ses_id'])) {
    include("BBDD.php");
    $connexio = sql();

    $sql = "DELETE FROM seguiment_usuari WHERE id_usuari =".$_SESSION['ses_id']." AND id_seguit = ".$_POST['word']."";
    $res = mysqli_query($connexio, $sql);
    
} else {
header('Location: ../login.php');
}