<template>
<div class="main-wrap">
  
  <card name="lms">
    <template slot="title">
      Learning Management System
    </template>
    <p slot="subtitle">
     Rajabhat University 
    </p>
    <template slot="front">
      <li>CSS3, SASS</li>
      <li>JavaScript</li>
      <li>VueJS</li>
    </template>
    <template slot="back">
      <li>PHP</li>
      <li>Laravel</li>
      <li>SQLite</li>
      <li>Ubuntu Server</li>
    </template>
    <template slot="tools">
      Webpack, GIT, BrowserSync, NodeJS
    </template>
  </card>

  
  <card name="lms">
    <template slot="title">
      Learning Management System
    </template>
    <p slot="subtitle">
     Rajabhat University 
    </p>
    <template slot="front">
      <li>CSS3, SASS</li>
      <li>JavaScript</li>
      <li>VueJS</li>
    </template>
    <template slot="back">
      <li>PHP</li>
      <li>Laravel</li>
      <li>SQLite</li>
      <li>Ubuntu Server</li>
    </template>
    <template slot="tools">
      Webpack, GIT, BrowserSync, NodeJS
    </template>
  </card>

</div>

</template>

<script>
import Card from './Card.vue';
 export default {
     components: {
         Card
     }
 }
</script>
