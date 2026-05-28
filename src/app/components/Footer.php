<?php
function renderFooter(): void {
    $year = date('Y');

    $quickLinks = [
        ['label' => 'Accueil',       'href' => '#home'],
        ['label' => 'À propos',      'href' => '#about'],
        ['label' => 'Services',      'href' => '#services'],
        ['label' => 'Témoignages',   'href' => '#testimonials'],
        ['label' => 'Contact',       'href' => '#contact'],
    ];

    $services = [
        'Accompagnement anxiété',
        'Thérapie de la dépression',
        'Thérapie de couple',
        'Accompagnement adolescents',
        'Thérapie du trauma',
        'Thérapie familiale',
    ];

    $socials = [
        ['label' => 'Facebook',  'href' => '#', 'path' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'],
        ['label' => 'Instagram', 'href' => '#', 'path' => 'M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M6.5 19.5h11a3 3 0 003-3v-11a3 3 0 00-3-3h-11a3 3 0 00-3 3v11a3 3 0 003 3z'],
        ['label' => 'LinkedIn',  'href' => '#', 'path' => 'M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z M4 6a2 2 0 100-4 2 2 0 000 4z'],
        ['label' => 'YouTube',   'href' => '#', 'path' => 'M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58 2.78 2.78 0 001.95 1.95C5.12 20 12 20 12 20s6.88 0 8.59-.47a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58zM9.75 15.02V8.98L15.5 12l-5.75 3.02z'],
    ];
?>
<footer class="bg-foreground text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">

      <!-- Brand -->
      <div>
        <img src="src/imports/Gemini_Generated_Image_nk8slpnk8slpnk8s.png"
             alt="Grace Consult"
             class="h-20 w-20 mb-6 object-cover object-left brightness-0 invert"
             style="clip-path:circle(40% at 25% 50%)"/>
        <p class="text-white/80 leading-relaxed mb-6">
          Services professionnels d'accompagnement psychologique pour les individus, couples et familles.
          Créer un espace sûr pour la guérison et la croissance.
        </p>
        <div class="flex gap-4">
          <?php foreach ($socials as $s): ?>
          <a href="<?= htmlspecialchars($s['href']) ?>"
             aria-label="<?= htmlspecialchars($s['label']) ?>"
             class="w-10 h-10 rounded-full flex items-center justify-center transition-colors hover:bg-primary"
             style="background:rgba(255,255,255,0.1)">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="<?= $s['path'] ?>"/>
            </svg>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Quick links -->
      <div>
        <h3 class="text-lg font-bold mb-6">Liens rapides</h3>
        <ul class="space-y-3">
          <?php foreach ($quickLinks as $link): ?>
          <li>
            <a href="<?= htmlspecialchars($link['href']) ?>"
               class="nav-link text-white/80 hover:text-primary transition-colors"
               data-target="<?= htmlspecialchars($link['href']) ?>">
              <?= htmlspecialchars($link['label']) ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h3 class="text-lg font-bold mb-6">Nos services</h3>
        <ul class="space-y-3">
          <?php foreach ($services as $svc): ?>
          <li>
            <a href="#services" class="nav-link text-white/80 hover:text-primary transition-colors" data-target="#services">
              <?= htmlspecialchars($svc) ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Coordonnées -->
      <div>
        <h3 class="text-lg font-bold mb-6">Coordonnées</h3>
        <ul class="space-y-3 text-white/80">
          <li><p class="font-semibold text-white mb-1">Téléphone</p><p>+33 (0) 6 XX XX XX XX</p></li>
          <li><p class="font-semibold text-white mb-1">Email</p><p>contact@graceconsult.fr</p></li>
          <li><p class="font-semibold text-white mb-1">Localisation</p><p>Centre Via Sana, Paris</p></li>
        </ul>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="border-t pt-8" style="border-color:rgba(255,255,255,0.2)">
      <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-white/70 text-sm">© <?= $year ?> Grace Consult. Tous droits réservés.</p>
        <div class="flex gap-6 text-sm">
          <?php foreach (['Politique de confidentialité', "Conditions d'utilisation", 'Éthique professionnelle'] as $link): ?>
          <a href="#" class="text-white/70 hover:text-primary transition-colors"><?= htmlspecialchars($link) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <p class="text-white/60 text-xs mt-4 text-center md:text-left">
        Grace Consult s'engage à fournir des services de santé mentale éthiques, confidentiels et professionnels conformément aux
        normes de pratique établies et à la conformité RGPD.
      </p>
    </div>
  </div>
</footer>
<?php
}
