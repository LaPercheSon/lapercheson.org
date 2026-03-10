<?php

$_SECTIONS = [
    // [["id","SHORT","Long title", "description", "path/to/icon.svg"], ["/* normal css properties */", "/* hover css properties */", "/* aside css properties */", "/* aside hover css properties */", minHeightVisible(px)]],

    [["top", "Accueil", "La Perche Son", "Qu'est-ce que La Perche Son ?", "images/icons/logo.png"], ["", 0]],

    [["actus", "Actus", "Interception", "Activités actuelles de l'association", "images/icons/blackholelogo.png"], ["", 0]],

    [["projects", "Projets", "Nos créations", "Projets réalisés par nous où auxquels nous avons participé", "images/icons/camera.svg"], ["", 0]],

    [["photos", "Photos", "Photographies", "Photos de nos tournages ou de nos réalisations", "images/icons/photo.svg"], ["", 0]],

    [["contact", "Contact", "Nous contacter", "Comment nous contacter ?", "images/icons/mail.svg"], ["", 0]],
];

$_CURRENT_SECTION = 0;

function printSectionsCSS($sections): void
{
    print("<style>");
    foreach ($sections as $_k => $sections) {
        $id = $sections[0][0];
        $css = $sections[1][0];
        $css_hover = $sections[1][1];
        $css_aside = $sections[1][2];
        $css_aside_hover = $sections[1][3];
        $min_height = $sections[1][4] . "px";
        print("\nnav_$id {\n$css\n}\n\nnav_$id:hover {\n$css_hover\n}\n\naside_$id {\n$css_aside\n}\n\naside_$id:hover {\n$css_aside_hover\n}\n
@media all and (max-height : $min_height) {
    nav_$id {
        display: none;
    }
}");
    }
    print("</style>");
}

function printNav($sections): void
{

    echo "<nav><ul>";
    foreach ($sections as $_k => $sections) {
?>
        <a href="#<?php echo $sections[0][0] ?>">
            <img src="<?php echo $sections[0][4] ?>" width="40px" height="40px" class="imgMenu">
            <li class="textMenu"><?php echo $sections[0][1] ?></li>
        </a>
    <?php
    }
    echo "</ul></nav>";
}


function printAside($sections): void
{
    echo "<aside><ul>";
    foreach ($sections as $_k => $sections) {
    ?>
        <a href="#<?php echo $sections[0][0] ?>">
            <li class="textMenu"><?php echo $sections[0][2] ?></li>
        </a>
<?php
    }
    echo "</ul></aside>";
}


// function printSectionName($section_idx) : void {

// }

function printSection(string $id, string $title = ""): void
{
    echo "<!-- " . strtoupper($id) . " SECTION -->\n<section id='$id'>";
    if (strlen($title) > 0)
        echo "<div class='titlePage blockPage' id='title_$id'>
                <h2>$title</h2>
            </div>";
}

function newSection(bool $end = false): void
{
    global $_CURRENT_SECTION, $_SECTIONS;

    if ($_CURRENT_SECTION == -1)
        return;
    if ($end) {
        print("</section>");
        $_CURRENT_SECTION = -1;
        return;
    }

    if ($_CURRENT_SECTION > 0) {
        // separator
        echo "</section><hr>";
    }
    
    if ($_CURRENT_SECTION < sizeof($_SECTIONS)) {
        printSection($_SECTIONS[$_CURRENT_SECTION][0][0], $_SECTIONS[$_CURRENT_SECTION][0][1]);
    } else {
        printSection("unknown_section_" . $_CURRENT_SECTION);
    }

    $_CURRENT_SECTION++;
}
?>