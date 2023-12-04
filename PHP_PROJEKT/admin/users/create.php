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
                    <a href="<?php echo BASE_URL . "admin/users/create.php"; ?>" class="btn btn-success">Add
                        users</a>
                    <a href="<?php echo BASE_URL . "admin/users/index.php"; ?>" class="btn btn-warning">Manage
                        users</a>
                </div>
                <h2>Create user</h2>
                <div class="row add-post">
                    <form action="create.php" method="post">
                        <div class="col">
                            <label for="inputAddress">Your login</label>
                            <input name="login" type="text" class="form-control" id="inputAddress"
                                placeholder="Input your login...">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="mail" type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="col">
                            <label for="exampleInputPassword2">Repeat your password</label>
                            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2"
                                placeholder="Password">
                        </div>
                        <select class="form-select" aria-label="Select">
                            <option selected>Open this select menu</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                        <br>
                        <button class="btn btn-primary" type="submit">Create</button>
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