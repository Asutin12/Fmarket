<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/resources/css/reset.css">
    <script src="https://kit.fontawesome.com/35a44d6fd7.js" crossorigin="anonymous"></script>
    <style>
        .header{display: flex;align-items: center;justify-content: space-between;padding:0px 30px;padding-top: 10px;}
        /* .header-right{display: flex;align-items: center;justify-content: space-between;} */
        .header-left{display: flex;align-items: center;justify-content: space-between; width: 800px;}
        /* .search{border: 1px solid gray;padding: 2px 250px;} */
        .header-list{font-size: 15px; display: flex;align-items: center;width: 300px;justify-content: space-around; text-align: right;}
        .datail{display: flex;padding-left: 200px;}
        a{text-decoration: none;padding:10px 20px;}
        .b {text-decoration: none;padding:10px 20px; color: #8eb8ff;}
        a:hover{background-color: #ffeeff;border-radius: 7px;}
        main{width: 1250px;margin: 0 auto; text-align: center;}
        .title{margin: 0 auto;text-align: center;}
        .mini-title{padding-bottom: 20px;text-align: left;}
        .content{margin: 0 auto; text-align:left;}
        .home-title{color: gray;padding-left: 200px;width: 300px;font-size: 25px}
        .sell{display: flex;justify-content: space-between; margin: 0 auto; text-align: center;}
        .sell-item{border: 1px solid #b4c1d1;border-radius:7px; padding:50px 100px;width: 150px;}
        footer{background-color: #8eb8ff;}
        .footer{width: 50%;margin-top: 30px; height: 400px;display: flex;justify-content: space-between;text-align: left;margin-top: 200px;}
        .footer-buttom{padding: 20px;}
        section{padding-bottom: 50px;padding-top: 20px;}
        .section-title{text-align: left;}
        .item-box{width: 100%; display: flex;justify-content: flex-start;flex-wrap: wrap;}
        .item{margin-right: 10px;max-width: 198px;border: 1px solid #8eb8ff;border-radius: 10px; margin-bottom: 10px;}

        .detail{display: flex;justify-content: space-around}
        .detail-img{width: 600px;height: 600px;}
        .rigth{width: 500px;}
        .purchase{background-color: red;color: #fff;width: 92%;display: inline-block;text-align: center;border-radius: 7px;}
        .price{color: red; font-weight: bold;font-size: 25px;}
        .section{padding-bottom: 5px; padding-top: 5px;}

        /* Account */
        .user-edit{border:1px solid red; color: red;border-radius: 7px;}
        .account{width: 700px;margin: 0 auto;border: 1px dotted #8eb8ff;margin-top: 40px;padding: 20px;border-radius:30px}
        .account-img{padding-right: 10px;}
        .account-menu{display: flex;align-items: center;justify-content:space-around;}
        .nn{display: flex;justify-content: space-between;align-items: center;width: 300px;color: gray;}
        .un{color: #8eb8ff;}
        .dropdown-menu{color:#fff;display: block;text-align: right;}
        .profile{display: flex;justify-content: space-around;align-items: center;padding-top: 40px;}
        .p-item{display: flex;align-items: center;width: 200px;justify-content: space-between;}
        .intro{text-align: center;}
        .edit{margin: 0 auto;padding-left: 0px;width:300px;}
        .row{padding-bottom: 30px;}
        .name{width: 250px;height:30px;}
        .i{width: 250px;height: 200px;}
        .update{background-color: #8eb8ff;border: none; border-radius: 6px;padding: 10px;}

        /* search */
        .bb{display: flex;}
        .bb-i{margin-right: 10px;width: 300px; border: 1px solid #8EB8FF;border-radius: 6px;}
        .s-b{background-color: #8EB8FF;border: none; border-radius: 7px;padding: 10px 15px;}

        /* item.index */
        .item-section{display: flex;justify-content: space-between;margin-right: 250px;}
        .soldout{font-weight: bold; transform: rotate(-20deg);-moz-transform: rotate(-20deg);-webkit-transform: rotate(-20deg);background-color: red;padding:0px 60px; color: #fff;font-size:10px;border-radius: 10px}
        .flex{display: flex;align-items: center;justify-content: space-between;}
        .i{color: gray;}
        .user-link{display: flex;justify-content: space-between; align-items: center;padding-right: 250px;}

        .like{padding-bottom: 20px;}
    </style>
</head>
<body>
<header>
    <div class="header">
        <div class="header-left">
            <a class="b" href="{{route('home.index')}}" class="header-title">Title</a>
            <div class="search">
                <form class="bb" method="get" action="{{route('home.index')}}">
                    <input class="bb-i" type="search" placeholder="" name="search" value="@if (isset($search)) {{ $search }} @endif">
                    <div>
                        <button class="s-b" type="submit">検索</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <ul class="header-list">
                @guest
                <p class="header-item"><a class="b" href="{{route('register')}}">会員登録</a></p>
                <p class="header-item"><a class="b" href="{{route('home')}}">ログイン</a></p>
                @endguest
                @auth
                <p class="header-item"><a class="b" href="{{route('account.mypage')}}">アカウント</a></p>
                <p class="header-item"><a class="b" href="{{route('sell.create')}}">出品</a></p>
                @endauth
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
