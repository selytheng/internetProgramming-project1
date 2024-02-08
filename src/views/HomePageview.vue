<template>
  <div class="container_homepage">
    <div>
      <Navbar />
    </div>
    <!-- Seesion 1 -->
    <div class="session_one">
      <div class="Big_title">Fresh Coffee In The Morning</div>
      <button type="button" class="btn-lang">
        <RouterLink to="/signin" style="text-decoration: none; color: white"
          >ORDER NOW</RouterLink
        >
      </button>
    </div>
    <!-- Seesion 2 -->
    <div class="session_two">
      <div class="Feature_title">Featured Coffees</div>
      <div class="top_coffee">
        <div class="top_one">
          <div class="one_image">
            <img src="../assets/image/coffee/hot5.png" alt="" />
          </div>
          <div class="one_text">
            <div class="one_text_one">Café Latte</div>
            <div class="one_text_two">$3.99 – $5.99 [10%]</div>
            <div class="one_text_three">
              Milk Chocolate, Blueberry, Brown Sugar
            </div>
          </div>
        </div>
        <div class="top_one">
          <div class="one_image">
            <img src="../assets/image/coffee/hot5.png" alt="" />
          </div>
          <div class="one_text">
            <div class="one_text_one">Café Latte</div>
            <div class="one_text_two">$3.99 – $5.99 [10%]</div>
            <div class="one_text_three">
              Milk Chocolate, Blueberry, Brown Sugar
            </div>
          </div>
        </div>
        <div class="top_one">
          <div class="one_image">
            <img src="../assets/image/coffee/hot5.png" alt="" />
          </div>
          <div class="one_text">
            <div class="one_text_one">Café Latte</div>
            <div class="one_text_two">$3.99 – $5.99 [10%]</div>
            <div class="one_text_three">
              Milk Chocolate, Blueberry, Brown Sugar
            </div>
          </div>
        </div>
        <div class="top_one">
          <div class="one_image">
            <img src="../assets/image/coffee/hot5.png" alt="" />
          </div>
          <div class="one_text">
            <div class="one_text_one">Café Latte</div>
            <div class="one_text_two">$3.99 – $5.99 [10%]</div>
            <div class="one_text_three">
              Milk Chocolate, Blueberry, Brown Sugar
            </div>
          </div>
        </div>
        <div class="top_one">
          <div class="one_image">
            <img src="../assets/image/coffee/hot5.png" alt="" />
          </div>
          <div class="one_text">
            <div class="one_text_one">Café Latte</div>
            <div class="one_text_two">$3.99 – $5.99 [10%]</div>
            <div class="one_text_three">
              Milk Chocolate, Blueberry, Brown Sugar
            </div>
          </div>
        </div>
        <div class="top_one">
          <div class="one_image">
            <img src="../assets/image/coffee/hot5.png" alt="" />
          </div>
          <div class="one_text">
            <div class="one_text_one">Café Latte</div>
            <div class="one_text_two">$3.99 – $5.99 [10%]</div>
            <div class="one_text_three">
              Milk Chocolate, Blueberry, Brown Sugar
            </div>
          </div>
        </div>
        <div class="top_one">
          <div class="one_image">
            <img src="../assets/image/coffee/hot5.png" alt="" />
          </div>
          <div class="one_text">
            <div class="one_text_one">Café Latte</div>
            <div class="one_text_two">$3.99 – $5.99 [10%]</div>
            <div class="one_text_three">
              Milk Chocolate, Blueberry, Brown Sugar
            </div>
          </div>
        </div>
        <div class="top_one">
          <div class="one_image">
            <img src="../assets/image/coffee/hot5.png" alt="" />
          </div>
          <div class="one_text">
            <div class="one_text_one">Café Latte</div>
            <div class="one_text_two">$3.99 – $5.99 [10%]</div>
            <div class="one_text_three">
              Milk Chocolate, Blueberry, Brown Sugar
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Seesion 3 -->
    <div class="session_three">
      <div class="Big_booking">Booking Coffee - on Monday, April 24, 2023</div>
    </div>
    <!-- Seesion 4 -->
    <div class="seesion_five">
      <contact />
    </div>
    <!-- Seesion 5 -->
    <div class="seesion_four">
      <Footer />
    </div>
  </div>
</template>

<script>
import Navbar from "@/components/Navbar.vue";
import Footer from "@/components/Footer.vue";
import Contact from "@/components/Contact.vue";
export default {
  name: "HomePageview",
  components: {
    Navbar,
    Footer,
    Contact,
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
.container_homepage .session_one {
  height: 800px;
  background: url(../assets/image/background_café.png) no-repeat;
  background-size: cover;
  background-position: center;
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(10%);
}
.container_homepage .session_one .Big_title {
  font-family: "Poppins", sans-serif;
  width: 550px;
  color: var(--quinary);
  font-size: 60px;
  padding-top: 200px;
  padding-left: 60px;
}
.container_homepage .session_one .Big_title:hover {
  color: var(--primary);
}
.session_two {
  height: 1100px;
  background-color: var(--quinary);
  padding: 30px;
  padding-top: 20px;
}
.session_two .Feature_title {
  font-weight: 600;
  font-size: 45px;
  color: var(--secondary);
  font-family: "Poppins", sans-serif;
  padding-top: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.session_two .top_coffee {
  display: flex;
  justify-content: center;
  display: grid;
  grid-template-columns: auto auto auto auto;
  gap: 60px;
  padding: 20px;
}
.session_two .top_coffee .top_one {
  padding: 20px;
  width: 300px;
  height: 400px;
  border-radius: 20px;
  border: 3px solid var(--secondary);
  text-align: center;
  margin-top: 30px;
}
.session_two .top_coffee .top_one img {
  width: 200px;
}
.session_two .top_coffee .top_one .one_text {
  margin-top: 20px;
}
.session_two .top_coffee .top_one .one_text .one_text_one {
  font-size: 30px;
  font-weight: 400;
}
.session_two .top_coffee .top_one .one_text .one_text_two {
  font-size: 20px;
  color: red;
  margin-top: 8px;
}
.session_two .top_coffee .top_one .one_text .one_text_three {
  font-size: 18px;
  color: var(--text_gray);
  margin-top: 6px;
}
.session_three {
  height: 500px;
  padding: 30px;
  background-color: var(--text_white);
}
.session_three .Big_booking {
  font-size: 30px;
  font-weight: 600;
  color: var(--secondary);
  text-align: center;
}
.container_homepage .session_four {
  height: 500px;
  padding: 30px;
}
.btn-lang {
  border: none;
  height: 60px;
  width: 230px;
  border-radius: 50px;
  color: var(--text_white);
  background-color: var(--primary);
  font-size: 25px;
  margin: 70px 0px 0px 160px;
  transition: box-shadow 0.3s ease;
}
.btn-lang:hover {
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
}
.seesion_five {
  margin-top: 20px;
}
.seesion_four {
  margin-top: 70px;
  margin-bottom: 30px;
}
</style>
