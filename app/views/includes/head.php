<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $data['metaDesc'] ?? "LAMP Stack Website" ?>" />
    <title>LAMP Stack | <?= $data['metaTitle'] ?? "Home" ?></title>
    <link rel="shortcut icon" href="<?= URLROOT ?>/public/favicon.ico" type="image/x-icon" />
    <link rel="preload" href="<?= URLROOT ?>/public/assets/css/main.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= URLROOT ?>/public/assets/css/main.min.css"></noscript>
    <link rel="preload" href="<?= URLROOT ?>/public/assets/css/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= URLROOT ?>/public/assets/css/swiper-bundle.min.css"></noscript>
</head>
