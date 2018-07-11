<template>
<div class="contact-wrap">
    <h2 class="contact-header">Got a question?</h2>
    <form class="contact-form" action="#" @submit.prevent="submit">
    
      <input
        class="input-name"
        name="name"
        id="name"
        type="text"
        placeholder="Name"
        v-model="message.name"
        autocomplete="name"
        >

      <textarea
        class="input-text"
        name="text"
        id="text"
        placeholder="How can I help you?"
        rows="7"
        v-model="message.text"
        >
      </textarea>

      <input
        class="input-email"
        name="email"
        id="email"
        type="email"
        placeholder="Email"
        v-model="message.email"
        autocomplete="email"
        required>
      


      <div id="g-recaptcha"></div>

      <button class="input-submit" v-text="submitButton.text" :disabled='submitButton.disabled'>

      </button>
      
    </form>
</div>
</template>

<script>

export default {
    mounted(){
        this.render();
    },
    data(){
        return {
            message: {},
            submitButton: {
                text: 'SUBMIT',
                disabled: false
            },
            errors: {},
            widgetId: 0
        }
    },
    methods: {
        execute(){
            window.grecaptcha.execute(this.widgetId);   
        },
        render(){
            let self = this;
            if (!(window.grecaptcha)) {
                setTimeout(()=>{
                    self.render();
                },500);
                return;
            }
            this.widgetId = window.grecaptcha.render('g-recaptcha', {
                sitekey: '6LdllWIUAAAAANqTh7QJGqtnQHKxudFbFULCCOyZ',
                callback: (response) => {
                    this.message.captcha = response;
                }
            })
        },
        reset(){
            window.grecaptcha.reset(this.widgetId);
        },
        submit(){
            this.submitButton.text = 'SUBMITTING...';
            this.submitButton.disabled = true;
            axios
                .post('/contact', this.message)
                .then((resp)=>{
                    this.enableSubmit();
                    //TODO:display a confirmation message
                })
                .catch(errors => {
                    this.enableSubmit();
                    this.errors = errors.response.data.errors;
                });
        },
        enableSubmit(){
            this.submitButton.text ='SUBMIT';
            this.submitButton.disabled = false;
        }
    }

 }
</script>
