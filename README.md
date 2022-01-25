# Portfolio API

ポートフォリオの API です

## バージョン

-   PHP 7.4.15
-   Laravel 8.4
-   MySQL 8.0

## API Document

[ GET ] 制作物の情報を取得します

```
/portfolio
```

レスポンス

```
<!-- 200 -->
{
  "data": [
    {
        "id": 4,
        "name": "飲食店予約アプリ",
        "image": "kURkXNzszliuVHYIE5Y0DhBIiG1pyGDoCUFeIxKF.png",
        "github_front": "https://github.com/TetsuoYoshikawa/Rese.git",
        "github_api": "https://github.com/TetsuoYoshikawa/Rese-api.git",
        "created": "2ヶ月",
        "url": "https://rese-site.netlify.app",
        "detail": "仕様書をもとに設計から、開発、テストまでを各利用者(予約利用者用,店舗代表者用,管理者用)に合わせて開発しました。",
        "difficulties": "初めて、一からの開発で、設計が初めてだったので特に苦戦しました。また、ページレイアウトもはじめて考えてだったので時間が掛かってしまった。",
        "solutions": "開発しては修正を繰り返して理解を深めることができ、また設計をしっかりすることで開発が楽になり、作りながら考えるよりも時間短縮になるのでとても大事だと知れました。",
        "created_at": null,
        "updated_at": null
    },
  ],
}

<!-- 404 -->
{
  "message" : "Not found"
}
```

[ GET ] スキルデータ取得

```
/skill
```

レスポンス

```
<!-- 200 -->
{
    "data": [
        {
            "id": 4,
            "name": "HTML",
            "skill": 5,
            "image": "1gm0l5bTLECmZD0rwKROZXPOzmOszlDtmvsTsA6n.png",
            "created_at": null,
            "updated_at": null
        },
    ]
}

<!-- 404 -->
{
  "message" : "Not found"
}
```

[ POST ] お問い合わせメール送信

```
/contact
```

リクエスト

```
{
  "name" : "名前",
  "email": "test@example.com",
  "test" : "お問い合わせ内容"
}
```

レスポンス

```
<!-- 200 -->
{
  "message" : "Mail Send"
}
```
