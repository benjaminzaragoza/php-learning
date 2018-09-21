<?php

function fetchAll($connection, $table){

$statement = $connection->prepare("Select * FROM $table");

$statement->execute();

return $statement->fetchAll(PDO::FETCH_CLASS);

}