<?php
include("path.php");
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
        <section class="main__content">
            <div class="main__content__container">
                <section class="single__post">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Fugiat id hic architecto sunt tenetur. Dicta enim a molestias,
                        facilis, quaerat odio voluptatum praesentium vel fugit laboriosam
                        magni, sed autem ratione.</h2>
                    <img src="./assets/images/1.jpg" alt="" class="img">

                    <div class="text">
                        <div class="single__post__info"><ion-icon name="person"></ion-icon>Autor name <ion-icon
                                name="calendar"></ion-icon> May 14, 2023</div>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Perspiciatis nam illum nisi asperiores ex expedita blanditiis
                        incidunt ipsam officia aliquam quis labore, ab ea sit modi
                        cupiditate quibusdam, aut quia!
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