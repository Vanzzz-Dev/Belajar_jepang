const body = document.querySelector("body"),
  sidebar = body.querySelector(".sidebar"),
  toggle = body.querySelector(".toggle"),
  modeSwtich = body.querySelector(".toggle-mode"),
  icon = body.querySelector(".icon-mode"),
  modeText = body.querySelector(".mode-text"),
  menuIcon = document.getElementById("menu-icon"),
  navbar = document.querySelector(".navbar1");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

modeSwtich.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    icon.classList.remove("bx-moon");
    icon.classList.add("bx-sun");
  } else {
    icon.classList.remove("bx-sun");
    icon.classList.add("bx-moon");
  }
});

menuIcon.addEventListener("click", () => {
  menuIcon.classList.toggle("bx-x");
  navbar.classList.toggle("active");
});
