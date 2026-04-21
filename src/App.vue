<script setup>
import { RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
</script>

<template>
  <div class="app-container">
    <!-- Responsive Navigation -->
    <Navbar />

    <main class="main-content">
      <RouterView />
    </main>
  </div>
</template>

<style scoped>
.app-container {
  min-height: 100vh;
  position: relative;
}

.main-content {
  padding-top: 80px; /* offset for fixed header */
}

</style>
