<?php
include_once("include/utils.php");

include_once("include/sections_photos.php");
include_once("include/photos_index.php");

include_once("include/galery.php");
include_once("include/nav.php");
include_once("include/head.php");
?>

<body>

    <?php printNav($_SECTIONS) ?>
    <main>

        <?php newSection(); // photos ?>
        <?php creas2html($_TOURNAGE, "tournage", "IMG");?>

        <?php newSection($end=true); ?>
    </main>
    <?php printAside($_SECTIONS) ?>
    <script src="scripts/side.js"></script>
    <script src="scripts/slidemenu.js"></script>
</body>

</html>