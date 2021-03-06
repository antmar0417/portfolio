<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.x/dist/typography.min.css" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
  $menuItems = wp_get_nav_menu_items('main-menu'); 
?>
<nav>
  <a href="<?= site_url(); ?>"><?= bloginfo('name'); ?></a>
  <?php foreach($menuItems as $item) : ?>
    <a class="text-gray-500 hover:bg-gray-700 hover:text-white px-3 py-2" href="<?= $item->url; ?>"><?= $item->title; ?></a>
  <?php endforeach; ?>
</nav>
<div class="container mx-auto">