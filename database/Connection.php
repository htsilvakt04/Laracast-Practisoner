<?php
class Connection
{
  public static function make($config)
  {
    try {
      return $db = new PDO (
        $config['driver'].":host=".$config['host'].";dbname=".$config['name'],
        $config['user'],
        $config['password'],
        $config['option']
      );
    } catch (PDOException $e) {
      return $e-getMessage();
    }
  }

}
