<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Services\Ip\LocationService;

class MainPageController extends Controller
{
    public function index(Request $request)
    {
        $params = [];

        return view('pages.main', $params);
    }
}
