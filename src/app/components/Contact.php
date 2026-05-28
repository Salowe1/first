<?php
function renderContact(): void {
    $contactItems = [
        ['icon' => 'M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z',
         'title' => 'Téléphone', 'line1' => '+33 (0) 6 XX XX XX XX', 'line2' => 'Disponible Lun-Ven, 9h00 - 18h00',
         'bg' => 'oklch(0.60 0.10 280 / 0.1)'],
        ['icon' => 'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75',
         'title' => 'Email', 'line1' => 'contact@graceconsult.fr', 'line2' => 'Nous répondons sous 24h',
         'bg' => 'oklch(0.88 0.035 80 / 0.3)'],
        ['icon' => 'M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z',
         'title' => 'Adresse du cabinet', 'line1' => 'Centre Via Sana', 'line2' => 'Paris, France',
         'bg' => 'oklch(0.90 0.04 230 / 0.3)'],
        ['icon' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z',
         'title' => "Horaires d'ouverture", 'line1' => 'Lundi - Vendredi : 9h00 - 19h00', 'line2' => 'Samedi : 10h00 - 14h00',
         'bg' => 'oklch(0.60 0.10 280 / 0.1)'],
    ];
?>
<section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 section-alt scroll-animate">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl sm:text-5xl font-bold text-foreground mb-4">
        Entrez en <span class="text-primary">Contact</span>
      </h2>
      <p class="text-lg text-muted max-w-2xl mx-auto">
        Contactez-nous dès aujourd'hui pour commencer votre parcours vers la guérison et le bien-être
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12">
      <!-- Contact info -->
      <div class="space-y-8">
        <div class="bg-white rounded-2xl p-8 shadow-lg">
          <h3 class="text-2xl font-bold text-foreground mb-6">Informations de contact</h3>
          <div class="space-y-6">
            <?php foreach ($contactItems as $item): ?>
            <div class="flex gap-4">
              <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0"
                   style="background:<?= $item['bg'] ?>">
                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="<?= $item['icon'] ?>"/>
                </svg>
              </div>
              <div>
                <h4 class="font-bold text-foreground mb-1"><?= htmlspecialchars($item['title']) ?></h4>
                <p class="text-muted"><?= htmlspecialchars($item['line1']) ?></p>
                <p class="text-sm text-muted mt-1"><?= htmlspecialchars($item['line2']) ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Payment -->
        <div class="rounded-2xl p-8" style="background:linear-gradient(135deg,oklch(0.60 0.10 280 / 0.1),oklch(0.88 0.035 80 / 0.2))">
          <h4 class="font-bold text-foreground mb-4">Moyens de paiement</h4>
          <div class="flex flex-wrap gap-3">
            <?php foreach (['Carte Bancaire', 'Chèque', 'Espèces'] as $pm): ?>
            <span class="bg-white px-4 py-2 rounded-full text-sm font-medium text-foreground">
              <?= htmlspecialchars($pm) ?>
            </span>
            <?php endforeach; ?>
          </div>
          <p class="text-sm text-muted mt-4">
            Certaines mutuelles peuvent offrir un remboursement partiel. Veuillez vérifier auprès de votre prestataire.
          </p>
        </div>
      </div>

      <!-- Map placeholder + accessibility -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
        <div class="flex flex-col items-center justify-center p-16"
             style="background:linear-gradient(135deg,oklch(0.60 0.10 280 / 0.2),oklch(0.88 0.035 80 / 0.3))">
          <svg class="w-16 h-16 text-primary mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
          </svg>
          <p class="text-foreground font-medium">Carte interactive</p>
          <p class="text-sm text-muted mt-2">Centre Via Sana, Paris</p>
        </div>
        <div class="p-8">
          <h4 class="font-bold text-foreground mb-4">Accessibilité</h4>
          <p class="text-muted mb-4">
            Notre cabinet est entièrement accessible aux personnes en situation de handicap, avec accès en fauteuil roulant et
            installations spécialisées.
          </p>
          <p class="text-muted">
            Nous nous engageons à fournir des soins inclusifs et sensibles à tous, avec une expertise particulière
            dans l'accompagnement des personnes en situation de handicap.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
