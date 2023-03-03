<?php

/* Compte nb elements dans une table */

function countItems($item, $table)
{
  global $pdo;
  $statementCount = $pdo->prepare("SELECT COUNT($item) FROM $table");
  $statementCount->execute();

  return $statementCount->fetchColumn();
}
