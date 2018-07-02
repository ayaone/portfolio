<template>
<div class="contact-wrap">
    <h2 class="contact-header">Got a question?</h2>
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
      
      <button class="input-submit" v-text="submitBtn" @click.prevent="submit"></button>

<div class="g-recaptcha" data-sitekey="6LfasmEUAAAAAGRioK8xzihHNcVYb1IdRaIIqtUR"></div>

  </form>
</div>
</template>

<script>
export default {
    data(){
        return {
            message: {},
            submitBtn: 'SUBMIT'
        }
    },
    methods: {
        submit(){
            axios
                .post('/contact', this.message)
                .then((resp)=>{
                    console.log('ok');
                    console.log(resp);
                    // display a sent confirmation message  
                })
                .catch(errors => {
                    console.log('error');
                    console.log(errors.response.data.errors);
                });
        }
    }

 }
</script>
