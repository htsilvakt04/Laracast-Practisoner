<?php

class QueryBuilder
{
  protected $pdo;
  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("SELECT * FROM {$table}");
    $statement->setFetchMode(PDO::FETCH_OBJ);
    $statement->execute();

    return $tasks = $statement->fetchAll();
  }

}
