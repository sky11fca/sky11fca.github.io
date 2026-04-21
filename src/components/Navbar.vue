<script setup>
import { ref } from 'vue'

const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}

// Close menu when a link is clicked (good UX for SPAs)
const closeMenu = () => {
  if (isMenuOpen.value) {
    isMenuOpen.value = false
  }
}
</script>

<template>
  <header class="navbar">
    <div class="navbar-container">
      <router-link to="/" class="brand">Mr. Bogdanovich</router-link>

      <nav :class="['nav-links', { 'is-open': isMenuOpen }]">
        <router-link to="/projects" class="nav-link" @click="closeMenu">Projects</router-link>
        <router-link to="/fun" class="nav-link" @click="closeMenu">Fun Zone</router-link>
        <router-link to="/achievements" class="nav-link" @click="closeMenu">Achievements</router-link>
        <router-link to="/about" class="nav-link" @click="closeMenu">About</router-link>
      </nav>

      <button @click="toggleMenu" class="hamburger" aria-label="Toggle menu" :aria-expanded="isMenuOpen.toString()">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>
    </div>
  </header>
</template>

<style scoped>
.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  left: 0;
  right: 0;
  z-index: 100;
  background-color: color-mix(in srgb, var(--surface) 80%, transparent);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border-top: 2px solid var(--primary);
}

.navbar-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2.5rem;
  max-width: 1200px;
  margin: 0 auto;
}

.brand {
  font-size: 1.25rem;
  font-weight: 700;
  text-decoration: none;
  color: var(--on-surface);
}

.nav-links {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.nav-link {
  text-decoration: none;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 600;
  color: var(--on-surface-variant);
  transition: color 0.2s;
}

.nav-link:hover,
.router-link-active {
  color: var(--primary);
}

.hamburger {
  display: none;
  background: transparent;
  border: none;
  cursor: pointer;
  padding: 0;
  z-index: 1001; /* Above the nav-links overlay */
}

.hamburger-line {
  display: block;
  width: 25px;
  height: 2px;
  background-color: var(--on-surface);
  margin: 6px 0;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

/* Mobile styles */
@media (max-width: 768px) {
  .nav-links {
    position: fixed;
    top: 0;
    right: 0;
    width: 80%;
    max-width: 300px;
    height: 100vh;
    background-color: var(--surface);
    flex-direction: column;
    justify-content: center;
    gap: 2.5rem;
    transform: translateX(100%);
    transition: transform 0.3s ease-in-out;
    box-shadow: -2px 0 5px rgba(0,0,0,0.1);
  }

  .nav-links.is-open {
    transform: translateX(0);
  }

  .hamburger {
    display: block;
  }
}
</style>