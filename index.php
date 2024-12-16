<?php

/* Template Name: Index */
get_header();
?>


<div id="accueil">
<div data-title="COMMUNITY COMMUNITY COMMUNITY COMMUNITY COMMUNITY" class="hero">
    <div class="space-y-4 hero_leftcontent">
      <p>Bonjour,</p>
      <h1>Je m'appelle <span>Blandine</span></h1>
      <p>Communication digitale</p>
    </div>
    <div class="hero_rightcontent"></div>
  </div>
  <div class="styled-bar"></div>
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









<h2 class="skill-title1">MES FORMATIONS ...</h2>
<div id="formations"> 

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


</div>

<div id="competences">
<div class="styled-bar"></div>
    <h2 class="skill-title1">MES COMPETENCES ...</h2>

    <div class="skills-container">
        <div class="skill-card">
            <span class="skill-title">Design graphique et création visuelle</span>
            <div class="skill-content">
                <p>Outils dédiés à la création visuelle, incluant la retouche d'images, l'illustration, la mise en page, et le montage vidéo.</p>
                <div class="skills-logos">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Photoshop.svg" alt="Photoshop">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Illustrator.svg" alt="Illustrator">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/InDesign.svg" alt="InDesign">
                </div>
            </div>
        </div>

        <div class="skill-card">
            <span class="skill-title">UI/UX et prototypage</span>
            <div class="skill-content">
                <p>Solutions pour concevoir des interfaces et prototypes interactifs, facilitant la collaboration entre designers et développeurs.</p>
                <div class="skills-logos">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Figma.svg" alt="Figma">
                </div>
            </div>
        </div>

        <div class="skill-card">
            <span class="skill-title">Gestion de projets et collaboration</span>
            <div class="skill-content">
                <p>Plateformes permettant d’organiser les tâches, de suivre les projets et d’améliorer la collaboration au sein des équipes.</p>
                <div class="skills-logos">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Trello.svg" alt="Trello">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Asana.svg" alt="Asana">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Notion.svg" alt="Notion">
                </div>
            </div>
        </div>

        <div class="skill-card">
            <span class="skill-title">Développement web et programmation</span>
            <div class="skill-content">
                <p>Outils pour coder, gérer des projets web et utiliser les technologies front-end et frameworks modernes.</p>
                <div class="skills-logos">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Visual-Studio.svg" alt="VS Code">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Vuejs.svg" alt="Vue.js">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/tailwind_css.svg" alt="Tailwind">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/GitHub.svg" alt="GitHub">
                </div>
            </div>
        </div>

        <div class="skill-card">
            <span class="skill-title">CMS et création de sites web</span>
            <div class="skill-content">
                <p>Systèmes de gestion de contenu pour créer et gérer des sites web, adaptés à des utilisateurs de tous niveaux.</p>
                <div class="skills-logos">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/WordPress.svg" alt="WordPress">
                </div>
            </div>
        </div>

        <div class="skill-card">
            <span class="skill-title">Productivité et bureautique</span>
            <div class="skill-content">
                <p>Suite d'outils conçus pour améliorer la productivité, incluant des solutions de bureautique et de création multimédia.</p>
                <div class="skills-logos">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/Office365_logo.svg" alt="Office Suite">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/svg/ADOBE_logo.svg" alt="Suite Adobe">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="contact">
<div class="styled-bar"></div> 
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
    </div>
</div>


<div class="social-links">
<div class="styled-bar1"></div>
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

<script>
    const cards = document.querySelectorAll('.skill-card');

cards.forEach(card => {
    const handleOver = (event) => {
        const { width, height, left, top } = card.getBoundingClientRect();
        const mouseX = event.clientX - left - width/2;
        const mouseY = event.clientY - top - height/2;

        const rotateY = (mouseX / width) * 20;
        const rotateX = (mouseY / height) * -20;

        card.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
    }

    const resetTransform = () => {
        card.style.transform = 'perspective(800px) rotateX(0deg) rotateY(0deg) scale(1)';
    }

    card.addEventListener('mouseenter', handleOver);
    card.addEventListener('mousemove', handleOver);
    card.addEventListener('mouseleave', resetTransform);
});
</script>