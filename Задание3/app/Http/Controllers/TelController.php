<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class TelController extends Controller
{
    public function getTel(Request $request)
    {
        try {
            $city = City::where('name', $request->city)->first();

            if (empty($city) || empty($city->tel)) {
                throw new \Exception('У заданного города нет номера телефона');
            }

            return response()->json([
                'status' => 'success',
                'data' => [
                    'tel' => $city->tel->tel
                ]
            ]);
        } catch (\Exception $exception) {
            return response('', 500)->json([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ]);
        }
    }
}
