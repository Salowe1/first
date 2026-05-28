# Grace Consult – Version PHP

Site web du cabinet de psychologie Dr. Grâce MPONDO, converti de React/TSX vers PHP natif.

## Structure du projet

```
grace_consult_php/
├── index.php                        ← Point d'entrée principal
├── src/
│   ├── app/
│   │   ├── App.php                  ← Layout global (remplace App.tsx)
│   │   └── components/
│   │       ├── Navbar.php
│   │       ├── Hero.php
│   │       ├── About.php
│   │       ├── Services.php
│   │       ├── HowItWorks.php
│   │       ├── Testimonials.php
│   │       ├── Appointment.php      ← Formulaire avec traitement PHP côté serveur
│   │       ├── Contact.php
│   │       └── Footer.php
│   ├── imports/
│   │   └── Gemini_Generated_Image_nk8slpnk8slpnk8s.png  ← Logo
│   └── styles/
│       ├── main.css                 ← Tous les styles (remplace Tailwind)
│       └── main.js                  ← Interactivité vanilla JS (remplace React/motion)
```

## Prérequis

- PHP 7.4+ (ou PHP 8.x)
- Serveur web : Apache, Nginx, ou le serveur intégré PHP

## Lancement rapide

```bash
# Depuis la racine du projet
php -S localhost:8000
```

Puis ouvrir http://localhost:8000 dans le navigateur.

## Correspondances React → PHP

| Fichier original (React) | Fichier PHP équivalent | Notes |
|---|---|---|
| `index.html` + `main.tsx` | `index.php` | Point d'entrée |
| `App.tsx` | `src/app/App.php` | Layout global, `renderApp()` |
| `Navbar.tsx` | `src/app/components/Navbar.php` | `renderNavbar()` |
| `Hero.tsx` | `src/app/components/Hero.php` | `renderHero()` |
| `About.tsx` | `src/app/components/About.php` | `renderAbout()` |
| `Services.tsx` | `src/app/components/Services.php` | `renderServices()` |
| `HowItWorks.tsx` | `src/app/components/HowItWorks.php` | `renderHowItWorks()` |
| `Testimonials.tsx` | `src/app/components/Testimonials.php` | `renderTestimonials()` |
| `Appointment.tsx` | `src/app/components/Appointment.php` | `renderAppointment()` – inclut traitement POST |
| `Contact.tsx` | `src/app/components/Contact.php` | `renderContact()` |
| `Footer.tsx` | `src/app/components/Footer.php` | `renderFooter()` |
| Tailwind CSS | `src/styles/main.css` | CSS natif avec variables CSS |
| `motion/react` | `src/styles/main.js` | Animations vanilla JS |

## Traitement du formulaire de rendez-vous

Le fichier `Appointment.php` gère nativement la soumission POST.  
Pour envoyer les données par email, décommentez et configurez `mail()` ou intégrez PHPMailer :

```php
// Dans renderAppointment(), après la validation
mail('contact@graceconsult.fr', 'Nouveau RDV', $message, $headers);
```
