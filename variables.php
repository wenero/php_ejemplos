<?php
$nombre="Williams";
echo "Mi nombre es $nombre<br/>";

$otronombre=& $nombre;
echo "Hola $otronombre<br/>";

$otronombre="Liam";
echo "Hola $nombre";
?>