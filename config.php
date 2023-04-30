<?php
$host = 'localhost';
$username = 'root';
$passwd = ''; /* Ubah Ini */
$db = 'zooWeb';

$mysqli = mysqli_connect($host, $username, $passwd, $db);
global $mysqli;

function query($query) {

  global $mysqli;
  $query = $mysqli->query($query);
  $res = mysqli_fetch_array($query);

  return $res;
}

function queryAll($query) {

  global $mysqli;
  $query = $mysqli->query($query);
  $res = mysqli_fetch_all($query);

  return $res;
}

function esc_string($field) {
  global $mysqli;
  $res = mysqli_real_escape_string($mysqli, $field);
  return $res;
}

function currency($num) {
  return "Rp " . number_format($num, 0, ',', '.');
}

if (!$mysqli) {
  die("Connection Failed" . mysqli_connect_error());
}
