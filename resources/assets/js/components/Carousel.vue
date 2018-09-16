<template>
    <div class="main-carousel">
        <slot></slot>
    </div>
</template>

<style>
  .main-carousel {
//      width: 60%;
  }
</style>

<script>
import Flickity from 'flickity';
import 'flickity/dist/flickity.min.css';

export default {
    props: {
        wraparound: {default: true},
        autoplay: {default: false},
    },
    mounted() {
            new Flickity(this.$el, {
                wrapAround: this.wraparound,
                autoPlay: this.autoplay,
                cellAlign: 'left',
                contain: true
            });
    }
}
</script>
