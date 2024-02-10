<template>
    <form @submit.prevent="createProduct" class="product-form">
      <h2 style="text-align: center;">Add New Product</h2>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="product.name" required />
      </div>
      <div class="form-group">
        <label for="size">Size:</label>
        <input type="text" id="size" v-model="product.size" required />
      </div>
      <div class="form-group">
        <label for="pricing">Pricing:</label>
        <input type="number" id="pricing" v-model="product.pricing" required />
      </div>
      <div class="form-group">
        <label for="image">Image:</label>
        <input
          type="file"
          id="image"
          @change="handleImageChange"
          accept="image/*"
          required
        />
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <select id="category" v-model="product.category_id" required>
          <option
            v-for="category in categories"
            :key="category.id"
            :value="category.id"
          >
            {{ category.name }}
          </option>
        </select>
      </div>
      <div class="button-container">
        <button type="submit" class="submit-button">Submit</button>
      </div>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        product: {
          name: "",
          size: "",
          pricing: "",
          image: null,
          category_id: "",
        },
        categories: [],
      };
    },
    methods: {
      async createProduct() {
        const formData = new FormData();
        formData.append("name", this.product.name);
        formData.append("size", this.product.size);
        formData.append("pricing", this.product.pricing);
        formData.append("image", this.product.image);
        formData.append("category_id", this.product.category_id);
  
        try {
          const response = await fetch(
            "http://localhost:8000/api/v1/product/",
            {
              method: "POST",
              body: formData,
            },
            {
              headers: {
                Authorization: `Bearer ${localStorage.getItem("token")}`,
              },
            }
          );
          if (response.ok) {
            alert("Product created successfully");
            // Reset form or redirect to another page
          } else {
            const data = await response.json();
            alert(data.message || "Failed to create product");
          }
        } catch (error) {
          console.error("Error:", error);
          alert("Failed to create product");
        }
      },
      handleImageChange(event) {
        this.product.image = event.target.files[0];
      },
      async fetchCategories() {
        try {
          const response = await fetch("http://localhost:8000/api/v1/category/", {
            headers: {
              Authorization: `Bearer ${localStorage.getItem("token")}`,
            },
          });
          if (response.ok) {
            this.categories = await response.json();
          } else {
            console.error("Failed to fetch categories");
          }
        } catch (error) {
          console.error("Error:", error);
        }
      },
    },
    mounted() {
      this.fetchCategories();
    },
  };
  </script>
  
  <style scoped>
    .product-form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      margin-top: 5%;
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
    select {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      margin-top: 5px;
    }
  
    input[type="file"] {
      margin-top: 5px;
    }
  
    .button-container {
      text-align: center;
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
      background-color: #2d792f;
    }
  </style>