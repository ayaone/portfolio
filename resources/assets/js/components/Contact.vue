<template>
<div class="contact-wrap">
    <h2 class="contact-header">Got a request?</h2>
    <form class="contact-form" action="#">
    
      <input
        class="input-name"
        name="name"
        id="name"
        type="text"
        placeholder="Name"
        v-model="message.name"
        required>

      <textarea
        class="input-text"
        name="text"
        id="text"
        placeholder="How can I help you?"
        rows="7"
        v-model="message.text"
        required>
      </textarea>

      <input
        class="input-email"
        name="email"
        id="email"
        type="email"
        placeholder="Email"
        v-model="message.email"
        required>
      
      <button class="input-submit" v-text="submitBtn" @click.stop="submit"></button>
  </form>
</div>
</template>

<script>
export default {
    data(){
        return {
            message: {
                name: '',
                text: '',
                email: '',
            },
            submitBtn: 'SUBMIT'
        }
    },
    methods: {
        submit(){
            axios
                .post('/contact', this.message)
                .then(()=>{
                    // display a sent confirmation message  
                })
                .catch(errors => {
                    console.log(errors.response.data.errors);
                });
        }
    }

 }
</script>
