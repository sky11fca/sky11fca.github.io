<script setup>
</script>

<template>
  <div>
    <!-- Landing Hero Section -->
    <section class="hero-section">
      <div class="glass glass-card ambient-shadow overlap-container">
        <h2 class="display-lg text-on-surface">Abandon hope all ye who shalt enter</h2>
        <p style="text-align: center">!!! THIS WEBSITE IS UNDER CONSTRUCTION !!!</p>
        <p class="body-text text-on-surface-variant mt-6">
          Hello! <br>
          You must be confused, so here is a short description about what to expect from this website <br>
          Here is where I display details about anything and everything. <br>
          Be careful as you may find something you wish to never see <br> <br>
          Have fun :>
        </p>
        <div class="action-group mt-10">
          <button class="btn-primary">My Projects</button>
          <button class="btn-secondary">About Me-Myself-and-I</button>
        </div>
      </div>
    </section>

<!--    &lt;!&ndash; Contact Form Example &ndash;&gt;
    <section class="content-section surface-container-low">
      <div class="glass glass-card ambient-shadow contact-card">
        <h3 class="display-md mb-6 text-on-surface">Get in Touch</h3>
        <form class="contact-form">
          <div class="form-group">
            <label class="label-md text-primary">Name</label>
            <input type="text" class="input-well" placeholder="Jane Doe" />
          </div>
          <div class="form-group mt-6">
            <label class="label-md text-primary">Message</label>
            <textarea class="input-well" rows="4" placeholder="Hello..."></textarea>
          </div>
          <button type="submit" class="btn-primary mt-8">Send Message</button>
        </form>
      </div>
    </section>-->
  </div>
</template>

<style scoped>
/* Sections */
.hero-section {
  min-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 4rem 2.5rem;
  /* Intentional Asymmetry: background subtle shift */
  background: radial-gradient(circle at top left, var(--surface-container-low) 0%, var(--surface) 70%);
}

.content-section {
  padding: 6rem 2.5rem;
}

/* Cards & Overlaps */
.glass-card {
  padding: 3rem;
  border-radius: var(--rounded-xl);
  max-width: 800px;
  /* Ghost border fallback */
  border: 1px solid color-mix(in srgb, var(--outline-variant) 15%, transparent);
}

.overlap-container {
  margin-top: -2rem; /* Intentional bleed over section boundaries */
  position: relative;
  z-index: 10;
}

.display-lg {
  font-size: 3.5rem;
  line-height: 1.1;
  color: var(--on-surface);
}

.display-md {
  font-size: 2.5rem;
  line-height: 1.2;
  color: var(--on-surface);
}

.body-text {
  font-size: 1.125rem;
  max-width: 600px;
  color: var(--on-surface-variant);
}

.mt-6 { margin-top: 1.5rem; }
.mt-8 { margin-top: 2rem; }
.mt-10 { margin-top: 2.5rem; }
.mb-6 { margin-bottom: 1.5rem; }

.action-group {
  display: flex;
  gap: 1.5rem;
}

/* Forms */
.contact-card {
  margin: 0 auto;
  max-width: 600px;
}

.label-md {
  display: block;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 600;
  margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
  .display-lg { font-size: 2.5rem; }
  .display-md { font-size: 2rem; }
  .action-group { flex-direction: column; }
}
</style>
