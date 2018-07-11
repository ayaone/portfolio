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
    
    <button class="input-submit" :disabled='submitButton.disabled'>
      {{ submitButton.text }}
      <div class="spinner" v-show="submitButton.disabled">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
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
            this.submitButton.text = '';
            this.submitButton.disabled = true;
            axios
                .post('/contact', this.message)
                .then((resp)=>{
                    this.enableSubmit();
                    this.showConfirmation();
                    this.resetForm();
                })
                .catch(errors => {
                    this.enableSubmit();
                    this.errors = errors.response.data.errors;
                });
        },
        enableSubmit(){
            this.submitButton.disabled = false;
            this.submitButton.text ='SUBMIT';
        },
        resetForm(){
            this.message = {};
            this.reset();
        },
        showConfirmation(){
            this.$swal({
                type: 'success',
                title: 'Thank you',
                text: 'I will get back to you shortly',
                padding: '3rem',
                buttonsStyling: false,
                confirmButtonClass: ['input-submit', 'u-width-1']
            });
        
    }
    }

 }
</script>
