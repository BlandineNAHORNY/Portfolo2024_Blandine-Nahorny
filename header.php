<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body 

<?php body_class(); ?>>
    <header class="site-header">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Logo.svg" alt="Logo NB">
            </a>
        </div>
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => false,
                'menu_class' => 'menu-items',
            ));
            ?>
            <button class="menu-toggle" aria-label="Toggle navigation">
                <span class="hamburger"></span>
            </button>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const menuItems = document.querySelector('.menu-items');

            menuToggle.addEventListener('click', function() {
                menuItems.classList.toggle('active');
            });
        });
    </script>


</body>

</html>
