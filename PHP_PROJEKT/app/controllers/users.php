<?php
include "app/database/db.php";

$errMsg = '';

function userAuth($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];

    $redirectUrl = $_SESSION['admin'] ? BASE_URL . 'admin/topics/index.php' : BASE_URL;
    header('location: ' . $redirectUrl);
    exit();
}

// REGISTER
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if ($login === '' || $email === '' || $passF === '') {
        $errMsg = "Please fill in all the required fields.";
    } elseif (mb_strlen($login, 'UTF8') < 2) {
        $errMsg = 'Login should be at least 2 characters long';
    } elseif (strlen($passF) < 3) {
        $errMsg = 'Password should be at least 3 characters long';
    } elseif ($passF !== $passS) {
        $errMsg = 'Passwords do not match';
    } else {
        $existance = selectOne('users', ['email' => $email]);
        if ($existance) {
            $errMsg = 'This email is already registered. Please use a different email address.';
        } else {
            $hashedPassword = password_hash($passF, PASSWORD_DEFAULT);

            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $hashedPassword
            ];

            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            userAuth($user);
        }
    }

} else {

    $login = '';
    $email = '';
}


// LOGIN
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if ($email === '' || $pass === '') {
        $errMsg = "Please fill in all the required fields.";
    } else {
        $existance = selectOne("users", ["email" => $email]);
        if ($existance && password_verify($pass, $existance["password"])) {
            userAuth($existance);
        } else {
            $errMsg = 'Email or password is incorrect';
        }
    }
} else {
    $email = '';
}
?>