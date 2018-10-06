<?php

// Se inserta el autoload de composer
require __DIR__ . '/../vendor/autoload.php';

// Se instancia la aplicación con la configuración del archivo app.php
$app = new Slim\App();

// Se inserta las diferentes configuraciones
require __DIR__ . '/../config/dependencies.php';
require __DIR__ . '/../config/routes.php';

// Se arranca la aplicación
$app->run();