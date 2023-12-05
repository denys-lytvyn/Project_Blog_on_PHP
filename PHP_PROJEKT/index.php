<?php
include 'path.php';
include "app/controllers/topics.php";

$posts = selectAllFromPostsWithUsersOnIndex('posts', 'users');
$topTopic = selectTopTopicFromPostsOnIndex('posts');

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
        <section class="carousel__section">

            <h2><ion-icon name="flame"></ion-icon>Top publications</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php foreach ($topTopic as $key => $post): ?>
                        <?php if ($key == 0): ?>
                            <div class="item active">
                            <?php else: ?>
                                <div class="item">
                                <?php endif; ?> <img src="<?= BASE_URL . 'assets/images/posts/' . $post['img'] ?>"
                                    alt="<?= $post['title']; ?>" style="width:100%;">
                                <div class="carousel-caption-hack carousel-caption">
                                    <h3><a href="<?= BASE_URL . 'single.php?post=' . $post['id']; ?>">
                                            <?= strlen($post['title']) > 47 ? substr($post['title'], 0, 80) . ' ...' : $post['title']; ?>
                                    </h3> <!-- <p>LA is always so much fun!</p> -->
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </section>

        <section class="main__content">
            <h2><ion-icon name="newspaper"></ion-icon>Publications</h2>
            <div class="main__content__container">
                <section class="posts">
                    <?php foreach ($posts as $post): ?>
                        <div class="posts__item">
                            <div class="posts__item__img">
                                <img src="<?= BASE_URL . 'assets/images/posts/' . $post['img'] ?>"
                                    alt="<?= $post['title']; ?>" class="img-thumbnail img">
                            </div>
                            <div class="posts__item__text">
                                <h3><a href="<?= BASE_URL . 'single.php?post=' . $post['id']; ?>">
                                        <?= strlen($post['title']) > 47 ? substr($post['title'], 0, 47) . ' ...' : $post['title']; ?>
                                    </a></h3>
                                <span>
                                    <ion-icon name="person"></ion-icon>
                                    <?= $post['username']; ?>
                                    <span class="helped_class"></span>
                                    <ion-icon name="calendar"></ion-icon>
                                    <?= $post['created_date']; ?>
                                </span>
                                <?= strlen($post['content']) > 750 ? mb_substr($post['content'], 0, 750, 'UTF-8') . ' ...' : $post['content']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </section>

                <section class="sidebar">
                    <div class="search">
                        <h3><ion-icon name="search"></ion-icon>Search</h3>
                        <form action="search.php" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="input your word...">
                        </form>
                    </div>
                    <aside class="categories">
                        <h3><ion-icon name="list"></ion-icon>Categories</h3>
                        <ul>
                            <?php foreach ($topics as $key => $topic): ?>
                                <li><a href="<?= BASE_URL . 'category.php?id=' . $topic['id'] ?>">
                                        <?= $topic['name'] ?>
                                    </a></li>
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