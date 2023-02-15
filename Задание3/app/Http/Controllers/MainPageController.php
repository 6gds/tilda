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
//        Стоит брать информацию о координатах пользователя из сессии
//        $locationInfo = LocationService::getInfoAboutUserLocation($request->ip());
//
//        if ($locationInfo) {
//            $city = City::where('name', $locationInfo->cityName)->first();
//
//            if (!empty($city) && !empty($city->tel)) {
//                $params["tel"] = $city->tel->number;
//            }
//        }

        return view('pages.main', $params);
    }
}
