<?php

class Team
{
  public $id;
  public $name;

public function __construct($data) {
  //TODO
}


public static function findAll(int $teamId) {
  //1. Get db connection
  $db = new PDO(DB_SERVER, DB_USER, DB_PW);

  //2. prepare the query
  $sql = 'SELECT * FROM Team';
  $statement = $db->prepare($sql);

  //3. Execute query
  $success = $statement->execute();

  //4. Handle the results
  $arr=[];
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      //4.a. For each row make a new work object
      $theTeam = new Team($row);

      array_push($arr,$theTeam);
  }
return $arr;
}

}
