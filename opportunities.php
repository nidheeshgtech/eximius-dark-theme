<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Explore opportunities at EXIMIUS." />
  <title>Opportunities | EXIMIUS</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="assets/vendor/css/lenis.css" />
  <link rel="stylesheet" href="assets/vendor/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <?php include __DIR__ . '/inc/header.php'; ?>
  <?php
  $opportunityImages = [
    'platforms' => 'assets/images/preview_image1.webp',
    'missiles' => 'assets/images/preview_image2.webp',
    'space' => 'assets/images/preview_image1.webp',
    'trading' => 'assets/images/preview_image2.webp',
    'technology' => 'assets/images/preview_image1.webp',
    'research' => 'assets/images/preview_image2.webp',
    'homeland' => 'assets/images/preview_image1.webp',
  ];

  foreach ($opportunityImages as $key => $path) {
    if (!is_file(__DIR__ . '/' . $path)) {
      $opportunityImages[$key] = 'https://www.figma.com/api/mcp/asset/458e1dde-d618-4fb1-8498-7496a724f3a3';
    }
  }
  ?>

  <main id="main-content">
    <?php
    $pageBannerTitle = 'OPPORTUNITIES';
    $pageBannerImage = 'assets/images/exi_mission.webp';
    $pageBannerId = 'opportunities-page-title';
    include __DIR__ . '/inc/inner-banner.php';
    ?>

    <section class="strategic-opportunities" aria-labelledby="strategic-opportunities-title">
      <div class="container">
        <div class="strategic-opportunities__header">
          <h2 class="strategic-opportunities__title reveal-title" id="strategic-opportunities-title">Strategic Industry
            Opportunities</h2>
          <p class="strategic-opportunities__description revealme">
            EXIMIUS Fellows benefit from the broad fields represented by EDGE Group clusters. These clusters provide
            EXIMIUS with complex technical challenges, mentors, and domain expertise, ensuring Fellows are immersed in
            real-world, mission-critical environments.
          </p>
        </div>

        <div class="strategic-opportunities__logos revealme-group">
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_001.svg"
              alt="Industry partner logo 1" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_012.svg"
              alt="Industry partner logo 2" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_011.svg"
              alt="Industry partner logo 3" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_004.svg"
              alt="Industry partner logo 4" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_005.svg"
              alt="Industry partner logo 5" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_006.svg"
              alt="Industry partner logo 6" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_007.svg"
              alt="Industry partner logo 7" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_008.svg"
              alt="Industry partner logo 8" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_009.svg"
              alt="Industry partner logo 9" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_010.svg"
              alt="Industry partner logo 10" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_003.svg"
              alt="Industry partner logo 11" /></div>
          <div class="strategic-opportunities__logo-item revealme"><img src="assets/images/logo_002.svg"
              alt="Industry partner logo 12" /></div>
        </div>
      </div>
    </section>

    <section class="opportunities-showcase" aria-labelledby="opportunities-showcase-title">
      <div class="container">
        <h2 class="opportunities-showcase__heading reveal-title" id="opportunities-showcase-title">Opportunities</h2>

        <div class="opportunities-showcase__layout" data-opportunities-showcase>
          <div class="opportunities-showcase__select-wrap revealme">
            <label class="visually-hidden" for="opportunities-mobile-select">Select opportunity area</label>
            <select class="opportunities-showcase__select" id="opportunities-mobile-select" data-opportunity-select>
              <option value="platforms" selected>Platforms &amp; Systems</option>
              <option value="missiles">Missile &amp; Weapons</option>
              <option value="space">Space &amp; Cyber Technologies</option>
              <option value="trading">Trading &amp; Mission Support</option>
              <option value="technology">Technology &amp; Innovation</option>
              <option value="research">Research &amp; Development</option>
              <option value="homeland">Homeland Security</option>
            </select>
          </div>

          <div class="opportunities-showcase__nav revealme-group" role="tablist" aria-label="Opportunity areas">
            <button class="opportunities-showcase__item revealme is-active" type="button" data-opportunity-trigger
              data-target="platforms" aria-pressed="true">Platforms &amp; Systems</button>
            <button class="opportunities-showcase__item revealme" type="button" data-opportunity-trigger
              data-target="missiles" aria-pressed="false">Missile &amp; Weapons</button>
            <button class="opportunities-showcase__item revealme" type="button" data-opportunity-trigger
              data-target="space" aria-pressed="false">Space &amp; Cyber Technologies</button>
            <button class="opportunities-showcase__item revealme" type="button" data-opportunity-trigger
              data-target="trading" aria-pressed="false">Trading &amp; Mission Support</button>
            <button class="opportunities-showcase__item revealme" type="button" data-opportunity-trigger
              data-target="technology" aria-pressed="false">Technology &amp; Innovation</button>
            <button class="opportunities-showcase__item revealme" type="button" data-opportunity-trigger
              data-target="research" aria-pressed="false">Research &amp; Development</button>
            <button class="opportunities-showcase__item revealme" type="button" data-opportunity-trigger
              data-target="homeland" aria-pressed="false">Homeland Security</button>
          </div>

          <div class="opportunities-showcase__media revealme">
            <img class="opportunities-showcase__image is-active" data-opportunity-image="platforms"
              src="<?= htmlspecialchars($opportunityImages['platforms'], ENT_QUOTES, 'UTF-8'); ?>"
              alt="Platforms and systems opportunity" />
            <img class="opportunities-showcase__image" data-opportunity-image="missiles"
              src="<?= htmlspecialchars($opportunityImages['missiles'], ENT_QUOTES, 'UTF-8'); ?>"
              alt="Missile and weapons opportunity" />
            <img class="opportunities-showcase__image" data-opportunity-image="space"
              src="<?= htmlspecialchars($opportunityImages['space'], ENT_QUOTES, 'UTF-8'); ?>"
              alt="Space and cyber opportunity" />
            <img class="opportunities-showcase__image" data-opportunity-image="trading"
              src="<?= htmlspecialchars($opportunityImages['trading'], ENT_QUOTES, 'UTF-8'); ?>"
              alt="Trading and mission support opportunity" />
            <img class="opportunities-showcase__image" data-opportunity-image="technology"
              src="<?= htmlspecialchars($opportunityImages['technology'], ENT_QUOTES, 'UTF-8'); ?>"
              alt="Technology and innovation opportunity" />
            <img class="opportunities-showcase__image" data-opportunity-image="research"
              src="<?= htmlspecialchars($opportunityImages['research'], ENT_QUOTES, 'UTF-8'); ?>"
              alt="Research and development opportunity" />
            <img class="opportunities-showcase__image" data-opportunity-image="homeland"
              src="<?= htmlspecialchars($opportunityImages['homeland'], ENT_QUOTES, 'UTF-8'); ?>"
              alt="Homeland security opportunity" />
          </div>

          <div class="opportunities-showcase__copy revealme-group">
            <p class="opportunities-showcase__text revealme" data-opportunity-copy>
              The Platforms &amp; Systems cluster focuses on the design, manufacture, assembly, repair, overhaul and
              upgrade across a whole world of air, land and sea platforms and systems, enabling advanced solutions
              across any terrain, anywhere in the world.
            </p>

            <a class="ui-arrow-cta opportunities-showcase__cta revealme" href="#">
              <span class="ui-arrow-cta__icon opportunities-showcase__cta-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
              <span class="ui-arrow-cta__label">Learn more</span>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/inc/footer.php'; ?>

  <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
  <script src="assets/vendor/js/swiper-bundle.min.js"></script>
  <script src="assets/vendor/js/lenis.min.js"></script>
  <script src="assets/js/main.js" defer></script>
</body>

</html>
