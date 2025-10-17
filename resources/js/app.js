import './bootstrap';

/**
 * Template Name: QuickStart
 * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
 * Updated: Aug 07 2024 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

(function() {
    "use strict";

    /**
     * Apply .scrolled class to the body as the page is scrolled down
     */
    function toggleScrolled() {
      const selectBody = document.querySelector('body');
      const selectHeader = document.querySelector('#header');
      if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
      window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
    }

    document.addEventListener('scroll', toggleScrolled);
    window.addEventListener('load', toggleScrolled);
    
    const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

    function toggleMobileNav() {
      document.querySelector('body').classList.toggle('mobile-nav-active');
      mobileNavToggleBtn.classList.toggle('bi-list');
      mobileNavToggleBtn.classList.toggle('bi-x');
    }

    // Toggle mobile nav on button click
    if (mobileNavToggleBtn) {
      mobileNavToggleBtn.addEventListener('click', toggleMobileNav);
    }

    document.addEventListener('DOMContentLoaded', function () {
      const dropdowns = document.querySelectorAll('.nav-item.dropdown');

      function isDesktop() {
        return window.innerWidth >= 992;
      }

      dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');

        // Check if toggle element exists
        if (!toggle) {
          console.warn('Dropdown toggle not found for:', dropdown);
          return;
        }

        const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggle);

        // Hover open/close for desktop only
        dropdown.addEventListener('mouseenter', function () {
          if (isDesktop()) {
            bsDropdown.show();
          }
        });

        dropdown.addEventListener('mouseleave', function () {
          if (isDesktop()) {
            bsDropdown.hide();
          }
        });

        // Handle click behavior for mega menus
        toggle.addEventListener('click', function (e) {
          if (isDesktop()) {
            // Desktop: prevent default Bootstrap behavior since we handle with hover
            e.preventDefault();
            // Force show the dropdown on desktop click as well
            bsDropdown.show();
          } else {
            // Mobile: Handle mega menu toggle manually
            const isCurrentlyOpen = toggle.getAttribute('aria-expanded') === 'true';

            // Close other dropdowns first
            dropdowns.forEach(otherDropdown => {
              if (otherDropdown !== dropdown) {
                const otherToggle = otherDropdown.querySelector('[data-bs-toggle="dropdown"]');
                if (otherToggle) {
                  const otherBsDropdown = bootstrap.Dropdown.getOrCreateInstance(otherToggle);
                  otherBsDropdown.hide();
                }
              }
            });

            // Toggle current dropdown
            if (isCurrentlyOpen) {
              bsDropdown.hide();
            } else {
              bsDropdown.show();
            }

            // Prevent default to avoid Bootstrap's auto-close behavior interfering
            e.preventDefault();
          }
        });

        // Handle clicks outside dropdown to close on mobile
        document.addEventListener('click', function(e) {
          if (!isDesktop() && !dropdown.contains(e.target)) {
            bsDropdown.hide();
          }
        });
      });

      // Handle window resize to ensure proper behavior when switching between mobile/desktop
      window.addEventListener('resize', function() {
        // Close all dropdowns when resizing to prevent stuck states
        dropdowns.forEach(dropdown => {
          const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
          if (toggle) {
            const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggle);
            bsDropdown.hide();
          }
        });
      });
    });

    /**
     * Preloader
     */
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
        preloader.remove();
      });
    }

    /**
     * Scroll top button
     */
    let scrollTop = document.querySelector('.scroll-top');

    function toggleScrollTop() {
      if (scrollTop) {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      }
    }

    if (scrollTop) {
      scrollTop.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }

    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
      if (typeof AOS !== 'undefined') {
        AOS.init({
          duration: 600,
          easing: 'ease-in-out',
          once: true,
          mirror: false
        });
      }
    }
    window.addEventListener('load', aosInit);

    /**
     * Initiate glightbox
     */
    if (typeof GLightbox !== 'undefined') {
      const glightbox = GLightbox({
        selector: '.glightbox'
      });
    }

    /**
     * Frequently Asked Questions Toggle
     */
    document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
      faqItem.addEventListener('click', () => {
        faqItem.parentNode.classList.toggle('faq-active');
      });
    });

    /**
     * Init swiper sliders
     */
    function initSwiper() {
      if (typeof Swiper !== 'undefined') {
        document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
          let config = JSON.parse(
            swiperElement.querySelector(".swiper-config").innerHTML.trim()
          );

          if (swiperElement.classList.contains("swiper-tab")) {
            initSwiperWithCustomPagination(swiperElement, config);
          } else {
            new Swiper(swiperElement, config);
          }
        });
      }
    }

    window.addEventListener("load", initSwiper);

    /**
     * Correct scrolling position upon page load for URLs containing hash links.
     */
    window.addEventListener('load', function(e) {
      if (window.location.hash) {
        if (document.querySelector(window.location.hash)) {
          setTimeout(() => {
            let section = document.querySelector(window.location.hash);
            let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
            window.scrollTo({
              top: section.offsetTop - parseInt(scrollMarginTop),
              behavior: 'smooth'
            });
          }, 100);
        }
      }
    });

    /**
     * Navmenu Scrollspy
     */
    let navmenulinks = document.querySelectorAll('.navmenu a');

    function navmenuScrollspy() {
      navmenulinks.forEach(navmenulink => {
        if (!navmenulink.hash) return;
        let section = document.querySelector(navmenulink.hash);
        if (!section) return;
        let position = window.scrollY + 200;
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
          navmenulink.classList.add('active');
        } else {
          navmenulink.classList.remove('active');
        }
      })
    }
    window.addEventListener('load', navmenuScrollspy);
    document.addEventListener('scroll', navmenuScrollspy);

    // Masonry Gallery Layout
    function masonryLayout(containerSelector, minColWidth = 280, gap = 24) {
      const container = document.querySelector(containerSelector);
      if (!container) return;
      const items = Array.from(container.children);
      function layout() {
        const containerWidth = container.clientWidth;
        const colCount = Math.max(1, Math.floor(containerWidth / minColWidth));
        const colHeights = Array(colCount).fill(0);
        const colItems = Array.from({ length: colCount }, () => []);
        items.forEach(item => {
          item.style.position = 'absolute';
          item.style.width = `calc(${100 / colCount}% - ${gap}px)`;
          // Find shortest column
          const minCol = colHeights.indexOf(Math.min(...colHeights));
          const top = colHeights[minCol];
          const left = minCol * (containerWidth / colCount);
          item.style.transform = `translate(${left}px, ${top}px)`;
          colHeights[minCol] += item.offsetHeight + gap;
          colItems[minCol].push(item);
        });
        container.style.position = 'relative';
        container.style.height = Math.max(...colHeights) + 'px';
      }
      window.addEventListener('resize', () => setTimeout(layout, 100));
      setTimeout(layout, 100);
    }
    document.addEventListener('DOMContentLoaded', function() {
      masonryLayout('.masonry-grid', 280, 24);
      // Glightbox for gallery
      if (window.GLightbox) {
        GLightbox({
          selector: '.glightbox',
          descPosition: 'bottom',
          touchNavigation: true,
          loop: true,
          width: '90vw',
          height: 'auto',
          moreText: '',
          moreLength: 0,
        });
      }
    });

})();

