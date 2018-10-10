<?php

class Comment
{
  public $id;
  public $comment;

  public function __construct($row) {
    $this->id = isset($row['id']) ? intval($row['id']) : null;
    $this->comment = $row['comment'];
  }

  public function create() {
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    $sql = 'INSERT Comment(id, comment)
            VALUES(?, ?)';

    $statement = $db->prepare($sql);
    $success = $statement->execute([
      $this->id,
      $this->comment,
    ]);

    $this->id = $db->lastInsertId();
  }

  public static function getAllComments() {
    //1. Connect to the db
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    //2. Run a query
    $sql = 'SELECT * FROM Comment';

    $statement = $db->prepare($sql);

    //3. Read the results
    $success = $statement->execute();
    //4. Handle the results
      $arr = [];
      while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

        //4.a for each row, make a new work object
        $commentItem = new Comment($row);

        array_push($arr, $commentItem);
      }
  return $arr;
  }

}
