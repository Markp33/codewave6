document.querySelectorAll(".read-more-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const hiddenText = button.previousElementSibling;
    if (hiddenText.style.display === "block") {
      hiddenText.style.display = "none";
      button.textContent = "Lees meer";
    } else {
      hiddenText.style.display = "block";
      button.textContent = "Lees minder";
    }
  });
});

// Reset de zichtbaarheid van elementen bij wijziging van de schermgrootte
window.addEventListener("resize", () => {
  const isDesktop = window.innerWidth >= 768;
  document.querySelectorAll(".hidden-text").forEach((hiddenText) => {
    hiddenText.style.display = isDesktop ? "block" : "none";
  });
  document.querySelectorAll(".read-more-btn").forEach((button) => {
    button.style.display = isDesktop ? "none" : "inline-block";
    button.textContent = "Lees meer";
  });
});
