<?php

    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, 'teinordb');
    
    $v = $_GET['var'];
    $f = $_GET['fil'];

    if (strlen($f)!=0){
        $sql = "SELECT titulo, anoEstreno FROM pelicula WHERE titulo LIKE '".$f."%' order by anoEstreno ".$v;
    }

    else {
        $sql = "SELECT titulo, anoEstreno FROM pelicula order by anoEstreno ".$v;
    }

    $result = mysqli_query($link, $sql);

    echo "<table class='table mt-1'>";
    echo "<tr>";
    echo "<th>TÍTULO</th>";
    echo "<th>AÑO ESTRENO</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['titulo'] . "</td>";
        echo "<td>" . $row['anoEstreno'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>