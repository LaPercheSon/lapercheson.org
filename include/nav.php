<?php

$_CURRENT_SECTION = 0;

function printSectionsCSS($sections): void
{
    print("<style>");
    foreach ($sections as $_k => $sections) {
        $id = $sections[0][0];
        $css = $sections[1][0];
        $css_hover = $sections[1][1];
        $css_img = $sections[0][4];
        $css_aside = $sections[1][2];
        $css_aside_hover = $sections[1][3];
        $min_height = $sections[1][4] . "px";
        print("\nnav_$id {\n$css\n}\n\nnav_$id:hover {\n$css_hover\n}\n\naside_$id {\n$css_aside\n}\n\naside_$id:hover {\n$css_aside_hover\n}\n
@media all and (max-height : $min_height) {
    nav_$id {
        display: none;
    }
}
    
#nav_a_$id {
    background: url('$css_img');
    background-size: 80%;
    background-repeat: no-repeat;
    background-position: center;
}");
    }
    print("</style>");
}

function printNav($sections): void
{

    echo "<nav><ul>";
    foreach ($sections as $_k => $sections) {
?>
        <a href="<?php if (isset($sections[0][5])) echo $sections[0][5]; else echo "#".$sections[0][0]; ?>" id="nav_a_<?php echo $sections[0][0] ?>">
            <img src="<?php echo $sections[0][4] ?>" width="40px" height="40px" class="imgMenu" id="nav_img_<?php echo $sections[0][0] ?>">
            <li class="textMenu" id="nav_<?php echo $sections[0][0] ?>"><span class="nav_overline"></span><span class="nav_menu_name"><?php echo $sections[0][1] ?></span><span class="nav_underline"></span></li>
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
        <li class="aside_element" id="aside_<?php echo $sections[0][0] ?>"><?php echo $sections[0][2] ?></li>
<?php
    }
    echo "</ul></aside>";
}

function printSection(string $id, string $title = ""): void
{
    echo "<!-- " . strtoupper($id) . " SECTION -->\n<section class='main_section' id='$id'>";
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

    # if external section, no section to print here, print the next one
    if (isset($_SECTIONS[$_CURRENT_SECTION][0][5])) {
        $_CURRENT_SECTION++;
        newSection($end);
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