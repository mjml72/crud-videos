<?php

    require_once '../config/dbconnection.php';

    function getByID($id) {
        $conn = dbConnection();
        $query = $conn->prepare('SELECT * FROM Videos WHERE Videoid = :id;');
        $query->bindParam(':id', $id);
        $query->execute();
        $video = $query->fetch();
        return $video;
    }

?>