<template>
  <div>This is Home Page</div>
  <Footer />
</template>

<script>
import Footer from "@/components/Footer.vue";
export default {
  name: "Homeview",
  components: { Footer },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,200&family=Quicksand:wght@400;600;700&family=Roboto:ital,wght@0,500;0,700;1,300&display=swap");
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
body {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  /* background-color: #3a5553; */
}
h1 {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
}
</style>
