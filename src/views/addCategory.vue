<template>
  <div>
    <h2>Add Category</h2>
    <form @submit.prevent="addCategory">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="category.name" required />
      </div>
      <div>
        <label for="description">Description:</label>
        <textarea id="description" v-model="category.description"></textarea>
      </div>
      <button type="submit">Add Category</button>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      category: {
        name: "",
        description: "",
      },
    };
  },
  methods: {
    addCategory() {
      axios
        .post("http://localhost:8000/api/v1/category/", this.category, {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        })
        .then((response) => {
          console.log(response.data);
          // Optionally, you can redirect or show a success message here
        })
        .catch((error) => {
          console.error(error.response.data);
          // Optionally, you can display error messages to the user here
        });
    },
  },
};
</script>

<style scoped>
/* Add your component styles here */
</style>
