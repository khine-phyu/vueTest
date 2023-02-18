<template>
  <form @submit.prevent="submitForm">
    <div>
      <label for="name">Name</label>
      <input type="text" id="name" v-model="name" />
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" id="email" v-model="email" />
    </div>
    <div>
      <label for="subject">Subject</label>
      <input type="text" id="subject" v-model="subject" />
    </div>
    <div>
      <label for="message">Message</label>
      <textarea id="message" v-model="message"></textarea>
    </div>
    <button type="submit">Submit</button>
  </form>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      name: "",
      email: "",
      subject: "",
      message: "",
      isSubmitted: false,
    };
  },
  methods: {
    submitForm() {
      const data = {
        name: this.name,
        email: this.email,
        subject: this.subject,
        message: this.message,
        isSubmitted: true,
      };

      axios
        // http://vue1002.local/wp-json/contact-form-7/v1/contact-forms/15/feedback
        .post("http://vue1002.local/api/contact", data)
        .then((response) => {
          console.log(response);
          // handle success response
        })
        .catch((error) => {
          console.log(error);
          // handle error response
        });
    },
  },
};
</script>
