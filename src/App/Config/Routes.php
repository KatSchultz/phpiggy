<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Controllers\{HomeController, ProfileController, AboutController};
// use App\Controllers\ProfileController;
// use App\Controllers\AboutController;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/profile', [ProfileController::class, 'profile']);
    $app->get('/about', [AboutController::class, 'about']);
}
