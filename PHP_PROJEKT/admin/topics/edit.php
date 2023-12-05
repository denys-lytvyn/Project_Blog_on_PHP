<?php

include '../../path.php';
include "../../app/controllers/topics.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../assets/css/main.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- <script type="text/javascript" src="https://livejs.com/live.js"></script> -->

</head>

<body>
    <!-- --- HEADER --- -->
    <?php include("../../app/include/header-admin.php"); ?>

    <div class="container container__admin">
        <div class="row">
            <?php include '../../app/include/sidebar-admin.php'; ?>
            <div class="posts">
                <div class="button row">
                    <a href="<?php echo BASE_URL . "admin/topics/create.php"; ?>" class="btn btn-success">Add
                        category</a>
                    <a href="<?php echo BASE_URL . "admin/topics/index.php"; ?>" class="btn btn-warning">Manage
                        categories</a>
                </div>
                <h2>Refresh category</h2>
                <p class="err">
                    <!-- Error output -->
                    <?php include '../../app/helps/errorinfo.php'; ?>
                </p>
                <div class="row add-post">
                    <form action="edit.php" method="post">
                        <input name="id" value="<?= $id ?>" type="hidden">
                        <div class="col">
                            <input name="name" value="<?= $name ?>" type="text" class="form-control" placeholder="Title"
                                aria-label="categories name">
                        </div>
                        <div class="col">
                            <label for="content">Categories content</label>
                            <textarea name="description" class="form-control" id="contecnt"
                                rows="3"><?= $description ?></textarea>
                        </div>

                        <button name="topic-edit" class="btn btn-primary" type="submit">Refresh category</button>
                    </form>
                </div>
            </div>

        </div>
    </div>



    <!-- --- FOOTER ---  -->
    <?php include("../../app/include/footer.php"); ?>

    <script src="./js/index.js"></script>
</body>

</html>