// Tabs Button Script
function showContent(index) {
  const tabs = document.querySelectorAll(".tab");
  const contentSections = document.querySelectorAll(".content-section");
  const industries = document.querySelectorAll(".industries");
  const icons = document.querySelectorAll(".tab img");

  // Remove active state and reset styles
  tabs.forEach((tab, i) => {
    tab.classList.remove("active");
    contentSections[i].classList.remove("active");

    // Reset `.industries` border
    if (industries[i]) {
      industries[i].style.border = "2px solid transparent";
    }

    // Reset icon styling
    icons[i].style.backgroundColor = "";
    icons[i].style.boxShadow = "";
    icons[i].style.borderRadius = "";
  });

  // Add active state to clicked tab
  tabs[index].classList.add("active");
  contentSections[index].classList.add("active");

  // Apply border color only to `.industries` when active
  if (industries[index]) {
    industries[index].style.border = "2px solid #E3BEF9";
  }

  // Darker box-shadow for better visibility
  icons[index].style.backgroundColor = "#E3BEF9";
  icons[index].style.borderRadius = "50%";
  icons[index].style.padding = "5px";
}

// Mic Script
const micIcon = document.getElementById("mic-icon");
const statusText = document.getElementById("status-text");
const cards = document.querySelectorAll(".clicked");

// Only run mic script if elements exist
if (micIcon && statusText && cards.length > 0) {
  let isMicActive = false;
  let audio; // Global audio instance for better control

  // Function to Start Mic & Audio
  function activateMic() {
    if (audio) {
      audio.pause(); // Pause any running audio
      audio.currentTime = 0; // Reset audio playback
    }

    audio = new Audio("assets/img/p_41554009_847.mp3");

    audio.addEventListener("ended", () => {
      micIcon.classList.remove("active", "listening");
      statusText.innerText = "Mic is OFF";
      isMicActive = false;
    });

    audio
      .play()
      .then(() => {
        isMicActive = true;
        micIcon.classList.add("active", "listening");
        statusText.innerText = "Human Voice Detected";
        setTimeout(startListening, 1000); // Delay for smooth syncing
      })
      .catch((error) => {
        console.error("Audio playback error:", error);
        statusText.innerText = "Audio Playback Failed!";
        isMicActive = false; // Reset state on failure
      });
  }

  // Event Listener for Cards to Activate Mic & Play Audio
  cards.forEach((card) => {
    card.addEventListener("click", activateMic);
  });

  // Function to Detect Only Human Voice
  function startListening() {
    navigator.mediaDevices
      .getUserMedia({ audio: true })
      .then(function (stream) {
        const audioContext = new (window.AudioContext ||
          window.webkitAudioContext)();
        const analyser = audioContext.createAnalyser();
        const microphone = audioContext.createMediaStreamSource(stream);
        const filter = audioContext.createBiquadFilter();

        // Band-pass Filter for Human Voice Frequencies
        filter.type = "bandpass";
        filter.frequency.value = 175;
        filter.Q.value = 2.0;

        microphone.connect(filter);
        filter.connect(analyser);

        analyser.fftSize = 256;
        const dataArray = new Uint8Array(analyser.frequencyBinCount);

        function detectVoice() {
          analyser.getByteFrequencyData(dataArray);

          const avgFrequency =
            dataArray.slice(20, 60).reduce((a, b) => a + b, 0) / 40;

          if (avgFrequency > 35) {
            micIcon.classList.add("listening");
            statusText.innerText = "Human Voice Detected";
          } else {
            micIcon.classList.remove("listening");
            statusText.innerText = "Mic is ON (Listening for Human Voice)";
          }

          if (isMicActive) {
            requestAnimationFrame(detectVoice);
          }
        }

        detectVoice();
      })
      .catch(function (err) {
        console.error("Error accessing microphone:", err);
        statusText.innerText = "Mic Access Denied";
      });
  }
}
