<?php
/**
 * Header template
 *
 * @package kurs
 */
spl_autoload_register(function ($class) {
    $file_path = str_replace("\\", "/", $class);
    $file_path = str_replace("Kurs", "kurs", $file_path);
    $file_path = str_replace("kurs", "kurs", $file_path);
    $file_path = get_template_directory() . "/inc/$file_path.php";
    if (file_exists($file_path)) {
        require_once $file_path;
    }
});

new Student()
?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kurs - Wordpress Theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<?php if(function_exists('wp_body_open')) wp_body_open(); ?>
<div id="page" class="site">
<header>
    <?php get_template_part("template-parts/header/nav") ?>
</header>
<div id="content" class="site-content">
