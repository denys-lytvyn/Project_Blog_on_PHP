<?php
include '../../path.php';
include '../../app/database/db.php';
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
                    <a href="<?php echo BASE_URL . "admin/posts/create.php"; ?>" class="btn btn-success">Add post</a>
                    <a href="<?php echo BASE_URL . "admin/posts/index.php"; ?>" class="btn btn-warning">Manage post</a>
                </div>
                <h2>Post control</h2>
                <div class="row title-table">

                    <div class="id">ID</div>
                    <div class="title">Title</div>
                    <div class="Author">Author</div>
                    <div class="Update">Update</div>
                    <div class="Delete">Delete</div>
                </div>
                <div class="row post">
                    <div class="id">1</div>
                    <div class="title">Topic</div>
                    <div class="Author">Admin</div>
                    <div><a href="#" class="Update">Edit</a></div>
                    <div><a href="#" class="Delete">Delete</a></div>
                </div>
                <div class="row post">
                    <div class="id">1</div>
                    <div class="title">Topic</div>
                    <div class="Author">Admin</div>
                    <div><a href="#" class="Update">Edit</a></div>
                    <div><a href="#" class="Delete">Delete</a></div>
                </div>
                <div class="row post">
                    <div class="id">1</div>
                    <div class="title">Topic</div>
                    <div class="Author">Admin</div>
                    <div><a href="#" class="Update">Edit</a></div>
                    <div><a href="#" class="Delete">Delete</a></div>
                </div>

            </div>

        </div>
    </div>



    <!-- --- FOOTER ---  -->
    <?php include("../../app/include/footer.php"); ?>

    <script src="./js/index.js"></script>
</body>

</html>