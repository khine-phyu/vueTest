<template>
  <div>
    <h1>Contact form submitted successfully!</h1>
    <p>Here's a summary of the information you provided:</p>
    <ul>
      <li>Name: {{ formData.name }}</li>
      <li>Email: {{ formData.email }}</li>
      <li>Message: {{ formData.message }}</li>
    </ul>
  </div>
</template>
  
  <script setup>
export default {
  props: {
    formData: {
      type: Object,
      required: true,
    },
  },
  mounted() {
    // Retrieve the submitted form data from your Vue.js data store or API here
    // and update the `formData` object in your component's data accordingly.
    this.formData = {
      name: "John Doe",
      email: "johndoe@example.com",
      message: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    };
  },
};
</script>
  