<?php

class Student {

public $name;

public function __construct($name) {
  $this->name = $name;
}

function cal_avg($data) {
  $sum = 0;
  for($i = 0; $i < count($data); $i++) {
    $sum += $data[$i];
  }
  $avg = $sum / count($data);
  return $avg;
}

function judge($avg) {
  $result;
  if(60 <= $avg) {
    $result = "passed";
  } else {
    $result = "failed";
  }
  return $result;
 }
}