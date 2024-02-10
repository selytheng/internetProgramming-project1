<template>
    <div class="product-table-container">
      <table class="product-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Size</th>
            <th>Pricing</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in products" :key="product.id">
            <td>{{ product.name }}</td>
            <td>{{ product.size }}</td>
            <td>{{ product.pricing }}</td>
            <td>{{ product.category.name }}</td>
            <td>
              <button @click="editProduct(product)" class="action-button">Edit</button>
              <button @click="deleteProduct(product)" class="action-button">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
      <router-link to="/addproduct" class="add-category-button">Add Product</router-link>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        products: [],
      };
    },
    methods: {
      async fetchProducts() {
        try {
          const response = await fetch("http://localhost:8000/api/v1/product/"); // Adjust the API endpoint based on your routes
          if (!response.ok) {
            throw new Error("Failed to fetch products");
          }
          this.products = await response.json();
        } catch (error) {
          console.error(error);
          // Handle error, such as displaying an error message to the user
        }
      },
      editProduct(product) {
        this.$router.push({ name: "edit-product", params: { id: product.id } });
      },
      async deleteProduct(product) {
        try {
          const response = await fetch(
            `http://localhost:8000/api/v1/product/${product.id}`,
            {
              method: "DELETE",
            }
          );
          if (!response.ok) {
            throw new Error("Failed to delete product");
          }
          // Remove the deleted product from the products array
          this.products = this.products.filter((p) => p.id !== product.id);
        } catch (error) {
          console.error(error);
          // Handle error, such as displaying an error message to the user
        }
      },
    },
    mounted() {
      this.fetchProducts();
    },
  };
  </script>
  
  
  <style scoped>
    .product-table-container {
      max-width: 800px;
      margin: 20px auto;
    }
  
    .product-table {
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