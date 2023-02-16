<?php

function createList($title, $projectId)
{
    $pdo = getConnection();
    $sql = "INSERT INTO `List` (`id`, `title`, `project_id`) VALUES (NULL, '$title', $projectId );";
    $pdoStatement = $pdo->prepare($sql);
    $result = $pdoStatement->execute();
    return $result;
}

function findByProject ($projectId){
    $pdo = getConnection();
    $sql = "SELECT * FROM `List` WHERE `project_id` = $projectId";
    $pdoStatement = $pdo->prepare($sql);
    $result = $pdoStatement->execute();
    $projects = $pdoStatement->fetchAll();
    return $projects;
}