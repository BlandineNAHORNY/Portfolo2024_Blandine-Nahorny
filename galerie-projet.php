<?php
/* Template Name: Galerie des Projets */
get_header();
?>

<div class="projects-gallery">
    <!-- Titre et sous-titre -->
    <h1 class="gallery-title">TU VEUX VOIR MES PROJETS ?</h1>
    <p class="gallery-subtitle">Vous pouvez retrouver des projets personnels et scolaires réalisés par mes soins</p>

    <!-- Filtre de tri -->
    <div class="filters">
        <form method="get" class="filter-form">
            <label for="sort">Trier par :</label>
            <select name="sort" id="sort">
                <option value="date_desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'date_desc') ? 'selected' : ''; ?>>Plus récents</option>
                <option value="date_asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'date_asc') ? 'selected' : ''; ?>>Plus anciens</option>
                <option value="alpha_asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'alpha_asc') ? 'selected' : ''; ?>>Par ordre alphabétique</option>
                <option value="alpha_desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'alpha_desc') ? 'selected' : ''; ?>>Par ordre alphabétique inverse</option>
            </select>
            <button type="submit">Appliquer</button>
        </form>
    </div>

    <!-- Grille des projets -->
    <div class="projects-grid">
        <?php
        // Récupérer le critère de tri depuis l'URL (filtre)
        $sort_order = isset($_GET['sort']) ? $_GET['sort'] : 'date_desc';

        // Arguments de la requête pour afficher les projets
        $args = array(
            'post_type' => 'projet',
            'posts_per_page' => -1, // Affiche tous les projets
        );

        // Modifiez les arguments de la requête en fonction du critère de tri
        if ($sort_order == 'date_desc') {
            $args['orderby'] = 'date';
            $args['order'] = 'DESC'; // Trier par date, du plus récent au plus ancien
        } elseif ($sort_order == 'date_asc') {
            $args['orderby'] = 'date';
            $args['order'] = 'ASC'; // Trier par date, du plus ancien au plus récent
        } elseif ($sort_order == 'alpha_asc') {
            $args['orderby'] = 'title';
            $args['order'] = 'ASC'; // Trier par ordre alphabétique croissant
        } elseif ($sort_order == 'alpha_desc') {
            $args['orderby'] = 'title';
            $args['order'] = 'DESC'; // Trier par ordre alphabétique décroissant
        }

        // Exécuter la requête
        $projects_query = new WP_Query($args);

        if ($projects_query->have_posts()) :
            while ($projects_query->have_posts()) : $projects_query->the_post();
        ?>

        <div class="project-item">
            <a href="<?php the_permalink(); ?>" class="project-link">
                <div class="project-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>
                </div>
                <h3 class="project-title"><?php the_title(); ?></h3>
                <div class="project-btn">
                    <a href="<?php the_permalink(); ?>" class="project-link-text">Voir le projet</a>
                </div>
            </a>
        </div>

        <?php
            endwhile;
            wp_reset_postdata(); // Restaure la requête globale après la boucle
        else :
            echo '<p>Aucun projet trouvé.</p>';
        endif;
        ?>
    </div>
</div>



<style>
/* Conteneur principal pour les projets */
.projects-gallery {
    padding: 50px;
    text-align: center;
}

/* Titre de la galerie */
.gallery-title {
    color: #A599FF;
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-family: 'Open Sans', sans-serif;
}

/* Sous-titre de la galerie */
.gallery-subtitle {
    color: white;
    font-size: 1.2rem;
    margin-bottom: 40px;
    font-family: 'Open Sans', sans-serif;
}

/* Filtre */
.filters {
    margin-bottom: 40px;
    color: white;
}

.filter-form {
    display: inline-block;
    margin-top: 10px;
}

.filter-form select,
.filter-form button {
    padding: 8px;
    font-size: 1rem;
    margin: 0 10px;
    border: none;
    background-color: #A599FF;
    color: white;
    cursor: pointer;
}

.filter-form button {
    border-radius: 5px;
}

.filter-form button:hover,
.filter-form select:hover {
    background-color: #8a76cc;
}

/* Grille des projets */
.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Ajuste les cartes selon la taille de l'écran */
    gap: 20px;
    justify-items: center;
    margin-top: 30px;
}

/* Style pour chaque élément de projet */
.project-item {
    text-align: center;
    width: 100%;
}

/* Lien qui englobe toute la carte */
.project-link {
    display: block;
    text-decoration: none;
    color: inherit;
}

/* Image de chaque projet */
.project-image {
    position: relative;
    overflow: hidden;
    height: 70%; /* Ajuste la hauteur de l'image */
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Titre du projet */
.project-title {
    font-size: 1.5rem;
    font-weight: normal;
    margin-top: 10px;
    font-family: 'Open Sans', sans-serif;
    color: #fff;
}

/* Lien Voir le Projet */
.project-btn {
    padding: 6px;
    font-size: 0.9rem;
    background-color: transparent;
    color: #A599FF;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 10px;
}

.project-link-text {
    font-size: 0.9rem;
    text-decoration: none;
    color: #A599FF;
    display: inline-block;
}

.project-link-text:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .gallery-title {
        font-size: 2rem;
    }

    .gallery-subtitle {
        font-size: 1rem;
    }

    .projects-grid {
        grid-template-columns: 1fr 1fr;
    }

    .project-item {
        height: 350px;
    }
}

@media (max-width: 480px) {
    .gallery-title {
        font-size: 1.5rem;
    }

    .project-title {
        font-size: 1.3rem;
    }

    .project-link-text {
        font-size: 0.8rem;
    }

    .project-item {
        height: 300px;
    }
}


</style>
<?php get_footer(); ?>