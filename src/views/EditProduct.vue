<template>
    <div class="update-product-form">
      <h2 style="text-align: center;">Update Product</h2>
      <form @submit.prevent="updateProduct" class="product-form">
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
          <label for="category">Category:</label>
          <input
            type="text"
            id="category"
            v-model="product.category_id"
            required
          />
          <!-- You can replace the input with a dropdown/select for categories -->
        </div>
        <button type="submit" class="submit-button">Update</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        product: {},
      };
    },
    methods: {
      updateProduct() {
        fetch(`http://localhost:8000/api/v1/product/${this.$route.params.id}`)
          .then((response) => {
            if (!response.ok) {
              throw new Error("Failed to fetch product");
            }
            return response.json();
          })
          .then((product) => {
            this.product = product;
          })
          .catch((error) => {
            console.error(error);
            // Handle error, such as displaying an error message to the user
          });
      },
      updateProduct() {
        fetch(`http://localhost:8000/api/v1/product/${this.product.id}`, {
          method: "PATCH",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(this.product),
        })
          .then((response) => {
            if (!response.ok) {
              throw new Error("Failed to update product");
            }
            // Redirect or display a success message
          })
          .catch((error) => {
            console.error(error);
            // Handle error, such as displaying an error message to the user
          });
      },
    },
    mounted() {
      this.updateProduct();
    },
  };
  </script>
  
  <style scoped>
    .update-product-form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      margin-top: 5%;
    }
  
    .product-form {
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
    select {
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