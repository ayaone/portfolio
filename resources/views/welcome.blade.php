@extends('master')
    @section('body')
        <div id="app">
           @component('components.header')
           @endcomponent
            <main>
                <div class="main" :class="{'project-view': views.project}">
                    <transition name="component-fade" mode="out-in">
                        <router-view></router-view>
                    </transition>
                </div>
            </main>
        </div>
        <script src="/js/app.js"></script>
    @stop
