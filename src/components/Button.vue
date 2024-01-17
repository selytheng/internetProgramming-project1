<template>
  <div class="container_button" :style="{ backgroundColor: btn_bg }">
    <div class="btn_hot">
      <a href="#">{{ btn_text }}</a>
    </div>
  </div>
</template>

<script>
export default {
  name: "Button",
  props: ["btn_text", "btn_bg"],
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
.container_button {
  width: 180px;
  height: 60px;
  border-radius: 50px;
}
.container_button .btn_hot {
  width: 180px;
  height: 60px;
  /* border-radius: 50px; */
  display: flex;
  justify-content: center;
  align-items: center;
}
.container_button .btn_hot a{
    color: var(--text_white);
    text-decoration: none;
    font-size: 23px;
}
.container_button .btn_hot a:hover{
    color: var(--primary);
}
</style>
