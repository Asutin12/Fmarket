<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/resources/css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>
        .header{display: flex;align-items: center;justify-content: space-between;padding:0px 30px;}
        .header-right{display: flex;align-items: center;justify-content: space-around;}
        .header-item{padding-right: 100px;}
        .header-left{display: flex;align-items: center;justify-content: space-between; width: 700px;}
        /* .search{border: 1px solid gray;padding: 2px 250px;} */
        .header-list{font-size: 15px; display: flex;align-items: center;width: 500px;justify-content: space-between;text-align: right;}
        .datail{display: flex;padding-left: 200px;}
        a{text-decoration: none;padding:10px 20px;}
        a:hover{background-color: #ffeeff;}
        main{width: 1250px;margin: 0 auto; text-align: center;}
        .title{margin: 0 auto;text-align: center;}
        .mini-title{padding-bottom: 20px;text-align: left;}
        .content{margin: 0 auto; text-align:left;}
        .home-title{color: gray;padding-left: 200px;width: 300px;font-size: 25px}
        .sell{display: flex;justify-content: space-between; margin: 0 auto; text-align: center;}
        .sell-item{border: 1px solid #b4c1d1;border-radius:7px; padding:50px 100px;width: 150px;}
        footer{background-color: pink;}
        .footer{width: 50%;margin-top: 30px; height: 400px;display: flex;justify-content: space-between;text-align: left;margin-top: 200px;}
        .footer-buttom{padding: 20px;}
        section{padding-bottom: 50px;padding-top: 20px;}
        .section-title{text-align: left;}
        .item-box{width: 100%; display: flex;justify-content: flex-start;flex-wrap: wrap}
        .item{margin-right: 10px;}

        .detail{display: flex;justify-content: space-around}
        .detail-img{width: 600px;height: 600px;}
        .rigth{width: 500px;}
        .purchase{background-color: red;color: #fff;width: 92%;display: inline-block;text-align: center;}
        .price{color: red; font-weight: bold;font-size: 25px;}
        .section{padding-bottom: 5px; padding-top: 5px;}

        /* Account */
        .user-edit{border:1px solid red; color: red;border-radius: 7px;}
        .account{width: 600px;margin-left: 300px;}
        .account-img{padding-right: 10px;}
        .account-menu{display: flex;align-items: center;}
        .user-box{text-align: right; display: flex; justify-content: space-between; align-items: center;}
        .user-item{padding-right: 100px;}

        /* search */
        .bb{display: flex;}
        .bb-i{margin-right: 10px;width: 200px;}

        /* item.index */
        .item-section{display: flex;justify-content: space-between;margin-right: 250px;}
        .soldout{transform: rotate(-10deg);-moz-transform: rotate(-10deg);-webkit-transform: rotate(-10deg);}
        .flex{display: flex;align-items: center;justify-content: space-between;}
    </style>
</head>
<body>
<header>
    <div class="header">
        <div class="header-left">
            <a href="{{route('home.index')}}" class="header-title">Title</a>
            <div class="search">
                <form class="bb" method="get" action="{{route('home.index')}}">
                    <input class="bb-i" type="search" placeholder="" name="search" value="@if (isset($search)) {{ $search }} @endif">
                    <div>
                        <button type="submit">検索</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            {{-- <ul class="header-list"> --}}
                @guest
                <p class="header-item"><a href="{{route('register')}}">会員登録</a></p>
                <p class="header-item"><a href="{{route('home')}}">ログイン</a></p>
                @endguest
            {{-- </ul> --}}
        </div>
    </div>
    <div class="datail">
        @auth
        <a href="{{route('home.index')}}">おすすめ</a>
        <a href="{{route('home.mylist',['user_id'=>$user->id])}}">マイリスト</a>
        <a href="{{route('account.mypage')}}">アカウント</a>
        <a href="{{route('sell.home')}}">出品</a>
        @endauth
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
    <div class="footer">
        <div class="shop">
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
        </div>
        <div class="help">
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
        </div>
        <div class="privacy">
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
            <p>aiueo</p>
        </div>
    </div>
</footer>
</body>
</html>
