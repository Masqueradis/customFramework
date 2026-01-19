<?php

namespace App\Controllers;

use Masqueradis\Routers\Route;
use Masqueradis\Routers\Request;

#[Route('/SC')]
class SimpleController
{
    #[Route('/update', method: 'POST')]
    public function update(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title', 'No title');

        printf('New id is %s. New title is %s.', $id, $title);
    }

    #[Route('/delete', method: 'POST')]
public function delete(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title', 'No title');
        printf('Deleted id is %s. Deleted title is %s.', $id, $title);
    }
}