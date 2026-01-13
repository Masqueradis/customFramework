<?php

declare(strict_types=1);

namespace app;

#[Route('/home')]
class HomeController
{
    #[Route('/hello')]
    public function hello()
    {
        printf('Hello World');
    }
}
