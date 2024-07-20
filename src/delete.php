<?php

    require_once '../config/dbconnection.php';
    require_once '../functions.php';
    require_once './getbyid.php';

    if (isset($_GET['id'])) {
        try {
            $id = secureData($_GET['id']);
            $video = getByID($id);
            if($video){
                $conn = dbConnection();
                $query = $conn->prepare('DELETE FROM Videos WHERE Videoid = :id;');
                $query->bindParam(':id', $id);
                $query->execute();
    
                header('Location: ../index.php');
            }else{
                throw new Exception("Video not found");
                
            }
    
        } catch (PDOException $e) {
            echo 'Error al borrar video'.$e->getMessage();
        }
    }

?>