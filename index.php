<?php

/* Template Name: Index */
get_header();
?>


<div id="accueil">


</div>

<div id="a-propos"><!-- Placez le titre en dehors de la section -->
    <section class="about-section">
    <h2 class="about-title">QUI JE SUIS ?</h2> 
        <div class="about-content">
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/Personnage.webp" alt="Blandine Nahorny">
            </div>
            <div class="about-text">
                <section class="about-name">
                    <h3>
                        Blandine Nahorny 
                        <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Approval.svg" alt="Approbation" class="approval-icon">
                    </h3>
                    <p class="about-role">Etudiante</p>
                </section>
                <p class="about-description">
                    Enchantée, je m'appelle Blandine Nahorny, et je suis actuellement en <strong>deuxième année de BUT Métiers du
                    Multimédia et de l'Internet (MMI)</strong>. À travers ce site, vous aurez l'occasion de découvrir ma créativité
                    et les différents projets que j'ai réalisés et ceux en cours.
                </p>
                <p class="about-description">
                    Dynamique et passionnée, je m'investis dans de nombreux domaines variés. Après un premier choix de
                    parcours qui ne me correspondait pas, j'ai enfin trouvé ma voie avec ces études qui me correspondent à 100% !!
                </p>
                <p class="about-description">
                    Je vous invite à en apprendre davantage sur moi, dans l'espoir de collaborer prochainement !
                </p>
            </div>
        </div>
        <p class="download-cv">
            <a href="<?php echo get_template_directory_uri(); ?>/src/pdf/CV_Blandine-NAHORNY.pdf" download>Télécharger mon CV</a>
        </p>
    </section>
    <div class="styled-bar"></div>
    </div>
    </div>
</div>










<div id="formations"> 
    <h2 class="formations-title">MES FORMATIONS ...</h2>

    <div class="formation-item">
    <span class="formation-date">2023 à 2026</span>
        <div class="formation-content">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-mmi.webp" alt="Logo MMI" class="formation-logo">
            <div class="formation-details">
                <h3>BUT MMI (Métier du Multimédia et de l'Internet), IUT NFC Montbéliard</h3>
                <p>BUT 1 & BUT 2 parcours initiales</p>
                <p>Spécialité Com’ / UX Design</p>
            </div>
        </div>
    </div>

    <div class="formation-item">
    <span class="formation-date">2022</span>
        <div class="formation-content">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-ub.webp" alt="Logo UB" class="formation-logo">
            <div class="formation-details">
                <h3>L1 Droit, Science Économique & Politique, UFR Dijon</h3>
                <p>Parcours initiale</p>
                <p>Option Anglais</p>
            </div>
        </div>
    </div>

    <div class="formation-item">
    <span class="formation-date">2019 à 2022</span>
        <div class="formation-content">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-lycee.webp" alt="Logo Lycée" class="formation-logo">
            <div class="formation-details">
                <h3>Baccalauréat Général, Lycée René Cassin, Mâcon</h3>
                <p>Spécialités Géopolitique (HGGSP), Sciences Économiques et Sociales (SES) et Licence de langues, littératures et civilisations étrangères et régionales (LLCER)</p>
                <p>Option EuroAnglais</p>
            </div>
        </div>
    </div>

    <div class="formation-item">
    <span class="formation-date">2019</span>
        <div class="formation-content">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-republique-fr.webp" alt="Logo République Française" class="formation-logo">
            <div class="formation-details">
                <h3>Brevet d’Initiation Aéronautique, Mâcon</h3>
                <p>Formation de base aéronautique.</p>
                <p>Sujets abordés : Météorologie, Navigation, Mécanique du vol et l'Histoire de l'aviation.</p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="styled-bar"></div>
</div>

<div id="competences">

</div>

<div id="projets">
    <!-- Contenu de la section Projets -->
</div>

<div id="contact">
    <h2>UNE QUESTION ? <br> UN PROJET ?</h2>
    <p>Pour le besoin de toutes informations complémentaires, ou une envie de collaborer ensemble, n'hésitez surtout pas à me laisser un message.</p>

    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" value="<?php if (isset($_POST['name'])) echo esc_attr($_POST['name']); ?>" required />

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php if (isset($_POST['email'])) echo esc_attr($_POST['email']); ?>" required />

        <!-- Nouveau champ Objet -->
        <label for="subject">Objet</label>
        <input type="text" id="subject" name="subject" value="<?php if (isset($_POST['subject'])) echo esc_attr($_POST['subject']); ?>" required />

        <label for="message">Message</label>
        <textarea id="message" name="message" required><?php if (isset($_POST['message'])) echo esc_textarea($_POST['message']); ?></textarea>

        <input type="submit" name="submit_contact" value="Envoyer" />
    </form>

    <div class="styled-bar"></div>
    </div>
</div>




<div class="social-links">
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



<div id="sparkle-container"></div>


<?php get_footer(); ?>