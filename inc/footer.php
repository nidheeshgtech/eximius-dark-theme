<?php
$host = $_SERVER['HTTP_HOST'] ?? '';
$isLocalHost = str_contains($host, 'localhost') || str_contains($host, '127.0.0.1');
$routes = [
  'home' => $isLocalHost ? '/eximius-dark/index.php' : '/',
  'about' => $isLocalHost ? '/eximius-dark/about.php' : '/about',
  'opportunities' => $isLocalHost ? '/eximius-dark/opportunities.php' : '/opportunities',
  'admissions' => $isLocalHost ? '/eximius-dark/admissions.php' : '/admissions',
  'contact' => $isLocalHost ? '/eximius-dark/contact.php' : '/contact',
];
?>
<footer class="site-footer" id="site-footer">
  <div class="container p-0">
    <div class="site-footer__inner">
      <div class="site-footer__top">
        <a class="site-footer__brand" href="<?= htmlspecialchars($routes['home'], ENT_QUOTES, 'UTF-8'); ?>"
          aria-label="EXIMIUS home">
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
            <a href="<?= htmlspecialchars($routes['home'], ENT_QUOTES, 'UTF-8'); ?>">Home</a>
            <a href="<?= htmlspecialchars($routes['about'], ENT_QUOTES, 'UTF-8'); ?>">About</a>
            <a href="<?= htmlspecialchars($routes['opportunities'], ENT_QUOTES, 'UTF-8'); ?>">Opportunities</a>
            <a href="<?= htmlspecialchars($routes['admissions'], ENT_QUOTES, 'UTF-8'); ?>">Admissions</a>
            <a href="<?= htmlspecialchars($routes['contact'], ENT_QUOTES, 'UTF-8'); ?>">Contact Us</a>
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
        <button class="site-footer__to-top" type="button" data-scroll-top aria-label="Scroll to top">
          <span class="site-footer__to-top-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 19V5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M5 12L12 5L19 12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>
          <span>Back to top</span>
        </button>
        <p>© 2026 EDGE PJSC Group. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>