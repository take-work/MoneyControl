<?php

class MyDB
{
  public function dbConnect(){
    $database = "localhost";
    $user = "root";
    $pass = "i1090149";
    $table = "MoneyControl";

    $db = mysqli_connect($database, $user, $pass, $table) or die(mysqli_connect_error());

    return $db;
  }

}