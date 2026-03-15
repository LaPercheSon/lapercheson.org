<?php
$_TITLE = "Photos - La Perche Son";
$_DESCRIPTION = "Photos de tournage de La Perche Son.";

include_once("include/builders/utils.php");

include_once("include/vars/sections_photos.php");
include_once("include/vars/photos_photos.php");

include_once("include/builders/galery.php");
include_once("include/builders/nav.php");
include_once("include/sections/head.php");
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