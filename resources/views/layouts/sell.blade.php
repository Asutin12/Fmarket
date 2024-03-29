<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        a{text-decoration: none;}
        .header{display: flex;align-items: center;justify-content: space-between;padding: 20px;}
        .header-list{display: flex;align-items: center;width: 600px;justify-content: space-between;}
        .header-title{color: #8eb8ff;}
        .title{text-align: center; font-size: 30px;}
        .content{width: 550px; text-align: center; margin: 0 auto;font-weight: bold}
        section{padding-top: 20px;}
        .section-title{text-align: left; font-size: 20px;padding-bottom: 10px;color: gray;}
        .row{text-align: left;font-size: 15px;padding-bottom: 10px;}
        input{width: 100%;line-height: 2;padding: 10px;margin-top: 10px;}
        select{width: 575px;margin-bottom: 20px;padding: 10px;margin-top: 10px;}
        textarea{width: 100%;height: 200px;padding: 10px;margin-top: 10px;}
        button{ background-color:#8eb8ff;width: 80%;padding: 10px;border-radius: 5px;border:none; margin-bottom: 20px;margin-top: 40px;}
        .update{background-color:aliceblue;}
        .delete{background-color:fff;}
        footer{background-color: pink;}
        .footer{width: 50%;height: 400px;display: flex;justify-content: space-between;text-align: left;margin-top: 200px;}
        .footer-buttom{padding: 20px;}
    </style>
</head>
<body>
        <header>
            <div class="header">
                <a href="{{route('home.index')}}" class="header-title">Title</a>
            </div>
            <hr>
        </header>
        <main>
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
