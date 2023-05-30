<?php

use UiFrame\UiFrameApp;

require_once __DIR__ . '/vendor/autoload.php';


$app = new UiFrameApp();
$app->setDataPath(__DIR__ . '/src/data/data.json');

$app->run();