<?php
function renderNavbar(): void {
    $navLinks = [
        ['href' => '#home',         'label' => 'Accueil'],
        ['href' => '#about',        'label' => 'À propos'],
        ['href' => '#services',     'label' => 'Services'],
        ['href' => '#testimonials', 'label' => 'Témoignages'],
        ['href' => '#contact',      'label' => 'Contact'],
    ];
?>
<nav id="main-nav" class="navbar fixed top-0 left-0 right-0 z-50 transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">

      <div class="flex items-center">
        <img
          src="src/imports/Gemini_Generated_Image_nk8slpnk8slpnk8s.png"
          alt="Grace Consult"
          class="logo-img h-20 object-cover object-left"
        />
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden md:flex items-center gap-8">
        <?php foreach ($navLinks as $link): ?>
          <a href="<?= htmlspecialchars($link['href']) ?>"
             class="nav-link text-foreground hover:text-primary transition-colors font-medium"
             data-target="<?= htmlspecialchars($link['href']) ?>">
            <?= htmlspecialchars($link['label']) ?>
          </a>
        <?php endforeach; ?>
        <a href="#appointment"
           class="nav-link bg-primary text-white px-6 py-2.5 rounded-full hover:opacity-90 transition-all font-medium shadow-md hover:shadow-lg"
           data-target="#appointment">
          Prendre RDV
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-btn" class="md:hidden p-2 text-foreground hover:text-primary transition-colors">
        <svg id="icon-menu" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
    <div class="px-4 py-4 space-y-3">
      <?php foreach ($navLinks as $link): ?>
        <a href="<?= htmlspecialchars($link['href']) ?>"
           class="nav-link block py-2 text-foreground hover:text-primary transition-colors font-medium"
           data-target="<?= htmlspecialchars($link['href']) ?>">
          <?= htmlspecialchars($link['label']) ?>
        </a>
      <?php endforeach; ?>
      <a href="#appointment"
         class="nav-link block text-center bg-primary text-white px-6 py-2.5 rounded-full hover:opacity-90 transition-all font-medium"
         data-target="#appointment">
        Prendre RDV
      </a>
    </div>
  </div>
</nav>
<?php
}
