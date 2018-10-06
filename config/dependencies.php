<?php
// File: /config/dependencies.php

// Se añaden las dependencias
$container = $app->getContainer();

// Motor de plantillas
$container['templates'] = function($c) {
    return new League\Plates\Engine(__DIR__ . '/../app/Views');
};