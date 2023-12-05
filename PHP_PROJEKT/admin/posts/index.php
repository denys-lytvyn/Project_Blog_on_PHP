<?php
include '../../path.php';
include '../../app/controllers/posts.php';
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
                    <div class="Delete">Status</div>
                </div>
                <?php foreach ($postsAdm as $key => $post): ?>
                    <div class="row post">
                        <div class="id">
                            <?= $key + 1; ?>
                        </div>
                        <div class="title">
                            <?= strlen($post['title']) > 35 ? mb_substr($post['title'], 0, 35, 'UTF-8') . ' ...' : $post['title']; ?>
                        </div>
                        <div class="Author">
                            <?= $post['username']; ?>
                        </div>
                        <div><a href="edit.php?id=<?= $post['id']; ?>" class="Update">Edit</a></div>
                        <div><a href="edit.php?delete_id=<?= $post['id']; ?>" class="Delete">Delete</a></div>
                        <?php if ($post['status']): ?>
                            <div class="publish"><a href="edit.php?publish=0&pub_id=<?= $post['id']; ?>"
                                    class="Status Publish">Unpublish</a>
                            </div>
                        <?php else: ?>
                            <div class="publish"><a href="edit.php?publish=1&pub_id=<?= $post['id']; ?>"
                                    class="Status Unpublish">Publish</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>



    <!-- --- FOOTER ---  -->
    <?php include("../../app/include/footer.php"); ?>

    <script src="./js/index.js"></script>
</body>

</html>