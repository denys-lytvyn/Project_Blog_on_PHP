<?php
include 'path.php';
include "app/controllers/topics.php";
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

                    <div class="item active">
                        <img src="assets/images/1.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption-hack carousel-caption">
                            <h3><a href="#">London london london</a></h3>
                            <!-- <p>LA is always so much fun!</p> -->
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/images/2.jpg" alt="Chicago" style="width:100%;">
                        <div class="carousel-caption-hack carousel-caption">
                            <h3><a href="#">Indigo indigo indigo</a></h3>
                            <!-- <p>Thank you, Chicago!</p> -->
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/images/3.jpg" alt="New York" style="width:100%;">
                        <div class="carousel-caption-hack carousel-caption">
                            <h3><a href="#">Krakow krakow krakow</a></h3>
                            <!-- <p>We love the Big Apple!</p> -->
                        </div>
                    </div>

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
                    <div class="posts__item">
                        <div class="posts__item__img">
                            <img src="./assets/images/1.jpg" alt="#" class="img-thumbnail img">
                        </div>
                        <div class="posts__item__text">
                            <h3><a href="./single.php">State for web site</a></h3>
                            <span><ion-icon name="person"></ion-icon>Autor name <ion-icon name="calendar"></ion-icon>
                                May 14, 2023</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio eum quaerat possimus qui, repellat vel explicabo
                                animi repellendus fuga quisquaLorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio eum quaerat possimus qui, repellat vel explicabo
                                animi repellendus fuga quisquam aperiam veritatis aliquam
                                mollitia magnam dolorum minuLorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio eum quaerat possimus qui, repellat vel explicabo
                                animi repellendus fuga quisquam aperiam veritatis aliquam
                                mollitia magnam dolorum minum aperiam veritatis aliquam
                                mollitia magnam dolorum minus odio non esse?</p>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__item__img">
                            <img src="./assets/images/2.jpg" alt="#" class="img-thumbnail">
                        </div>
                        <div class="posts__item__text">
                            <h3><a href="#">State for web site</a></h3>
                            <span><ion-icon name="person"></ion-icon>Autor name <ion-icon name="calendar"></ion-icon>
                                May 14, 2023</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio eum quaerat possimus qui, repellat vel explicabo
                                animi repellendus fuga quisquam aperiam veritatis aliquam
                                mollitia magnam dolorum minus odio non esse?</p>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__item__img">
                            <img src="./assets/images/3.jpg" alt="#" class="img-thumbnail">
                        </div>
                        <div class="posts__item__text">
                            <h3><a href="#">State for web site</a></h3>
                            <span><ion-icon name="person"></ion-icon>Autor name <ion-icon name="calendar"></ion-icon>
                                May 14, 2023</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio eum quaerat possimus qui, repellat vel explicabo
                                animi repellendus fuga quisquam aperiam veritatis aliquam
                                mollitia magnam dolorum minus odio non esse?</p>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__item__img">
                            <img src="./assets/images/1.jpg" alt="#" class="img-thumbnail">
                        </div>
                        <div class="posts__item__text">
                            <h3><a href="#">State for web site</a></h3>
                            <span><ion-icon name="person"></ion-icon>Autor name <ion-icon name="calendar"></ion-icon>
                                May 14, 2023</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio eum quaerat possimus qui, repellat vel explicabo
                                animi repellendus fuga quisquam aperiam veritatis aliquam
                                mollitia magnam dolorum minus odio non esse?</p>
                        </div>
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
                                <li><a href="#">
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