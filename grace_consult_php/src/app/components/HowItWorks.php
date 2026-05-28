<?php
function renderHowItWorks(): void {
    $steps = [
        ['title' => 'Réserver une séance',
         'desc'  => 'Planifiez votre rendez-vous en ligne ou par téléphone à votre convenance. La première consultation se fait en présentiel.',
         'icon'  => 'M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5'],
        ['title' => 'Parler avec la thérapeute',
         'desc'  => "Partagez vos préoccupations dans un environnement sûr et confidentiel. Nous écoutons sans jugement.",
         'icon'  => 'M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z'],
        ['title' => 'Obtenir un plan thérapeutique',
         'desc'  => 'Recevez un plan de thérapie personnalisé adapté à vos besoins et objectifs uniques.',
         'icon'  => 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z'],
        ['title' => 'Améliorer votre bien-être',
         'desc'  => "Vivez des changements positifs en travaillant vers l'équilibre émotionnel et la croissance personnelle.",
         'icon'  => 'M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941'],
    ];
?>
<section class="py-20 px-4 sm:px-6 lg:px-8 scroll-animate"
         style="background:linear-gradient(to bottom,oklch(0.90 0.04 230 / 0.3),oklch(0.99 0.005 280))">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl sm:text-5xl font-bold text-foreground mb-4">
        Comment fonctionne <span class="text-primary">la thérapie</span>
      </h2>
      <p class="text-lg text-muted max-w-2xl mx-auto">
        Votre parcours vers la guérison en quatre étapes simples
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
      <!-- Horizontal connector line (desktop) -->
      <div class="hidden lg:block absolute top-1/4 left-0 right-0 h-px"
           style="background:linear-gradient(to right,transparent,oklch(0.60 0.10 280 / 0.3),transparent)"></div>

      <?php foreach ($steps as $i => $step): ?>
      <div class="relative">
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all relative z-10 text-center">
          <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center mb-4 text-xl font-bold mx-auto">
            <?= $i + 1 ?>
          </div>
          <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 mx-auto"
               style="background:linear-gradient(135deg,oklch(0.60 0.10 280 / 0.2),oklch(0.88 0.035 80 / 0.2))">
            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="<?= $step['icon'] ?>"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-3"><?= htmlspecialchars($step['title']) ?></h3>
          <p class="text-muted leading-relaxed"><?= htmlspecialchars($step['desc']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Trust bar -->
    <div class="mt-16 bg-white rounded-2xl p-8 shadow-lg">
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <?php
        $trust = [
            ['label' => 'Confidentiel',     'sub' => 'Votre vie privée est notre priorité'],
            ['label' => 'Séances flexibles', 'sub' => 'Options en présentiel ou en ligne'],
            ['label' => 'Soins experts',     'sub' => "Plus de 30 ans d'expérience"],
        ];
        foreach ($trust as $t): ?>
        <div>
          <svg class="w-12 h-12 text-primary mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          <h4 class="font-bold text-foreground mb-2"><?= htmlspecialchars($t['label']) ?></h4>
          <p class="text-sm text-muted"><?= htmlspecialchars($t['sub']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php
}
