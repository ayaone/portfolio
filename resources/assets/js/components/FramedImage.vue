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
.width-small {
    width: 40rem;
}

.width-medium {
    width: 60rem;
}

.width-large {
    width: 90rem;
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
    
    background-color: rgba(0, 0, 0, .1);
    padding: 2rem 2rem 0 2rem;
    margin-left: auto;
    margin-right: auto;
    
    text-align: center;
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
