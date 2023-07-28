<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function map_view(): Factory|Application|View
    {
        return view('welcome');
    }
}
