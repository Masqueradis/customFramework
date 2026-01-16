<?php

declare(strict_types=1);

namespace App\Controllers;

use Masqueradis\Routers\Route;
#[Route('/info')]

class InfoController
{
    #[Route('/important')]
    public function hello(): void
    {
        printf('Some important information');
    }
}