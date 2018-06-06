<template>
  <div class="main-wrap">
    
    <div class="hero">
                <h2 class="hero__title-1">Hi. I'm Arek.</h2>
                <h2 class="hero__title-2">Web developer.</h2>
                <a href="#contact" class="btn hero__button" @click="contact">Contact Me</a>
            </div>
            <a href="#portfolio" class="arrow" @click="portfolio">
                <img class="icon" src="icons/down-arrow.svg">
            </a>
        </div>
</template>

<script>
 export default {
     methods: {
         contact(){
             this.$parent.$data.currentView = "contact";
         },
         portfolio(){
             this.$parent.$data.currentView = "portfolio";
         }
     }
 }
</script>
