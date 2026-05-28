<?php
function renderServices(): void {
    $services = [
        ['icon' => 'brain',    'title' => 'Accompagnement anxiété',
         'desc' => "Soutien professionnel pour gérer l'anxiété, le stress et les pensées envahissantes avec des techniques thérapeutiques éprouvées.",
         'grad' => 'from-primary-soft to-primary-softer'],
        ['icon' => 'heart',    'title' => 'Thérapie de la dépression',
         'desc' => 'Soins bienveillants pour vous aider à surmonter la dépression, retrouver la joie et reconstruire votre force émotionnelle.',
         'grad' => 'from-secondary-soft to-secondary-softer'],
        ['icon' => 'users',    'title' => 'Thérapie de couple',
         'desc' => "Renforcez vos liens, améliorez la communication et résolvez les conflits dans vos relations et votre mariage.",
         'grad' => 'from-accent-soft to-accent-softer'],
        ['icon' => 'sprout',   'title' => 'Accompagnement adolescents',
         'desc' => "Soutien spécialisé pour les adolescents confrontés à des défis émotionnels, d'identité et de transitions de vie.",
         'grad' => 'from-secondary-soft to-secondary-softer'],
        ['icon' => 'briefcase','title' => 'Orientation professionnelle',
         'desc' => "Naviguez dans la confusion de carrière, le stress au travail et le développement professionnel avec des conseils d'experts.",
         'grad' => 'from-primary-soft to-primary-softer'],
        ['icon' => 'shield',   'title' => 'Thérapie du trauma',
         'desc' => 'Soins sûrs et sensibles pour traiter les expériences traumatiques et développer la résilience pour la guérison.',
         'grad' => 'from-accent-soft to-accent-softer'],
    ];

    $iconPaths = [
        'brain'     => 'M9.75 3A6.75 6.75 0 003 9.75v.443c0 .845.3 1.66.84 2.302l.37.447c.453.547.736 1.225.736 1.94v.618a3 3 0 003 3h4.5a3 3 0 003-3v-.617c0-.715.283-1.394.737-1.941l.37-.447A3.75 3.75 0 0017.25 10.193V9.75A6.75 6.75 0 009.75 3zM7.5 18.75v.75a2.25 2.25 0 004.5 0v-.75h-4.5z',
        'heart'     => 'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z',
        'users'     => 'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z',
        'sprout'    => 'M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z',
        'briefcase' => 'M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0',
        'shield'    => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
    ];
?>
<section id="services" class="py-20 px-4 sm:px-6 lg:px-8 scroll-animate">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <h2 class="text-4xl sm:text-5xl font-bold text-foreground mb-4">
        Nos <span class="text-primary">Services</span>
      </h2>
      <p class="text-lg text-muted max-w-2xl mx-auto">
        Accompagnement en santé mentale adapté à vos besoins uniques
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($services as $service): ?>
      <div class="service-card group bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all border-2 border-transparent hover:border-primary-light h-full">
        <div class="service-icon w-16 h-16 rounded-2xl flex items-center justify-center mb-6 transition-transform group-hover:scale-110"
             style="background:linear-gradient(135deg,oklch(0.60 0.10 280 / 0.2),oklch(0.60 0.10 280 / 0.05))">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="<?= $iconPaths[$service['icon']] ?>"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-foreground mb-3"><?= htmlspecialchars($service['title']) ?></h3>
        <p class="text-muted leading-relaxed"><?= htmlspecialchars($service['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 text-center">
      <a href="#appointment" class="nav-link btn-primary inline-block" data-target="#appointment">
        Planifier une consultation
      </a>
    </div>
  </div>
</section>
<?php
}
