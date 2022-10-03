<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getStatusByCity(Request $request)
    {

        $city = $request->input('city');

        $result = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=3020194d5c7158d01d92dcf7a5524a20");

        return json_decode($result);
    }

    public function getStatusByCoord(Request $request)
    {

        $lon = $request->input('lon');

        $lat = $request->input('lat');

        $result = Http::get("https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&appid=3020194d5c7158d01d92dcf7a5524a20");

        return json_decode($result);

    }
}
