<?php

require '../../app/common.php';
//Get the taskId

//Fetch Work from SQLiteDatabase
$teams = Team::findAll();

//convert to JSON and print
echo json_encode($team);
