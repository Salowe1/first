<?php
function renderHero(): void {
?>
<section id="home" class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8 overflow-hidden animate-fade-in">
  <!-- Background decorative blobs -->
  <div class="absolute inset-0 -z-10 pointer-events-none">
    <div class="absolute top-20 right-10 w-72 h-72 rounded-full blur-3xl" style="background:oklch(0.88 0.035 80 / 0.2)"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 rounded-full blur-3xl" style="background:oklch(0.60 0.10 280 / 0.1)"></div>
  </div>

  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <!-- Left: Text -->
      <div class="hero-text">
        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-foreground mb-6 leading-tight">
          Guérissez votre esprit.&nbsp;
          <span class="text-primary">Transformez votre vie.</span>
        </h1>
        <p class="text-xl text-muted mb-8 leading-relaxed">
          Accompagnement psychologique confidentiel et bienveillant pour les individus, couples et familles.
          Commencez votre parcours vers le bien-être émotionnel.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#appointment" class="nav-link btn-primary text-center" data-target="#appointment">
            Prendre RDV
          </a>
          <a href="#services" class="nav-link btn-outline text-center" data-target="#services">
            Nos Services
          </a>
        </div>
      </div>

      <!-- Right: Stats card -->
      <div class="hero-card relative">
        <div class="rounded-3xl p-8" style="background:linear-gradient(135deg,oklch(0.60 0.10 280 / 0.2),oklch(0.88 0.035 80 / 0.2))">
          <div class="bg-white rounded-2xl p-8 shadow-2xl">
            <div class="space-y-6">
              <?php
              $stats = [
                ['icon' => 'M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z',
                  'value' => '500+', 'label' => 'Vies transformées'],
                ['icon' => 'M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z',
                  'value' => '30+',  'label' => "Années d'expérience"],
                ['icon' => 'M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z',
                  'value' => '100%', 'label' => 'Confidentialité assurée'],
              ];
              foreach ($stats as $stat): ?>
              <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background:oklch(0.60 0.10 280 / 0.1)">
                  <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                    <path d="<?= $stat['icon'] ?>"/>
                  </svg>
                </div>
                <div>
                  <p class="text-3xl font-bold text-primary"><?= $stat['value'] ?></p>
                  <p class="text-sm text-muted"><?= $stat['label'] ?></p>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php
}
