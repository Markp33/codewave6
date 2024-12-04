document.addEventListener('DOMContentLoaded', () => {
  const menuButton = document.getElementById('menuButton');
  const dropdownMenu = document.getElementById('dropdownMenu');
  const menu = document.getElementById('menu');

  menu.classList.add('hidden');
  dropdownMenu.classList.add('hidden');

  menuButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
  });

  window.addEventListener('click', (e) => {
      if (!dropdownMenu.contains(e.target) && !menuButton.contains(e.target)) {
          dropdownMenu.classList.add('hidden');
      }
  });
});



document.addEventListener("DOMContentLoaded", () => {
  const currentPath = window.location.pathname.split("/").pop();
  document.querySelectorAll("nav a").forEach((link) => {
      if (link.getAttribute("href") === currentPath) {
          link.classList.add("text-lb");
      }
  });
});