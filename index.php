<?php
include_once("include/utils.php");
include_once("include/projects.php");
include_once("include/head.php");
?>

<body>

    <nav>
        <ul>
            <a href="#top">
                <img src="public/images/logo.png" width="40px" height="40px" class="imgMenu">
                <li class="textMenu">Accueil</li>
            </a>
            <a href="#interception">
                <img src="public/images/blackholelogo.png" width="40px" height="40px" class="imgMenu">
                <li class="textMenu">Interception</li>
            </a>
            <a href="#projects" class="deletableMenu">
                <img src="public/images/camera.png" width="40px" height="40px" class="imgMenu invertOk">
                <li class="textMenu">Créations</li>
            </a>
            <a href="#photos" class="deletableMenu">
                <img src="public/images/photo.svg" width="40px" height="40px" class="imgMenu invertOk">
                <li class="textMenu">Photos</li>
            </a>
            <a href="#contact">
                <img src="public/images/contact.png" width="40px" height="40px" class="imgMenu invertOk">
                <li class="textMenu">Contact</li>
            </a>
        </ul>
    </nav>
    <main>

        <!-- WELCOME SECTION-->
        <section id="welcome" class="windowSized unselectable">
            <div id="welcomeBlock" class="blockPage">
                <div id="welcomeCenter">
                    <h1>La Perche Son</h1>
                    <hr>
                    <h3>Projet INTERCEPTION</h3>
                    <br>
                    <a href="#interception">
                        <img class="scrollDownArrow invertOk" src="public/images/arrowbottom.png" width="50px"
                            height="50px">
                    </a>
                </div>
            </div>
        </section>


        <!-- INTERCEPTION SECTION-->
        <section id="interception" class="windowSized">
            <div id="projectDescription" class="blockPage">
                <h2>Interception</h2>
                <h4 class="subtitle">Le crossover inattendu</h4>
                <br>
                <div id="projectZone">
                    <div id="firstDescription" class="descriptionZones">
                        <iframe id="imgOneProject" src="https://www.youtube.com/embed/LD6vmeCJGw4?si=6_CzpwwD8VPa3Hkk" title="Teaser Interception sur YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p class="descriptionInterception">
                            <span class="h3like">Courte description</span><br>
                            <span class="boldi">Interception</span> est le premier projet de long-métrage de La Perche
                            Son.<br>
                            <br>
                            Ce long métrage mélangera les concepts de 5 films réalisés par Christopher Nolan dans un
                            scénario unique et original.<br>
                            Les films parodiés sont Memento, Le Prestige, Inception, Interstellar et Tenet.<br>
                            <br>
                            <span class="h3like">Avancée du projet</span><br>
                            <br>
                            Le film en cours de conception :<br>
                            - Écriture : V1.4 (oui c'est précis) terminée<br>
                            - Pré-production : Finie<br>
                            - Tournage: Fini<br>
                            - Post-production: En cours...<br>
                            <br>
                            <span class="h3like">Dates et lieux de tournage</span><br>
                            <br>
                            18/07 - Toulouse : 17h-19h30<br>

                            <br>
                            <span class="h3like">Nous contacter</span><br>
                            <br>
                            cont<span>act</span><span>@</span>lapercheson<span>.or</span>g
                        </p>
                    </div>
                </div>
        </section>


        <!-- OTHER PROJECTS SECTION-->
        <section id="projects" class="windowSized">
            <div id="titleOtherProjects" class="blockPage titlePage">
                <h2>Nos créations</h2>
            </div>
            <div id="listOtherProjects">
            <?php printAllOtherProjectsHTML($_PROJECTS); ?>
            </div>
        </section>


        <!-- PHOTOS SECTION-->
        <section id="photos" class="windowSized">
            <div class="titlePage blockPage" id="titleContact">
                <h2>Photos de tournage</h2>
            </div>
            <?php include("include/galery.php") ?>

        </section>


        <!-- CONTACT SECTION-->
        <section id="contact" class="windowSized">
            <div class="titlePage blockPage" id="titleContact">
                <h2>Nous contacter</h2>
            </div>
            <ul class="blockPage" id="listContact">

                <li id="aboutContact">
                    <h4>À Propos</h4>
                    <a href="#aboutPopUp"><img src="public/images/about.svg" class="invertOk"></a>
                    <hr>
                    <p>
                        Qui sommes-nous ?<br>Plus d'informations sur l'association et ce site web.
                    </p>
                </li>

                <li id="mailContact">
                    <h4>Envoyer un mail</h4>
                    <a href="mailto:contact@lapercheson.org"><img src="public/images/mail.svg" class="invertOk"></a>
                    <hr>
                    <p>
                        Pour toute question n'hésitez pas à envoyer un mail.
                    </p>
                </li>

            </ul>

        </section>



        <!-- ABOUT SECTION -->
        <div id="aboutPopUp" class="popupWin">
            <div class="blockPage">
                <h2>À Propos - Mentions légales <a class="closePopup" href="#contact">X</a></h2>
            </div>
            <section class="popupBlock blockPage">
                <?php include("include/statuts.php") ?>
            </section>

        </div>
    </main>
    <aside>
        <span>SECTION NAME</span>
    </aside>
</body>

</html>