<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet"/>
        <title>Arek Bochenski</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    </head>
    <body>
        <header class="header">
            <h1 class="header__text">Bochenski</h1>
            <ul class="header__menu">
                <li class="header__menu--item header__menu--item-active"><a href="/">Home</a></li>
                <li class="header__menu--item"> <a href="">Portfolio</a></li>
                <li class="header__menu--item"><a href="">Contact</a></li>
                <li class="header__menu--item"><a href="">About</a></li>
            </ul>
        </header>

        <main>
                <div class="main">
                    <div class="hero">
                        <h2 class="hero__title-1">Hi. I'm Arek.</h2>
                        <h2 class="hero__title-2">Web developer.</h2>
                        <a href="/contact" class="btn hero__button">Contact Me</a>
                    </div>
                    <div class="arrow">
                        arrow
                    </div>
                </div>

        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
