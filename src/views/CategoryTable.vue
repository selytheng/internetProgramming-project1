<template>
  <div>
    <table>
      <!-- Table headers -->
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Actions</th>
          <!-- New column for actions -->
        </tr>
      </thead>
      <!-- Table body to display categories -->
      <tbody>
        <tr v-for="category in categories" :key="category.id">
          <td>{{ category.name }}</td>
          <td>{{ category.description }}</td>
          <td>
            <!-- Edit button -->
            <button @click="editCategory(category.id)">Edit</button>
            <!-- Delete button -->
            <button @click="deleteCategory(category.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Button to add a new category -->
    <router-link to="/addcategory" class="add-category-btn"
      >Add Category</router-link
    >
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      categories: [], // Initialize categories array
    };
  },
  mounted() {
    this.fetchCategories();
  },
  methods: {
    fetchCategories() {
      axios
        .get("http://localhost:8000/api/v1/category", {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        })
        .then((response) => {
          this.categories = response.data;
        })
        .catch((error) => {
          console.error("Error fetching categories:", error);
        });
    },
    editCategory(id) {
      this.$router.push(`/editcategory/${id}`);
    },
    deleteCategory(id) {
      if (confirm("Are you sure you want to delete this category?")) {
        // Send delete request to API
        axios
          .delete(`http://localhost:8000/api/v1/category/${id}`, {
            headers: {
              Authorization: `Bearer ${localStorage.getItem("token")}`,
            },
          })
          .then(() => {
            // If successful, fetch categories again to update the list
            this.fetchCategories();
          })
          .catch((error) => {
            console.error("Error deleting category:", error);
          });
      }
    },
  },
};
</script>

<style scoped>
/* Add styling if needed */
.add-category-btn {
  float: right;
  margin: 10px;
}
</style>
