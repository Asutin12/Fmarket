<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/css/reset.css">
    <style>
        .header{display: flex;align-items: center;justify-content: space-between;padding:0px 30px;}
        .header-right{display: flex;align-items: center;justify-content: space-between;}
        .header-left{display: flex;align-items: center;justify-content: space-between; width: 700px;}
        .search{border: 1px solid gray;padding: 2px 250px;}
        .header-list{display: flex;align-items: center;width: 400px;justify-content: space-between;text-align: right;}
        .title{text-align: center;}
        .content{margin: 0 auto;}
    </style>
</head>
<body>
<header>
    <div class="header">
        <div class="header-left">
            <h2 class="header-title">Title</h2>
            <p class="search">検索機能</p>
        </div>
        <div class="header-right">
            <ul class="header-list">
                <p class="header-item"><a href="">会員登録</a></p>
                <p class="header-item"><a href="">ログイン</a></p>
                <p class="header-item"><a href="">お知らせ</a></p>
                <p class="header-item"><a href="">出品</a></p>
            </ul>
        </div>
    </div>
    <div class="datail">
        @yield('detail')
    </div>
    <hr>
</header>
<main>
    <h1 class="title">@yield('title')</h1>
    <div class="content">
        @yield('content')
    </div>
</main>
<footer>
    2022 furima.jp
</footer>
</body>
</html>
