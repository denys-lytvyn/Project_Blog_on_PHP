<?php include("path.php");

include "app/controllers/topics.php";
$post = selectPostFromPostsWithUsersOnSingle('posts', 'users', $_GET['post']);

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

    <!-- --- MAIN SECTION ---  -->
    <main>
        <section class="main__content">
            <div class="main__content__container">
                <section class="single__post">
                    <h2>
                        <?php echo $post['title']; ?>
                    </h2>
                    <img src="<?= BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?= $post['title'] ?>"
                        class="img">

                    <div class="text">
                        <div class="single__post__info">
                            <ion-icon name="person"></ion-icon>
                            <?= $post['username']; ?>
                            <ion-icon name="calendar"></ion-icon>
                            <?= $post['created_date']; ?>
                        </div>
                        <?= $post['content']; ?>
                    </div>
                </section>

                <section class="sidebar">
                    <div class="search">
                        <h3><ion-icon name="search"></ion-icon>Search</h3>
                        <form action="/" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="input your word">
                        </form>
                    </div>
                    <aside class="categories">
                        <h3><ion-icon name="list"></ion-icon>Categories</h3>
                        <ul>
                            <?php foreach ($topics as $key => $topic): ?>
                                <li>
                                    <a href="<?= BASE_URL . 'category.php?id=' . $topic['id']; ?>">
                                        <?= $topic['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </aside>
                </section>
            </div>
        </section>
    </main>

    <!-- --- FOOTER ---  -->
    <?php include("app/include/footer.php"); ?>

    <script src="./js/index.js"></script>
</body>

</html>