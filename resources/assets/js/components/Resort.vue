<template>
<div class="main-wrap project">
  <div class="title">
    <div class="bg-image">
      <div class="bg-image--resort">
        
      </div>
    </div>
    <div class="title__text">
      <h2 class="title__text-main">
        HOMEPAGE
      </h2>
      <div class="title__text-secondary">
        <p>
          for
        </p>
        <p>
          a travel agency
        </p>
        <p class="title__text-tertiary">
          (HTML5, CSS3, SASS)
        </p>
      </div>
    </div>
  </div>
  
  <div class="description">
    <h3 class="description__title">
      Challenge and Solution
    </h3>
    <div class="description__text">
      <p>
        This project only involved coding the front-end part. Here I focused on building the entire page with modern CSS3 features like Flexbox.
      </p>
      <p>
        The site was designed by Jonas Schmedtmann.
      </p>
    </div>
  </div>


  <framed-image alt="Tours Homepage" src="/img/resort/whole.jpg" size="large">
  </framed-image>


</div>
</template>

<style>
</style>

<script>
export default {
    mounted(){
        this.$root.$data.views.project = true;
    }
}
</script>
