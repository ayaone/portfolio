<template>
<div class="main-wrap project">
  <div class="title">
    <div class="bg-image">
      <div class="bg-image--lms">
        
      </div>
    </div>
    <div class="title__text">
      <h2 class="title__text-main">
        Learning Management System
      </h2>
      <div class="title__text-secondary">
        <p>
          for
        </p>
        <p>
          Rajabhat University
        </p>
        <p class="title__text-tertiary">
          (HTML5, CSS3, SASS, JavaScript, VueJS, PHP, Laravel, SQLite, Ubuntu Server) 
        </p>
      </div>
    </div>
  </div>
  <framed-image alt="working" src="/img/lms/overview.png" size="medium">
    Lectures overview
  </framed-image>
  
  <div class="description">
    <h3 class="description__title">
      Challenge
    </h3>
    <div class="description__text">
      <p>
        I was tasked to create a simple, yet powerful management system for lecturers and students of a Thai University (Rajabhat University).
      </p>
      <p>
        As most lectureres had very little to no professional experience with web application, the interface had to be very simple, yet feature rich.  
      </p>
      
      <p>
        <span class="text-bold"> The lecturers had to be able to:</span>
      </p>
      <ul>
        <li>
          create new subjects,         
        </li>
        <li>
          each subject had to have its website to which the lecturer could upload study materials and use for communication with their students,         
        </li>
        <li>
          add students and groups to their subjects,         
        </li>
        <li>
          organize students into groups,         
        </li>
        <li>
          track attendance, home assignments and exams,         
        </li>
        <li>
          see each student's grade as well as adjust the grading scale on the fly
        </li>
      </ul>
    </div>
  </div>
  
  <div class="description">
    <h3 class="description__title">
      Solution
    </h3>
    <div class="description__text">
      <p>
        As I was the sole coder, I was free to choose which tools I was going to work with.
      </p>
      <p>
        I ended up using: <span class="text-bold">Laravel as my PHP framework</span>  - its "Eloquent ORM" (ActiveRecord implementation) would greatly ease working with the database; it also comes with nice <span class="text-bold">VueJS</span> integration, which was my <span class="text-bold">JavaScript framework</span> of choice.
      </p>
      <p>
        I also set up a <span class="text-bold">Ubuntu server</span> with nginx HTTP server on a VPS.
      </p>
    </div>
  </div>
  
  <div class="description">
    <div class="description__section">
      Features 
    </div>
    <h3 class="description__title">
      Seamless transitions with AJAX 
    </h3>
    <div class="description__text">
      <p>
        The modules are swapped dynamically with the data being cached in the background giving the app a feel of native desktop application.       
      </p>
    </div>
  </div>
  <framed-image src="/img/lms/transitions.gif" alt="transitions animation" size="medium">
    Transitions
  </framed-image>
  
  
  <div class="description">
    <h3 class="description__title">
      Attendance tracking and filters
    </h3>
    <div class="description__text">
      <p>
        I have implemented all the requested features; on top of that I added various search and display filters.       
      </p>
    </div>
  </div>
  <framed-image src="/img/lms/attendance.gif" alt="attendance" size="default">
    Attendance tracking
  </framed-image>
  
  <div class="description">
    <h3 class="description__title">
      Tabbed score tracking
    </h3>
    <div class="description__text">
      <p>
        As for the interface, I chose to go with tabs - it helps organize the data without cluttering the UI while still keeping things simple.       
      </p>
    </div>
  </div>
  <framed-image src="/img/lms/tabs.gif" alt="tabbed score tracking" size="large">
    Tabbed score tracking
  </framed-image>
  
  
  
  <div class="description">
    <h3 class="description__title">
      Grade calculation with editable grading scale
    </h3>
    <div class="description__text">
      <p>
        The grading scale is fully editable and every teacher can tailor it to his needs. In addition, with the help of the slider, teachers can adjust the score threshold for all grades with just one click.       
      </p>
    </div>
  </div>
  <framed-image src="/img/lms/grades.png" alt="grades" size="medium">
    Grade calculation
  </framed-image>
  
  
  <div class="description">
    <h3 class="description__title">
      Random student selector
    </h3>
    <div class="description__text">
      <p>
       I added this functionality as an extra. It pulls all currently present students. Once a student has been selected, he/she is being removed from the pool, until everyone has given an answer. The pool of names resets once it's empty. This ensures, that every student will have equal chance of being selected and prevents a single student to be chosen multiple times while others weren't given a chance to speak at all.       
      </p>

    </div>
  </div>
  <framed-image src="/img/lms/random.gif" alt="random student" size="medium">
    Student selector
  </framed-image>


 <div class="description">
    <h3 class="description__title">
      Homepage for each subject
    </h3>
    <div class="description__text">
      Each subject has its dedicated homepage, where lecturers can post updates, assign homework and upload worksheets and study materials.
    </div>
  </div>
  <framed-image src="/img/lms/subject_page.png" alt="subject homepage" size="small">
    Subject's homepage
  </framed-image>


 <div class="description">
    <h3 class="description__title">
      Subject's week/class/entry editor
    </h3>
    <div class="description__text">
    </div>
  </div>
  <framed-image src="/img/lms/editor.png" alt="subject homepage" size="medium">
    Built-in editor
  </framed-image>


 <div class="description">
    <h3 class="description__title">
      Student's view
    </h3>
    <div class="description__text">
      Students can view their progress, attendance, assignments and access the subject's page.
    </div>
  </div>
  <framed-image src="/img/lms/student-mobile.jpg" alt="student mobile view" size="small">
    Student's mobile view
  </framed-image>


</div>
</template>

<style>
</style>

<script>
export default {
    mounted(){
    }
}
</script>
