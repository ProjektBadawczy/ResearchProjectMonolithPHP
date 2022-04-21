<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphController extends Controller
{
    public static $data = [];

    public function __construct()
    {
        self::$data[] = [
            [0, 2, 3, 4],
            [1, 0, 3, 4],
            [1, 2, 0, 4],
            [1, 2, 3, 0],
        ];
    }

    public static function get(Request $request)
    {
        if ($request->has('id') && isset(self::$data[$request->input('id')])) {
            return self::$data[$request->input('id')];
        }
    }
}
