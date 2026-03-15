<?php
include_once("include/utils.php");

include_once("include/sections_photos.php");
include_once("include/photos_photos.php");

include_once("include/galery.php");
include_once("include/nav.php");
include_once("include/head.php");
?>

<body>

    <?php printNav($_SECTIONS) ?>
    <main>
        <h1 class="ovline unline unov_anim unov_relative">Photos de tournage</h1>

        <?php
        newSection(true); // photos 
        printVHeight("5vh");
        ?>

        <?php
        foreach ($_PHOTOS as $year => $photos) {
            echo "<h2>$year</h2>";
            creas2html($photos, "tournage", "IMG");
        }
        ?>

        <?php
        newSection($end = true);
        printVHeight();
        ?>
    </main>
    <?php printAside($_SECTIONS) ?>
    <script src="scripts/side.js"></script>
    <script src="scripts/slidemenu.js"></script>
</body>

</html>