<script setup>
// import axios from "axios";
import { ref, watchEffect } from "vue";
import { usePageStore } from "../../stores/page";
const pageStore = usePageStore();
pageStore.getContentPage("contact");

const pageContent = ref("");

watchEffect(() => {
  if (pageStore._page !== null) {
    pageContent.value = pageStore._page;
  }
}, [pageStore._page]);

// export default {
//   data() {
//     return {
//       name: "",
//       email: "",
//       message: "",
//     };
//   },
//   methods: {
//     submitForm() {
//       axios
//         .post("/wp-json/contact-form-7/v1/contact-forms/28/feedback", {
//           "your-name": this.name,
//           "your-email": this.email,
//           "your-subject": this.subject,
//           "your-message": this.message,
//         })
//         .then((response) => {
//           // Handle response
//         })
//         .catch((error) => {
//           // Handle error
//         });
//     },
//   },
// };
</script>

<template>
  <div>{{ pageContent }}</div>
  <div v-html="pageContent.content.rendered"></div>

  <!-- <form @submit.prevent="submitForm">
    <input v-model="name" type="text" name="your-name" placeholder="Name" />
    <input v-model="email" type="email" name="your-email" placeholder="Email" />
    <input
      v-model="subject"
      type="text"
      name="your-subject"
      placeholder="Subject"
    />
    <textarea
      v-model="message"
      name="your-message"
      placeholder="Message"
    ></textarea>
    <button type="submit">Submit</button>
  </form> -->
</template>
  