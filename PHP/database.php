<?php
  $eliminar = 'DROP DATABASE teinordb';
  $link = mysqli_connect("localhost", "root", "");
  $bd = 'CREATE DATABASE teinordb';
  mysqli_query($link, $eliminar);
  mysqli_query($link, $bd);
  mysqli_select_db($link, 'teinordb');


  $peliculas = "CREATE TABLE `pelicula` (
          `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `titulo` varchar(30) NOT NULL,
          `anoEstreno` varchar(4) NOT NULL
        
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";

  mysqli_query($link, $peliculas);

  $insert = "INSERT INTO `pelicula` (`id`, `titulo`, `anoEstreno`) VALUES
      (1, 'Me before you', '2016'),
      (2, 'Wonder', '2017'),
      (3, 'The Shape of Water', '2018'),
      (4, 'Adiós', '2019'),
      (5, 'Malasaña 32', '2020')
      ";
  mysqli_query($link, $insert);

?>
