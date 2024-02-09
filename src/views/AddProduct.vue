<template>
  <form @submit.prevent="createProduct">
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
      <label for="image">Image:</label>
      <input
        type="file"
        id="image"
        @change="handleImageChange"
        accept="image/*"
        required
      />
    </div>
    <div>
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
    <button type="submit">Submit</button>
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
