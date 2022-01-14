<?php

$page = $_GET['p'] ?? 'home';
$page = strip_tags($page);
getPage(
    sprintf(__DIR__ . "/../%s.php", strtolower($page)),
    $page
);

function getPage(string $pageName, string $title): void
{
    require __DIR__ . '/../partials/header.php';
    require file_exists($pageName) ? $pageName : __DIR__ . '/../404.php';
    require __DIR__ . '/../partials/footer.php';
}

?>


