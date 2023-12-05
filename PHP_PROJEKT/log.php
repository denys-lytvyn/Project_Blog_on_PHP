<?php
include "path.php";
include "app/controllers/users.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include("app/include/head.php") ?>

</head>

<body>
    <!-- --- HEADER --- -->
    <?php include("app/include/header.php"); ?>


    <section class="registration">
        <h2>Login in</h2>
        <p class="err">
            <?php include 'app/helps/errorinfo.php'; ?>
        </p>
        <form class="reg" method="post" action="log.php">
            <div class="form-group">
                <label for="inputAddress">Your mail</label>
                <input name="mail" value="<?= $email ?>" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email" value="<?= $email ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
            <button type="submit" name="button-log" class="btn btn-primary">Log in</button>
            or
            <a href="<?php echo BASE_URL . 'reg.php' ?>" class="signIn">Create account</a>
        </form>
    </section>

    <!-- --- FOOTER ---  -->
    <?php include("app/include/footer.php"); ?>

    <script src="./js/index.js"></script>
</body>

</html>