<?php
/*Función para cambiar la fecha a formato leible*/
function fecha($fecha){
  $timestamp = strtotime($fecha);
  $months = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];

  $day = date('d', $timestamp);
  $month = date('m', $timestamp) - 1;
  $year = date('Y', $timestamp);

  $fecha = "$day de ".$months[$month]." del $year";
  return $fecha;
}

/*Función para cambiar la fecha a formato leible SOLO MES*/
function fechames($fechames){
  $timestamp = strtotime($fechames);
  $months = ['01','02','03','04','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];

  $day = date('d', $timestamp);
  $month = date('m', $timestamp) - 1;
  $year = date('Y', $timestamp);

    $fechames = "$day / ".$months[$month]." / $year";
  return $fechames;
}

?>