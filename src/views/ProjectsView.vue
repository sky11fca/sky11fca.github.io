<script setup>
</script>

<template>
  <div>
    <!-- Projects -->
    <section class="content-section surface-container-low" style="min-height: 80vh;">
       <h3 class="display-md mb-10 text-on-surface" style="text-align: center">Coding Projects</h3>

       <div class="flow-list">

           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/ionicheadrian/BonoL"><h4 class="text-on-surface">BonoL/Lgame</h4></a>
               <p class="text-on-surface-variant mt-2">A game of <a href="">BonoL/Lgame</a> implemented in C++ using SFML library. Collaboration project with ionicheadrian</p>
             </div>
           </div>



           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/sky11fca/offline_messenger"><h4 class="text-on-surface">Thunderstruck (Offline Messenger)</h4></a>
               <p class="text-on-surface-variant mt-2">TUI client and server application written in C that allows communication between 2 terminals even if the receiver is not online. Supports message replies</p>
             </div>
           </div>



           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/E3-GiftHub/gifthub"><h4 class="text-on-surface">GiftHub</h4></a>
               <p class="text-on-surface-variant mt-2">The Free and Open Source gifting platform that allows funding a special events with physical and virtual payment. Developed using Typescript, React, Next JS, Prisma, PostgreSQL</p>
             </div>
           </div>




           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/sky11fca/local_greetings"><h4 class="text-on-surface">Local Greetings</h4></a>
               <p class="text-on-surface-variant mt-2">Web application developed in PHP that allows hosting sports gathering</p>
             </div>
           </div>




           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/PetruGlt/CampusEats"><h4 class="text-on-surface">Campus Eats</h4></a>
               <p class="text-on-surface-variant mt-2">Web applications for campuses that allows students to order food from canteens. Developed using .NET technologies like Entity Framework, Balzor WebAssembly, PostgreSQL, Stripe.</p>
             </div>
           </div>




           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/sky11fca/grep.py"><h4 class="text-on-surface">grep.py</h4></a>
               <p class="text-on-surface-variant mt-2">Python implementation of Linux grep command</p>
             </div>
           </div>




           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/DragonLordKing/Artificial-Intelligance"><h4 class="text-on-surface">UAIC AI</h4></a>
               <p class="text-on-surface-variant mt-2">Python program that allows you to generate and solve problems regarding the Artificial Intelligence course.</p>
             </div>
           </div>




           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/sky11fca/Feeling_Fine_dotnet"><h4 class="text-on-surface">Feeling Fine</h4></a>
               <p class="text-on-surface-variant mt-2">Web Application for businesses that allows analysing sentiments by review, compute statistics for each review and even generate replies. Developed using .NET technologies like Entity Framework, Blazor WebAssembly, PostgreSQL, Python FastAPI, Ollama, Docker, GitHub Actions</p>
             </div>
           </div>



           <div class="list-item">
             <div class="item-content">
               <a href="https://github.com/MeraruIoanLucian/UnemploymentVisualiser"><h4 class="text-on-surface">Unemployment Data Visualizer</h4></a>
               <p class="text-on-surface-variant mt-2">Web Application developed in PHP and vanilla HTML, CSS and JS that displays unemployment data based of county, medium, sex, age range in Romania. Supports caching</p>
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
