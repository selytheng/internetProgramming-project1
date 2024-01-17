<template>
  <div class="container_promotion">
    <div class="arrow_left"><i class="uil uil-angle-left"></i></div>
    <div class="arrow_center">
      <div class="Title">
        <div class="super_title">Order Your Favorite Coffee Now❤️❤️❤️</div>
        <div class="sub_title">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the Lorem Ipsum is simply dummy text of
          the printing and typesetting industry. Lorem Ipsum has been the Lorem
          Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the Lorem Ipsum is simply dummy text of the
          printing and typesetting industry. Lorem Ipsum has been the
        </div>
      </div>
      <div class="Image">
        <img src="../assets/image/coffee/hot5.png" alt="" />
      </div>
    </div>
    <div class="arrow_right"><i class="uil uil-angle-right"></i></div>
  </div>
</template>

<script>
export default {
  name: "Promotion",
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
.container_promotion {
  height: 500px;
  border: 2px solid var(--secondary);
  background-color: var(--quinary);
  border-radius: 20px;
  margin-top: 40px;
  display: flex;
  justify-content: space-between;
  align-content: center;
}
.container_promotion .uil {
  font-size: 80px;
}
.container_promotion .arrow_left {
  padding-top: 200px;
}
.container_promotion .arrow_right {
  padding-top: 200px;
}
.container_promotion .arrow_center {
  display: flex;
  justify-content: center;
  align-items: start;
  gap: 150px;
}
.container_promotion .arrow_center .Title {
  margin-top: 60px;
  margin-right: 30px;
}
.container_promotion .arrow_center .Title .super_title {
  font-family: "Poppins", sans-serif;
  width: 550px;
  font-weight: 600;
  font-size: 50px;
  color: var(--secondary);
}
.container_promotion .arrow_center .Title .sub_title {
  font-family: "Poppins", sans-serif;
  width: 450px;
  font-weight: 400;
  font-size: 16px;
  color: var(--text_gray);
}
.container_promotion .arrow_center .Image {
  padding-top: 60px;
}
.container_promotion .arrow_center .Image img {
  width: 350px;
}
</style>
