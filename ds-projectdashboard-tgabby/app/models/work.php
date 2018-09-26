<?php

class Work
{
  public $work_id;
  public $task_id;
  public $team_id;
  public $start_date;
  public $stop_date;
  public $hours;

  public function __construct($data) {
    //TODO
  }
  public function __construct($row) {
    $this->id = $row['id'];

    $this->start_date = $row['start_date'];
    $this->end_date = $row['end_date'];
}
public static function findByTaskId(int $taskId) {
  //1. Get db connection
  $db = new PDO(DB_SERVER, DB_USER, DB_PW);
  var_dump($db);

  return[];
  die;
  //2. Prepare Query

  //3. Execute Query
}

}
