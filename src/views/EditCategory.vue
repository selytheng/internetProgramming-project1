<template>
    <div class="edit-category-container">
      <h2 style="text-align: center;">Update Category</h2>
      <form @submit.prevent="updateCategory" class="category-form">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" v-model="category.name" required />
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea id="description" v-model="category.description"></textarea>
        </div>
        <button type="submit" class="submit-button">Update</button>
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
    .edit-category-container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      margin-top: 10%;
    }
  
    .category-form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  
    .form-group {
      margin-bottom: 15px;
      width: 100%;
    }
  
    label {
      font-weight: bold;
      margin-bottom: 5px;
      display: block;
    }
  
    input,
    textarea {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      margin-top: 5px;
    }
  
    button {
      background-color: #3498db;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }
  
    button:hover {
      background-color: #2980b9;
    }
  </style>