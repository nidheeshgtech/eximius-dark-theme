// main.js

// ── Lenis smooth scroll ────────────────────────────────────
const lenis = new Lenis({
  duration: 1.3,
  easing: function (t) { return Math.min(1, 1.001 - Math.pow(2, -10 * t)); },
  smoothWheel: true,
  wheelMultiplier: 1,
  touchMultiplier: 1.5,
});

if (typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined') {
  window.gsap.registerPlugin(window.ScrollTrigger);
  lenis.on('scroll', window.ScrollTrigger.update);
  window.gsap.ticker.add(function (time) {
    lenis.raf(time * 1000);
  });
  window.gsap.ticker.lagSmoothing(0);
} else {
  function lenisRaf(time) {
    lenis.raf(time);
    requestAnimationFrame(lenisRaf);
  }
  requestAnimationFrame(lenisRaf);
}

// ── Page setup ────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
  const hasGsapScroll = typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined';
  const siteHeader = document.querySelector('.site-header');
  const navToggle = document.querySelector('.site-header__toggle');
  const bannerSlider = document.querySelector('.js-banner-slider');
  const videoFrame = document.querySelector('.video-showcase');
  const videoToggle = document.querySelector('.video-showcase__play');
  const videoToggleLabel = document.querySelector('.video-showcase__play-label');
  const videoIframe = document.querySelector('.video-showcase__iframe');
  const innerPageBannerImage = document.querySelector('.inner-page-banner__image');
  const accordionRoots = document.querySelectorAll('[data-accordion]');
  const partnerStack = document.querySelector('[data-partner-stack]');
  const partnerCards = document.querySelectorAll('.partner-card');
  const opportunitiesShowcase = document.querySelector('[data-opportunities-showcase]');
  const videoMedia = document.querySelector('.video-showcase__media');
  const aboutImage = document.querySelector('.about-section__image');
  const whereBackground = document.querySelector('.where-section__bg');
  const admissionsBackground = document.querySelector('.admissions-section__bg');
  const opportunitiesCards = document.querySelectorAll('.opportunities-section__card');
  const revealItems = document.querySelectorAll('.revealme');
  const revealGroups = document.querySelectorAll('.revealme-group');
  const revealTitles = document.querySelectorAll('.reveal-title');
  const revealWords = document.querySelectorAll('.reveal-words');
  const revealTexts = document.querySelectorAll('.reveal-text');
  const scrollTopButton = document.querySelector('[data-scroll-top]');
  const showRevealItem = (item) => {
    item.style.removeProperty('opacity');
    item.style.removeProperty('transform');
    item.style.removeProperty('translate');
    item.style.removeProperty('rotate');
    item.style.removeProperty('scale');
    item.classList.add('is-visible');
  };

  if (hasGsapScroll && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const { gsap, ScrollTrigger } = window;

    if (innerPageBannerImage) {
      gsap.to(innerPageBannerImage, {
        yPercent: 8,
        scale: 1.14,
        ease: 'none',
        scrollTrigger: {
          trigger: '.inner-page-banner',
          start: 'top top',
          end: 'bottom top',
          scrub: 1.1,
        },
      });
    }

    if (videoMedia) {
      gsap.fromTo(videoMedia, {
        yPercent: -4,
        scale: 1.03,
      }, {
        yPercent: 4,
        scale: 1.08,
        ease: 'none',
        scrollTrigger: {
          trigger: '.video-showcase',
          start: 'top bottom',
          end: 'bottom top',
          scrub: 1.15,
        },
      });
    }

    if (aboutImage) {
      gsap.fromTo(aboutImage, {
        yPercent: -16,
        scale: 1.18,
      }, {
        yPercent: 16,
        scale: 1.28,
        ease: 'none',
        scrollTrigger: {
          trigger: '.about-section',
          start: 'top 96%',
          end: 'bottom 4%',
          scrub: 2.6,
        },
      });
    }

    if (whereBackground) {
      gsap.fromTo(whereBackground, {
        yPercent: -16,
        scale: 1.18,
      }, {
        yPercent: 16,
        scale: 1.28,
        ease: 'none',
        scrollTrigger: {
          trigger: '.where-section',
          start: 'top 96%',
          end: 'bottom 4%',
          scrub: 2.6,
        },
      });
    }

    if (admissionsBackground) {
      gsap.fromTo(admissionsBackground, {
        yPercent: 16,
        scale: 1.18,
      }, {
        yPercent: -16,
        scale: 1.28,
        ease: 'none',
        scrollTrigger: {
          trigger: '.admissions-section',
          start: 'top 96%',
          end: 'bottom 4%',
          scrub: 2.6,
        },
      });
    }

    ScrollTrigger.refresh();
  }

  revealTitles.forEach((title) => {
    const text = (title.textContent || '').trim();

    if (!text || title.dataset.splitReady === 'true') {
      return;
    }

    const words = text.split(/\s+/);
    title.dataset.splitReady = 'true';
    title.setAttribute('aria-label', text);
    title.textContent = '';

    words.forEach((word, index) => {
      const wordSpan = document.createElement('span');
      wordSpan.className = 'reveal-title__word';
      wordSpan.textContent = word;
      wordSpan.style.transitionDelay = `${index * 130}ms`;
      title.appendChild(wordSpan);

      if (index < words.length - 1) {
        const space = document.createElement('span');
        space.className = 'reveal-title__space';
        space.setAttribute('aria-hidden', 'true');
        space.textContent = ' ';
        title.appendChild(space);
      }
    });
  });

  revealWords.forEach((textBlock) => {
    const text = (textBlock.textContent || '').trim();

    if (!text || textBlock.dataset.splitReady === 'true') {
      return;
    }

    const words = text.split(/\s+/);
    textBlock.dataset.splitReady = 'true';
    textBlock.setAttribute('aria-label', text);
    textBlock.textContent = '';

    words.forEach((word, index) => {
      const wordSpan = document.createElement('span');
      wordSpan.className = 'reveal-words__word';
      wordSpan.textContent = word;
      wordSpan.style.transitionDelay = `${index * 55}ms`;
      textBlock.appendChild(wordSpan);

      if (index < words.length - 1) {
        const space = document.createElement('span');
        space.className = 'reveal-words__space';
        space.setAttribute('aria-hidden', 'true');
        space.textContent = ' ';
        textBlock.appendChild(space);
      }
    });
  });

  if (siteHeader && navToggle) {
    const navLinks = siteHeader.querySelectorAll('.site-header__link, .site-header__cta');
    const scrollThreshold = 36;
    const hideThreshold = 140;
    let lastScrollY = window.scrollY || 0;
    const syncHeaderScrollState = (scrollY = window.scrollY || 0) => {
      siteHeader.classList.toggle('is-scrolled', scrollY > scrollThreshold);

      if (siteHeader.classList.contains('is-open')) {
        siteHeader.classList.remove('is-hidden');
        lastScrollY = scrollY;
        return;
      }

      if (scrollY <= hideThreshold) {
        siteHeader.classList.remove('is-hidden');
      } else if (scrollY > lastScrollY + 6) {
        siteHeader.classList.add('is-hidden');
      } else if (scrollY < lastScrollY - 6) {
        siteHeader.classList.remove('is-hidden');
      }

      lastScrollY = scrollY;
    };

    syncHeaderScrollState();

    navToggle.addEventListener('click', () => {
      const isOpen = siteHeader.classList.toggle('is-open');
      siteHeader.classList.remove('is-hidden');
      navToggle.setAttribute('aria-expanded', String(isOpen));
      navToggle.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
    });

    navLinks.forEach((link) => {
      link.addEventListener('click', () => {
        siteHeader.classList.remove('is-open');
        siteHeader.classList.remove('is-hidden');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Open navigation menu');
      });
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 1199.98) {
        siteHeader.classList.remove('is-open');
        siteHeader.classList.remove('is-hidden');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Open navigation menu');
      }
    });

    if (typeof lenis !== 'undefined' && typeof lenis.on === 'function') {
      lenis.on('scroll', ({ scroll }) => {
        syncHeaderScrollState(scroll);
      });
    } else {
      window.addEventListener('scroll', () => {
        syncHeaderScrollState();
      }, { passive: true });
    }
  }

  if (bannerSlider) {
    const bannerSlides = bannerSlider.querySelectorAll('.banner__slide');
    let current = 0;

    const goTo = (index) => {
      bannerSlides[current].classList.remove('is-active');
      current = (index + bannerSlides.length) % bannerSlides.length;
      bannerSlides[current].classList.add('is-active');
    };

    setInterval(() => goTo(current + 1), 5500);
  }

  if (scrollTopButton) {
    const toggleScrollTopButton = (scrollY = window.scrollY || 0) => {
      const showThreshold = window.innerHeight * 0.8;
      scrollTopButton.classList.toggle('is-visible', scrollY >= showThreshold);
    };

    toggleScrollTopButton();

    if (typeof lenis !== 'undefined' && typeof lenis.on === 'function') {
      lenis.on('scroll', ({ scroll }) => {
        toggleScrollTopButton(scroll);
      });
    } else {
      window.addEventListener('scroll', () => {
        toggleScrollTopButton();
      }, { passive: true });
    }

    scrollTopButton.addEventListener('click', () => {
      if (typeof lenis !== 'undefined' && typeof lenis.scrollTo === 'function') {
        lenis.scrollTo(0, { duration: 1.15 });
      } else {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    });
  }

  if (videoFrame && videoToggle && videoToggleLabel && videoIframe) {
    let isVideoPlaying = true;
    const vimeoOrigin = 'https://player.vimeo.com';

    const setVideoButtonState = (playing) => {
      isVideoPlaying = playing;
      videoFrame.classList.toggle('is-paused', !playing);
      videoToggle.setAttribute('aria-pressed', String(playing));
      videoToggle.setAttribute('aria-label', playing ? 'Pause video' : 'Play video');
      videoToggleLabel.textContent = playing ? 'Pause video' : 'Play video';
    };

    const sendVimeoCommand = (method) => {
      if (!videoIframe.contentWindow) {
        return;
      }

      videoIframe.contentWindow.postMessage(
        JSON.stringify({
          method,
        }),
        vimeoOrigin
      );
    };

    setVideoButtonState(true);

    videoToggle.addEventListener('click', () => {
      if (isVideoPlaying) {
        sendVimeoCommand('pause');
        setVideoButtonState(false);
      } else {
        sendVimeoCommand('play');
        setVideoButtonState(true);
      }
    });

    videoFrame.addEventListener('mouseleave', () => {
      videoToggle.blur();
    });
  }

  if (accordionRoots.length) {
    accordionRoots.forEach((accordion) => {
      const items = accordion.querySelectorAll('.journey-phase');

      const animatePanel = (panel, open) => {
        if (!panel) {
          return;
        }

        if (open) {
          panel.style.display = 'block';
          const content = panel.querySelector('.journey-phase__content');
          const targetHeight = content ? content.getBoundingClientRect().height : panel.scrollHeight;
          panel.style.height = '0px';
          panel.style.opacity = '0';
          requestAnimationFrame(() => {
            panel.style.height = `${targetHeight}px`;
            panel.style.opacity = '1';
          });
        } else {
          const content = panel.querySelector('.journey-phase__content');
          const targetHeight = content ? content.getBoundingClientRect().height : panel.scrollHeight;
          const currentHeight = panel.getBoundingClientRect().height || targetHeight;
          panel.style.height = `${currentHeight}px`;
          panel.style.opacity = '1';
          panel.getBoundingClientRect();
          requestAnimationFrame(() => {
            panel.style.height = '0px';
            panel.style.opacity = '0';
          });
        }
      };

      const setItemState = (item, open, immediate = false) => {
        const toggle = item.querySelector('.journey-phase__toggle');
        const panel = item.querySelector('.journey-phase__panel');

        item.classList.toggle('is-open', open);
        toggle?.setAttribute('aria-expanded', String(open));

        if (panel) {
          if (immediate) {
            panel.style.display = open ? 'block' : 'none';
            panel.style.height = open ? 'auto' : '0px';
            panel.style.opacity = open ? '1' : '0';
          } else {
            animatePanel(panel, open);
          }
        }
      };

      items.forEach((item) => {
        const panel = item.querySelector('.journey-phase__panel');

        if (panel) {
          panel.addEventListener('transitionend', (event) => {
            if (event.propertyName !== 'height') {
              return;
            }

            if (item.classList.contains('is-open')) {
              panel.style.height = 'auto';
              panel.style.opacity = '1';
              panel.style.display = 'block';
            } else {
              panel.style.display = 'none';
              panel.style.height = '0px';
              panel.style.opacity = '0';
            }
          });
        }
      });

      items.forEach((item) => {
        setItemState(item, item.classList.contains('is-open'), true);
      });

      items.forEach((item) => {
        const toggle = item.querySelector('.journey-phase__toggle');

        toggle?.addEventListener('click', () => {
          const isOpen = item.classList.contains('is-open');

          items.forEach((phase) => {
            if (phase !== item && phase.classList.contains('is-open')) {
              setItemState(phase, false);
            }
          });

          setItemState(item, !isOpen);
        });
      });
    });
  }

  if (partnerCards.length) {
    partnerCards.forEach((card) => {
      const toggle = card.querySelector('.partner-card__toggle');
      const panel = card.querySelector('.partner-card__panel');
      const body = card.querySelector('.partner-card__body');

      const setPartnerState = (target, open, immediate = false) => {
        const targetPanel = target.querySelector('.partner-card__panel');
        const targetBody = target.querySelector('.partner-card__body');
        const targetToggle = target.querySelector('.partner-card__toggle');

        if (!targetPanel || !targetBody) {
          return;
        }

        target.classList.toggle('is-open', open);
        targetToggle?.setAttribute('aria-expanded', String(open));

        if (immediate) {
          targetPanel.style.display = open ? 'block' : 'none';
          targetPanel.style.height = open ? 'auto' : '0px';
          targetPanel.style.opacity = open ? '1' : '0';
          return;
        }

        if (open) {
          targetPanel.style.display = 'block';
          const targetHeight = targetBody.getBoundingClientRect().height;
          targetPanel.style.height = '0px';
          targetPanel.style.opacity = '0';
          requestAnimationFrame(() => {
            targetPanel.style.height = `${targetHeight}px`;
            targetPanel.style.opacity = '1';
          });
        } else {
          const currentHeight = targetPanel.getBoundingClientRect().height || targetBody.getBoundingClientRect().height;
          targetPanel.style.height = `${currentHeight}px`;
          targetPanel.style.opacity = '1';
          targetPanel.getBoundingClientRect();
          requestAnimationFrame(() => {
            targetPanel.style.height = '0px';
            targetPanel.style.opacity = '0';
          });
        }
      };

      if (panel) {
        panel.addEventListener('transitionend', (event) => {
          if (event.propertyName !== 'height') {
            return;
          }

          if (card.classList.contains('is-open')) {
            panel.style.height = 'auto';
            panel.style.opacity = '1';
            panel.style.display = 'block';
          } else {
            panel.style.display = 'none';
            panel.style.height = '0px';
            panel.style.opacity = '0';
          }
        });
      }

      setPartnerState(card, card.classList.contains('is-open'), true);

      toggle?.addEventListener('click', () => {
        const isOpen = card.classList.contains('is-open');

        partnerCards.forEach((item) => {
          if (item !== card && item.classList.contains('is-open')) {
            setPartnerState(item, false);
          }
        });

        setPartnerState(card, !isOpen);
      });
    });
  }

  if (opportunitiesShowcase) {
    const triggers = opportunitiesShowcase.querySelectorAll('[data-opportunity-trigger]');
    const images = opportunitiesShowcase.querySelectorAll('[data-opportunity-image]');
    const copy = opportunitiesShowcase.querySelector('[data-opportunity-copy]');
    const select = opportunitiesShowcase.querySelector('[data-opportunity-select]');
    const prefersTouchSelection = window.matchMedia('(hover: none), (pointer: coarse)').matches;
    const opportunityCopyMap = {
      platforms: 'The Platforms & Systems cluster focuses on the design, manufacture, assembly, repair, overhaul and upgrade across a whole world of air, land and sea platforms and systems, enabling advanced solutions across any terrain, anywhere in the world.',
      missiles: 'The Missile & Weapons cluster develops advanced strike and defence systems, combining precision engineering, systems integration, and mission-ready performance across complex operational requirements.',
      space: 'The Space & Cyber Technologies cluster works across secure communications, digital infrastructure, cyber resilience, and future-ready systems that support high-stakes national capability development.',
      trading: 'The Trading & Mission Support cluster drives mission enablement through logistics, specialist services, operational support, and strategic commercial coordination across critical programs.',
      technology: 'The Technology & Innovation cluster advances next-generation concepts, rapid prototyping, and frontier technologies that shape future capability across EDGE Group environments.',
      research: 'The Research & Development cluster explores breakthrough engineering, experimentation, and applied innovation to solve high-value technical challenges with real commercial and strategic impact.',
      homeland: 'The Homeland Security cluster delivers integrated solutions that support public safety, secure infrastructure, and operational readiness through advanced technologies and resilient system design.',
    };

    const setOpportunity = (key) => {
      triggers.forEach((trigger) => {
        const isActive = trigger.dataset.target === key;
        trigger.classList.toggle('is-active', isActive);
        trigger.setAttribute('aria-pressed', String(isActive));
      });

      if (select && select.value !== key) {
        select.value = key;
      }

      const nextImage = opportunitiesShowcase.querySelector(`[data-opportunity-image="${key}"]`);
      const activeImage = opportunitiesShowcase.querySelector('.opportunities-showcase__image.is-active');

      if (hasGsapScroll && window.gsap && nextImage && activeImage !== nextImage) {
        const { gsap } = window;
        gsap.killTweensOf([...images]);

        gsap.set(nextImage, { autoAlpha: 0, zIndex: 2 });
        nextImage.classList.add('is-active');

        if (activeImage) {
          gsap.to(activeImage, {
            autoAlpha: 0,
            duration: 0.45,
            ease: 'power2.inOut',
            onComplete: () => {
              activeImage.classList.remove('is-active');
              gsap.set(activeImage, { clearProps: 'all' });
            },
          });
        }

        gsap.to(nextImage, {
          autoAlpha: 1,
          duration: 0.65,
          ease: 'power2.inOut',
        });
      } else {
        images.forEach((image) => image.classList.toggle('is-active', image.dataset.opportunityImage === key));
      }

      if (copy) {
        if (hasGsapScroll && window.gsap) {
          window.gsap.to(copy, {
            autoAlpha: 0,
            y: 10,
            duration: 0.18,
            ease: 'power2.out',
            onComplete: () => {
              copy.textContent = opportunityCopyMap[key] || opportunityCopyMap.platforms;
              window.gsap.fromTo(copy, { autoAlpha: 0, y: 10 }, { autoAlpha: 1, y: 0, duration: 0.32, ease: 'power2.out' });
            },
          });
        } else {
          copy.textContent = opportunityCopyMap[key] || opportunityCopyMap.platforms;
        }
      }
    };

    triggers.forEach((trigger) => {
      const handleChange = () => setOpportunity(trigger.dataset.target);
      if (!prefersTouchSelection) {
        trigger.addEventListener('mouseenter', handleChange);
      }
      trigger.addEventListener('focus', handleChange);
      trigger.addEventListener('click', handleChange);
    });

    select?.addEventListener('change', (event) => {
      setOpportunity(event.target.value);
    });
  }

  if (revealItems.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const revealObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              showRevealItem(entry.target);
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.18,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      revealItems.forEach((item) => {
        if (!item.closest('.revealme-group')) {
          revealObserver.observe(item);
        }
      });
    } else {
      revealItems.forEach((item) => {
        showRevealItem(item);
      });
    }
  }

  if (revealGroups.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const groupObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const groupItems = entry.target.querySelectorAll('.revealme');

              groupItems.forEach((item, index) => {
                item.style.transitionDelay = `${index * 120}ms`;
                showRevealItem(item);
              });

              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.18,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      revealGroups.forEach((group) => {
        groupObserver.observe(group);
      });
    } else {
      revealGroups.forEach((group) => {
        group.querySelectorAll('.revealme').forEach((item) => {
          showRevealItem(item);
        });
      });
    }
  }

  if (revealTitles.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const titleObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.28,
          rootMargin: '0px 0px -10% 0px',
        }
      );

      revealTitles.forEach((title) => {
        titleObserver.observe(title);
      });
    } else {
      revealTitles.forEach((title) => {
        title.classList.add('is-visible');
      });
    }
  }

  if (revealTexts.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const textObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.22,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      revealTexts.forEach((item, index) => {
        item.style.transitionDelay = `${Math.min(index % 6, 5) * 70}ms`;
        textObserver.observe(item);
      });
    } else {
      revealTexts.forEach((item) => {
        item.classList.add('is-visible');
      });
    }
  }

  if (revealWords.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const wordsObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.24,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      revealWords.forEach((item) => {
        wordsObserver.observe(item);
      });
    } else {
      revealWords.forEach((item) => {
        item.classList.add('is-visible');
      });
    }
  }
});
