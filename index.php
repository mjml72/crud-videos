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
    <title>Freecodecamp Videos</title>
</head>
<body>
    <h1>List of Videos</h1>
    <div class="buttoncreate">
        <a href="./src/create.php"><button type="button" class="btn btn-success border">Create new video</button></a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Programming language</th>
                <th scope="col">Tech stack</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listVideos as $video) {?>
                    
                    <tr>
                        <td><?= $video['Videoid'] ?></td>
                        <td><?= $video['Title'] ?></td>
                        <td><?= $video['Programing']?></td>
                        <td><?= $video['Techstack'] ?></td>
                        <td><a href="./src/update.php?id=<?= $video['Videoid'] ?>"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        <td><a href="./src/delete.php?id=<?= $video['Videoid'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>