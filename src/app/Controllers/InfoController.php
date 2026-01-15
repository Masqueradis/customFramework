<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Routers\Route;

#[Route('/info')]
class InfoController
{
    #[Route('/important')]
    public function info(): void
    {
        printf('Some important information');
    }
}
