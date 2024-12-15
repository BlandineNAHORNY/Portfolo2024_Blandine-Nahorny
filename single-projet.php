<?php
/* Template Name: Projet avec Carrousel */
get_header();
?>

<div class="project-page">
    <!-- Hero Section -->

    <div data-title="PROJET PROJET" class="hero">
    <div class="space-y-4 hero_leftcontent">
    <p class="project-date"><?php the_field('date_projet'); ?></p>
            <h1 class="project-name"><?php the_field('nom_projet'); ?></h1>
            <p class="project-category">Design</p>
        </div>
        <div class="hero_rightcontent1">
    <!-- Affichage de l'image de mise en avant -->
    <img src="<?php the_post_thumbnail_url(); ?>" alt="Project Image" class="project-image">
</div>
</div>
</div>

    <!-- Project Description Section -->
    <div class="project-description">
    <div class="styled-bar"></div> 
    <h2 class="title-section">Contexte</h2>
    <p class="normal-text"><?php the_field('contexte_projet'); ?></p>

    <h2 class="title-section">Réalisation</h2>
    <p class="normal-text"><?php the_field('realisation_projet'); ?></p>

    <!-- "Réalisé avec" Section -->
    <div class="realized-with">
        <p>Réalisé avec : <span><?php the_field('realiser_avec'); ?></span></p>
    </div>
</div>

        <!-- Voir le post Button -->
        <div class="view-post-button">
            <a href="<?php the_field('voir_le_post'); ?>" class="button">Voir le post</a>
        </div>
        
    </div>


    <div class="project-navigation">
    <?php if ( get_adjacent_post(false, '', true) ) : ?>
        <a href="<?php echo get_permalink( get_adjacent_post(false, '', true) ); ?>" class="prev-button">Projet Précédent</a>
    <?php else : ?>
        <span class="prev-button disabled">Pas de projet précédent</span>
    <?php endif; ?>

    <?php if ( get_adjacent_post(false, '', false) ) : ?>
        <a href="<?php echo get_permalink( get_adjacent_post(false, '', false) ); ?>" class="next-button">Projet Suivant</a>
    <?php else : ?>
        <span class="next-button disabled">Pas de projet suivant</span>
    <?php endif; ?>
</div>



<div class="project-description">
    <h2 class="title-section">Les Images du Projet</h2>
</div>
   <!-- Image Gallery Section -->
<div class="image-gallery">
    <?php 
        // Loop pour afficher les images du projet
        for ($i = 1; $i <= 5; $i++) :
            $image_id = get_field('image_projet_' . $i); // On récupère l'ID de l'image
            if ($image_id) :
                $image_url = wp_get_attachment_url($image_id); // Récupère l'URL de l'image à partir de son ID
    ?>
        <div class="gallery-item">
            <!-- On affiche chaque image dans un lien cliquable pour voir en grand avec Lightbox -->
            <a href="<?php echo esc_url($image_url); ?>" class="image-link" data-lightbox="project-gallery" data-title="Projet Image <?php echo $i; ?>">
                <!-- On affiche l'image de manière responsive -->
                <img src="<?php echo esc_url(wp_get_attachment_url($image_id)); ?>" alt="Image Projet <?php echo $i; ?>" class="gallery-image" />
            </a>
        </div>
    <?php
            endif;
        endfor;
    ?>
</div>

</div>

<div class="social-links">
<div class="styled-bar"></div> 
    <h2>RETROUVEZ MOI ÉGALEMENT ICI !</h2>
    <div class="icons">
        <a href="https://github.com/BlandineNAHORNY" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/src/svg/GitHub.svg" alt="GitHub">
        </a>
        <a href="https://www.instagram.com/blandine_nhy/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Instagram.svg" alt="Instagram">
        </a>
        <a href="https://www.linkedin.com/in/blandine-nahorny/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/src/svg/LinkedIn.svg" alt="LinkedIn">
        </a>
        <a href="https://www.behance.net/blandinenahorny#" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Behance.svg" alt="Behance">
        </a>
    </div>
    
