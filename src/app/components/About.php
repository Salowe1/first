<?php
function renderAbout(): void {
    $cards = [
        ['icon' => 'award',  'title' => 'Qualifications',
         'text' => 'Diplôme universitaire en thérapie familiale, Conseillère conjugale et familiale certifiée'],
        ['icon' => 'heart',  'title' => 'Approche',
         'text' => 'Thérapie humaniste, psychanalytique et psycho-intégrative'],
        ['icon' => 'users',  'title' => 'Spécialités',
         'text' => 'Individus, couples, familles, adolescents, accompagnement périnatal'],
        ['icon' => 'globe',  'title' => 'Portée',
         'text' => 'Pratique nationale et internationale avec soins inclusifs'],
    ];

    $icons = [
        'award' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
        'heart' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
        'users' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        'globe' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
    ];
?>
<section id="about" class="py-20 px-4 sm:px-6 lg:px-8 section-alt scroll-animate">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl sm:text-5xl font-bold text-foreground mb-4">
        Rencontrez votre <span class="text-primary">Psychologue</span>
      </h2>
      <p class="text-lg text-muted max-w-2xl mx-auto">
        Expertise professionnelle avec une approche humaniste et bienveillante
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Photo placeholder -->
      <div class="relative">
        <div class="rounded-3xl p-8" style="background:linear-gradient(135deg,oklch(0.60 0.10 280 / 0.2),oklch(0.88 0.035 80 / 0.2))">
          <div class="bg-white rounded-2xl overflow-hidden shadow-xl">
            <div class="flex flex-col items-center justify-center p-12" style="background:linear-gradient(135deg,oklch(0.60 0.10 280 / 0.1),oklch(0.88 0.035 80 / 0.1))">
              <div class="w-32 h-32 rounded-full flex items-center justify-center mb-6" style="background:oklch(0.60 0.10 280 / 0.2)">
                <svg class="w-16 h-16 text-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="<?= $icons['users'] ?>"/>
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-foreground mb-2">Dr. Grâce MPONDO</h3>
              <p class="text-primary font-medium">Psychanalyste &amp; Psychopraticienne</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="space-y-6">
        <div>
          <h3 class="text-3xl font-bold text-foreground mb-4">Experte bienveillante en santé mentale</h3>
          <p class="text-muted leading-relaxed mb-4">
            En tant que Psychanalyste, Psychopraticienne et Thérapeute de couple et de famille certifiée, j'apporte plus de 30 ans
            d'expérience dans le domaine de la santé et une décennie spécialisée dans les soins psychiques. Mon approche est centrée
            sur vous en tant qu'individu unique, en m'adaptant à vos besoins et défis spécifiques.
          </p>
          <p class="text-muted leading-relaxed">
            Je suis engagée à créer un espace sûr et inclusif pour tous, avec une sensibilité particulière aux
            besoins des personnes en situation de handicap.
          </p>
        </div>

        <div class="grid sm:grid-cols-2 gap-4">
          <?php foreach ($cards as $card): ?>
          <div class="bg-white p-6 rounded-2xl shadow-md">
            <svg class="w-8 h-8 text-primary mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="<?= $icons[$card['icon']] ?>"/>
            </svg>
            <h4 class="font-bold text-foreground mb-2"><?= $card['title'] ?></h4>
            <p class="text-sm text-muted"><?= $card['text'] ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
