<?php

declare(strict_types=1);

namespace App\Http\Services\Ip;

use Stevebauman\Location\Facades\Location;

/**
 * Класc для работы с данными связанным с локацией пользователя
 *
 * @author Gevorkyan Denis
 */
class LocationService
{
    public static function getInfoAboutUserLocation(string $ip)
    {
        $data = Location::get($ip);

        return $data;
    }
}
