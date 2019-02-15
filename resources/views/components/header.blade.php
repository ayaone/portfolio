<header class="header" :class="views.project? 'shadow-s' : ''">
    <h1 class="header__text">Bochenski</h1>
    <ul class="header__menu">
        <li class="header__menu--item " :class="$route.path==='/' ? css.active : ''" @click="changeView('/')">
            <a href="#">Home</a></li>

        <li class="header__menu--item" :class="($route.path === '/portfolio' || views.project)? css.active : ''" @click="changeView('/portfolio')"><a href="#portfolio">Portfolio</a></li>

        <li class="header__menu--item" :class="$route.path==='/contact' ? css.active : ''" @click="changeView('/contact')"><a href="#">Contact</a></li>
        <li class="header__menu--item" :class="$route.path==='/about' ? css.active : ''" @click="changeView('/about')" ><a href="#">About</a></li>
    </ul>
</header>
