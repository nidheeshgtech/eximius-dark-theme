<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Get in touch with EXIMIUS." />
  <title>Contact Us | EXIMIUS</title>

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
    $pageBannerTitle = 'CONTACT US';
    $pageBannerImage = 'assets/images/exi_mission.webp';
    $pageBannerId = 'contact-page-title';
    include __DIR__ . '/inc/inner-banner.php';
    ?>

    <section class="contact-page-section" aria-labelledby="contact-section-title">
      <div class="container">
        <div class="contact-page-section__panel revealme">
          <div class="contact-page-section__layout">
            <div class="contact-page-section__visual revealme">
              <img class="contact-page-section__image" src="assets/images/contact_us_bg.webp"
                alt="EXIMIUS team collaboration" />
              <div class="contact-page-section__visual-overlay"></div>
              <div class="contact-page-section__visual-copy">
                <p class="contact-page-section__visual-eyebrow reveal-words">Connect With EXIMIUS</p>
                <p class="contact-page-section__visual-text revealme">Reach out to learn more about opportunities,
                  admissions, and how EXIMIUS is shaping future-ready leaders.</p>
              </div>
            </div>

            <div class="contact-page-section__form-wrap">
              <h2 class="contact-page-section__heading reveal-title" id="contact-section-title">Contact Us</h2>
              <p class="contact-page-section__intro revealme">
                Have a question or want to get in touch?<br />
                Fill out the form below and our team will get back to you shortly.
              </p>

              <p class="contact-page-section__eyebrow reveal-words">Contact Details</p>

              <form class="contact-page-section__form revealme-group" action="#" method="post" novalidate>
                <div class="contact-page-section__field revealme">
                  <label class="contact-page-section__label" for="contact-name">Name</label>
                  <input class="contact-page-section__input" id="contact-name" name="name" type="text"
                    placeholder="Enter your full name" />
                  <p class="contact-page-section__error">Name is required</p>
                </div>

                <div class="contact-page-section__field revealme">
                  <label class="contact-page-section__label" for="contact-email">Email Address</label>
                  <input class="contact-page-section__input" id="contact-email" name="email" type="email"
                    placeholder="your.email@example.com" />
                  <p class="contact-page-section__error">Email is required</p>
                </div>

                <div class="contact-page-section__field revealme">
                  <label class="contact-page-section__label" for="contact-subject">Subject</label>
                  <input class="contact-page-section__input" id="contact-subject" name="subject" type="text"
                    placeholder="What can we help you with?" />
                  <p class="contact-page-section__error">Subject is required</p>
                </div>

                <div class="contact-page-section__field revealme">
                  <label class="contact-page-section__label" for="contact-message">Message</label>
                  <textarea class="contact-page-section__textarea" id="contact-message" name="message"
                    placeholder="Tell us more about your inquiry..."></textarea>
                  <p class="contact-page-section__error">Message is required</p>
                </div>

                <div class="contact-page-section__actions revealme">
                  <button class="ui-arrow-cta contact-page-section__submit" type="submit">
                    <span class="ui-arrow-cta__icon contact-page-section__submit-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                        <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                      </svg>
                    </span>
                    <span class="ui-arrow-cta__label">Send Message</span>
                  </button>
                </div>
              </form>
            </div>
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