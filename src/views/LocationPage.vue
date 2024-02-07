<template>
  <div class="">
    <Navbar />
  </div>
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container">
        <h2 class="">Contact Us</h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                width="600"
                height="300"
                frameborder="0"
                style="border: 0; width: 100%; height: 100%"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex">
              <button>SEND</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
  <div class="footer_container">
    <Footer />
  </div>
</template>

<script>
import Navbar from "@/components/Navbar.vue";
import Footer from "@/components/Footer.vue";
export default {
  name: "LocationPage",
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
body {
  font-family: "poppins", sans-serif;
  color: #101010;
  background-color: #ffffff;
}
/* info section */
.info_section {
  position: relative;
  background-color: #2d2d2d;
  color: var(--text_white);
  margin: 0 45px 45px;
}

.info_section .social_container {
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  margin-top: 25px;
  margin-bottom: 30px;
}

.info_section .social_container .social_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.info_section .social_container .social_box a {
  margin: 0 10px;
  color: #ffffff;
  font-size: 24px;
}

.info_section .info_form form input {
  outline: none;
  width: 100%;
  padding: 7px 10px;
}

.info_section .info_form form button {
  padding: 8px 35px;
  outline: none;
  border: none;
  color: #ffffff;
  background: #f89cab;
  margin-top: 15px;
  text-transform: uppercase;
}

.info_section .row > div {
  margin-top: 25px;
}

.info_section a {
  text-transform: none;
}

.info_section h6 {
  font-weight: bold;
  text-transform: uppercase;
  font-size: 18px;
  margin-bottom: 25px;
}

.info_section p {
  color: #cbc9c9;
}

.info_section .info_link-box a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin: 15px 0;
}

.info_section .info_link-box a:hover {
  color: #ffffff;
}

.info_section .info_link-box a i {
  color: #ffffff;
  margin-right: 5px;
  font-size: 18px;
}

.info_section .info_link-box a span {
  color: #cbc9c9;
}

.info_section .info_link-box a:hover span {
  color: #ffffff;
}

.contact_section {
  position: relative;
  margin-top: 50px;
}

.contact_section .container-bg {
  -webkit-box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.1);
}

.contact_section .heading_container {
  margin-bottom: 30px;
}

.contact_section .row {
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
}

.contact_section form {
  padding-right: 35px;
  padding: 45px 20px;
}

.contact_section input {
  width: 100%;
  border: 1px solid #919191;
  height: 50px;
  margin-bottom: 25px;
  padding-left: 25px;
  background-color: transparent;
  outline: none;
  color: #101010;
}

.contact_section input::-webkit-input-placeholder {
  color: #131313;
}

.contact_section input:-ms-input-placeholder {
  color: #131313;
}

.contact_section input::-ms-input-placeholder {
  color: #131313;
}

.contact_section input::placeholder {
  color: #131313;
}

.contact_section input.message-box {
  height: 120px;
}

.contact_section button {
  display: inline-block;
  padding: 12px 45px;
  background-color: var(--secondary);
  color: #ffffff;
  border: 1px solid var(--secondary);
  border-radius: 0;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  display: block;
  color: #fff;
  margin: 35px auto 0 auto;
}

.contact_section button:hover {
  background-color: transparent;
  color: var(--secondary);
}

.contact_section .map_container {
  height: 100%;
  min-height: 375px;
}

.contact_section .map_container .map-responsive {
  height: 100%;
}
.footer_container {
  margin-top: 50px;
  margin-bottom: 40px;
}
</style>
