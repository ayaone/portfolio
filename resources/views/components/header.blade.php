<header class="header">
    <h1 class="header__text">Bochenski</h1>
    <ul class="header__menu">
        <li class="header__menu--item " :class="currentView==='home' ? css.active : ''" @click="currentView='home'"><a href="#">Home</a></li>
        <li class="header__menu--item" :class="currentView=='portfolio'? css.active : ''" @click="currentView='portfolio'"><a href="#portfolio">Portfolio</a></li>
        <li class="header__menu--item" :class="currentView==='contact' ? css.active : ''" @click="currentView='contact'"><a href="#">Contact</a></li>
        <li class="header__menu--item" :class="currentView==='about' ? css.active : ''" @click="currentView='about'" ><a href="#">About</a></li>
    </ul>
</header>
