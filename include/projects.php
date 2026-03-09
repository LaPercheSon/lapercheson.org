<?php
function printOtherProjectHTML(int $idx, string $title, string $description, string $link): void
{
?>
    <section class="otherProjectItem blockPage" id="other_project_<?php echo $idx ?>">
        <a href="<?php echo $link ?>" <?php if (strlen($link) > 1) echo 'target="_blank"'; ?> title="<?php echo $title ?>">
            <aside class="otherImageItem">
                <h2><?php echo $title ?></h2>
            </aside>
        </a>
        <article class="otherDescriptionItem">
            <h2><?php echo $title ?></h2>
            <p><?php echo str_replace("\n", "<br>", $description) ?></p>
        </article>
    </section>
<?php
}

function printOtherProjectCSS($idx, $images): void
{
    echo "
#other_project_$idx .otherImageItem {
    background-image: url('$images[0]');
}

#other_project_$idx:hover .otherImageItem {
    background-image: url('$images[1]');
}
";
}

$_PROJECTS = [
    ["Interception", "Premier projet de long métrage de La Perche Son.\n(soon)", "#", getStrList("images/projectsimages/interception")],

    ["Trailer Le Royaume des Rêves", "Teaser réalisé pour le Gala de la 59ème promotion de l'ENIT", "#", getStrList("images/projectsimages/cine2_")], #FIXME: 

    ["Tombé sur un OS", "Premier court métrage de La Perche Son\nPetit film d'animation réalisé avec Blender et Resolve", "https://www.youtube.com/watch?v=j5r4sCqiFRE", getStrList("images/projectsimages/tombesurunos")],

    ["EN20 ANS", "Film surprise pour les 20 ans d'Enzo", "#", getStrList("images/projectsimages/cine1_")], #FIXME: 

    ["Spiritu Cucumis - 48HFP", "Premier 48 Hours Film Project réalisé par La Perche Son.\n48 heures pour écrire, filmer et monter un court métrage.", "https://www.youtube.com/watch?v=ywBxVbaI0AM", getStrList("images/projectsimages/spiritucucumis")],
];

function printAllOtherProjectsHTML($projects): void
{
    foreach ($projects as $idx => $p) {
        printOtherProjectHTML($idx, $p[0], $p[1], $p[2]);
    }
}


function printAllOtherProjectsCSS($projects): void
{
?>
    <style>
        <?php
        foreach ($projects as $idx => $p) {
            printOtherProjectCSS($idx, $p[3]);
        }
        ?>
    </style>
<?php
}
