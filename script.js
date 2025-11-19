const body = document.querySelector("body"),
  sidebar = body.querySelector(".sidebar"),
  toggle = body.querySelector(".toggle"),
  modeSwtich = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

modeSwtich.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light Mode";
  } else {
    modeText.innerText = "Dark Mode";
  }
});

window.addEventListener("load", function () {
  setTimeout(() => {
    document.getElementById("loading").style.display = "none";
    document.getElementById("appearance").style.display = "block";
  }, 3000); 
});

document.getElementById("btnMulai").addEventListener("click", function () {
  window.location.href = "belajar.html";
});

