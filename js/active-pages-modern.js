(function () {
  function addRevealTargets() {
    var selectors = [
      ".impact-card",
      ".action-style-box",
      ".ts-intro",
      ".ts-service-box",
      ".ts-service-box-bg",
      ".ts-facts",
      ".project-img-container",
      ".clients-logo",
      ".contact-intro-grid",
      ".google-map",
      "form[role='form']"
    ];

    selectors.forEach(function (selector) {
      document.querySelectorAll(selector).forEach(function (element) {
        if (!element.classList.contains("reveal-up")) {
          element.classList.add("reveal-up");
        }
      });
    });
  }

  function initRevealAnimation() {
    var elements = document.querySelectorAll(".reveal-up");

    if (!("IntersectionObserver" in window)) {
      elements.forEach(function (element) {
        element.classList.add("in-view");
      });
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("in-view");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.14,
        rootMargin: "0px 0px -30px 0px"
      }
    );

    elements.forEach(function (element, index) {
      var step = index % 6;
      element.classList.add("reveal-ready");
      element.style.transitionDelay = step * 55 + "ms";
      observer.observe(element);
    });

    // Fallback: evita que algun bloque quede oculto si el observador no llega a disparar.
    setTimeout(function () {
      elements.forEach(function (element) {
        if (!element.classList.contains("in-view")) {
          element.classList.add("in-view");
        }
      });
    }, 1800);
  }

  function addButtonAccent() {
    document.querySelectorAll(".btn.btn-primary").forEach(function (button) {
      if (button.classList.contains("btn-modern-ready")) {
        return;
      }
      button.classList.add("btn-modern-ready");
    });
  }

  function init() {
    if (!document.body.classList.contains("active-page")) {
      return;
    }

    document.body.classList.add("js-enhanced");
    addRevealTargets();
    initRevealAnimation();
    addButtonAccent();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
