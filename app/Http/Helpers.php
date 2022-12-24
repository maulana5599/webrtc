<?php
namespace App\Http\Helpers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;

class Helpers extends Controller {

    /**
     * @author Maulana Muhammad Rizky
     * Merupakan function response untuk user
     */
    public static function Response($data)
    {
        return response()->json([
            "status" => 200,
            "data" => $data
        ]);
    }
}