</div>

<?php get_footer(); ?>



    <!-- Styled Bar -->
    <div class="styled-bar"></div>
    

<style>
    
/* Hero Section */
.hero {
    margin-top: -80px; /* Espacement au-dessus du contenu */
    margin-bottom: 150px; /* Espacement en dessous du contenu */
    padding: 3rem 5%;
    display: flex;
    height: 100vh;
    position: relative;
    flex-direction: column; /* Aligner verticalement les éléments sur mobile */
    justify-content: flex-start; /* Aligne le contenu en haut */
}

.hero::before {
    position: absolute;
    height: 100%;
    width: 100%;
    color: #a599ff17;
    font-weight: 800;
    content: attr(data-title);
    text-align: left; /* Aligner le texte à gauche */
    word-wrap: break-word; /* Permet de couper le texte si nécessaire */
    top: 0;
    left: 0;
    font-size: 4rem; /* Ajuste la taille du texte pour mobile */
    line-height: 1;
}

.hero h1 {
    font-size: 3rem; /* Taille plus petite sur desktop */
    line-height: 1.5;
    text-align: left; /* Garder l'alignement à gauche pour le titre */
}

.hero h1 > span {
    color: #A599FF;
    font-weight: 800;
}

.hero_leftcontent {
    width: 100%;
    height: fit-content;
    padding: 2rem 0.75rem;
    margin-top: 4rem;
    position: relative;
    z-index: 10;
    backdrop-filter: blur(64px);
    color: white;
    font-size: 1.25rem;
    border: 1px solid #c4c4c476;
    background-color: #c4c4c407;
    text-align: left;
}


/* Propriétés de l'image dans la section Hero */
.hero_rightcontent1 img {
    width: 100%; /* Rend l'image responsive */
    max-width: 500px; /* Taille maximale de l'image */
    object-fit: cover; /* Ajuste l'image pour couvrir sans déformation */
    margin-top: 12rem; /* Espacement au-dessus de l'image */
}

/* Responsive Design pour des écrans plus larges (tablettes et desktop) */
@media (min-width: 768px) {
    .hero {
        padding: 4rem 15%;
        flex-direction: row; /* Alignement en ligne sur grand écran */
    }

    .hero::before {
        font-size: 22rem; /* Ajuste la taille du texte */
    }

    .hero h1 {
        font-size: 5rem; /* Réduction de la taille sur desktop */
    }

    .hero p {
        font-size: 2rem; /* Ajuste la taille du texte */
    }

    .hero_leftcontent {
        width: 48rem;
        left: 2%;
        top: 10%;
        padding: 4rem 3rem;
        font-size: 2rem; /* Réduit la taille du texte pour desktop */
    }

    .hero_rightcontent1 {
        width: 80%; /* Augmente la largeur de l'image sur les écrans plus petits */
        margin-top: 4rem;
        
    }

    .hero_rightcontent1 img {
        max-width: 100%; /* Assure que l'image ne dépasse pas la largeur de l'écran */
        max-width: 70%;

    }
}

/* Responsive Design pour les petits écrans (mobile) */
@media (max-width: 768px) {
    .hero {
        padding: 2rem 5%;
        flex-direction: column; /* Maintient la colonne pour les petits écrans */
        justify-content: flex-start; /* Aligne le contenu en haut */
        margin-bottom: -300px; /* Réduit l'espacement en dessous du contenu */
    }

    .hero::before {
        font-size: 5rem; /* Ajuste la taille du texte pour mobile */
        line-height: 1.2;
        top: 0;
        left: 0;
    }

    .hero h1 {
        font-size: 3rem; /* Taille du titre réduite pour mobile */
    }

    .hero_leftcontent {
        width: 80%; /* Ajuste la largeur du contenu sur mobile */
        margin-top: 2rem;
    }

    
    .hero_rightcontent1 {
        width: 100%; /* L'image prend toute la largeur sur les très petits écrans */
        justify-content: center; /* Centre l'image horizontalement */
    }

    .hero_rightcontent1 img {
        max-width: 70%; /* L'image reste à 100% de la largeur disponible */
        margin-top: 2rem; /* Espacement réduit au-dessus de l'image */
        margin-bottom: 15rem; /* Espacement réduit en dessous de l'image */

    }
}


