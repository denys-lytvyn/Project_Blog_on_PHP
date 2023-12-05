<?php
// Include the database configuration file
include SITE_ROOT . '/app/database/db.php';

// Initialize an array to store error messages
$errMsg = [];

// Function to handle user authentication and set session variables
function userAuth($user)
{
    // Set session variables for user information
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];


    // Determine the redirect URL based on user role
    $redirectUrl = $_SESSION['admin'] ? BASE_URL . 'admin/topics/index.php' : BASE_URL;
    // Redirect the user to the determined URL
    header('location: ' . $redirectUrl);
    // Terminate the script after redirection
    exit();
}

$users = selectAll('users');

// REGISTER
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    if ($login === '' || $email === '' || $passF === '') {
        array_push($errMsg, "Please fill in all the required fields.");
    } elseif (mb_strlen($login, 'UTF8') < 2) {
        array_push($errMsg, "Login should be at least 2 characters long");
    } elseif (strlen($passF) < 3) {
        array_push($errMsg, "Password should be at least 3 characters long");
    } elseif ($passF !== $passS) {
        array_push($errMsg, "Passwords do not match");
    } else {
        $existance = selectOne('users', ['email' => $email]);
        if ($existance) {
            array_push($errMsg, "This email is already registered. Please use a different email address.");
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
        array_push($errMsg, "Please fill in all the required fields.");
    } else {
        $existance = selectOne("users", ["email" => $email]);
        if ($existance && password_verify($pass, $existance["password"])) {
            userAuth($existance);
        } else {
            array_push($errMsg, "Email or password is incorrect");
        }
    }
} else {
    $email = '';
}

// Admin creation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])) {

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if ($login === '' || $email === '' || $passF === '') {
        array_push($errMsg, "Please fill in all the required fields.");
    } elseif (mb_strlen($login, 'UTF8') < 2) {
        array_push($errMsg, 'Login should be at least 2 characters long');
    } elseif (strlen($passF) < 3) {
        array_push($errMsg, 'Password should be at least 3 characters long');
    } elseif ($passF !== $passS) {
        array_push($errMsg, 'Passwords do not match');
    } else {
        $existance = selectOne('users', ['email' => $email]);
        if ($existance) {
            array_push($errMsg, "This email is already registered. Please use a different email address.");
        } else {
            $hashedPassword = password_hash($passF, PASSWORD_DEFAULT);
            if (isset($_POST['admin'])) {
                $admin = 1;
            }
            $user = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $hashedPassword
            ];

            $id = insert('users', $user);
            $user = selectOne('users', ['id' => $id]);

            userAuth($user);
        }
    }

} else {
    $login = '';
    $email = '';
}

// delete user
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];

    delete('users', $id);
    header('location: ' . BASE_URL . 'admin/users/index.php');
}

// User editing using admin panel
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])) {
    $user = selectOne('users', ['id' => $_GET['edit_id']]);

    $id = $user['id'];
    $admin = $user['admin'];
    $username = $user['username'];
    $email = $user['email'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])) {

    $id = $_POST['id'];
    $mail = trim($_POST['mail']);
    $login = trim($_POST['login']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    $admin = isset($_POST['admin']) ? 1 : 0;

    if ($mail === '' || $login === '') {
        array_push($errMsg, "Not all fields are filled in!");
    } elseif (mb_strlen($login, 'UTF8') < 2) {
        array_push($errMsg, "The login must be more than 2 characters");
    } elseif ($passF !== $passS) {
        array_push($errMsg, 'Passwords do not match');
    } else {
        $hashedPassword = password_hash($passF, PASSWORD_DEFAULT);
        if (isset($_POST['admin'])) {
            $admin = 1;
        }
        $user = [
            'admin' => $admin,
            'username' => $login,
            'email' => $mail,
            'password' => $pass
        ];

        $user = update('users', $id, $user);
        header('location: ' . BASE_URL . 'admin/users/index.php');
    }
}

?>