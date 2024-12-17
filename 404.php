<?php 
/* Template Name: Error 404 */
get_header();
?>

<div class="error-404 not-found">
    <div class="error-message">
        <h1 class="error-title">Oups ! La page que vous cherchez n'existe pas.</h1>
        <p class="error-text">Il semble que cette page ait été déplacée, supprimée ou n'ait jamais existé.</p>
        <p class="error-redirect">Vous pouvez retourner à la <a href="<?php echo home_url(); ?>" class="error-link">page d'accueil</a> ou consulter les autres sections du site.</p>

        <div class="error-search">
            <p>Essayez d'utiliser la recherche :</p>
            <?php get_search_form(); ?>
        </div>

        <!-- Intégration du GIF -->
        <div class="error-gif">
            <iframe src="https://giphy.com/embed/piL4e4WusrA4S0KODK" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
            <p><a href="https://giphy.com/gifs/SappySealsCommunity-sappy-1-of-one-piL4e4WusrA4S0KODK"></a></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
/* Styles généraux pour la page 404 */
.error-404 {
    color: white;
    padding: 80px 20px;
    text-align: center;
}

.error-message {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #222;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.error-title {
    font-size: 3rem;
    color: #A599FF;
    margin-bottom: 20px;
    font-weight: 700;
}

.error-text {
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.error-redirect {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.error-link {
    color: #A599FF;
    text-decoration: none;
    font-weight: bold;
}

.error-link:hover {
    text-decoration: underline;
}

.error-search {
    margin-top: 30px;
}

.error-search input[type="search"] {
    padding: 10px;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #A599FF;
    color: #111;
    background-color: white;
}

.error-search input[type="submit"] {
    padding: 10px 15px;
    font-size: 1rem;
    background-color: #A599FF;
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.error-search input[type="submit"]:hover {
    background-color: #8a76cc;
}

.error-gif {
    margin-top: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.error-gif iframe {
    max-width: 100%;
    height: auto;
    border: none;
}

@media (max-width: 768px) {
    .error-title {
        font-size: 2.5rem;
    }

    .error-text {
        font-size: 1.2rem;
    }

    .error-link {
        font-size: 1.1rem;
    }

    .error-search input[type="search"], .error-search input[type="submit"] {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .error-title {
        font-size: 2rem;
    }

    .error-text {
        font-size: 1rem;
    }

    .error-link {
        font-size: 1rem;
    }

    .error-search input[type="search"], .error-search input[type="submit"] {
        font-size: 1rem;
        width: 100%;
    }
}
</style>
