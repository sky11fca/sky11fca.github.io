<script setup>
</script>

<template>
  <div>
    <!-- About Section -->
    <section class="content-section surface-container-low" style="min-height: 80vh; display: flex; align-items: center;">
      <div class="about-grid">
        <div class="text-content">
           <h3 class="display-md text-on-surface">About Me</h3>
          <br>
           <p class="body-text mt-6 text-on-surface-variant">
             I am a Faculty of Computer Science student, expecting to graduate this year. My interest is on cybersecurity, backend and DevOps. I can develop applications in Python and in C# using .NET frameworks. I am a full time Linux user (I use Arch BTW :3). Other than that, I tend to consider myself a serious guy, but that does not mean I don't crack some jokes time to time.
           </p>

          <br>

          <h3 class="display-md text-on-surface">My Links</h3>
          <br>
          <ul>
            <li>Discord Username: sky11fca</li>
            <li><a href="https://github.com/sky11fca">Github</a></li>
            <li><a href="https://www.linkedin.com/in/bogdan-bazon-708714307/">Linked In</a></li>
            <li>My CV (TBD)</li>
          </ul>
        </div>

        <div class="profile-picture">
          <img src="/public/img/hardest_pic_of_me.jpg" alt="photo_of_mr_bogdanovich">
        </div>
      </div>
    </section>
  </div>
</template>

<style scoped>
ul{
  list-style: none;
}

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

/* Profile Picture */
.profile-picture {
  max-width: 400px; /* Controls the max size of the picture */
  width: 100%;
  justify-self: center; /* Centers the picture in its grid column */
}

.profile-picture img {
  max-width: 100%;
  height: auto;
  border-radius: 1rem;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* Adds a little depth to the image */
}

/* About Grid */
.about-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.5fr 1fr; /* Give more space to text */
  gap: 4rem;
  align-items: center;
}


@media (max-width: 768px) {
  .display-md { font-size: 2rem; }
  .about-grid { 
    grid-template-columns: 1fr; 
    gap: 2rem;
  }
  .profile-picture {
    order: -1; /* Moves the picture to the top on mobile */
  }
}
</style>
