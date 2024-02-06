<template>
  <div class="containers">
    <div class="image_left">
      <img src="../assets/image/background.png" alt="" />
    </div>
    <div class="container register_rigth px-5">
      <div class="signup text-center">Sign in</div>
      <div class="text mb-5 text-center">
        Welcome to
        <a href="\" class="text-decoration-none"
          ><span class="text-warning">Moon Café</span></a
        >
      </div>
      <div>
        <label for="floatingName" class="text-moon">Email or username</label>
        <div class="form-floating mb-3">
          <input
            v-model="email"
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="Email" />
          <label for="floatingInput">example@gmail.com</label>
        </div>
        <label for="floatingName" class="text-moon">Password</label>

        <div class="form-floating">
          <input
            v-model="password"
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password" />
          <label for="floatingPassword">Password</label>
        </div>
      </div>
      <div class="d-flex justify-content-start align-items-center gap-2">
        <input type="checkbox" class="mt-4 w-20" />
        <div class="mt-4">
          Forgot your password?
          <a class="text-decoration-none" href="/signup"
            ><span class="text-danger">sign up</span></a
          >
        </div>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto p-3">
        <button class="btn mt-4 btn-large" @click="login()" role="button">Sing in</button>
      </div>
      <div class="container mx-auto mt-4 d-flex justify-content-center gap-4">
        <a href="/"><img src="../assets/image/facebook.png" alt="" /></a>
        <a href="/"><img src="../assets/image/twitter.png" alt="" /></a>
        <a href="/"><img src="../assets/image/google.png" alt="" /></a>
      </div>
    </div>
  </div>
</template>

<script>
import fetchData from '@/services/fetchData';
export default {
  name: "Signinview",
  components: {},
  data(){
    return {
      email: "",
      password: "",
    }
  },
  methods: {
    async login(){
      try {
        const response = await fetchData(
        "POST",
        "http://127.0.0.1:8000/api/v1/auth/login",
        {
          "email": this.email,
          "password": this.password,
        }
      )
      localStorage.setItem("token", response.access_token);
      localStorage.setItem("name", response.user.name);
      this.$router.push({name: "homepage"})
      } catch (error) {
        console.log(error)
      }
    }
  }
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
.containers {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: space-between;
}
.containers .image_left {
  width: 50%;
  background: #3a5553;
}
.containers .image_left img {
  /* width: 450px; */
  height: 100vh;
}
.containers .register_rigth {
  width: 50%;
  background: #fff;
}
.containers .register_rigth .signup {
  font-size: 32px;
  font-weight: 600;
  color: #3a5553;
  margin-top: 50px;
}
.containers .register_rigth .text {
  font-size: 20px;
  font-weight: 400;
  color: #3a5553;
  margin: 20px 0px 0px 40px;
}
.containers .register_rigth .text-moon {
  color: #8e9090;
  margin-bottom: 10px;
}
.containers .register_rigth input {
  border: 2px solid #3a5553;
}
.containers .register_rigth .btn {
  background-color: #3a5553;
  color: white;
}
</style>
