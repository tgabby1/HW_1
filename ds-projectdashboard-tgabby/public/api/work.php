<?php

require '../../app/common.php';
//Get the taskId
$taskId = $_Get['taskId'] ?? 0;

//Fetch Work from SQLiteDatabase
$work = Work::findByTaskId($taskId);
//convert to JSON and print
echo json_encode($work);
