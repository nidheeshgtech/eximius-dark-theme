<?php
$assetPrefix = $assetPrefix ?? '';
$host = $_SERVER['HTTP_HOST'] ?? '';
$isLocalHost = str_contains($host, 'localhost') || str_contains($host, '127.0.0.1');
$routes = [
  'home' => $isLocalHost ? '/eximius-dark/index.php' : '/',
  'about' => $isLocalHost ? '/eximius-dark/about.php' : '/about',
  'opportunities' => $isLocalHost ? '/eximius-dark/opportunities.php' : '/opportunities',
  'admissions' => $isLocalHost ? '/eximius-dark/admissions.php' : '/admissions',
  'contact' => $isLocalHost ? '/eximius-dark/contact.php' : '/contact',
];
$navItems = [
  ['label' => 'Home', 'href' => $routes['home']],
  ['label' => 'About', 'href' => $routes['about']],
  ['label' => 'Opportunities', 'href' => $routes['opportunities']],
  ['label' => 'Solutions', 'href' => $routes['home'] . '#'],
  ['label' => 'Media', 'href' => $routes['home'] . '#'],
  ['label' => 'Admissions', 'href' => $routes['admissions']],
];
?>
<header class="site-header" id="site-header">
  <div class="container site-header__inner">
    <a class="site-header__brand" href="<?= htmlspecialchars($routes['home'], ENT_QUOTES, 'UTF-8'); ?>"
      aria-label="Eximius home">
      <img class="site-header__logo"
        src="<?= htmlspecialchars($assetPrefix . 'assets/images/header-logo.svg', ENT_QUOTES, 'UTF-8'); ?>"
        alt="Eximius" width="246" height="56" />
    </a>

    <button class="site-header__toggle" type="button" aria-expanded="false" aria-controls="site-header-nav"
      aria-label="Open navigation menu">
      <span class="site-header__toggle-line"></span>
      <span class="site-header__toggle-line"></span>
      <span class="site-header__toggle-line"></span>
    </button>

    <nav class="site-header__nav" id="site-header-nav" aria-label="Primary">
      <ul class="site-header__menu">
        <?php foreach ($navItems as $item): ?>
          <li class="site-header__item">
            <a class="site-header__link" href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8'); ?>">
              <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <a class="ui-arrow-cta site-header__cta" href="<?= htmlspecialchars($routes['contact'], ENT_QUOTES, 'UTF-8'); ?>">
        <span class="ui-arrow-cta__icon site-header__cta-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
            <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
          </svg>
        </span>
        <span class="ui-arrow-cta__label site-header__cta-label">Contact Us</span>
      </a>

      <button class="site-header__theme-toggle" id="theme-toggle" type="button"
        aria-label="Switch to dark theme">
        <svg class="site-header__theme-icon site-header__theme-icon--sun" aria-hidden="true"
          viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
          <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/>
          <path d="M12 2v2M12 20v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M2 12h2M20 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"
            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
        <svg class="site-header__theme-icon site-header__theme-icon--moon" aria-hidden="true"
          viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"
            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </nav>
  </div>
</header>