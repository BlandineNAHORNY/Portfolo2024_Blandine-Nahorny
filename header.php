<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="logo">
            <!-- Ajout de l'événement click pour jouer le son -->
            <a href="<?php echo home_url(); ?>" id="logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Logo.svg" alt="Logo NB">
            </a>
        </div>
        <nav class="main-navigation">
            <!-- Menu hamburger pour mobile -->
            <button class="menu-toggle" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <!-- Navbar pour desktop et mobile -->
            <ul class="menu-items">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'items_wrap' => '%3$s', // Supprime les conteneurs UL/LI automatiques
                ));
                ?>
                <!-- Intégration de Weglot -->
                <li class="weglot-menu-item">
                    <?php echo do_shortcode('[weglot_switcher]'); ?>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Script pour le menu hamburger -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const menuItems = document.querySelector('.menu-items');

        // Chargement des fichiers audio pour l'ouverture et la fermeture du menu
        const openSound = new Audio('<?php echo get_template_directory_uri(); ?>/src/mp3/menu-open.mp3');
        const closeSound = new Audio('<?php echo get_template_directory_uri(); ?>/src/mp3/menu-close.mp3');

        menuToggle.addEventListener('click', function() {
            menuItems.classList.toggle('active');
            menuToggle.classList.toggle('active');

            // Jouer un son différent en fonction de l'état du menu
            if (menuToggle.classList.contains('active')) {
                openSound.play();
            } else {
                closeSound.play();
            }
        });

        // Ajout d'un événement sur le logo pour jouer un son lors du clic
        const logoLink = document.getElementById('logo-link');
        const logoClickSound = new Audio('<?php echo get_template_directory_uri(); ?>/src/mp3/logo-click.mp3');
        
        logoLink.addEventListener('click', function() {
            logoClickSound.play(); // Joue le son lors du clic sur le logo
        });
    });

    document.addEventListener("mousemove", (e) => {
        const sparkleContainer = document.getElementById("sparkle-container");

        // Crée plusieurs paillettes à chaque mouvement de la souris
        const sparkleCount = 10; // Plus de paillettes par mouvement
        for (let i = 0; i < sparkleCount; i++) {
            const sparkle = document.createElement("div");
            sparkle.className = "sparkle";

            // Position aléatoire proche de la souris
            const offsetX = (Math.random() - 0.5) * 30; // Déplacement max de 15px sur X
            const offsetY = (Math.random() - 0.5) * 30; // Déplacement max de 15px sur Y
            sparkle.style.left = `${e.pageX + offsetX}px`;
            sparkle.style.top = `${e.pageY + offsetY}px`;

            // Ajoute la paillette au conteneur
            sparkleContainer.appendChild(sparkle);

            // Supprime la paille après l'animation
            setTimeout(() => {
                sparkle.remove();
            }, 500); // Durée de l'animation (0.5s)
        }
    });

    document.addEventListener('scroll', function() {
            var scrollTop = window.scrollY || document.documentElement.scrollTop;
            var docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrollPercent = (scrollTop / docHeight) * 100;
            document.getElementById('progress-bar').style.width = scrollPercent + '%';
        });
</script>

<div id="sparkle-container"></div>
<div id="progress-bar"></div>

</body>
</html>
