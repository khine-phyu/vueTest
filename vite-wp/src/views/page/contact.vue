<template>
  <form @submit.prevent="submitForm">
    <input v-model="name" type="text" name="your-name" placeholder="Name" />
    <input v-model="email" type="email" name="your-email" placeholder="Email" />
    <textarea
      v-model="message"
      name="your-message"
      placeholder="Message"
    ></textarea>
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
      message: "",
    };
  },
  methods: {
    submitForm() {
      axios
        .post("/wp-json/contact-form-7/v1/contact-forms/28/feedback", {
          "your-name": this.name,
          "your-email": this.email,
          "your-message": this.message,
        })
        .then((response) => {
          // Handle response
        })
        .catch((error) => {
          // Handle error
        });
    },
  },
};
</script>
