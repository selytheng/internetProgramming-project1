<template>
  <div class="container_navbar">
    <Navbar />
  </div>
  <div class="menu_text">MENUS</div>
  <div class="container_menu">
    <div class="menu_left">
      <div class="menu_left_hot">Hot</div>
      <div class="">
        <div class="menu_left_hot_left"></div>
        <div class="menu_left_hot_rigth"></div>
      </div>
    </div>
    <div class="menu_rigth">
      <div class="menu_rigth_prappe">PRAPPE</div>
    </div>
  </div>
  <div class="container_footer">
    <Footer />
  </div>
</template>

<script>
import Navbar from "@/components/Navbar.vue";
import Footer from "@/components/Footer.vue";
export default {
  name: "MenuPageview",
  components: {
    Navbar,
    Footer,
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
.menu_text {
  font-size: 60px;
  font-weight: 600;
  display: flex;
  justify-content: center;
  align-items: center;
  color: var(--secondary);
  margin-top: 100px;
}
.container_menu {
  width: 100%;
  padding: 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
  margin-top: 60px;
}
/* Menu_Left */
.container_menu .menu_left {
  width: 50%;
  /* border: 2px solid var(--primary); */
  border-radius: 10px;
}
.container_menu .menu_left .menu_left_hot {
  font-size: 40px;
  font-family: "Poppins", sans-serif;
  padding: 5px;
  border-top: 2px solid var(--secondary);
  border-bottom: 2px solid var(--secondary);
}
/* Menu_Right */
.container_menu .menu_rigth {
  width: 50%;
  /* border: 2px solid var(--primary); */
  border-radius: 10px;
}
.container_menu .menu_rigth .menu_rigth_prappe {
  font-size: 40px;
  font-family: "Poppins", sans-serif;
  padding: 5px;
  border-top: 2px solid var(--secondary);
  border-bottom: 2px solid var(--secondary);
}
/* Footer */
.container_footer {
  margin-top: 60px;
  margin-bottom: 40px;
}
</style>
