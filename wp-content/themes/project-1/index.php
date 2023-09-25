<?php
/*
* This template for displaying the header
 */
?>

<!doctype html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="javascript:void(0)">
                    <img src="<?php echo get_theme_mod('main_logo'); ?>" alt="">
                </a>
            </div>
            <div class="col-md-9 text-end">
                <ul id="nav">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Media</a></li>
                    <li><a href="">Download</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Projects</a>
                        <ul class="has-dropdown">
                            <li><a href="">Dropdown Menu</a></li>
                            <li><a href="">Dropdown Menu</a></li>
                            <li><a href="">Dropdown Menu</a></li>
                            <li><a href="">Dropdown Menu</a>
                                <ul class="has-dropdown-child">
                                    <li><a href="">Dropdown Menu child</a></li>
                                    <li><a href="">Dropdown Menu child</a></li>
                                    <li><a href="">Dropdown Menu child</a></li>
                                    <li><a href="">Dropdown Menu child</a></li>
                                </ul>
                            </li>
                            <li><a href="">Dropdown Menu</a></li>
                        </ul>
                    </li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
