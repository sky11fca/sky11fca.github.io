<script setup>
</script>

<template>
  <div>
    <section class="content-section surface-container-low" style="min-height: 80vh;">
      <h3 class="display-md mb-10 text-on-surface" style="text-align: center">Coding Projects</h3>

      <div class="flow-list">
        <a href="https://github.com/sky11fca/Archlinux_dotfiles_ricing">
          <div class="list-item">
            <div class="item-content">
              <h4 class="text-on-surface">Arch Linux dotfiles</h4>
              <p class="text-on-surface-variant mt-2">I use Arch BTW :3</p>
            </div>
          </div>
        </a>

        <div class="list-item">
          <div class="item-content">
            <h4 class="text-on-surface">This website</h4>
            <p class="text-on-surface-variant mt-2">Yeah! The one you are viewing it</p>
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
  background-color: var(--surface);
  border-radius: 0.5rem;
}

.list-item h4 {
  font-size: 1.25rem;
  margin-bottom: 0.25rem;
  font-weight: 600;
}


@media (max-width: 768px) {
  .display-md { font-size: 2rem; }
  .list-item { flex-direction: column; align-items: flex-start; gap: 1rem; }
}
</style>
