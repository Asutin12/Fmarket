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
        .header-right{display: flex;align-items: center;justify-content: space-between;}
        .header-left{display: flex;align-items: center;justify-content: space-between; width: 800px;}
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
    </style>
</head>
<body>
<header>
    <div class="header">
        <div class="header-left">
            <a href="{{route('home.index')}}" class="header-title">Title</a>
            <div class="search">
                <form method="get" action="{{route('home.index')}}">
                    <input type="search" placeholder="" name="seach" value="@if (isset($search)) {{ $search }} @endif">
                    <div class="">
                        <button type="submit">検索</button>
                        <button>
                            <a href="{{route('home.index')}}" class="teatwhite">クリア</a>
                        </button>
                    </div>
                </form>
            </div>
            {{-- @foreach ($items as $item)
            {{-- <a href="{{route('search.index',['item_id'=>$item->id])}}">{{$item->name}}</a>
            @endforeach --}}
        </div>
        <div class="header-right">
            <ul class="header-list">
                <p class="header-item"><a href="{{route('register')}}">会員登録</a></p>
                <p class="header-item"><a href="{{route('home')}}">ログイン</a></p>
                <p class="header-item accoount"><a href="{{route('account.mypage')}}">アカウント</a></p>
                <p class="header-item"><a href="{{route('sell.home')}}">出品</a></p>
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
