<?php
$consumer = new HTTP_OAuth_Consumer(constant('KEY'), constant('SECRET'));
$consumer->getRequestToken(constant(
    'REQUEST_TOKEN'), constant('BASE_URL').'/getAccessToken.php'
);

$_SESSION['token'] = $consumer->getToken();
$_SESSION['tokenSecret'] = $consumer->getTokenSecret();

?>
