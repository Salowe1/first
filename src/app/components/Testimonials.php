<?php
function renderTestimonials(): void {
    $testimonials = [
        ['name' => 'Marie L.',              'role' => 'Thérapie individuelle',
         'text' => "Dr. Mpondo m'a aidée à surmonter des années d'anxiété et de doutes. Son approche bienveillante et sa compréhension profonde ont créé un espace sûr pour guérir. Je vis enfin la vie que j'ai toujours voulue.",
         'rating' => 5],
        ['name' => 'Thomas & Sophie D.',    'role' => 'Thérapie de couple',
         'text' => "Notre mariage était au bord de la rupture quand nous avons commencé la thérapie. Dr. Mpondo nous a aidés à redécouvrir notre connexion et à mieux communiquer. Nous sommes maintenant plus forts que jamais. Merci !",
         'rating' => 5],
        ['name' => 'Isabelle M.',           'role' => 'Guérison de trauma',
         'text' => "Après avoir vécu un traumatisme, je me sentais perdue et brisée. Le parcours thérapeutique a été transformateur. Dr. Mpondo m'a guidée avec patience et expertise. J'ai trouvé une paix et une force que je ne connaissais pas.",
         'rating' => 5],
    ];
?>
<section id="testimonials" class="py-20 px-4 sm:px-6 lg:px-8 scroll-animate"
         style="background:linear-gradient(to bottom,oklch(0.99 0.005 280),oklch(0.90 0.04 230 / 0.3))">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl sm:text-5xl font-bold text-foreground mb-4">
        <span class="text-primary">Témoignages</span> de nos clients
      </h2>
      <p class="text-lg text-muted max-w-2xl mx-auto">
        Histoires authentiques de transformation et de guérison
      </p>
    </div>

    <div class="max-w-4xl mx-auto">
      <!-- Testimonial cards -->
      <div class="testimonials-container relative" id="testimonials-carousel">
        <?php foreach ($testimonials as $i => $t): ?>
        <div class="testimonial-slide bg-white rounded-3xl p-8 md:p-12 shadow-xl relative <?= $i > 0 ? 'hidden' : '' ?>"
             data-index="<?= $i ?>">
          <!-- Quote icon -->
          <svg class="absolute top-8 right-8 w-16 h-16 opacity-10 text-primary" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
          </svg>
          <!-- Stars -->
          <div class="flex gap-1 mb-6">
            <?php for ($s = 0; $s < $t['rating']; $s++): ?>
            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <?php endfor; ?>
          </div>
          <p class="text-xl text-foreground leading-relaxed mb-8 relative z-10">
            &ldquo;<?= htmlspecialchars($t['text']) ?>&rdquo;
          </p>
          <div>
            <p class="font-bold text-foreground text-lg"><?= htmlspecialchars($t['name']) ?></p>
            <p class="text-muted"><?= htmlspecialchars($t['role']) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Dots -->
      <div class="flex justify-center gap-3 mt-8" id="testimonial-dots">
        <?php foreach ($testimonials as $i => $t): ?>
        <button class="testimonial-dot rounded-full transition-all <?= $i === 0 ? 'w-8 bg-primary' : 'w-3 bg-primary/30 hover:bg-primary/50' ?> h-3"
                data-index="<?= $i ?>"></button>
        <?php endforeach; ?>
      </div>

      <!-- Stats -->
      <div class="grid md:grid-cols-3 gap-6 mt-16">
        <?php
        $stats = [
            ['val' => '98%',  'label' => 'Satisfaction clients',  'bg' => 'oklch(0.60 0.10 280 / 0.1)'],
            ['val' => '500+', 'label' => 'Vies transformées',     'bg' => 'oklch(0.88 0.035 80 / 0.3)'],
            ['val' => '30+',  'label' => "Années d'expérience",   'bg' => 'oklch(0.90 0.04 230 / 0.3)'],
        ];
        foreach ($stats as $s): ?>
        <div class="rounded-2xl p-6 text-center" style="background:<?= $s['bg'] ?>">
          <p class="text-4xl font-bold text-primary mb-2"><?= $s['val'] ?></p>
          <p class="text-muted"><?= htmlspecialchars($s['label']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php
}
