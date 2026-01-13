<?php

declare(strict_types=1);

namespace App;

#[Route('/info')]
class InfoController
{
    #[Route('/important')]
    public function info()
    {
        printf('Some important information');
    }
}
