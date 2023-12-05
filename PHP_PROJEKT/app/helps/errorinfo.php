<?php if (count($errMsg) > 0): ?>
    <!-- Display error messages in an unordered list -->
    <ul>
        <?php foreach ($errMsg as $error): ?>
            <li style="color:red;">
                <?= $error; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>