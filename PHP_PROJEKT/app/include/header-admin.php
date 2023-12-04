<header class="admin__header__row header">
    <div class="header__row">
        <div class="header__row__logo">
            <h1><a href="<?php echo BASE_URL ?>">My blog</a></h1>
        </div>
        <nav class="header_nav">
            <ul>
                <li>
                    <a href="#">
                        <ion-icon name="person"></ion-icon>
                        <?php if ($_SESSION['login']) {
                            echo $_SESSION['login'];
                        } else {
                            echo 'You are not allowed to be here';
                            exit();
                        } ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'logout.php' ?>">Log out</a>
            </ul>
        </nav>
    </div>
</header>