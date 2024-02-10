<template>
    <div class="category-table-container">
      <table class="category-table">
        <!-- Table headers -->
        <thead>
          <tr>
            <th class="center-text">Name</th>
            <th class="center-text">Description</th>
            <th class="center-text">Actions</th>
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
              <button @click="editCategory(category.id)" class="action-button">Edit</button>
              <!-- Delete button -->
              <button @click="deleteCategory(category.id)" class="action-button">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- Button to add a new category -->
      <router-link to="/addcategory" class="add-category-button">Add Category</router-link>
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
    .category-table-container {
      max-width: 800px;
      margin: 20px auto;
    }
  
    .category-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
  
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  
    th {
      background-color: #3498db;
      color: #fff;
    }
  
    .center-text {
      text-align: center;
    }
  
    tr:hover {
      background-color: #f5f5f5;
    }
  
    .action-button {
      background-color: #4caf50;
      color: #fff;
      padding: 8px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      margin-right: 5px;
      transition: background-color 0.3s;
    }
  
    .action-button:hover {
      background-color: #45a049;
    }
  
    .add-category-button {
      background-color: #3498db;
      color: #fff;
      padding: 10px 15px;
      text-decoration: none;
      display: inline-block;
      border-radius: 5px;
      font-size: 16px;
      margin-top: 20px;
      transition: background-color 0.3s;
    }
  
    .add-category-button:hover {
      background-color: #2980b9;
    }
  </style>