<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Apply to EXIMIUS and explore the admissions journey." />
  <title>Admissions | EXIMIUS</title>

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

  <main id="main-content">
    <?php
    $pageBannerTitle = 'APPLY';
    $pageBannerImage = 'assets/images/admissions-banner.webp';
    $pageBannerId = 'admissions-page-title';
    include __DIR__ . '/inc/inner-banner.php';
    ?>

    <section class="admissions-page-intro" aria-labelledby="admissions-intro-title">
      <div class="container">
        <div class="admissions-page-intro__layout">
          <div class="admissions-page-intro__heading revealme">
            <h2 class="reveal-title" id="admissions-intro-title">Highly Selective Admission</h2>
          </div>

          <div class="admissions-page-intro__content revealme-group">
            <p class="revealme">
              EXIMIUS Fellows are passionate, curious, hardworking and committed to making a better, safer world.
              They have distinguished themselves in their graduate studies and are ready to embrace a demanding and
              accelerated professional journey.
            </p>
            <p class="revealme">
              Admission is competitive. Only those demonstrating technical excellence, intellectual discipline, and
              leadership potential will be invited to join the cohort commencing September 2026 in Abu Dhabi.
            </p>
            <p class="revealme">
              If you’re ready to supercharge your career trajectory, EXIMIUS is your opportunity.
            </p>

            <a class="ui-arrow-cta admissions-page-intro__cta revealme" href="/contact">
              <span class="ui-arrow-cta__icon admissions-page-intro__cta-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
              <span class="ui-arrow-cta__label">Apply Now</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="fellows-spotlight video-showcase" aria-labelledby="fellows-spotlight-title">
      <div class="fellows-spotlight__wrap">
        <div class="fellows-spotlight__frame video-showcase__frame revealme">
          <div class="video-showcase__media">
            <iframe class="video-showcase__iframe"
              src="https://player.vimeo.com/video/721495169?background=1&autoplay=1&loop=1&muted=1&controls=0&title=0&byline=0&portrait=0&api=1&player_id=admissions-fellows-video"
              id="admissions-fellows-video" title="EXIMIUS fellows background video" loading="lazy"
              allow="autoplay; fullscreen; picture-in-picture"
              referrerpolicy="strict-origin-when-cross-origin"></iframe>
          </div>

          <div class="video-showcase__overlay"></div>

          <div class="video-showcase__content">
            <button class="video-showcase__play" type="button" aria-pressed="true" aria-label="Pause video">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="48" height="48" fill="#FF5722" />
                <mask id="mask0_admissions_video" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12"
                  width="24" height="24">
                  <rect x="12" y="12" width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_admissions_video)">
                  <path
                    d="M22.1923 27.6152L27.6152 24L22.1923 20.3848V27.6152ZM20.2973 32.7558C19.1414 32.2596 18.1359 31.5839 17.2808 30.7288C16.4256 29.8738 15.7483 28.8699 15.249 27.7172C14.7497 26.5647 14.5 25.3321 14.5 24.0192C14.5 23.3602 14.5654 22.7122 14.6962 22.075C14.8269 21.4378 15.0179 20.8167 15.2693 20.2115L16.4345 21.377C16.2948 21.8103 16.1875 22.2443 16.1125 22.6788C16.0375 23.1134 16 23.5538 16 24C16 26.2333 16.775 28.125 18.325 29.675C19.875 31.225 21.7667 32 24 32C26.2333 32 28.125 31.225 29.675 29.675C31.225 28.125 32 26.2333 32 24C32 21.7667 31.225 19.875 29.675 18.325C28.125 16.775 26.2333 16 24 16C23.55 16 23.1093 16.0375 22.678 16.1125C22.2465 16.1875 21.8193 16.2948 21.3963 16.4345L20.2463 15.2848C20.8424 15.0296 21.4433 14.835 22.049 14.701C22.6548 14.567 23.2859 14.5 23.9423 14.5C25.2616 14.5 26.5023 14.7481 27.6645 15.2443C28.8267 15.7404 29.8385 16.4177 30.7 17.276C31.5615 18.1343 32.2435 19.1414 32.746 20.2973C33.2487 21.4529 33.5 22.6872 33.5 24C33.5 25.3128 33.2503 26.5471 32.751 27.7028C32.2517 28.8586 31.5744 29.8641 30.7193 30.7193C29.8641 31.5744 28.8586 32.2517 27.7028 32.751C26.5471 33.2503 25.3128 33.5 24 33.5C22.6872 33.5 21.4529 33.2519 20.2973 32.7558ZM16.8702 18.553C16.6363 18.319 16.5193 18.0385 16.5193 17.7115C16.5193 17.3847 16.6363 17.1042 16.8702 16.8702C17.1042 16.6363 17.3847 16.5193 17.7115 16.5193C18.0385 16.5193 18.319 16.6363 18.553 16.8702C18.7868 17.1042 18.9037 17.3847 18.9037 17.7115C18.9037 18.0385 18.7868 18.319 18.553 18.553C18.319 18.7868 18.0385 18.9038 17.7115 18.9038C17.3847 18.9038 17.1042 18.7868 16.8702 18.553Z"
                    fill="white" />
                </g>
              </svg>

              <span class="video-showcase__play-label">Pause video</span>
            </button>
          </div>

          <div class="fellows-spotlight__content">
            <div class="container">
              <div class="fellows-spotlight__divider" aria-hidden="true"></div>

              <div class="fellows-spotlight__bottom">
                <h2 class="fellows-spotlight__title reveal-title" id="fellows-spotlight-title">Hear from our fellows</h2>

                <div class="fellows-spotlight__meta revealme">
                  <p class="fellows-spotlight__name">Saad Al-Mansouri</p>
                  <p class="fellows-spotlight__role">Cybersecurity Specialist</p>
                  <p class="fellows-spotlight__cohort">EXIMIUS Fellow 2025</p>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

    <section class="contact-section" aria-labelledby="contact-title">
      <div class="container">
        <div class="contact-section__panel revealme">
          <div class="contact-section__grid">
            <div class="contact-section__intro">
              <p class="contact-section__eyebrow reveal-words">( Contact Us )</p>

              <div class="contact-section__copy">
                <h3 class="contact-section__title reveal-title" id="contact-title">Have a question or want to get in
                  touch?</h3>
                <p class="reveal-words">Fill out the form below and our team will get back to you shortly.</p>
              </div>
            </div>

            <a class="ui-arrow-cta contact-section__cta" href="/contact">
              <span class="ui-arrow-cta__icon contact-section__cta-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
              <span class="ui-arrow-cta__label">Contact Us</span>
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
