<template>
<div class="card" @click="view">
  <div :class="card">
    <div class="card__blur">
      <div :class="cardBlur">
      </div>
    </div>
    <div class="card__title" :class="cardTitle">
      <slot name="title"></slot>
      <div class="card__subtitle">
        <p>
          for
        </p>
        <slot name="subtitle"></slot>
      </div>
    </div>
    <div class="card__onhover">
      <div class="card__onhover--title">
        Technologies used
      </div>
      <div class="card__tech">
        <ul class="card__tech-front">
          <li class="card__tech-front--title">Frontend:</li>
          <li>HTML5</li>
          <slot name="front"></slot>
        </ul>
        <ul class="card__tech-back">
          <li class="card__tech-front--title">Backend:</li>
          <slot name="back"></slot>
        </ul>
      </div>
      <h3 class="card__onhover--tooling">
          Tooling:
      </h3>
      <p class="card__onhover--tools">
          <slot name="tools"></slot>
      </p>
    </div>
  </div>
</div>
</template>

<script>
export default {
    props: ['name'],
    methods: {
        view(){
            this.$router.push('/portfolio/' + this.name);
            this.$root.$data.views.active='portfolio';
            this.$root.$data.views.project = true;
        } 
    },
    computed: {
        card (){
            return `card__${this.name}`;
        },
        cardTitle(){
            return `card__title--${this.name}`;
        },
        cardBlur(){
            return `card__blur--${this.name}`;
        }
    }
}
</script>
