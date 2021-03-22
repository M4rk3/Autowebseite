<?php


  $conn = new MySQLi ("localhost","root","","autowebseitedb");

  if ($conn->connect_errno>0) {

    die("Fehler im Verbindungsaufbau:" . $conn->connect_error);
  }

 $sql = "
      SELECT autoId,markenId,modellId FROM autos
      WHERE(
        modellId = 76)
";

 $antwort = $conn->query($sql) or die ("Fehler in der Query: " . $conn->error);

 while($zeile = $antwort->fetch_object()){

  echo "<pre>";
  print_r($zeile);
  echo "<pre>";
 }
 ?>
