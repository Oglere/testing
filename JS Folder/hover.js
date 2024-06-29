document.addEventListener("DOMContentLoaded", () => {
  const locator = document.querySelector(".locator");
  const links = document.querySelectorAll("nav ul li a");
  const defaultLink = document.querySelector(".default");
  let timeoutId;

  function moveLocatorToDefault() {
    const defaultPosition = defaultLink.parentElement.offsetTop;
    locator.style.top = `${defaultPosition}px`;
  }

  moveLocatorToDefault();

  links.forEach((link) => {
    link.addEventListener("mouseenter", (event) => {
      if (timeoutId) {
        clearTimeout(timeoutId);
      }
      const li = event.target.parentElement;
      const topPosition = li.offsetTop;
      locator.style.top = `${topPosition}px`;
    });

    link.addEventListener("mouseleave", () => {
      timeoutId = setTimeout(() => {
        moveLocatorToDefault();
      }, 1000);
    });
  });
});
