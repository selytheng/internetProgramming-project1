<template>
  <div class="container_cart">
    <h2>Your Cart</h2>
    <div v-if="cartItems.length === 0">Your cart is empty.</div>
    <div v-else>
      <div
        v-for="item in cartItems"
        :key="item.id"
        :productId="item.product_id"
        class="cart-item"
      >
        <div class="item-details">
          <img :src="item.image" alt="Product Image" />
          <div class="item-info">
            <h3>{{ item.name }}</h3>
            <p>Price: ${{ item.pricing }}</p>
            <p>Quantity: {{ item.quantity }}</p>
            <p>ProductID:{{ item.product_id }}</p>
          </div>
        </div>
        <div class="item-actions">
          <button @click="updateQuantity(item.product_id, item.quantity - 1)">
            -
          </button>
          <button @click="updateQuantity(item.product_id, item.quantity + 1)">
            +
          </button>
          <button @click="removeItem(item.product_id)">Remove</button>
        </div>
        {{ console.log(item) }}
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Cart",
  data() {
    return {
      cartItems: [],
    };
  },
  mounted() {
    this.getCartItems();
  },
  methods: {
    async getCartItems() {
      try {
        const token = localStorage.getItem("token");
        if (!token) {
          console.error("No token found. User is not authenticated.");
          return;
        }
        const response = await axios.get(
          "http://localhost:8000/api/v1/cart/user",
          {
            headers: {
              Authorization: `Bearer ${token}`,
            },
          }
        );
        this.cartItems = response.data;
      } catch (error) {
        console.error("Error fetching cart items:", error);
      }
    },

    async updateQuantity(itemId, newQuantity) {
      try {
        const token = localStorage.getItem("token");
        console.log(newQuantity);
        if (!token) {
          console.error("No token found. User is not authenticated.");
          return;
        }
        await axios.put(
          `http://localhost:8000/api/v1/cart/userup/${itemId}`,
          {
            quantity: newQuantity,
          },
          {
            headers: {
              Authorization: `Bearer ${token}`,
            },
          }
        );
        // Update the local cart items
        const index = this.cartItems.findIndex((item) => item.id === itemId);
        if (index !== -1) {
          this.cartItems[index].quantity = newQuantity;
        }
      } catch (error) {
        console.error("Error updating item quantity:", error);
      }
    },

    async removeItem(itemId) {
      try {
        await axios.delete(`http://localhost:8000/api/v1/cart/${itemId}`);
        // Remove the item from local cart items
        this.cartItems = this.cartItems.filter((item) => item.id !== itemId);
      } catch (error) {
        console.error("Error removing item from cart:", error);
      }
    },
  },
};
</script>

<style scoped>
.container_cart {
  margin: 20px;
}

.cart-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #ccc;
  padding: 10px 0;
}

.item-details img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  margin-right: 10px;
}

.item-actions button {
  margin-left: 10px;
}
</style>
