function showFallback() {
  const fallbackElement = document.getElementById("vk_comments_fallback");
  if (fallbackElement) {
    fallbackElement.style.display = "block";
  }
}

function loadVKCommentsWidget() {
  const widgetElement = document.getElementById("vk_comments");
  if (!widgetElement) {
    showFallback();
    return;
  }
  if (widgetElement.dataset.loaded) {
    return;
  }

  // Calculate responsive width
  const screenWidth = Math.min(window.innerWidth, 665);
  const widgetWidth = screenWidth < 730 ? screenWidth : 665;

  // Load VK Open API script asynchronously
  const script = document.createElement("script");
  script.src = "https://vk.com/js/api/openapi.js?169";
  script.async = true;
  script.onload = function () {
    try {
      VK.init({
        apiId: 5236689,
        onlyWidgets: true,
      });
      VK.Widgets.Comments("vk_comments", {
        limit: 10,
        width: widgetWidth,
        attach: "*",
        autoPublish: 0,
        norealtime: 0,
      });
      widgetElement.dataset.loaded = "true";
      widgetElement.style.opacity = "1";
    } catch (e) {
      console.error("Error initializing VK Comments widget:", e);
      showFallback();
    }
  };
  script.onerror = function () {
    console.error("Error loading VK Open API script");
    showFallback();
  };
  document.head.appendChild(script);
}

// Initialize IntersectionObserver for lazy-loading
if ("IntersectionObserver" in window) {
  const widgetElement = document.getElementById("vk_comments");
  if (!widgetElement) {
    console.error("VK Comments widget element not found");
    showFallback();
  } else {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            loadVKCommentsWidget();
            observer.unobserve(entry.target);
          }
        });
      },
      { rootMargin: "200px" }
    );
    observer.observe(widgetElement);
  }
} else {
  // Fallback for browsers without IntersectionObserver
  console.log("IntersectionObserver not available, loading VK Comments widget");
  loadVKCommentsWidget();
}
