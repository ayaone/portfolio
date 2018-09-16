<template>
  <div class="main-wrap">
    
    <div class="hero">
                <h2 class="hero__title-1">Hi. I'm Arek.</h2>
                <h2 class="hero__title-2">Web developer.</h2>
                <a href="#contact" class="btn hero__button" @click.stop="contact">Contact Me</a>
            </div>
            <a href="#portfolio" class="arrow" @click="portfolio">
                <img class="icon" src="/icons/down-arrow.svg">
            </a>
        </div>
</template>

<script>
export default {
    data() {
        return {
            views: {
                current: '',
                project: false
            }
        }
    },
    methods: {
        contact(){
            this.views.current = 'contact';
            this.$root.$data.views=this.views;
        },
        portfolio(){
            this.views.current = 'portfolio';
            this.$root.$data.views=this.views;
        }
     }
 }
</script>