/* Ajustement pour très petits écrans (smartphones) */
@media (max-width: 480px) {
    .hero h1 {
        font-size: 2.5rem; /* Taille encore réduite pour petits écrans */
    }

    .hero_leftcontent {
        font-size: 1.1rem; /* Réduction supplémentaire pour la lecture */
    }

    .hero_rightcontent {
        width: 80%; /* Augmente la largeur du carré violet */
        margin-top: 1rem; /* Espacement réduit au-dessus de l'image */
        margin-right: 4rem; /* Supprime la marge à droite de l'image */
    }

    .hero_rightcontent1 img {
        max-width: 70%; /* L'image reste à 100% de la largeur disponible */
        margin-top: 1rem; /* Espacement réduit au-dessus de l'image */
        margin-right: 4rem; /* Supprime la marge à droite de l'image */
        margin-bottom: 15rem; /* Espacement réduit en dessous de l'image */
    }
}

/* Styling for the project sections */
.project-date {
    font-size: 1.5rem;
}

.project-category {
    color: #A599FF;
    font-size: 1.2rem;
}

.styled-bar {
    height: 2px;
    background-color: #A599FF;
    width: 60%;
    margin: 20px auto;
}

/* Section Project Description */
.project-description {
    text-align: left; /* Garde le texte aligné à gauche */
    font-size: 1rem; /* Taille du texte */
    line-height: 1.6; /* Espacement des lignes */
    margin: 0 auto;
    max-width: 1000px; /* Limiter la largeur */
    margin-top: 20px; /* Espacement au-dessus de la description */
    padding: 0 20px; /* Espacement réduit sur les côtés */
    color: white;
    line-height: 1.5; /* Améliore l'espacement des lignes pour plus de clarté */
}

/* Responsive Design pour les écrans mobiles */
@media (max-width: 768px) {
    .project-description {
        padding: 0 10px; /* Réduit le padding latéral sur les petits écrans */
    }
}


.title-section {
    font-size: 1.5rem; /* Réduit légèrement la taille des titres */
    font-weight: bold; /* Garder les titres en gras */
    margin-bottom: 20px; /* Espacement supplémentaire entre les titres et le texte */
    line-height: 1.2;
}



/* Texte normal (description) */
.normal-text {
    font-size: 1rem; /* Taille du texte */
    font-weight: normal; /* Texte normal */
    margin-bottom: 20px; /* Espacement entre les paragraphes */
    max-width: 800px; /* Limite la largeur du texte pour la lisibilité */
    text-align: left; /* Aligne le texte à gauche */
    margin: 0 auto; /* Centre le texte */
}

/* Ajustement pour les petits écrans */
@media (max-width: 768px) {
    .normal-text {
        padding: 0 15px; /* Réduit l'espacement sur les côtés */
        max-width: 100%; /* Autorise le texte à prendre toute la largeur de l'écran */
    }
}

.realized-with {
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centre le texte de cette section */
    align-items: center;
    margin-top: 30px;
    width: 100%; /* S'assure que la section utilise toute la largeur */
}

.realized-with p {
    font-size: 1rem; /* Taille de police pour la section "Réalisé avec" */
    color: white;
}

.realized-with span {
    font-weight: bold; /* Garder le "Réalisé avec" en gras */
}

.view-post-button {
    margin-top: 30px;
    text-align: center;
}

