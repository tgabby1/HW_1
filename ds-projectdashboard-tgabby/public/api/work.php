<?php

require '../../app/common.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  require 'workPost.php';
  exit;
}

//Get the taskId
$taskId = intval($_Get['taskId'] ?? 0);

if($task < 1) {
  throw new Exception('Invalid Task ID');
}
//Fetch Work from SQLiteDatabase
$workArr = Work::findByTaskId($taskId);

//convert to JSON and print
$json = json_encode($workArr, JSON_PRETTY_PRINT);

header('Content-type: application/json');
echo json_encode($work);
