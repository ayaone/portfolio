<template>
  <div class="main-wrap">
    
    <div class="hero">
                <h2 class="hero__title-1">Hi. I'm Arek.</h2>
                <h2 class="hero__title-2">Web developer.</h2>
                <router-link to="/contact" class="btn hero__button">
                  Contact Me
                </router-link>
    </div>
    <router-link to="/portfolio" class="arrow">
       <img class="icon" src="/img/down-arrow.svg">
    </router-link>
  </div>
</template>

<script>
export default {
    mounted() {
        this.views.project = false;
    },
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
