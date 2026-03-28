<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <div class="app-container">
    <!-- Aero-Blade Navigation -->
    <header class="aero-blade">
      <div class="nav-content">
        <h1 class="logo">Mr. Bogdanovich</h1>
        <nav class="desktop-nav">
          <RouterLink to="/" class="nav-link">Home</RouterLink>
          <RouterLink to="/projects" class="nav-link">Projects</RouterLink>
          <RouterLink to="/fun" class="nav-link">Fun Zone</RouterLink>
          <RouterLink to="/achievements" class="nav-link">Achievements</RouterLink>
          <RouterLink to="/about" class="nav-link">About</RouterLink>
        </nav>
      </div>
    </header>

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

/* The "Aero-Blade" Header */
.aero-blade {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
  background-color: color-mix(in srgb, var(--surface) 80%, transparent);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border-top: 2px solid var(--primary);
  padding: 1rem 2.5rem;
}

.nav-content {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.25rem;
  font-weight: 700;
  color: var(--on-surface);
}

.desktop-nav {
  display: flex;
  gap: 2rem;
}

.nav-link {
  color: var(--on-surface-variant);
  text-decoration: none;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 600;
  transition: color 0.2s;
}

.nav-link:hover,
.router-link-active {
  color: var(--primary);
}

.main-content {
  padding-top: 80px; /* offset for fixed header */
}

@media (max-width: 768px) {
  .desktop-nav { display: none; }
}
</style>
