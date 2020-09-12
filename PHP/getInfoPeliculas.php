<?php

    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, 'teinordb');

    $sql = "SELECT titulo, anoEstreno FROM pelicula";
    $result = mysqli_query($link, $sql);

    echo "<table class='table mt-1 '>";
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
