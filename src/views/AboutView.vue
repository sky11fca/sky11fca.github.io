<script setup>
</script>

<template>
  <div>
    <!-- About Section -->
    <section class="content-section surface-container-low" style="min-height: 80vh; display: flex; align-items: center;">
      <div class="about-grid">
        <div class="text-content">
           <h3 class="display-md text-on-surface">About Me</h3>
           <p class="body-text mt-6 text-on-surface-variant">
             I honestly don't know what is trying to say
           </p>
           <p class="body-text mt-4 text-on-surface-variant">
             I asked the chat to make it Frutiger Aero type shit but still minimal flat design it gave me
           </p>
        </div>

<!--        This should be a photo of me-->

<!--        <div class="visual-stack glass rounded-xl ambient-shadow">
          <div class="stack-layer surface-container-highest">
             <span class="text-on-surface" style="font-weight: 600;">Layer 1: Structural Foundation</span>
             <p class="mt-4 text-on-surface-variant text-sm">Base structural plane acting as the root anchor.</p>
          </div>
          <div class="stack-layer surface-container-low mt-4">
             <span class="text-on-surface" style="font-weight: 600;">Layer 2: Soft Lift</span>
             <p class="mt-4 text-on-surface-variant text-sm">Secondary elevation using tonal shifts to mimic ambient light interactions.</p>
          </div>
        </div>-->
      </div>
    </section>
  </div>
</template>

<style scoped>
.content-section {
  padding: 6rem 2.5rem;
}

.display-md {
  font-size: 2.5rem;
  line-height: 1.2;
}

.body-text {
  font-size: 1.125rem;
  max-width: 600px;
}

.text-sm { font-size: 0.875rem; }
.mt-4 { margin-top: 1rem; }
.mt-6 { margin-top: 1.5rem; }

/* About Grid */
.about-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}

.visual-stack {
  padding: 2rem;
  border-radius: var(--rounded-xl);
  /* Tonal layering */
}

.stack-layer {
  padding: 1.5rem;
  border-radius: var(--rounded-md);
  font-family: 'Inter', sans-serif;
}

@media (max-width: 768px) {
  .display-md { font-size: 2rem; }
  .about-grid { grid-template-columns: 1fr; }
}
</style>
