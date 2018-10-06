<?php
// File: /config/routes.php

$app->get('/', '\MiWeb\Controllers\HomeController:index');
$app->get('/about', '\MiWeb\Controllers\AboutController:index');
$app->get('/contact', '\MiWeb\Controllers\ContactController:index');
$app->get('/facilities', '\MiWeb\Controllers\FacilitiesController:index');
$app->get('/gallery', '\MiWeb\Controllers\GalleryController:index');
$app->get('/location', '\MiWeb\Controllers\LocationController:index');
$app->get('/rates', '\MiWeb\Controllers\RatesController:index');
$app->get('/reservations', '\MiWeb\Controllers\ReservationsController:index');
$app->get('/services', '\MiWeb\Controllers\ServicesController:index');