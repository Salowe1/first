<?php
function renderAppointment(): void {
    // Handle form submission (same page POST)
    $submitted = false;
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['appointment'])) {
        $name    = trim($_POST['name']    ?? '');
        $email   = trim($_POST['email']   ?? '');
        $phone   = trim($_POST['phone']   ?? '');
        $service = trim($_POST['service'] ?? '');
        $date    = trim($_POST['date']    ?? '');
        $message = trim($_POST['message'] ?? '');

        if (empty($name))    $errors[] = 'Le nom est requis.';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "L'adresse email est invalide.";
        if (empty($phone))   $errors[] = 'Le téléphone est requis.';
        if (empty($service)) $errors[] = 'Veuillez sélectionner un service.';
        if (empty($date))    $errors[] = 'La date est requise.';

        if (empty($errors)) {
            // TODO: send email / save to DB
            $submitted = true;
        }
    }

    $services = [
        'Accompagnement anxiété',
        'Thérapie de la dépression',
        'Thérapie de couple',
        'Accompagnement adolescents',
        'Orientation professionnelle',
        'Thérapie du trauma',
        'Thérapie familiale',
        'Accompagnement périnatal',
    ];
?>
<section id="appointment" class="py-20 px-4 sm:px-6 lg:px-8 scroll-animate">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl sm:text-5xl font-bold text-foreground mb-4">
        Réservez votre <span class="text-primary">Rendez-vous</span>
      </h2>
      <p class="text-lg text-muted max-w-2xl mx-auto">
        Faites le premier pas vers la guérison. Planifiez votre consultation dès aujourd'hui.
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-start">
      <!-- Info panel -->
      <div class="rounded-3xl p-8" style="background:linear-gradient(135deg,oklch(0.60 0.10 280 / 0.1),oklch(0.88 0.035 80 / 0.2))">
        <h3 class="text-2xl font-bold text-foreground mb-6">Informations sur les rendez-vous</h3>
        <div class="space-y-6">
          <?php
          $infos = [
              ['icon' => 'M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5',
               'title' => 'Format de séance',
               'html'  => 'La première consultation doit être en présentiel. Les séances de suivi sont disponibles en ligne ou en présentiel selon votre préférence.'],
              ['icon' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z',
               'title' => 'Durée des séances',
               'html'  => 'Séances individuelles : 60 minutes<br>Séances de couple/famille : 90 minutes'],
              ['icon' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
               'title' => 'Tarifs',
               'html'  => 'Thérapie individuelle : 60€<br>Thérapie de couple : 70€<br>Thérapie familiale : 90€<br>Thérapie psychanalytique : 80–90€'],
          ];
          foreach ($infos as $info): ?>
          <div class="flex gap-4">
            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="<?= $info['icon'] ?>"/>
            </svg>
            <div>
              <h4 class="font-bold text-foreground mb-2"><?= $info['title'] ?></h4>
              <p class="text-muted"><?= $info['html'] ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <div class="mt-8 p-6 bg-white rounded-2xl">
          <p class="text-sm text-muted">
            <strong class="text-foreground">Politique d'annulation :</strong>
            Veuillez prévenir 48h à l'avance les jours ouvrés. Les annulations tardives ou les absences seront facturées.
          </p>
        </div>
      </div>

      <!-- Form panel -->
      <div class="bg-white rounded-3xl p-8 shadow-xl">
        <?php if ($submitted): ?>
        <div class="text-center py-12">
          <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6" style="background:oklch(0.60 0.10 280 / 0.1)">
            <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-foreground mb-3">Demande de rendez-vous reçue !</h3>
          <p class="text-muted">
            Merci de nous avoir contactés. Nous vous contacterons dans les 24 heures pour confirmer votre rendez-vous.
          </p>
          <a href="#appointment" class="btn-primary inline-block mt-6">Nouveau rendez-vous</a>
        </div>

        <?php else: ?>

        <?php if (!empty($errors)): ?>
        <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
          <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
            <?php foreach ($errors as $err): ?>
            <li><?= htmlspecialchars($err) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <form method="post" action="#appointment" class="space-y-6" novalidate>
          <input type="hidden" name="appointment" value="1"/>

          <?php
          $fields = [
              ['id' => 'name',  'label' => 'Nom complet *',         'type' => 'text',  'ph' => 'Votre nom'],
              ['id' => 'email', 'label' => 'Adresse email *',        'type' => 'email', 'ph' => 'votre.email@exemple.com'],
              ['id' => 'phone', 'label' => 'Numéro de téléphone *',  'type' => 'tel',   'ph' => '+33 6 12 34 56 78'],
          ];
          foreach ($fields as $f): ?>
          <div>
            <label for="<?= $f['id'] ?>" class="block text-sm font-medium text-foreground mb-2">
              <?= $f['label'] ?>
            </label>
            <input type="<?= $f['type'] ?>" id="<?= $f['id'] ?>" name="<?= $f['id'] ?>" required
                   value="<?= htmlspecialchars($_POST[$f['id']] ?? '') ?>"
                   placeholder="<?= $f['ph'] ?>"
                   class="form-input w-full px-4 py-3 rounded-xl border-2 focus:outline-none transition-colors"/>
          </div>
          <?php endforeach; ?>

          <div>
            <label for="service" class="block text-sm font-medium text-foreground mb-2">Sélectionnez un service *</label>
            <select id="service" name="service" required class="form-input w-full px-4 py-3 rounded-xl border-2 focus:outline-none transition-colors">
              <option value="">Choisir un service</option>
              <?php foreach ($services as $svc): ?>
              <option value="<?= htmlspecialchars($svc) ?>"
                <?= (($_POST['service'] ?? '') === $svc) ? 'selected' : '' ?>>
                <?= htmlspecialchars($svc) ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div>
            <label for="date" class="block text-sm font-medium text-foreground mb-2">Date préférée *</label>
            <input type="date" id="date" name="date" required
                   value="<?= htmlspecialchars($_POST['date'] ?? '') ?>"
                   class="form-input w-full px-4 py-3 rounded-xl border-2 focus:outline-none transition-colors"/>
          </div>

          <div>
            <label for="message" class="block text-sm font-medium text-foreground mb-2">Message (Optionnel)</label>
            <textarea id="message" name="message" rows="4"
                      placeholder="Parlez-nous brièvement de vos préoccupations ou questions..."
                      class="form-input w-full px-4 py-3 rounded-xl border-2 focus:outline-none transition-colors resize-none"
            ><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>

          <button type="submit" class="btn-primary w-full text-lg">
            Envoyer la demande de rendez-vous
          </button>
        </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php
}
