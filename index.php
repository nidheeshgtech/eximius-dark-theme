<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="EXIMIUS Fellowship — A highly selective, 12-month development program for exceptional university graduates." />

  <title>EXIMIUS Fellowship</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap"
    rel="stylesheet" />

  <link rel="preload" as="image" href="assets/images/ex_banner_01.webp" />
  <link rel="preload" as="image" href="assets/images/ex_banner_02.webp" />

  <link rel="stylesheet" href="assets/vendor/css/lenis.css" />
  <link rel="stylesheet" href="assets/vendor/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

  <?php include __DIR__ . '/inc/header.php'; ?>

  <main id="main-content">
    <section class="banner" aria-label="Eximius Fellowship banner">
      <div class="banner__slider swiper js-banner-slider">


        <div class="swiper-wrapper">

          <div class="swiper-slide banner__slide">
            <div class="banner__image" style="background-image: url('assets/images/ex_banner_01.webp');"
              aria-hidden="true"></div>
          </div>

          <div class="swiper-slide banner__slide">
            <div class="banner__image" style="background-image: url('assets/images/ex_banner_02.webp');"
              aria-hidden="true"></div>
          </div>

        </div>


      </div>

      <div class="banner__overlay"></div>

      <div class="container banner__content">
        <div class="banner__headline-wrap">
          <h1 class="banner__title reveal-title">EXIMIUS FELLOWSHIP</h1>
        </div>

        <div class="banner__bottom">
          <div class="banner__divider" aria-hidden="true"></div>

          <div class="banner__meta">
            <p class="banner__eyebrow reveal-words">Engineer the Future</p>

            <div class="banner__description">
              <p class="reveal-words">A highly selective, 12-month development program for exceptional university
                graduates.</p>
              <p class="reveal-words">Real challenges. Real stakes. Real opportunity. Real impact. Learn to lead in a
                dynamic future.</p>
              <p class="reveal-words">EXIMIUS Fellows graduate with advanced engineering and technical expertise and
                strong commercial
                acumen.</p>
            </div>

            <a class="ui-arrow-cta banner__cta revealme" href="#">
              <span class="ui-arrow-cta__icon banner__cta-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
              <span class="ui-arrow-cta__label">Explore</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="video-showcase" aria-label="Eximius introduction video">
      <div class="container">
        <div class="video-showcase__frame revealme">
          <div class="video-showcase__media">
            <iframe class="video-showcase__iframe"
              src="https://player.vimeo.com/video/721495169?background=1&autoplay=1&loop=1&muted=1&controls=0&title=0&byline=0&portrait=0&api=1&player_id=eximius-video"
              id="eximius-video" title="Eximius background video" loading="lazy"
              allow="autoplay; fullscreen; picture-in-picture"
              referrerpolicy="strict-origin-when-cross-origin"></iframe>
          </div>

          <div class="video-showcase__overlay"></div>

          <div class="video-showcase__content">
            <button class="video-showcase__play" type="button" aria-pressed="true" aria-label="Pause video">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="48" height="48" fill="#FF5722" />
                <mask id="mask0_2456_181" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12" width="24"
                  height="24">
                  <rect x="12" y="12" width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_2456_181)">
                  <path
                    d="M22.1923 27.6152L27.6152 24L22.1923 20.3848V27.6152ZM20.2973 32.7558C19.1414 32.2596 18.1359 31.5839 17.2808 30.7288C16.4256 29.8738 15.7483 28.8699 15.249 27.7172C14.7497 26.5647 14.5 25.3321 14.5 24.0192C14.5 23.3602 14.5654 22.7122 14.6962 22.075C14.8269 21.4378 15.0179 20.8167 15.2693 20.2115L16.4345 21.377C16.2948 21.8103 16.1875 22.2443 16.1125 22.6788C16.0375 23.1134 16 23.5538 16 24C16 26.2333 16.775 28.125 18.325 29.675C19.875 31.225 21.7667 32 24 32C26.2333 32 28.125 31.225 29.675 29.675C31.225 28.125 32 26.2333 32 24C32 21.7667 31.225 19.875 29.675 18.325C28.125 16.775 26.2333 16 24 16C23.55 16 23.1093 16.0375 22.678 16.1125C22.2465 16.1875 21.8193 16.2948 21.3963 16.4345L20.2463 15.2848C20.8424 15.0296 21.4433 14.835 22.049 14.701C22.6548 14.567 23.2859 14.5 23.9423 14.5C25.2616 14.5 26.5023 14.7481 27.6645 15.2443C28.8267 15.7404 29.8385 16.4177 30.7 17.276C31.5615 18.1343 32.2435 19.1414 32.746 20.2973C33.2487 21.4529 33.5 22.6872 33.5 24C33.5 25.3128 33.2503 26.5471 32.751 27.7028C32.2517 28.8586 31.5744 29.8641 30.7193 30.7193C29.8641 31.5744 28.8586 32.2517 27.7028 32.751C26.5471 33.2503 25.3128 33.5 24 33.5C22.6872 33.5 21.4529 33.2519 20.2973 32.7558ZM16.8702 18.553C16.6363 18.319 16.5193 18.0385 16.5193 17.7115C16.5193 17.3847 16.6363 17.1042 16.8702 16.8702C17.1042 16.6363 17.3847 16.5193 17.7115 16.5193C18.0385 16.5193 18.319 16.6363 18.553 16.8702C18.7868 17.1042 18.9037 17.3847 18.9037 17.7115C18.9037 18.0385 18.7868 18.319 18.553 18.553C18.319 18.7868 18.0385 18.9038 17.7115 18.9038C17.3847 18.9038 17.1042 18.7868 16.8702 18.553Z"
                    fill="white" />
                </g>
              </svg>

              <span class="video-showcase__play-label">Pause video</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="about-section" aria-labelledby="about-title">
      <div class="container">
        <div class="about-section__grid">
          <div class="about-section__intro revealme">
            <p class="about-section__eyebrow reveal-words">( About )</p>
            <h2 class="about-section__title reveal-title" id="about-title">What is EXIMIUS?</h2>
          </div>

          <div class="about-section__body revealme-group">
            <p class="revealme">Established by UAE-based advanced technology and defence company EDGE Group, EXIMIUS
              fosters technical
              mastery, commercial expertise, entrepreneurial vision, and creative ingenuity.</p>
            <p class="revealme">Unique in its blended industrial offering, this demanding, one-year rotational
              program includes a 15-week
              placement within an EDGE Group cluster and an 18-week technology challenge to deliver a solution
              demonstrating tangible commercial value.</p>
            <p class="revealme">This real-world experience is complemented with training modules on leadership,
              design thinking, and soft
              and business skills, as well as mentoring, networking, and cultural excursions.</p>

            <a class="ui-arrow-cta about-section__cta revealme" href="#">
              <span class="ui-arrow-cta__icon about-section__cta-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
              <span class="ui-arrow-cta__label">Learn more</span>
            </a>
          </div>

          <div class="about-section__media revealme">
            <img class="about-section__image" src="assets/images/about-imge.webp"
              alt="Students participating in an EXIMIUS learning environment" />
          </div>
        </div>
      </div>
    </section>

    <section class="where-section" aria-labelledby="where-title">
      <div class="where-section__bg" style="background-image: url('assets/images/where-exi.webp');" aria-hidden="true">
      </div>
      <div class="where-section__overlay" aria-hidden="true"></div>

      <div class="container where-section__content">
        <div class="where-section__divider revealme" aria-hidden="true"></div>

        <div class="where-section__grid">
          <div class="where-section__intro revealme">
            <h2 class="where-section__title reveal-title" id="where-title">Where is EXIMIUS?</h2>
          </div>

          <div class="where-section__body revealme-group">
            <p class="revealme">EXIMIUS is based in one of the world’s most international and future-focused
              countries. The UAE is at the
              forefront of AI research and infrastructure development and has made AI a whole-of-government priority. An
              ambitious country in a complex region, the UAE is moving rapidly but smartly to build one of the most
              resilient, innovative and dynamic economies in the world.</p>
            <p class="revealme">Operating within EDGE Group, and among a workforce of more than 70 nationalities,
              EXIMIUS Fellows work on
              the most advanced programs, leveraging technologies such as autonomous systems, electro-optics, AI,
              material science, and advanced propulsion.</p>
            <p class="revealme">EDGE Group operates across seven clusters: Platforms &amp; Systems, Weapons &amp;
              Systems, Space &amp;
              Cyber Technologies, EDGE Commercial, Technology &amp; Innovation, Research &amp; Development, and Homeland
              Security.</p>
          </div>

          <a class="ui-arrow-cta where-section__cta revealme" href="#">
            <span class="ui-arrow-cta__icon where-section__cta-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
              </svg>
            </span>
            <span class="ui-arrow-cta__label">Learn more</span>
          </a>
        </div>
      </div>
    </section>

    <section class="opportunities-section" aria-labelledby="opportunities-title">
      <div class="container">
        <div class="opportunities-section__header">
          <div class="opportunities-section__heading revealme">
            <p class="opportunities-section__eyebrow reveal-words">( Opportunities )</p>
            <h2 class="opportunities-section__title reveal-title" id="opportunities-title">Opportunities Across Edge
              Solutions</h2>
          </div>

          <div class="opportunities-section__intro revealme">
            <p class="reveal-words">EXIMIUS Fellows benefit from the broad fields represented by EDGE Group clusters.
              These clusters provide EXIMIUS with complex technical challenges, mentors, and domain expertise, ensuring
              Fellows are immersed in real-world, mission-critical environments.</p>
          </div>
        </div>

        <div class="opportunities-section__grid revealme-group">
          <article class="opportunities-section__card revealme">
            <span class="opportunities-section__number">01</span>
            <h3 class="opportunities-section__card-title reveal-title">Platforms &amp; Systems</h3>
          </article>
          <article class="opportunities-section__card revealme">
            <span class="opportunities-section__number">02</span>
            <h3 class="opportunities-section__card-title reveal-title">Missiles &amp; Weapons</h3>
          </article>
          <article class="opportunities-section__card revealme">
            <span class="opportunities-section__number">03</span>
            <h3 class="opportunities-section__card-title reveal-title">Space &amp; Cyber Technologies</h3>
          </article>
          <article class="opportunities-section__card revealme">
            <span class="opportunities-section__number">04</span>
            <h3 class="opportunities-section__card-title reveal-title">Trading &amp; Mission Support</h3>
          </article>
          <article class="opportunities-section__card revealme">
            <span class="opportunities-section__number">05</span>
            <h3 class="opportunities-section__card-title reveal-title">Technology &amp; Innovation</h3>
          </article>
          <article class="opportunities-section__card revealme">
            <span class="opportunities-section__number">06</span>
            <h3 class="opportunities-section__card-title reveal-title">Research &amp; Development</h3>
          </article>
          <article class="opportunities-section__card revealme">
            <span class="opportunities-section__number">07</span>
            <h3 class="opportunities-section__card-title reveal-title">Homeland Security</h3>
          </article>

          <div class="opportunities-section__cta-wrap revealme">
            <a class="ui-arrow-cta opportunities-section__cta" href="#">
              <span class="ui-arrow-cta__icon opportunities-section__cta-icon" aria-hidden="true">
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

    <section class="admissions-section" aria-labelledby="admissions-title">
      <div class="admissions-section__frame revealme">
        <div class="admissions-section__bg" style="background-image: url('assets/images/students-discussing.webp');"
          aria-hidden="true"></div>
        <div class="admissions-section__overlay" aria-hidden="true"></div>

        <div class="admissions-section__content">
          <div class="container">
            <div class="admissions-section__divider" aria-hidden="true"></div>

            <div class="admissions-section__grid">
              <div class="admissions-section__intro">
                <p class="admissions-section__eyebrow reveal-words">( Admissions )</p>

                <div class="admissions-section__copy">
                  <h3 class="admissions-section__title reveal-title" id="admissions-title">Apply to EXIMIUS</h3>
                  <p class="reveal-words">Apply to join a globally interconnected community of Eximius Scholars.</p>
                </div>
              </div>

              <a class="ui-arrow-cta admissions-section__cta revealme" href="#">
                <span class="ui-arrow-cta__icon admissions-section__cta-icon" aria-hidden="true">
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

            <a class="ui-arrow-cta contact-section__cta" href="#">
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

  <footer class="site-footer" id="site-footer">
    <div class="container p-0">
      <div class="site-footer__inner">
        <div class="site-footer__top">
          <a class="site-footer__brand" href="#main-content" aria-label="EXIMIUS home">
            <img class="site-footer__logo" src="assets/images/header-logo.svg" alt="EXIMIUS" />
          </a>

          <div class="site-footer__subscribe revealme-group">
            <h4 class="site-footer__subscribe-title revealme">Get Program Updates</h4>

            <form class="site-footer__form revealme" action="#" method="post">
              <label class="visually-hidden" for="footer-email">Email Address</label>
              <input class="site-footer__input" id="footer-email" name="email" type="email" placeholder="Email Address"
                autocomplete="email" />

              <button class="site-footer__subscribe-button" type="submit">
                <span class="site-footer__subscribe-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M12 5L19 12L12 19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <span>Subscribe</span>
              </button>
            </form>
          </div>
        </div>

        <div class="site-footer__divider" aria-hidden="true"></div>

        <div class="site-footer__middle">
          <div class="site-footer__menu revealme-group">
            <div class="site-footer__section-head revealme">
              <p class="site-footer__section-label">MENU</p>
              <span class="site-footer__section-accent" aria-hidden="true"></span>
            </div>

            <nav class="site-footer__nav revealme" aria-label="Footer menu">
              <a href="#main-content">Home</a>
              <a href="#about-title">About</a>
              <a href="#opportunities-title">Opportunities</a>
              <a href="#where-title">Solutions</a>
              <a href="#site-footer">Media</a>
              <a href="#admissions-title">Admissions</a>
              <a href="#contact-title">Contact Us</a>
            </nav>
          </div>

          <div class="site-footer__reach revealme-group">
            <div class="site-footer__section-head revealme">
              <p class="site-footer__section-label">REACH US</p>
              <span class="site-footer__section-accent" aria-hidden="true"></span>
            </div>

            <div class="site-footer__reach-grid revealme">
              <address class="site-footer__address">
                Head Office EXIMIUS<br />
                Channel Street, P.O. Box: 43221<br />
                Abu Dhabi, UAE.
              </address>

              <div class="site-footer__contact-list">
                <a class="site-footer__contact-item" href="mailto:hello@eximius.com">
                  <span class="site-footer__contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M4 7.5L11.04 12.78C11.396 13.047 11.574 13.181 11.77 13.233C11.943 13.279 12.125 13.279 12.298 13.233C12.494 13.181 12.672 13.047 13.028 12.78L20 7.55M8.2 19H15.8C17.48 19 18.32 19 18.962 18.673C19.527 18.385 19.985 17.927 20.273 17.362C20.6 16.72 20.6 15.88 20.6 14.2V9.8C20.6 8.12 20.6 7.28 20.273 6.638C19.985 6.073 19.527 5.615 18.962 5.327C18.32 5 17.48 5 15.8 5H8.2C6.52 5 5.68 5 5.038 5.327C4.473 5.615 4.015 6.073 3.727 6.638C3.4 7.28 3.4 8.12 3.4 9.8V14.2C3.4 15.88 3.4 16.72 3.727 17.362C4.015 17.927 4.473 18.385 5.038 18.673C5.68 19 6.52 19 8.2 19Z"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </span>
                  <span>hello@eximius.com</span>
                </a>

                <a class="site-footer__contact-item" href="tel:+91780018001">
                  <span class="site-footer__contact-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M21 16.92V19.92C21 20.367 20.822 20.795 20.505 21.111C20.189 21.428 19.761 21.606 19.314 21.606C16.815 21.454 14.387 20.725 12.213 19.473C10.191 18.316 8.477 16.602 7.32 14.58C6.063 12.398 5.334 9.959 5.187 7.449C5.185 7.005 5.361 6.579 5.675 6.263C5.99 5.946 6.416 5.767 6.86 5.766H9.86C10.653 5.758 11.349 6.302 11.532 7.074C11.696 7.768 11.938 8.441 12.253 9.081C12.456 9.493 12.355 9.99 12.006 10.29L10.737 11.381C11.584 12.872 12.82 14.108 14.311 14.955L15.402 13.686C15.702 13.337 16.199 13.236 16.611 13.439C17.25 13.753 17.923 13.995 18.618 14.16C19.395 14.344 19.942 15.048 19.93 15.846L21 16.92Z"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </span>
                  <span>+91 78001 8001</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="site-footer__divider" aria-hidden="true"></div>

        <div class="site-footer__bottom">
          <p>© 2026 EDGE PJSC Group. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
  <script src="assets/vendor/js/swiper-bundle.min.js"></script>
  <script src="assets/vendor/js/lenis.min.js"></script>
  <script src="assets/js/main.js" defer></script>
</body>

</html>