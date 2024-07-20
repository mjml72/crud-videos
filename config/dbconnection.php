<?php
    


    function dbConnection() {
        $servername = "";
        $username = "";
        $database = "";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
        } catch (PDOException $e) {
            echo "connection failed: ". $e->getMessage();
        }
        
    }

    

?>