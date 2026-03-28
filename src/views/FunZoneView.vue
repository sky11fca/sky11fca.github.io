<script setup>
</script>

<template>
  <div>
    <!-- Fun Zone -->
    <!-- TODO! Add the fun projects here. Rewrite like in the project page -->
    <section class="content-section" style="min-height: 80vh; padding-top: 8rem;">
       <h3 class="display-md mb-10 text-on-surface text-center">Fun Zone</h3>

       <div class="glass glass-card ambient-shadow" style="margin: 0 auto;">
         <h4 class="text-on-surface mb-6 text-xl">Interactive Playground</h4>
         <p class="body-text text-on-surface-variant mb-8">
           Explore the physics of the Digital Diaphane design system. Hover over the elements to see the liquid finish and soft lifts in action.
         </p>

         <div class="flex-wrap-gap">
           <div class="input-well text-center flex-1">
              <p class="text-on-surface-variant" style="font-family: 'Inter', sans-serif;">Recessed Well Demo</p>
           </div>
           <button class="btn-secondary flex-1">Glass Orb Demo</button>
           <button class="btn-primary flex-1">Primary Orb Demo</button>
         </div>
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

.text-center { text-align: center; }
.text-xl { font-size: 1.5rem; font-weight: 600; }
.mb-6 { margin-bottom: 1.5rem; }
.mb-8 { margin-bottom: 2rem; }
.mb-10 { margin-bottom: 2.5rem; }

.body-text {
  font-size: 1.125rem;
  line-height: 1.6;
}

.glass-card {
  padding: 3rem;
  border-radius: var(--rounded-xl);
  max-width: 800px;
  /* Ghost border fallback */
  border: 1px solid color-mix(in srgb, var(--outline-variant) 15%, transparent);
}

.flex-wrap-gap {
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
}

.flex-1 {
  flex: 1;
  min-width: 200px;
}

@media (max-width: 768px) {
  .display-md { font-size: 2rem; }
}
</style>
