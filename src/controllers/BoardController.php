<?php 

require_once __DIR__ . '/../models/Projet.php';
require_once __DIR__ . '/../models/List.php';

$title = $_POST['title'] ?? null;
$projectId = $_GET['id'] ?? null;

if(!empty($title)&& !empty($projectId)) {
    createList($title, $projectId);
}

$lists = findByProject($projectId);
dump($lists);
dump($_GET);
dump($_POST);

include __DIR__ .'/../views/project.php';



