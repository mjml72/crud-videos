<?php

require_once '../config/dbconnection.php';
require_once '../functions.php';

    if (isset($_POST['title']) && isset($_POST['proglanguage']) && isset($_POST['techstack'])) {
        try {
            $title = secureData($_POST['title']);
            $proglanguage = secureData($_POST['proglanguage']);
            $techstack = secureData($_POST['techstack']);
            
            $conn = dbConnection();
            $query = $conn->prepare('INSERT INTO videos (title, proglanguage, techstack)
            VALUES(:title, :proglanguage, :techstack);');
            $query->bindParam(':title', $title);
            $query->bindParam(':proglanguage', $proglanguage);
            $query->bindParam(':techstack', $techstack);
            $query->execute();
            
            header('Location: ../index.php');
        } catch (PDOException $e) {
           echo "Error al crear nuevo video";
        }

    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Freecodecamp Videos</title>
</head>
<body>
    <h3>Create new video</h3>
    <div class="container">
        <form method="POST">
            <div >
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div>
                <label for="programminglanguge" class="form-label">Programming Language</label>
                <input type="text" class="form-control" id="programminglanguge" name="proglanguage" required>
            </div>
            <div>
                <label class="form-label" for="techstack">Techstack</label>
                <input type="text" class="form-control" id="techstack" name="techstack" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>

    </div>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>