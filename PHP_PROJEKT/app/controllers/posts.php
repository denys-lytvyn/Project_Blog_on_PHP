<?php
// Include the database configuration file
include SITE_ROOT . '/app/database/db.php';

// Initialize error messages arrayl
$errMsg = [];

// Initialize variables for post data
$id = '';
$title = '';
$content = '';
$img = '';
$topic = '';

// Fetch topics, all posts, and posts with users information
$topics = selectAll('topics');
$posts = selectAll('posts');
$postsAdm = selectAllfromPostsWithUsers('posts', 'users');



// CREATE POSTS
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {

    if (!empty($_FILES['img']['name'])) {
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\images\posts\\" . $imgName;


        if (strpos($fileType, 'image') === false) {
            array_push($errMsg, "Invalid image format. Only JPG, JPEG, PNG, and GIF are allowed.");
        } else {
            $result = move_uploaded_file($fileTmpName, $destination);

            if ($result) {
                $_POST['img'] = $imgName;
            } else {
                array_push($errMsg, "Error during file upload. Please try again.");
            }
        }
    } else {
        array_push($errMsg, "Error during file upload. Please try again.");
    }

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $publish = isset($_POST['publish']) ? 1 : 0;


    if ($title === '' || $content === '' || $topic === '') {
        array_push($errMsg, "Not all fields are filled!");
    } elseif (mb_strlen($title, 'UTF8') < 7) {
        array_push($errMsg, "The title of the article must be longer than 7 characters");
    } else {
        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'img' => isset($_POST['img']) ? $_POST['img'] : '',
            'status' => $publish,
            'id_topic' => $topic
        ];

        $post = insert('posts', $post);
        $post = selectOne('posts', ['id' => $id]);
        header('location: ' . BASE_URL . 'admin/posts/index.php');
    }
} else {
    $id = '';
    $title = '';
    $content = '';
    $publish = '';
    $topic = '';
}


// UPDATE POSTS
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $topic = $post['id_topic'];
    $publish = $post['status'];

}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_post'])) {
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);
    $publish = isset($_POST['publish']) ? 1 : 0;

    if (!empty($_FILES['img']['name'])) {
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\images\posts\\" . $imgName;


        if (strpos($fileType, 'image') === false) {
            array_push($errMsg, "Invalid image format. Only JPG, JPEG, PNG, and GIF are allowed.");
        } else {
            $result = move_uploaded_file($fileTmpName, $destination);

            if ($result) {
                $_POST['img'] = $imgName;
            } else {
                array_push($errMsg, "Error during file upload. Please try again.");
            }
        }
    } else {
        array_push($errMsg, "Error during file upload. Please try again.");
    }

    if ($title === '' || $content === '' || $topic === '') {
        array_push($errMsg, "Not all fields are filled!");
    } elseif (mb_strlen($title, 'UTF8') < 7) {
        array_push($errMsg, "The title of the article must be longer than 7 characters");
    } else {
        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'img' => isset($_POST['img']) ? $_POST['img'] : '',
            'status' => $publish,
            'id_topic' => $topic
        ];

        $post = update('posts', $id, $post);
        $post = selectOne('posts', ['id' => $id]);
        header('location: ' . BASE_URL . 'admin/posts/index.php');
    }
}
//  else {
//     $title = $_POST['title'];
//     $content = $_POST['content'];
//     $publish = isset($_POST['publish']) ? 1 : 0;
//     $topic = $_POST['id_topic'];
// }

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])) {

    $id = $_GET['pub_id'];
    $publish = $_GET['publish'];

    $postId = update('posts', $id, ['status' => $publish]);

    header('location: ' . BASE_URL . 'admin/posts/index.php');
    die();
}



// Delete category
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];

    delete('posts', $id);
    header('location: ' . BASE_URL . 'admin/posts/index.php');
}


?>