.view-post-button .button {
    background-color: transparent; /* Pas de fond */
    padding: 10px 20px;
    color: white; /* Couleur du texte en blanc */
    text-decoration: none;
    font-size: 1rem; /* Taille du texte */
    border: 2px solid white; /* Bordure blanche autour du bouton */
    border-radius: 5px; /* Bord arrondi */
    display: inline-block;
    margin-bottom: 40px; /* Espacement entre les boutons */
    transition: background-color 0.3s ease, color 0.3s ease; /* Animation sur le fond et la couleur du texte */
}

/* Effet au survol */
.view-post-button .button:hover {
    background-color: white; /* Fond blanc au survol */
    color: #A599FF; /* Couleur du texte violette au survol */
}


/* Responsive Design pour les écrans plus larges (tablettes et desktop) */
@media (min-width: 768px) {
    .project-description {
        padding: 50px 25px; /* Espacement ajusté pour les écrans plus grands */
    }

    .title-section {
        font-size: 1.8rem; /* Ajuste la taille des titres pour les écrans plus grands */
        margin-bottom: 30px; /* Plus d'espace entre les titres et les paragraphes */
    }

    .normal-text {
        font-size: 1rem; /* Légèrement plus grand pour les grands écrans */
    }

    .view-post-button .button {
        font-size: 1.1rem; /* Ajuste la taille du bouton pour les grands écrans */
    }
}

/* Ajustement pour très petits écrans (smartphones) */
@media (max-width: 480px) {
    .title-section {
        font-size: 1.2rem; /* Réduit encore la taille des titres pour les petits écrans */
        margin-bottom: 15px; /* Réduit l'espace entre les titres et le texte */
    }

    .normal-text {
        font-size: 1rem; /* Réduit encore la taille du texte pour une meilleure lisibilité */
        margin-bottom: 15px; /* Plus d'espace entre les paragraphes */
    }

    .view-post-button .button {
        font-size: 0.9rem; /* Réduit la taille du bouton pour les petits écrans */
    }

    
}





/* Image Gallery Section */
.image-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Grille responsive */
    gap: 20px;
    margin-top: 30px;
    padding: 0 20px; /* Ajout d'un padding pour ne pas coller aux bords */
}

.gallery-item {
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    display: flex;
    justify-content: center; /* Centre les images dans leur conteneur */
    border-radius: 10px; /* Bordure arrondie */
    border: 2px solid transparent; /* Bordure transparente par défaut */
}

/* Animation du contour dynamique */
@keyframes borderAnimation {
    0% {
        border-width: 2px;
        border-color: transparent;
    }
    100% {
        border-width: 2px;
        border-color: #A599FF;
    }
}

/* Applique l'animation au survol avec un contour dynamique */
.gallery-item:hover {
    animation: borderAnimation 0.3s linear forwards;
    transform: translateY(-5px); /* Légère translation au survol */
}

/* Applique l'animation au toucher (mobile) */
.gallery-item:active {
    animation: borderAnimation 0.3s linear forwards;
}

/* Style des images de la galerie */
.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Permet aux images de s'adapter sans déformation */
    transition: transform 0.3s ease;
    max-width: 100%;
    max-height: 100%;
    border-radius: 10px; /* Arrondir les bords de l'image */
}

/* Effet de zoom lorsque l'on survole ou touche l'image */
.gallery-item:hover .gallery-image {
    transform: scale(1.05); /* Zoom léger sur l'image */
}

/* Responsive Design */
@media (max-width: 768px) {
    .image-gallery {
        grid-template-columns: repeat(2, 1fr); /* 2 colonnes sur les tablettes */
    }
}

@media (max-width: 480px) {
    .image-gallery {
        grid-template-columns: 1fr; /* 1 colonne sur les petits écrans */
    }
}

/* Modification pour l'animation du contour dynamique */
.gallery-item {
    position: relative;
}

.gallery-item:hover {
    border: 2px solid transparent;
}

.gallery-item:hover .gallery-image {
    transform: scale(1.05);
}

