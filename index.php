<?php
include_once("include/utils.php");
include_once("include/projects.php");
include_once("include/nav.php");
include_once("include/head.php");
?>

<body>

    <?php printNav($_SECTIONS) ?>
    <main>

        <?php
        newSection(); // home

        newSection(); // actus

        newSection(); // projects
        printAllOtherProjectsHTML($_PROJECTS);

        newSection(); // photos
        include("include/galery.php");

        newSection(); // contact
        include("include/contact.php");

        newSection($end=true);
        ?>


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
    <?php printAside($_SECTIONS) ?>
    <script src="scripts/side.js"></script>
    <script src="scripts/slidemenu.js"></script>
</body>

</html>