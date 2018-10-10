<?php

require '../../app/common.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  require 'commentPost.php';
  exit;
}

//1. Go to the database and get stuff
$commentArr = Comment::getAllComments();
//2. Convert to Json
$json = json_encode($commentArr, JSON_PRETTY_PRINT);
//3. Print
header('Content-Type: application/json');
echo $json;
