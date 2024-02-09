<template>
  <div>
    <form @submit.prevent="updateProduct">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="product.name" required />
      </div>
      <div>
        <label for="size">Size:</label>
        <input type="text" id="size" v-model="product.size" required />
      </div>
      <div>
        <label for="pricing">Pricing:</label>
        <input type="number" id="pricing" v-model="product.pricing" required />
      </div>
      <div>
        <label for="category">Category:</label>
        <input
          type="text"
          id="category"
          v-model="product.category_id"
          required
        />
        <!-- You can replace the input with a dropdown/select for categories -->
      </div>
      <button type="submit">Update</button>
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
