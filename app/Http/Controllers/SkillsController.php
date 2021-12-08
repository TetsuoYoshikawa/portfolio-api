<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function get()
    {
        $skill = Skill::all();

        if ($skill) {
            return response()->json([
                "data" => $skill
            ], 200);
        } else {
            return response()->json([
                "message" => "Not found"
            ], 404);
        }
    }
}
