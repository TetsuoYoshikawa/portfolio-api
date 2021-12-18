<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "HTML",
            "image" => "1gm0l5bTLECmZD0rwKROZXPOzmOszlDtmvsTsA6n.png",
            "skill" => 5,
        ];
        DB::table("skills")->insert(
            $param
        );

        $param = [
            "name" => "CSS",
            "image" => "k4MwfEU5PREBSGvywgdAmhzi0WQFJfYrVoVbdnrk.png",
            "skill" => 5,
        ];
        DB::table("skills")->insert(
            $param
        );

        $param = [
            "name" => "Vue.js/JavaScript",
            "image" => "4Yw1LHSIfQ7FgF25a6CtLVcqMBzrjil6CSBUdHs5.png",
            "skill" => 4,
        ];
        DB::table("skills")->insert(
            $param
        );

        $param = [
            "name" => "Laravel/PHP",
            "image" => "XlftjoUK8rROboWyZmkQ6GD4orRl0jwgXOlAXitl.png",
            "skill" => 4,
        ];
        DB::table("skills")->insert(
            $param
        );

        $param = [
            "name" => "GitHub",
            "image" => "Wy6rIXve6EP5hembcolwmJz2IRM0dYivF9PIXW7m.png",
            "skill" => 3,
        ];
        DB::table("skills")->insert(
            $param
        );

        $param = [
            "name" => "MySQL",
            "image" => "2Pj4YNEn0Q2fclqKBbIEpjeXCXb2jopQB57VsALK.png",
            "skill" => 3,
        ];
        DB::table("skills")->insert(
            $param
        );

        $param = [
            "name" => "AWS(S3)",
            "image" => "D0zEZ1YxJBSjAd5XwI55vbHHj9O1ds28JnL93e4a.png",
            "skill" => 3,
        ];
        DB::table("skills")->insert(
            $param
        );

        $param = [
            "name" => "Heroku",
            "image" => "pEEMVzPjFWo3rxWVemeiyUhJXI7JKDKJ8j5kewY9.png",
            "skill" => 3,
        ];
        DB::table("skills")->insert(
            $param
        );

        $param = [
            "name" => "Netlify",
            "image" => "UKEsobBpydx0YCLOm7Qdvl2uiFjH60jZRWrjQmuu.png",
            "skill" => 3,
        ];
        DB::table("skills")->insert(
            $param
        );
    }
}
