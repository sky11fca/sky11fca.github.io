<script setup>
</script>

<template>
  <div>
    <!-- Achievements -->
    <section class="content-section" style="min-height: 80vh;">
       <h3 class="display-md mb-10 text-on-surface" style="text-align: center">Achievements</h3>

       <div class="flow-list">
         <div class="list-item">
           <div class="item-content">
             <h4 class="text-on-surface">Top 100 in Global Dev Marathon</h4>
             <p class="text-on-surface-variant mt-2">2023 - Ranked among the top out of 50,000 participants worldwide, focusing on frontend architecture and fluid animations.</p>
           </div>
         </div>

         <div class="list-item">
           <div class="item-content">
             <h4 class="text-on-surface">Best UX/UI Design Award</h4>
             <p class="text-on-surface-variant mt-2">2022 - Recognized for implementing cutting-edge design principles that prioritize depth, light refraction, and user delight.</p>
           </div>
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

.mb-10 { margin-bottom: 2.5rem; }
.mt-2 { margin-top: 0.5rem; }

/* Flow State List */
.flow-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 2rem; /* Vertical White Space (scale 8) */
}

.list-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.5rem;
  border-radius: var(--rounded-md);
  transition: background-color 0.3s, border-radius 0.3s;
  cursor: pointer;
  background-color: transparent;
}

.list-item:hover {
  background-color: var(--surface-container-low);
  border-radius: 0.5rem;
}

.list-item h4 {
  font-size: 1.25rem;
  margin-bottom: 0.25rem;
  font-weight: 600;
}

.accent-icon {
  color: var(--tertiary);
  font-size: 2rem;
}

@media (max-width: 768px) {
  .display-md { font-size: 2rem; }
  .list-item { flex-direction: column; align-items: flex-start; gap: 1rem; }
}
</style>
