<template>
  <div class="image-wrap">
    <div class="image-border">
      <img class="image-shadow" :class="width" :alt="alt" :src="src"/>
      <p>
        <slot></slot>
      </p>
    </div>
  </div>
</template>

<style lang="scss">
.width-default {
    
    @media (max-width: 56.25em) {
        width: 85vw;
        height: auto
    }
    @media (max-width: 37.5em) {
        width: 85vw;
        height: auto;
    }
}
.width-small {
    width: 40rem;
    
    @media (max-width: 87.5em) {
        width: 35vw;
        height: auto;
    }
    @media (max-width: 56.25em) {
        width: 55vw;
        height: auto;
    }
    @media (max-width: 37.5em) {
        width: 85vw;
        height: auto;
    }
}

.width-medium {
    width: 60rem;
    
    @media (max-width: 56.25em) {
        width: 85vw;
        height: auto;
    }
    @media (max-width: 37.5em) {
        width: 85vw;
        height: auto;
    }
}

.width-large {
    width: 90rem;
    
    @media (max-width: 56.25em) {
        width: 85vw;
        height: auto;
    }
    @media (max-width: 37.5em) {
        width: 85vw;
        height: auto;
    }
}

.image-wrap {
    display: flex;
    flex-flow: column;
    align-items: center;
    margin-bottom: 6rem;
}
.image-border {
    display: inline-block;
    display: flex;
    flex-flow: column;
    align-items: center;
    
   // background-color: rgba(0, 0, 0, .1);
    padding: 2rem 2rem 0 2rem;
    margin-left: auto;
    margin-right: auto;
    
    text-align: center;
    
    @media (max-width: 37.5em) {
        padding: 5px 5px 0 5px;
    }
    p {
        padding: 1rem;
        font-size: 1.3rem;
        font-weight: 400;
        color: rgba(0,0,0,.8);
    }
}

.image-shadow {
    box-shadow: 0 3px 3px rgba(0,0,0, .3);
}
</style>

<script>
export default {
    props: ['src', 'alt', 'size'],
    computed: {
        width(){
            if (this.size){
                return `width-${this.size}`;               
            }
            return "width-medium";
        }
    }
}
</script>
