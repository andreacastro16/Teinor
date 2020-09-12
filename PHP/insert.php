<?php

    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, 'teinordb');
    
    $titulo = $_POST['titulo'];
    $anoEstreno = $_POST['anoEstreno'];

    if (strlen($titulo)!=0 && intval($anoEstreno)>1895 && intval($anoEstreno) <= date("Y"))
    {
        $sql = "INSERT INTO pelicula values(NULL, '$titulo', '$anoEstreno')";
        $res = mysqli_query($link, $sql);
    }

    header('Location: ../webpage.html');
?>