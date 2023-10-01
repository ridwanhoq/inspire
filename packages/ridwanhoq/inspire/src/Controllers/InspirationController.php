<?php

namespace Ridwanhoq\Inspire\Controllers;

use Ridwanhoq\Inspire\Inspire;

class InspirationController
{
    public function index(Inspire $inspire)
    {
        return view('inspire::index', [
            'inspire' => $inspire->index()
        ]);
    }
}
