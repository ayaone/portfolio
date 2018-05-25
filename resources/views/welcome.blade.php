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
        <div id="app">
            <header class="header">
                <h1 class="header__text">Bochenski</h1>
                <ul class="header__menu">
                    <li class="header__menu--item " :class="currentView==='home' ? css.active : ''" @click="currentView='home'"><a href="#">Home</a></li>
                    <li class="header__menu--item" :class="currentView==='portfolio' ? css.active : ''" @click="currentView='portfolio'"><a href="#portfolio">Portfolio</a></li>
                    <li class="header__menu--item" :class="currentView==='contact' ? css.active : ''" @click="currentView='contact'"><a href="#">Contact</a></li>
                    <li class="header__menu--item" :class="currentView==='about' ? css.active : ''" @click="currentView='about'" ><a href="#">About</a></li>
                </ul>
            </header>
            <main>
                <component :is="currentView"></component>
            </main>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
