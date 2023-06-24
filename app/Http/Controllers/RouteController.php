<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function addRoutes()
    {
        $jsonContent = file_get_contents('/var/www/create-database-json/routes.json');
        $routes = json_decode($jsonContent);

        foreach ($routes->routes as $route) {
            DB::table('routes')->insert((array) $route);
        }
        return "Routes added successfully.";
    }
}
