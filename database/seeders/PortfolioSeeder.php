<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "飲食店予約アプリ",
            "image" => "rese.png",
            "github_front" => "https://github.com/TetsuoYoshikawa/Rese.git",
            "github_api" => "https://github.com/TetsuoYoshikawa/Rese-api.git",
            "created" => "2ヶ月",
            "url" => "https://rese-site.netlify.app",
            "detail" => "仕様書をもとに設計から、開発、テストまでを各利用者(予約利用者用,店舗代表者用,管理者用)に合わせて開発しました。",
            "difficulties" => "初めて、一からの開発で、設計が初めてだったので特に苦戦しました。また、ページレイアウトもはじめて考えてだったので時間が掛かってしまった。",
            "solutions" => "開発しては修正を繰り返して理解を深めることができ、また設計をしっかりすることで開発が楽になり、作りながら考えるよりも時間短縮になるのでとても大事だと知れました。"
        ];
        DB::table("portfolios")->insert(
            $param
        );
        $param = [
            "name" => "LiveSHARE",
            "image" => "feslive.png",
            "github_front" => "https://github.com/TetsuoYoshikawa/LiveShare.git",
            "github_api" => "https://github.com/TetsuoYoshikawa/LiveShare-api.git",
            "created" => "１ヶ月",
            "url" => "https://liveshare.netlify.app",
            "detail" => "音楽のライブを共有できるSNSを作成いたしました。",
            "difficulties" => "友達に使ってもらい、使用者の意見を取り入れながら作成しましたので、どう表現すればいいのかを試行錯誤しました。",
            "solutions" => "自分がこれから、使っていけるようなアプリケーションになり、意見を取り入れながら開発する大切さを学べました。"
        ];
        DB::table("portfolios")->insert(
            $param
        );
        $param = [
            "name" => "Portfolio",
            "image" => "A3pJgzKg2f3jqkRugOLZvxnHRcvmhMHGNcPb91UJ.png",
            "github_front" => "https://github.com/TetsuoYoshikawa/portfolio.git",
            "github_api" => "https://github.com/TetsuoYoshikawa/portfolio-api.git",
            "created" => "5日",
            "url" => "https://Tesuo-Yoshikawa-portfolio.netlify.app",
            "detail" => "制作物をまとめるために作成しました。",
        ];
        DB::table("portfolios")->insert(
            $param
        );
    }
}