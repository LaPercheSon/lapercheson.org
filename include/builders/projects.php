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
