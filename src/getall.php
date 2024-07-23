<?php
    require_once 'config/dbconnection.php';
    try {
        $conn = dbConnection();
        $query = $conn->prepare('SELECT * FROM videos;');
        $query->execute();
        $listVideos = $query->fetchAll();
    } catch (PDOException $e) {
        echo 'Error al mostrar datos'.$e->getMessage();
    }

?>