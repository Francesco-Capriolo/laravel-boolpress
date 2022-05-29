<template>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link :to="{ name: 'home' }"> Home </router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'about-us' }"> About-us </router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'contact' }"> Contact-us </router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'posts' }"> Posts </router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style lang="scss" scoped>
.nav-item a {
  text-decoration-line: none;
  color: darkgray;
  margin: 3rem;
  padding: 0.5rem;
  font-size: 20px;
  &:hover {
    background-color: darkgray;
    border-radius: 2rem;
    padding: 0.5rem;
    color: black;
  }
}
</style>
