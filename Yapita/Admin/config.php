<?php
$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

// this configuration path for website
define('PATH', ''); // isi path dari website anda
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page=' . $page);

// this configuration for database website
define('DB_HOST', 'localhost:53613'); // host yang di gunakan
define('DB_USERNAME', 'yapita'); // username host
define('DB_PASSWORD', 'adgjmptw12'); // password host
define('DB_NAME', 'yapita'); // database yang di gunakan
?>
