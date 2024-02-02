<template>
  <div class="container_hotview">
    <Navbar />
    <div class="btn_three">
      <!-- Button -->
      <Button
        v-for="i in Button"
        :key="i.Button"
        :btn_bg="i.btn_bg"
        :btn_text="i.btn_text"
        :RouterLink="i.RouterLink" />
    </div>
    <div class="text_icon">
      <span><a href="#" style="color: var(--text_gray)">Home</a></span>
      <i class="uil uil-angle-left"></i>
      <span><a href="#" style="color: var(--text_gray)">Product</a></span>
      <i class="uil uil-angle-left"></i>
      <span><a href="#" style="font-weight: 600">Ice</a></span>
    </div>
    <div class="promotion_ice">
      <!-- Promotion -->
      <Promotion />
    </div>
    <div class="popular">
      <i class="uil uil-fire"></i>
      <span>Popular</span>
    </div>
    <div class="card_ice">
      <CardIce
        v-for="i in CardIce"
        :key="i.CardIce"
        :bg_card="i.bg_card_ice"
        :img_card="i.img_card_ice"
        :super_text="i.super_text_ice"
        :sub_text="i.sub_text_ice"
        :dollar_card="i.dollar_card_ice" />
    </div>
    <div class="drink_month">
      <span>Drink of the month</span>
    </div>
    <div class="card_ice">
      <CardIce
        v-for="i in CardIce"
        :key="i.CardIce"
        :bg_card="i.bg_card_ice"
        :img_card="i.img_card_ice"
        :super_text="i.super_text_ice"
        :sub_text="i.sub_text_ice"
        :dollar_card="i.dollar_card_ice" />
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
// import Card from "@/components/Card.vue";
import CardIce from "@/components/CardIce.vue";
import Footer from "@/components/Footer.vue";
export default {
  name: "Iceview",
  components: {
    Navbar,
    Button,
    Promotion,
    Footer,
    CardIce,
  },

  computed: {
    ...mapState(useProductStore, ["Button"]),
    // ...mapState(useProductStore, ["Card"]),
    ...mapState(useProductStore, ["CardIce"]),
    // ...mapState(useProductStore, ["Promotions"]),
    // ...mapState(useProductStore, ["Product"]),
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
.promotion_ice {
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
.card_ice {
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
