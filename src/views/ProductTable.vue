<template>
  <div>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Size</th>
          <th>Pricing</th>
          <th>Category</th>
          <th>Size</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="product in products" :key="product.id">
          <td>{{ product.name }}</td>
          <td>{{ product.size }}</td>
          <td>{{ product.pricing }}</td>
          <td>{{ product.category_id }}</td>
          <td>{{ product.size }}</td>
          <td>
            <button @click="editProduct(product.id)">Edit</button>
            <button @click="deleteProduct(product.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
    <router-link to="/addproduct" class="add-prd-btn">Add product</router-link>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      products: [],
    };
  },
  methods: {
    fetchProducts() {
      axios
        .get("http://localhost:8000/api/v1/product/", {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        })
        .then((response) => {
          this.products = response.data.data;
        })
        .catch((error) => {
          console.error("Error fetching product:", error);
        });
    },
    editProduct(id) {
      this.$router.push(`/editproduct/${id}`);
    },
    deleteProduct(id) {
      if (confirm("Are you sure you want to delete this category?")) {
        // Send delete request to API
        axios
          .delete(`http://localhost:8000/api/v1/product/${id}`, {
            headers: {
              Authorization: `Bearer ${localStorage.getItem("token")}`,
            },
          })
          .then(() => {
            // If successful, fetch categories again to update the list
            this.fetchProducts();
          })
          .catch((error) => {
            console.error("Error deleting product:", error);
          });
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
