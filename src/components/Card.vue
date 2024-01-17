<template>
  <div class="container_card" :style="{ backgroundColor: bg_card }">
    <div class="border_card">
      <i class="uil uil-star"></i>
      <span>4.4 <sup>+</sup> </span>
    </div>
    <div class="text_card">
      <img :src="img_card" alt="" />
      <!-- <img src="../assets/image/coffee/hot1.png" alt="" /> -->
      <span>{{ super_text }}</span>
    </div>
    <div class="suptext_card">{{ sub_text }}</div>
    <div class="btn_card">
      <div class="dollar_card">{{ dollar_card }}</div>
      <div class="btn_order">Order Now</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Card",
  props: ["bg_card", "img_card", "super_text", "sub_text", "dollar_card"],
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
.container_card {
  width: 400px;
  height: 500px;
  border: 2px solid var(--secondary);
  border-radius: 30px;
  margin-bottom: 40px;
}
.container_card .border_card {
  width: 80px;
  height: 40px;
  border-radius: 50px;
  background-color: var(--secondary);
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
  margin: 20px 0px 10px 30px;
}
.container_card .border_card .uil {
  color: var(--primary);
}
.container_card .border_card span {
  color: var(--text_white);
}
.container_card .text_card {
  display: flex;
  justify-content: start;
  align-items: center;
  margin-left: 30px;
  margin-top: 40px;
}
.container_card .text_card img {
  width: 150px;
}
.container_card .text_card span {
  width: 50px;
  font-size: 30px;
  font-weight: 600;
  color: var(--secondary);
  padding-left: 30px;
}
.container_card .suptext_card {
  width: 300px;
  font-weight: 500;
  color: var(--text_gray);
  margin-left: 30px;
  font-size: 14px;
}
.container_card .btn_card {
  margin: 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.container_card .btn_card .dollar_card {
  font-weight: 600;
  font-size: 20px;
  color: var(--secondary);
}
.container_card .btn_card .btn_order {
  width: 160px;
  height: 50px;
  border-radius: 50px;
  background-color: var(--secondary);
  display: flex;
  justify-content: center;
  align-items: center;
  color: var(--text_white);
}
</style>
