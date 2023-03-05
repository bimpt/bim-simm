<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;

class ViewCrudControllers extends Controller
{
    public function layout()
    {
        return 'layouts.crud-form';
    }
}
