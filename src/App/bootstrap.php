<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\HomeController;
use App\Controllers\ProfileController;


$app = new App();

$app->get('/', [HomeController::class, 'home']);
$app->get('/profile', [ProfileController::class, 'profile']);



// dd($app);

// $app->get('/about/team');
return $app;
