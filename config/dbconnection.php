<?php
    


    function dbConnection() {
        $servername = "localhost";
        $username = "";
        $database = "freecodecamp";
        $password = "";

        try {
            $conn = new PDO("pgsql:host=$servername;port=5432;dbname=$database;", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
        } catch (PDOException $e) {
            echo "connection failed: ". $e->getMessage();
        }
        
    }

    

?>