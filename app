<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('');

$app->add(new \App\WhatTimeCommand());
$app->add(new \App\hellophp());
$app->run();
