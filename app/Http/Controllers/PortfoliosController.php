<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfoliosController extends Controller
{

    public function get()
    {
        $data = Portfolio::get();

        if ($data) {
            return response()->json([
                "data" => $data
            ], 200);
        } else {
            return response()->json([
                "message" => "Not found"
            ], 404);
        }
    }
}
