<header class="header">
    <div class="header__row">
        <div class="header__row__logo">
            <h1><a href="<?php echo BASE_URL ?>">My blog</a></h1>
        </div>
        <nav class="header_nav">
            <ul>
                <li>
                    <a href="<?php echo BASE_URL ?>">Main page</a>
                </li>
                <li>
                    <a href="#">About us</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <?php if (isset($_SESSION['id'])): ?>
                        <a href="#">
                            <ion-icon name="person"></ion-icon>
                            <?php echo $_SESSION['login']; ?>
                        </a>
                        <ul>
                            <?php if ($_SESSION['admin']): ?>
                                <li><a href="<?php echo BASE_URL . 'admin/topics/index.php' ?>">Admin panel</a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo BASE_URL . 'logout.php' ?>">Log out</a></li>
                        </ul>
                    <?php else: ?>
                        <a href="<?php echo BASE_URL . 'log.php' ?>">
                            <ion-icon name="person"></ion-icon>
                            Sign in
                        </a>
                        <ul>
                            <li><a href="<?php echo BASE_URL . 'reg.php' ?>">Register in</a></li>
                        </ul>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
</header>