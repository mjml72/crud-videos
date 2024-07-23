<?php
    require_once './src/getall.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Freecodecamp Videos</title>
</head>
<body>
    <h1>List of Videos</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Programming language</th>
                <th scope="col">Tech stack</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listVideos as $video) {?>
                    
                    <tr>
                        <td><?= $video['videoid'] ?></td>
                        <td><?= $video['title'] ?></td>
                        <td><?= $video['proglanguage']?></td>
                        <td><?= $video['techstack'] ?></td>
                        <td><a href="./src/update.php?id=<?= $video['videoid'] ?>"><span class="material-symbols-outlined orange">edit</span></a></td>
                        <td><a href="./src/delete.php?id=<?= $video['videoid'] ?>"><span class="material-symbols-outlined red">delete</span></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="buttoncreate">
        <a href="./src/create.php"><button type="button" class="btn btn-success border">Create new video</button></a>
    </div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>