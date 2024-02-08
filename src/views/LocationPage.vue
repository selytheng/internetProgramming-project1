<template>
    <div class="">
      <Navbar />
    </div>
    <!-- contact section -->
    <Contact />
    <!-- end contact section -->
    <div class="footer_container">
      <Footer />
    </div>
  </template>
  
  <script>
  import Navbar from "@/components/Navbar.vue";
  import Footer from "@/components/Footer.vue";
  import Contact from "@/components/Contact.vue";
  export default {
    name: "LocationPage",
    components: {
      Navbar,
      Footer,
      Contact,
    },
  };
  </script>
  