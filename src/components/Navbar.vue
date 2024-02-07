<template>
  <!-- <h1>Nav Bar</h1> -->
  <div class="navbar_home">
    <div class="navbar_logo">
      <img src="../assets/image/logo_big.png" alt="" />
    </div>
    <div class="navbar_list">
      <ul>
        <RouterLink to="/" style="text-decoration: none"
          ><li>Home</li></RouterLink
        >
        <RouterLink to="/Menu" style="text-decoration: none"
          ><li>Menu</li></RouterLink
        >
        <RouterLink to="/Hot" style="text-decoration: none"
          ><li>Product</li></RouterLink
        >
        <RouterLink to="/Location" style="text-decoration: none"
          ><li>Location</li></RouterLink
        >
      </ul>
    </div>
    <div class="navbar_account">
      <ul>
        <li><i class="uil uil-search-alt"></i></li>
        <li><i class="uil uil-shopping-cart"></i></li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">Admin</button>
            <div
              class="dropdown-content"
              id="dropdown"
              @change="handleSelectionChange">
              <div class="account"><a href="#">Account</a></div>
              <div class="login"><a href="#">Log In</a></div>
              <div class="logout"><a href="#">Log Out</a></div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "Navbar",
};
</script>

<style>
:root {
  --primary: #f9c06a;
  --secondary: #3a5553;
  --thirdary: #405c5a;
  --quinary: #e2edec;
  --text_white: #ffffff;
  --text_gray: #8e9090;
}
h1 {
  font-size: 100px;
}
.navbar_home {
  width: 100%;
  height: 90px;
  padding: 30px;
  background-color: var(--secondary);
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.navbar_home .navbar_logo img {
  width: 110px;
}
.navbar_home .navbar_list ul {
  font-size: 22px;
  display: flex;
  gap: 60px;
  justify-content: center;
  align-items: center;
  list-style: none;
}
.navbar_home .navbar_list ul li {
  color: var(--text_white);
  text-decoration: none;
  padding-top: 5px;
}
.navbar_home .navbar_list ul li:hover {
  color: var(--primary);
  text-decoration: underline var(--primary);
}
.navbar_home .navbar_account ul {
  color: var(--text_white);
  font-size: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 30px;
  list-style: none;
}
.navbar_home .navbar_account ul .uil {
  font-size: 32px;
  color: var(--primary);
}
.dropbtn {
  background-color: var(--secondary);
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: var(--text_white);
  font-size: 16px;
  font-weight: 600;
  min-width: 120px;
  border-radius: 5px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: var(--secondary);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content .account a:hover {
  background-color: #e2edec;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.dropdown-content .login a:hover {
  background-color: #e2edec;
}
.dropdown-content .logout a:hover {
  background-color: #e2edec;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}

/* .dropdown-content a:hover {background-color: #ddd;} */

.dropdown:hover .dropdown-content {
  display: block;
}

/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */

.header-bottom-right-icon {
  display: none;
  /* background-color: yellow; */
}

/* Small (sm) */
@media only screen and (max-width: 768px) {
  .navbar_home {
    flex-direction: column;
    align-items: center;
  }

  .navbar_home .navbar_list ul {
    /* flex-direction: column;
    text-align: center;
    gap: 20px; */
    display: none;
  }

  .navbar_home .navbar_account ul {
    /* flex-direction: column;
    text-align: center;
    gap: 20px; */
    display: none;
  }
}

/* Medium (md) */
@media (min-width: 768px) and (max-width: 991.98px) {
  .navbar_home {
    flex-direction: row;
  }
  /* .navbar_logo {
    display: none;
  } */
  .navbar_home .navbar_list {
    flex-direction: row;
    /* margin-left: 160px; */
  }

  .navbar_home .navbar_account ul {
    display: none;
  }
}

/* Large (lg) */
@media (min-width: 992px) and (max-width: 1199.98px) {
  /* Styles for lg screens go here */
}

/* Extra Large (xl) */
@media (min-width: 1200px) {
  /* Styles for xl screens go here */
}
</style>
