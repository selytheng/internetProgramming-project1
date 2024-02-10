<template>
    <div class="awesome-category-form">
      <h2 style="text-align: center;">Add Category</h2>
      <form @submit.prevent="addCategory" class="category-form">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" v-model="category.name" required />
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea id="description" v-model="category.description"></textarea>
        </div>
        <button type="submit" class="submit-button">Add Category</button>
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
    .awesome-category-form {
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
      background-color: #4caf50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }
  
    button:hover {
      background-color: #45a049;
    }
  </style>