<?php
// File: /config/routes.php

$app->get('/', '\MiWeb\Controllers\HomeController:index');
$app->get('/about', '\MiWeb\Controllers\AboutController:index');

$app->get('/discography', '\MiWeb\Controllers\DiscographyController:index');
$app->get('/lessons', '\MiWeb\Controllers\LessonsController:index');

$app->get('/contact', '\MiWeb\Controllers\ContactController:index');
$app->get('/facilities', '\MiWeb\Controllers\FacilitiesController:index');
$app->get('/gallery', '\MiWeb\Controllers\GalleryController:index');
$app->get('/location', '\MiWeb\Controllers\LocationController:index');
$app->get('/rates', '\MiWeb\Controllers\RatesController:index');
$app->get('/reservations', '\MiWeb\Controllers\ReservationsController:index');

$app->get('/services', '\MiWeb\Controllers\ServicesController:index');
$app->get('/reviews', '\MiWeb\Controllers\ReviewsController:index');
$app->get('/videos', '\MiWeb\Controllers\VideosController:index');
$app->get('/courses', '\MiWeb\Controllers\CoursesController:index');