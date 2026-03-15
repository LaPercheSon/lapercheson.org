<?php
include_once("include/utils.php");

include_once("include/sections_index.php");
include_once("include/photos_index.php");

include_once("include/galery.php");
include_once("include/projects.php");
include_once("include/nav.php");
include_once("include/head.php");
?>

<body>

    <?php printNav($_SECTIONS) ?>
    <main>
        <?php
        newSection(true); // home
        printVHeight();
        include("include/home.php");

        newSection(); // actus

        newSection(); // projects
        printAllOtherProjectsHTML($_PROJECTS);

        newSection(); // photos
        creas2html($_TOURNAGE, "tournage", "IMG");
        ?>
        <a href="./photos">Voir plus</a>
        <?php

        newSection(); // contact
        include("include/contact.php");

        newSection(true, true); // end
        ?>


        <!-- ABOUT SECTION -->
        <article id="aboutPopUp" class="popupWin">
            <div class="blockPage">
                <h2>À Propos - Mentions légales <a class="closePopup" href="#contact">X</a></h2>
            </div>
            <section class="popupBlock blockPage">
                <?php include("include/statuts.php") ?>
            </section>

        </article>
    </main>
    <?php printAside($_SECTIONS) ?>
    <script src="scripts/side.js"></script>
    <script src="scripts/slidemenu.js"></script>
</body>

</html>