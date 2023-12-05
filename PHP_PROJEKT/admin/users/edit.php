<?php
include '../../path.php';
include "../../app/controllers/users.php";
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
                    <a href="<?php echo BASE_URL . "admin/users/create.php"; ?>" class="btn btn-success">Add User</a>

                    <a href="<?php echo BASE_URL . "admin/users/index.php"; ?>" class="btn btn-warning">Manage</a>
                </div>
                <h2>Edit user</h2>
                <p class="err">
                    <?php include '../../app/helps/errorinfo.php'; ?>
                </p>
                <div class="row add-post">
                    <form action="edit.php" method="post">
                        <input name="id" type="hidden" value="<?= $id; ?>">
                        <div class="col">
                            <label for="inputAddress">Your login</label>
                            <input name="login" type="text" value="<?= $username; ?>" class="form-control"
                                id="inputAddress" placeholder="Input your login...">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="mail" type="email" value="<?= $email; ?>" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword1">Reset the password</label>
                            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword2">Repeat your password</label>
                            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2"
                                placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input name="admin" class="form-check-input" value="1" type="checkbox" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Admin?
                            </label>
                        </div>
                        <br>
                        <button name="update-user" class="btn btn-primary" type="submit">Update</button>
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