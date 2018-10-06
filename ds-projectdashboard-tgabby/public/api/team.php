<?php

require '../../app/common.php';
//Get the taskId

//Fetch Work from SQLiteDatabase
$teams = Team::fetchAll();

//convert to JSON and print
$json = json_encode($teams, JSON_PRETTY_PRINT);
header ('Content-Type: application/json');
echo json_encode($team);
