<?php

declare(strict_types=1);

namespace App;

#[Route('/home')]
class HomeController
{
    #[Route('/hello')]
    public function hello(): void
    {
        printf('Hello World');
    }
}
