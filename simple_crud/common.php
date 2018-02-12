<?php
$connStr = 'mysql:host=localhost:8889;dbname=admin';
$user = 'admin';
$pass = 'admin1234';

function showHeader($title)
{
    ?>
    <html>
    <head><title><?=htmlspecialchars($title)?></title></head>
    <body>
    <h1><?=htmlspecialchars($title)?></h1>
    <hr>
    <?php
}
/**
 * This function will 'close' the body and html
 * tags opened by the showHeader() function
 */
function showFooter()
{
    ?>
    </body>
    </html>
    <?php
}
// Create the connection object
$conn = new PDO($connStr, $user, $pass);

function pr_dump($var) {
    print '<pre>'; print_r($var); print '</pre>';
}


