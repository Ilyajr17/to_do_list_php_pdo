<?php 

require 'configDB.php';


$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');


while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    $tasks[] = $row->task;
  }


