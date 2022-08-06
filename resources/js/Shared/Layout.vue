<template>
    <nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HouseInstallment</a>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <Link class="nav-link active" :class="{'selected': $page.component == 'Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component == 'Houseinstallments'}" href="/Houseinstallments">Houseinstallment</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component == 'About'}" href="/About">About us</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component == 'Contact'}" href="/Contact">Contact</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container mt-5 p-4 rounded-4 shadow my-5" style="min-height: 800px;">
    <slot/>

    <footer class="text-center my-3 text-dark">
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<div class="hey"> Copyright &copy; 2022. All rights reserved</div>
</footer>
</section>
</template>
<script setup>
import{ Link } from'@inertiajs/inertia-vue3'
</script>
<style scoped>
section {
  background-image: url('./img/design2.jpeg'); 
  background-size: 100%;
  background-repeat: no-repeat;

  opacity: 0.7;
}
.selected {
    color: aqua;
    border-bottom: 5px solid rgba(255, 255, 255, 0.475);
}
footer{
  position: absolute;
  bottom: 0;
}
.navbar-nav {
  display: flex;
  font-size: 20px;
 
}
.container-fluid {
  background-color: gray;
}

</style>