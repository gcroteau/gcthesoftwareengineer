<!-- Main header template -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php 
        wp_head(); // So that Wordpress knows that it is our header
    ?>
</head>

<body>

<header class="header">
    <h1><?php bloginfo('title'); ?></h1> 
    <h3><?php bloginfo('description'); ?></h3> 
</header>