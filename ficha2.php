<?php

  $toneladas = $_POST["viagem"];
  #$caminhao = 1;
  #$kg = 20;

  if ($toneladas <= 1000){
    echo "ok";
  } else {
    echo "no";
  }

?>