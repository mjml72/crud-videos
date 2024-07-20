<?php
    require_once 'config/dbconnection.php';

    $conn = dbConnection();

    $query = $conn->prepare('SELECT * FROM Videos;');

    $query->execute();
    
    $listVideos = $query->fetchAll();
?>