.gallery-item:hover:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 2px solid #A599FF;
    box-sizing: border-box;
    transition: all 0.3s ease;
}


/* Responsive Design */
@media (max-width: 768px) {
    .hero {
        flex-direction: column;
        height: auto;
    }

    .hero-left-content, .hero-right-content {
        width: 100%;
    }

    .hero-left-content h1 {
        font-size: 2.5rem;
    }

    .hero-right-content img {
        max-width: 80%;
        margin: 0 auto;
    }

    .image-gallery {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .hero-left-content h1 {
        font-size: 2rem;
    }

    .project-description p {
        font-size: 1rem;
    }

    .view-post-button .button {
        font-size: 1rem;
    }

    .image-gallery {
        grid-template-columns: 1fr;
    }
}

/* Style du texte de description */
.project-description {
    text-align: left; /* Centre le texte horizontalement */
    font-size: 1rem; /* Taille du texte */
    line-height: 1.6; /* Espacement des lignes */
    margin: 0 auto;
    line-height: 1.6; /* Améliore la lisibilité avec plus d'espace entre les lignes */
    margin-top: 20px;
    max-width: 1000px;
}

/* Sauts de ligne et gestion des alinéas */
.normal-text {
    margin-bottom: 20px; /* Espacement entre les paragraphes */
}

/* Texte en gras */
strong {
    font-weight: bold;
}

/* Texte en italique */
em {
    font-style: italic;
}

/* Séparation des sections */
.title-section {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 30px;
}

/* Ajouter un petit espacement entre chaque paragraphe */
.normal-text p {
    margin-bottom: 15px;
}

/* Centrer le titre et le texte */
.title-section {
    text-align: center; /* Centre le titre horizontalement */
    font-size: 1.8rem; /* Taille de police du titre */
    font-weight: bold; /* Texte en gras */
    margin-bottom: 20px; /* Espacement sous le titre */
}

.normal-text {
    text-align: left; /* Centre le texte horizontalement */
    font-size: 1.1rem; /* Taille du texte */
    line-height: 1.6; /* Espacement des lignes */
    margin: 0 auto; /* Centre le texte par rapport à son conteneur */
    max-width: 1000px; /* Limiter la largeur du texte pour qu'il ne prenne pas toute la largeur de l'écran */
}

/* Section Navigation (Précédent / Suivant) */
.project-navigation {
    display: flex;
    justify-content: space-between; /* Espacement entre les boutons */
    align-items: center;
    margin-top: 20px; /* Espacement au-dessus des boutons */
    padding: 0 20px; /* Marge interne pour éviter que ce soit collé aux bords */
}

.prev-button, .next-button {
    background-color: #A599FF; /* Fond du bouton */
    color: white; /* Couleur du texte */
    padding: 8px 16px; /* Taille des boutons */
    border-radius: 5px; /* Bords arrondis */
    text-decoration: none; /* Supprime le soulignement */
    font-size: 0.9rem; /* Taille du texte plus petite */
    font-weight: bold; /* Texte en gras */
    transition: background-color 0.3s ease; /* Animation de changement de couleur */
}

.prev-button:hover, .next-button:hover {
    background-color: #8a76cc; /* Changer la couleur de fond lors du survol */
}

/* Responsive Design pour les petits écrans (tablette et plus petit) */
@media (max-width: 768px) {
    .project-navigation {
        flex-direction: column; /* Disposer les boutons en colonne sur mobile */
        align-items: center; /* Centrer les boutons */
    }

    .prev-button, .next-button {
        margin-bottom: 10px; /* Espacement entre les boutons */
        padding: 6px 12px; /* Boutons plus petits sur mobile */
        font-size: 0.8rem; /* Taille du texte plus petite */
    }
}

.project-navigation a.disabled {
    color: #ccc; /* Couleur grisée pour les liens désactivés */
    pointer-events: none; /* Empêche le clic */
    text-decoration: none; /* Supprime le soulignement */
}


</style>

<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">

<?php get_footer(); ?>