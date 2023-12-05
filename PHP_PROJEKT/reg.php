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
        <h2>Registation</h2>
        <p class="err">
            <?php include 'app/helps/errorinfo.php'; ?>
        </p>
        <form class="reg" method="post" action="reg.php">
            <div class="form-group">
                <label for="inputAddress">Your login</label>
                <input name="login" type="text" class="form-control" id="inputAddress" placeholder="Input your login..."
                    value="<?= $login ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="mail" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email" value="<?= $email ?>">
                <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Repeat your password</label>
                <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2"
                    placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary" name="button-reg">Create account</button>
            or
            <a href="<?php echo BASE_URL . 'log.php' ?>" class="signIn">Log in</a>
        </form>
    </section>

    <!-- --- FOOTER ---  -->
    <?php include("app/include/footer.php"); ?>

    <script src="./js/index.js"></script>
</body>

</html>