<?php
$_TITLE = "La Perche Son";
$_DESCRIPTION = "La Perche Son est un collectif de création audiovisuelle.";

include_once("include/builders/utils.php");
include_once("include/builders/galery.php");
include_once("include/builders/projects.php");
include_once("include/builders/nav.php");

include_once("include/vars/sections_index.php");
include_once("include/vars/photos_index.php");
include_once("include/vars/projects.php");

include_once("include/sections/head.php");
?>

<body>

    <?php printNav($_SECTIONS) ?>
    <main>
        <?php
        foreach ($_SECTIONS as $_ => $section) {
            include("include/sections/" . $section[0][0] . ".php");
        }

        newSection(true, true); // end
        ?>


        <!-- ABOUT SECTION -->
        <article id="aboutPopUp" class="popupWin">
            <div class="blockPage">
                <h2>À Propos - Mentions légales <a class="closePopup" href="#contact">X</a></h2>
            </div>
            <section class="popupBlock blockPage">
                <?php include("include/sections/statuts.php") ?>
            </section>

        </article>
    </main>
    <?php printAside($_SECTIONS) ?>
    <script src="scripts/side.js"></script>
    <script src="scripts/slidemenu.js"></script>
</body>

</html>