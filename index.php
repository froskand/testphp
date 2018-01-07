<?php

if (!isset($_SESSION['accessToken'])) {
    ?>
        We have no access token, <a href="getRequestToken.php">connect us</a>
    <?php
    exit();
}
?>
