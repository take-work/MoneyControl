<?php

class moneyCalc
{
  public function calculation($id){
    require_once(dirname(__FILE__).'../../database.php');

    $MyDB = new MyDB;
    $db = $MyDB->dbConnect();

    $recordSet = mysqli_query($db, 'SELECT * FROM MoneyControl Where event_id =' . $id);

    $data = mysqli_fetch_assoc($recordSet);

    $hundred = $data['hundred'] * '100';
    $five_hundred = $data['five_hundred'] * '500';
    $thousand = $data['thousand'] * '1000';
    $five_thousand = $data['five_thousand'] * '5000';
    $million = $data['million'] * '10000';

    $money = $hundred + $five_hundred + $thousand + $five_thousand + $million;

    return $money;
  }

  public function profits($‎proceeds,$price) {
    $profit = $‎proceeds - $price;
    return $profit;
  }

}