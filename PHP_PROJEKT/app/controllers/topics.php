<?php

include SITE_ROOT . '/app/database/db.php';

$errMsg = '';

$id = '';
$name = '';
$description = '';

$topics = selectAll('topics');

// CREATE CATEGORIES
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])) {

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);


    if ($name === '' || $description === '') {
        $errMsg = "Please fill in all the required fields.";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errMsg = 'Topic should be at least 2 characters long';
    } else {
        $existance = selectOne('topics', ['name' => $name]);
        if ($existance) {
            $errMsg = 'This topic is already exist.';
        } else {

            $topic = [
                'name' => $name,
                'description' => $description,
            ];

            $id = insert('topics', $topic);
            $topic = selectOne('topics', ['id' => $id]);

            header('location: ' . BASE_URL . 'admin/topics/index.php');
        }
    }

} else {

    $name = '';
    $description = '';
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