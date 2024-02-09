<template>
  <div class="container_hotview">
    <Navbar />
    <div class="btn_three">
      <!-- Button -->
      <Button
        v-for="category in categories"
        :key="category.Button"
        :btn_bg="category.btn_bg"
        :btn_text="category.name"
        :RouterLink="category.RouterLink"
        style="background-color: #3a5553"
      />
    </div>

    <div class="text_icon">
      <span><a href="#" style="color: var(--text_gray)">Home</a></span>
      <i class="uil uil-angle-left"></i>
      <span><a href="#" style="color: var(--text_gray)">Product</a></span>
      <i class="uil uil-angle-left"></i>
      <span><a href="#" style="font-weight: 600">Hot</a></span>
    </div>
    <div class="promotion_hot">
      <!-- Promotion -->
      <Promotion />
    </div>
    <div class="popular">
      <i class="uil uil-fire"></i>
      <span>Popular</span>
    </div>
    <!-- Card -->
    <div class="card_hot">
      <Card
        v-for="product in products.data"
        :key="product.Card"
        :bg_card="product.bg_card_hot"
        :img_card="`http://127.0.0.1:8000/${product.image}`"
        :super_text="product.name"
        :productId="product.id"
      />
    </div>
    <div class="">
      <Footer />
    </div>
  </div>
</template>

<script>
import { useProductStore } from "../stores/ProductStores";
import { mapState } from "pinia";
import Navbar from "@/components/Navbar.vue";
import Button from "@/components/Button.vue";
import Promotion from "@/components/Promotion.vue";
import Card from "@/components/Card.vue";
import Footer from "@/components/Footer.vue";
import fetchData from "@/services/fetchData";
export default {
  name: "Hotview",
  components: {
    Navbar,
    Button,
    Promotion,
    Card,
    Footer,
  },

  computed: {
    ...mapState(useProductStore, ["Button"]),
    ...mapState(useProductStore, ["Card"]),
    // ...mapState(useProductStore, ["Promotions"]),
    // ...mapState(useProductStore, ["Product"]),
  },
  data() {
    return {
      products: [],
      categories: [],
    };
  },
  mounted() {
    this.getProducts(), this.getCategories();
  },
  methods: {
    async getProducts() {
      try {
        this.products = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/product",
          null
        );
      } catch (error) {
        console.log("error");
      }
    },
    async getCategories() {
      try {
        this.categories = await fetchData(
          "GET",
          "http://127.0.0.1:8000/api/v1/category",
          null
        );
      } catch (error) {
        console.log("error");
      }
    },
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,200&family=Quicksand:wght@400;600;700&family=Roboto:ital,wght@0,500;0,700;1,300&display=swap");
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
:root {
  --primary: #f9c06a;
  --secondary: #3a5553;
  --thirdary: #405c5a;
  --quinary: #e2edec;
  --text_white: #ffffff;
  --text_gray: #8e9090;
}
.btn_three {
  margin-top: 30px;
  margin-left: 30px;
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 20px;
}

.text_icon {
  margin-top: 20px;
  margin-left: 30px;
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 10px;
}
.text_icon a {
  text-decoration: none;
  font-size: 25px;
  color: var(--secondary);
}
.text_icon .uil {
  font-size: 30px;
}
.promotion_hot {
  padding-left: 30px;
  padding-right: 30px;
}
.popular {
  padding: 30px;
  display: flex;
  align-items: center;
  gap: 20px;
}
.popular .uil {
  font-size: 30px;
  color: var(--primary);
}
.popular span {
  font-size: 23px;
  color: var(--secondary);
  font-family: "Poppins", sans-serif;
  font-weight: 600;
}
.card_hot {
  padding: 10px 40px 20px 40px;
  display: flex;
  justify-content: space-between;
  display: grid;
  grid-template-columns: auto auto auto auto;
}
.drink_month {
  padding: 0px 0px 30px 40px;
  font-size: 23px;
  color: var(--secondary);
  font-family: "Poppins", sans-serif;
  font-weight: 600;
}
</style>
