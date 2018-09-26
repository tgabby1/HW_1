<?php

require '../../app/common.php';

//Get the taskId
$taskId = intval($_Get['taskId'] ?? 0);

if($task < 1) {
  throw new Exception('Invalid Task ID');}
//Fetch Work from SQLiteDatabase
$workArr = Work::findByTaskId($taskId);

//convert to JSON and print
header('Content-type: application/json');
echo json_encode($work);
