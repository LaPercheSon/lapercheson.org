<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo $_TITLE ?></title>
    <link href="css/themes.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/galery.css" rel="stylesheet">
    <link href="css/actus.css" rel="stylesheet">
    <link href="css/projects.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">

    <meta name="author" content="La Perche Son">
    <meta name="description" content="<?php echo $_DESCRIPTION ?>">

    <link rel="icon" type="image/x-icon" href="images/icons/favicon.png">

    <meta property="og:type" content="website" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:title" content="<?php echo $_TITLE ?>">
    <meta property="og:description" content="<?php echo $_DESCRIPTION ?>">

    <meta property="og:image" content="https://lapercheson.org/images/icons/favicon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="Logo de La Perche Son">

    <meta property="og:url" content="https://lapercheson.org" />
    <meta data-react-helmet="true" name="theme-color" content="#f3cb5c" />
    <meta property="og:site_name" content="lapercheson.org">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />

    <?php
    if (isset($_PROJECTS)) printAllOtherProjectsCSS($_PROJECTS);
    if (isset($_SECTIONS)) printSectionsCSS($_SECTIONS);
    ?>
</head>