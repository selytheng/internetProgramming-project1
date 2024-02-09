<template>
  <div>
    <h2>Edit Category</h2>
    <form @submit.prevent="updateCategory">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="category.name" required />
      </div>
      <div>
        <label for="description">Description:</label>
        <textarea id="description" v-model="category.description"></textarea>
      </div>
      <button type="submit">Update</button>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      category: {
        id: null,
        name: "",
        description: "",
      },
    };
  },
  mounted() {
    // Fetch category details when component is mounted
    const categoryId = this.$route.params.id;
    this.fetchCategory(categoryId);
  },
  methods: {
    fetchCategory(id) {
      axios
        .get(`http://localhost:8000/api/v1/category/${id}`, {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        })
        .then((response) => {
          this.category = response.data;
        })
        .catch((error) => {
          console.error("Error fetching category:", error);
        });
    },
    updateCategory() {
      const categoryId = this.category.id;
      axios
        .patch(
          `http://localhost:8000/api/v1/category/${categoryId}`,
          this.category,
          {
            headers: {
              Authorization: `Bearer ${localStorage.getItem("token")}`,
            },
          }
        )
        .then(() => {
          // Redirect to category list page after successful update
          this.$router.push("/");
        })
        .catch((error) => {
          console.error("Error updating category:", error);
        });
    },
  },
};
</script>

<style scoped>
/* Add styling if needed */
</style>
