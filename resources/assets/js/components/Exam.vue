<template>
<div class="main-wrap project">
  <div class="title">
    <div class="bg-image">
      <div class="bg-image--exam">
        
      </div>
    </div>
    <div class="title__text">
      <h2 class="title__text-main">
        Exam App
      </h2>
      <div class="title__text-secondary">
        <p>
          for
        </p>
        <p>
          ASEAN Language Center
        </p>
        <p class="title__text-tertiary">
          (HTML5, CSS3, SASS, JavaScript, jQuery, PHP, SQL, Raspberry PI, Ubuntu Server) 
        </p>
      </div>
    </div>
  </div>
  <framed-image alt="Exam Maker" src="/img/exam/exam-maker.jpg" size="medium">
    Exam Maker
  </framed-image>
  
  <div class="description">
    <h3 class="description__title">
      Challenge
    </h3>
    <div class="description__text">
      <p>
        An ASEAN Language Center wanted to modernize its methods of testing students. Providing digital exams and tests was the goal, as it would allow the teachers to test more students and give them instant feedback on their exam.
      </p>
      <p>
        The problem was, that Center had a tight budget and couldn't afford to buy 30 new monitors and desktops.
      </p>
    </div>
  </div>
  
  <div class="description">
    <h3 class="description__title">
      Solution
    </h3>
    <div class="description__text">
      <p>
        The only solution to this problem was to implement a <span class="text-bold">BYOD philosophy</span>  (Bring Your Own Device). We agreed that, since all students own smarthphones, they would be taking the test using their own devices.
      </p>
      <p>
        Another problem that arised, was that the server had to be hosted locally - the centered experienced frequent Internet outages, and the WiFi they provided wasn't reliable for the purpose of taking exams.
      </p>
      <p>
        I chose to host the server on <span class="text-bold">Raspberry PIs</span> and provide independent WiFi access point to student taking exams.
      </p>
      <p>
        As the exam was multiple choice only and hosted on Raspberry PIs, I opted choosing a simple stack: <span class="text-bold">PHP, jQuery, Ubuntu Server and SQL.</span> 
      </p>
    </div>
  </div>
  
  <div class="description">
    <div class="description__section">
      Features 
    </div>
    <h3 class="description__title">
      Shared Exams
    </h3>
    <div class="description__text">
      <p>
        Teachers could share exams and questions when their topics overlapped.
      </p>
    </div>
  </div>
  
  
  <div class="description">
    <h3 class="description__title">
      Intuitive exam editor for teachers
    </h3>
    <div class="description__text">
      <p>
        Easy to upload images, format text and add questions even for not tech savvy teachers.
      </p>
    </div>
  </div>
  <framed-image src="/img/exam/question-editor.png" alt="Question Editor" size="large">
    Question Editor
  </framed-image>
  
  <div class="description">
    <h3 class="description__title">
      Mobile views for students
    </h3>
  </div>
  <framed-image src="/img/exam/mobile-view1.jpg" alt="Mobile view" size="small">
    Mobile view
  </framed-image>
  
  
  <div class="description">
    <h3 class="description__title">
      Prevention from submitting before all questions were answered
    </h3>
    <div class="description__text">
      <p>
        Submit button would only be shown when all questions were answered
      </p>
    </div>
  </div>
  <framed-image src="/img/exam/submit.jpg" alt="Subit test" size="medium">
    Test Submission
  </framed-image>
  
  
  <div class="description">
    <h3 class="description__title">
      Instant score and review
    </h3>
    <div class="description__text">
      <p>
        After the submission of the test, students will immediately see their score. They also have the ability to review their answers and go through mistakes they made
      </p>

    </div>
  </div>
  <framed-image src="/img/exam/score.jpg" alt="Score view" size="medium">
    Score view
  </framed-image>

  <framed-image src="/img/exam/review.png" alt="Exam review" size="medium">
    Review
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
