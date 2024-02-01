<template>
  <div class="container_footer">
    <div class="session_footer">
      <img src="../assets/image/logo_big.png" alt="" />
      <div class="text_location">
        <div class="super_text">OUR LOCATION</div>
        <div class="text_one">
          PO Box 86, Russian Conf. Blvd. Phnom Penh, Cambodia.
        </div>
        <div class="text_two">Customer Service +6282-2876-6862</div>
        <div class="text_three">We Are Open from Sun - Mon 10 AM - 22 PM</div>
      </div>
    </div>
    <div class="session_ones">
      <div class="media">
        <i class="uil uil-telegram-alt"></i>
        <i class="uil uil-facebook-f"></i>
        <i class="uil uil-instagram"></i>
        <i class="uil uil-twitter-alt"></i>
        <i class="uil uil-youtube"></i>
      </div>
      <div class="application">
        <div class="app_delivery">Delivery Order</div>
        <div class="app_store">
          <i class="uil uil-apple"></i>
          <div class="down">Download on the <span>App Store</span></div>
        </div>
        <div class="app_play">
          <i class="uil uil-google-play"></i>
          <div class="down">GET IT ON <span>Google Play</span></div>
        </div>
      </div>
    </div>
    <div class="session_oness">
      <div class="text_left">© 2024 MOON COFFEE, All rights reserved</div>
      <div class="text_right">Terms and Conditions &nbsp; | &nbsp; Privacy Policy</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style scoped>
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
.container_footer {
  height: 600px;
  background-color: var(--secondary);
  padding: 30px;
}
.container_footer .session_footer {
  display: flex;
  justify-content: center;
  align-items: center;
}
.container_footer .session_footer img {
  width: 230px;
}
.container_footer .session_footer .text_location {
  width: 900px;
  margin-left: 250px;
  margin-top: 30px;
}
.container_footer .session_footer .text_location .super_text {
  font-family: "Poppins", sans-serif;
  color: var(--text_white);
  font-size: 50px;
  margin-left: 50px;
  margin-bottom: 20px;
}
.container_footer .session_footer .text_location .text_one {
  color: var(--text_white);
  font-weight: 200;
  font-size: 20px;
  padding-bottom: 10px;
}
.container_footer .session_footer .text_location .text_two {
  color: var(--text_white);
  font-weight: 200;
  font-size: 20px;
  padding-left: 80px;
  padding-bottom: 10px;
}
.container_footer .session_footer .text_location .text_three {
  color: var(--text_white);
  font-weight: 200;
  font-size: 20px;
  padding-left: 40px;
  padding-bottom: 10px;
}
.container_footer .session_ones {
  margin: auto;
  width: 1400px;
  height: 120px;
  margin-top: 60px;
  border-top: 2px solid var(--text_white);
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.container_footer .session_ones .media {
  color: var(--text_white);
  display: flex;
  gap: 20px;
  font-size: 30px;
}
.container_footer .session_ones .application {
  width: 500px;
  display: flex;
  justify-content: end;
  align-items: center;
  gap: 20px;
}
.container_footer .session_ones .application .app_delivery {
  color: var(--text_white);
}
.container_footer .session_ones .application .app_store {
  width: 130px;
  height: 45px;
  border-radius: 5px;
  background-color: black;
  border: 1px solid var(--text_white);

  color: var(--text_white);
  display: flex;
  justify-content: center;
  align-items: center;
  padding-left: 5px;
  gap: 5px;
}
.container_footer .session_ones .application .app_store .uil {
  font-size: 28px;
}
.container_footer .session_ones .application .app_store .down {
  font-size: 1px;
}
.container_footer .session_ones .application .app_store .down span {
  font-size: 14px;
}
.container_footer .session_ones .application .app_play {
  width: 130px;
  height: 45px;
  border-radius: 5px;
  background-color: black;
  border: 1px solid var(--text_white);
  color: var(--text_white);
  display: flex;
  justify-content: center;
  align-items: center;
  padding-left: 5px;
  gap: 5px;
}
.container_footer .session_ones .application .app_play .uil {
  font-size: 23px;
}
.container_footer .session_ones .application .app_play .down {
  font-size: 1px;
}
.container_footer .session_ones .application .app_play .down span {
  font-size: 14px;
}
.container_footer .session_oness {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 1400px;
  margin: auto;
  margin-top: 30px;
}
.container_footer .session_oness .text_left{
    color: var(--primary);
    font-size: 20px;
}
.container_footer .session_oness .text_right{
    color: var(--primary);
    font-size: 20px;
}
</style>
