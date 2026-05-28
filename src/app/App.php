<?php
require_once __DIR__ . '/components/Navbar.php';
require_once __DIR__ . '/components/Hero.php';
require_once __DIR__ . '/components/About.php';
require_once __DIR__ . '/components/Services.php';
require_once __DIR__ . '/components/HowItWorks.php';
require_once __DIR__ . '/components/Testimonials.php';
require_once __DIR__ . '/components/Appointment.php';
require_once __DIR__ . '/components/Contact.php';
require_once __DIR__ . '/components/Footer.php';

function renderApp(): void {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grace Consult – Psychologue</title>
  <link rel="stylesheet" href="src/styles/globals.css" />
  <link rel="stylesheet" href="src/styles/theme.css" />
  <link rel="stylesheet" href="src/styles/main.css" />
</head>
<body>
  <div class="min-h-screen bg-background">
    <?php renderNavbar(); ?>
    <?php renderHero(); ?>
    <?php renderAbout(); ?>
    <?php renderServices(); ?>
    <?php renderHowItWorks(); ?>
    <?php renderTestimonials(); ?>
    <?php renderAppointment(); ?>
    <?php renderContact(); ?>
    <?php renderFooter(); ?>
  </div>
  <script src="src/styles/main.js"></script>
</body>
</html>
<?php
}
