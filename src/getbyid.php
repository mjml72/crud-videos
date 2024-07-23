<?php

    require_once '../config/dbconnection.php';
    function getByID($id) {
        try {
            $conn = dbConnection();
            $query = $conn->prepare('SELECT * FROM videos WHERE videoid = :id;');
            $query->bindParam(':id', $id);
            $query->execute();
            $video = $query->fetch();
            return $video;    
        } catch (PDOException $e) {
            echo 'Error al mostrar datos'.$e->getMessage();
        }
    }

?>