@extends('master')
    <body>
        <div id="app">
           @component('components.header')
               @endcomponent
            <main>
                <div class="main">
                    <transition name="component-fade" mode="out-in">
                        <component :is="currentView"></component>
                    </transition>
                </div>
            </main>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
