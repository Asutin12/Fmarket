<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        a{text-decoration: none;}
        .header-right{display: flex;align-items: center;justify-content: space-between;}
        .header-list{display: flex;align-items: center;width: 600px;justify-content: space-between;}
        .title{text-align: center; font-size: 30px;}
        .content{text-align: center; margin: 0 auto;font-weight: bold}
        textarea{width: 100%;height: 200px;padding: 10px;margin-top: 10px;}
        button{ color:rgb(21, 1, 18);width: 80%;padding: 10px;border-radius: 5px;border:1px solid gray; margin-bottom: 20px;margin-top: 40px;}
        footer{background-color: pink;}
        .footer{width: 50%;height: 400px;display: flex;justify-content: space-between;text-align: left;margin-top: 200px;}
        .footer-buttom{padding: 20px;}
        .p-content{display: flex;justify-content: space-around;}
        .p-box{display: flex;align-items: center;width: 800px;justify-content: space-around;border: 1px solid gray}
        .p{width: 400px; border: 1px solid gray}
        .price{display: flex;justify-content: space-around;padding-bottom: 15px;padding-top: 10px;}
        .price-b{border-top: 1px solid gray;display: flex;justify-content: space-around;}
        .purchase{display:inline-block;background-color:gray;color: #fff;padding: 10px 169px;border-radius: 5px;border:1px solid gray;margin-top: 40px;}
        .p-b{text-align: right;padding-right: 114px;}
    </style>
</head>
<body>
        <header>
            <div class="header-right">
                <a href="{{route('home.index')}}" class="header-title">Title</a>
            </div>
            <hr>
        </header>
        <main>
            <a href="{{route('sell.home')}}"><</a>
            <div class="content">
             @yield('content')
            </div>
        </main>
        <footer>
            <div class="footer">
                <section class="footer-item">
                    <h1 class="section-title">shop</h1>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                </section>
                <section class="footer-item">
                    <h1 class="section-title">help</h1>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                </section>
                    <section class="footer-item">
                    <h1 class="section-title">privacy</h1>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                    <p>aiueo</p>
                </section>
            </div>
            <hr>
              <p class="footer-buttom">2022 hurima</p>
        </footer>
</body>
</html>
