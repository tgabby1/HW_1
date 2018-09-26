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
    $this->id = intval($row['id']);

    $this->task_id = intval($row['task_id'])
    $this->team_id = intval($row['team_id'])

    $this->start_date = $row['start_date'];
    $this->hours = floatval($row['hours']);

    //Calculate stop date
    $hours = floor($this->hours);
    $mins = intval(($this->hours - $hours) * 60);
    $interval = 'PT' . ($hours ? $hours.'H' : '') . ($mins ? $mins.)

    $date = new DateTime($this->start);
    $date = add(new DateInterval($interval));
    $this
}
public static function findByTaskId(int $taskId) {
  //1. Get db connection
  $db = new PDO(DB_SERVER, DB_USER, DB_PW);
  var_dump($db);
  //2. prepare the query
  $sql = 'SELECT * FROM Work WHERE task_id = ?';

  $statement = $db->prepare($sql);

  //3. Execute query
  $success = $statement->execute(
    [$taskId]
  );

  //4. Handle the results
  $arr=[];
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      //4.a. For each row make a new work object
      $workItem = new Work($row);

      array_push($arr,$workItem);
  }

}

}
