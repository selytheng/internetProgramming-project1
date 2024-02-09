<template>
  <div>
    <table>
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
            <button @click="editProduct(product)">Edit</button>
            <button @click="deleteProduct(product)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
    <router-link to="/addcategory" class="add-prd-btn"
      >Add Category</router-link
    >
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
/* Add styling if needed */
.add-prd-btn {
  float: right;
  margin: 10px;
}
</style>
