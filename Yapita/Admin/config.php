<?php
$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';

// this configuration path for website
define('PATH', 'http://localhost:8080/Back_End/'); // isi path dari website anda
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page=' . $page);

// this configuration for database website
define('DB_HOST', 'localhost'); // host yang di gunakan
define('DB_USERNAME', 'root'); // username host
define('DB_PASSWORD', ''); // password host
define('DB_NAME', 'front'); // database yang di gunakan
?>
