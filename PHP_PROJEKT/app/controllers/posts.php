<?php

include SITE_ROOT . '/app/database/db.php';

$errMsg = '';

$id = '';
$title = '';
$content = '';
$img = '';
$topic = '';

$topics = selectAll('topics');

// CREATE POSTS
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);


    if ($title === '' || $content === '' || $topic === '') {
        $errMsg = "Please fill in all the required fields.";
    } elseif (mb_strlen($title, 'UTF8') < 1) {
        $errMsg = 'Title should be at least 7 characters long';
    } else {
        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'img' => $_POST['img'],
            'status' => 1,
            'id_topic' => $topic
        ];

        $post = insert('posts', $post);
        $post = selectOne('posts', ['id' => $id]);

        header('location: ' . BASE_URL . 'admin/posts/index.php');
    }
} else {

    $title = '';
    $content = '';
}


// UPDATE CATEGORIES
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);


    if ($name === '' || $description === '') {
        $errMsg = "Please fill in all the required fields.";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errMsg = 'Topic should be at least 2 characters long';
    } else {
        $topic = [
            'name' => $name,
            'description' => $description,
        ];

        $id = $_POST['id'];
        $topic_id = update($pdo, 'topics', $id, $topic);

        header('location: ' . BASE_URL . 'admin/topics/index.php');
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}



// Delete category
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {

    $id = $_GET['del_id'];

    delete('topics', $id);
    header('location: ' . BASE_URL . 'admin/topics/index.php');
}


?>