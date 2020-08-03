<template>
    <div class="Contact">
        <div class="container-fluid">
            <div class="contact-container">
                <div class="row no-gutter">
                    <div class="col">
                        <h1 class="font-medium title-text">Contact</h1>
                    </div>
                </div>
                <div class="row no-gutter">
                    <div class="col">
                        <form action="https://formspree.io/meqrnglw" method="POST">
                            <label class="contact-label font-medium">To</label>
                            <p class="to font-medium">dbrogdon91@gmail.com</p>
                            <label class="contact-label font-medium">Email</label>
                            <br/>
                            <input class="contact-input" type="text" name="_replyto">
                            <br/>
                            <label class="contact-label font-medium">Message</label>
                            <textarea name="message"></textarea>
                            <br/>
                            <button class="btn btn-standard font-medium" type="submit">Send</button>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
const querystring = require("querystring");

export default {
    name: 'Contact',
    data() {
        return {
            form: {
                name: ""
            }
        }
    },
    methods: {
       onSubmit(e) {
           e.preventDefault();
           this.$axios.post(
               "https://donbrogdon.com/server/mail.php",
               querystring.stringify(this.form)
           )
       }
    }
}
</script>

<style scoped lang="scss">
    @import './src/style/globals.scss';
    @import './src/style/fonts.scss';
    @import './src/style/buttons.scss';

    .contact-container {
        text-align: center;
        background-color: white;
        width: 300px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 40px;
        padding-bottom: 22px;
        border: 2px solid map-get($colors, secondary);

        .title-text {
            color: map-get($colors, primary-dark);
        }

        p {
            border: 2px solid black;
            margin-left: 55px;
            margin-right: 55px;
            height: 32px;
            margin-bottom: 0px;
        }

        label {
            text-align: "right"
        }

        input {
            border: 2px solid black;
        }

        textarea {
            height: 200px;
            width: 500px;
            margin-left: -100px;
            border: 2px solid black;
        }
    }
</style>