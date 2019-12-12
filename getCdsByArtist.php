<?php

header('Content-Type: application/json');

include 'data.php';

$artist = ucwords($_GET['artist']);
$cds = [];
foreach ($database as $cd) {
  if ($cd['author'] == $artist) {
    $cds [] = $cd;
  }
}

echo json_encode($cds);

?>