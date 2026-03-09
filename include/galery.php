<?php

function getStrList(string $pre, int $count, string $post = ".jpg"):array {
    $arr = [];
    for ($i=0; $i < $count; $i++) { 
        array_push($arr, $pre . ($i+1) . $post);
    }
    return $arr;
}

$_CREA_EXAMPLE = [
    [
        ["lien/image.jpg"],
        "",
        [["lien", "https://magictintin.fr/"]]
    ],
];

$_TOURNAGE = [
    [
        getStrList("galery/teaserInterception",4),
        "Teaser Interception",
        []
    ],
];

function creas2html($creas, $prefix, $type, int $cols_or_size = 300): void
{
    echo "<input class='lb-toggle' type='radio' name='lightbox' id='img_" . $prefix . "_none' checked style='position:absolute;left:-9999px;'>";
    if ($cols_or_size > 20)
        echo "<section class='galery' style='column-width: {$cols_or_size}px; column-count: auto;'>";
    else
        echo "<section class='galery' style='column-count: {$cols_or_size};'>";
    foreach ($creas as $key => $value) {
        if (isset($value[3]) && $value[3] == "HIDDEN") echo "<!--";
        echo "<article class='creation'>";
        if ($type == "IMG")
            photocrea($prefix, $key, $value);
        echo "</article>";
        if (isset($value[3]) && $value[3] == "HIDDEN") echo "-->";
    }
    echo "</section>";
}

function photocrea($pre, $batch, $crea): void
{
?>
    <figure class="minigallery">
        <?php
        foreach ($crea[0] as $merde => $image) {
            $id = 'img_' . $pre . '_s' . $batch . '_' . $merde;
            $src = "images/" . htmlspecialchars($image, ENT_QUOTES);
            echo "<label class='thumb' for='$id' tabindex='0'>";
            echo "<img loading='lazy' class=\"cImg\" src='" . $src . "' alt=''>";
            echo "</label>\n";

            echo "<input class='lb-toggle' type='radio' name='lightbox' id='$id' style='position:absolute;left:-9999px;'>";

            // overlay shown only when this radio is checked
            echo "<div class='lightbox'>";
            echo "  <div class='lightbox-inner'>";
            echo "    <label class='lb-close' for='img_" . $pre . "_none' aria-label='Close'>&times;</label>";
            echo "    <img class='lb-img' src='{$src}' alt=''>";
            echo "    <div class='lb-caption'>" . htmlspecialchars($crea[1], ENT_QUOTES) . "</div>";
            echo "  </div>";
            // background clickable area
            echo "  <label class='lb-backdrop' for='img_" . $pre . "_none'></label>";
            echo "</div>\n";
        }
        ?>
    </figure>

    <div class="creationDescription">
        <p><?php
            $crea[1];
            foreach ($crea[2] as $key => $link) {
                echo " <a target=\"_blank\" href=\"" . htmlspecialchars($link[1], ENT_QUOTES) . "\" class=\"clink\">&lt;" . $link[0] . "&gt;</a>";
            }
            ?></p>
    </div>
<?php
}

creas2html($_TOURNAGE, "tournage", "IMG")
?>