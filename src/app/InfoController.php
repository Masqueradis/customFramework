<?php

declare(strict_types=1);

namespace App;

#[Route('/info')]
class InfoController
{
    #[Route('/important')]
    public function info(): void
    {
        printf('Some important information');
    }
}
