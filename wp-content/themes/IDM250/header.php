<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="container header__content">
    <h1>Lillian Raphael</h1>
  </div>
  <div class="container header__content">
    <?php wp_nav_menu(['theme_location' => 'primary_menu']);?>
  </div>
</header>
