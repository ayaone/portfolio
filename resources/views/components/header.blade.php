<header class="header" :class="views.project? 'shadow-s' : ''">
    <h1 class="header__text">Bochenski</h1>
    <ul class="header__menu">
        <li class="header__menu--item " :class="views.current==='home' ? css.active : ''" @click="changeView('home')"><a href="#">Home</a></li>
        <li class="header__menu--item" :class="(views.current=='portfolio' || views.project)? css.active : ''" @click="changeView('portfolio')"><a href="#portfolio">Portfolio</a></li>
        <li class="header__menu--item" :class="views.current==='contact' ? css.active : ''" @click="changeView('contact')"><a href="#">Contact</a></li>
        <li class="header__menu--item" :class="views.current==='about' ? css.active : ''" @click="changeView('about')" ><a href="#">About</a></li>
    </ul>
</header>
