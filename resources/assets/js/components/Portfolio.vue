<template>
<div class="main-wrap">
  <carousel>
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
    
    
    <card name="exam">
      <template slot="title">
        Exam App
      </template>
      <p slot="subtitle">
        ASEAN Language Center
      </p>
      <template slot="front">
        <li>CSS3, SASS</li>
        <li>JavaScript</li>
        <li>jQuery</li>
      </template>
      <template slot="back">
        <li>PHP</li>
        <li>SQLite</li>
        <li>Ubuntu Server</li>
      </template>
      <template slot="tools">
        Webpack, GIT, BrowserSync, NodeJS
      </template>
    </card>
    
    <card name="chat">
      <template slot="title">
        Chat App
      </template>
      <p slot="subtitle">
        NSRU International Students
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
    

    <card name="tours">
      <template slot="title">
        Homepage
      </template>
      <p slot="subtitle">
        a tourist agency
      </p>
      <template slot="front">
        <li>CSS3</li>
        <li>SASS</li>
      </template>
      <template slot="back">
        <li>none</li>
      </template>
      <template slot="tools">
        GIT, NodeJS
      </template>
    </card>


    <card name="resort">
      <template slot="title">
        Frontpage
      </template>
      <p slot="subtitle">
        travel agency
      </p>
      <template slot="front">
        <li>CSS3</li>
        <li>SASS</li>
      </template>
      <template slot="back">
        <li>none</li>
      </template>
      <template slot="tools">
        GIT, NodeJS
      </template>
    </card>


    <card name="estate">
      <template slot="title">
        Frontpage
      </template>
      <p slot="subtitle">
        real estate agency
      </p>
      <template slot="front">
        <li>CSS3</li>
        <li>SASS</li>
      </template>
      <template slot="back">
        <li>none</li>
      </template>
      <template slot="tools">
        GIT, NodeJS
      </template>
    </card>
  </carousel>
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
