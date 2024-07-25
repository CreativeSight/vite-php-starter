<?php
use mindplay\vite\Manifest;

include 'vendor/autoload.php';
$vite = new Manifest(__DIR__ . '/dist/.vite/manifest.json', '/dist/', false);
$tags = $vite->createTags("./src/app.ts", './src/app.scss');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="<?= $vite->getURL("vite.svg") ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite + PHP + TS</title>
    <?= $tags->preload ?>
    <?= $tags->css ?>
  </head>
  <body>
    <div id="app"><?= 'PHP' ?></div>
    <?= $tags->js ?>
  </body>
