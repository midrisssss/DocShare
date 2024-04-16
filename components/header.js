let toggleBtn = document.getElementById("toggle-btn");
let toggleTheme = document.getElementById("toggle-theme");
let navMenu = document.getElementById("nav-menu");
let light = document.querySelector("i.fi-sr-sun");
let dark = document.querySelector("i.fi-sr-moon");
let openNav = document.querySelector("i.fi-sr-menu-burger");
let closeNav = document.querySelector("#closeNav");
let loginBtn = document.getElementById("loginBtn");
let loginBtn2 = document.getElementById("registerToLogin");
let loginForm = document.getElementById("loginForm");
let registerBtn = document.getElementById("registerBtn");
let registerBtn2 = document.getElementById("loginToRegister");
let registerForm = document.getElementById("registerForm");
let background = document.getElementById("background");
let loginClose = document.getElementById("hideLogin");
let registerClose = document.getElementById("hideRegister");

toggleBtn.addEventListener("click", () => {
  openNav.classList.toggle("hidden");
  closeNav.classList.toggle("hidden");
  toggleBtn.classList.toggle("bg-gray-200");
  navMenu.classList.toggle("hidden");
});

toggleTheme.addEventListener("click", () => {
  document.body.classList.toggle("dark");
  light.classList.toggle("hidden");
  dark.classList.toggle("hidden");
});

function openLogin() {
  openNav.classList.remove("hidden");
  navMenu.classList.add("hidden");
  closeNav.classList.add("hidden");
  toggleBtn.classList.remove("bg-gray-200");

  loginForm.classList.replace("hidden", "flex");
  setTimeout(() => {
    background.classList.remove("hidden");
    loginForm.classList.remove("-bottom-3/4");
    loginForm.classList.add("md:bottom-24", "bottom-0");
  }, 10);
}

function openRegister() {
  openNav.classList.remove("hidden");
  navMenu.classList.add("hidden");
  closeNav.classList.add("hidden");
  toggleBtn.classList.remove("bg-gray-200");

  registerForm.classList.replace("hidden", "flex");
  setTimeout(() => {
    background.classList.remove("hidden");
    registerForm.classList.remove("-bottom-3/4");
    registerForm.classList.add("md:bottom-24", "bottom-0");
  }, 10);
}

function hideLogin() {
  loginForm.classList.remove("bottom-0", "md:bottom-24");
  loginForm.classList.add("-bottom-3/4");
  setTimeout(() => {
    loginForm.classList.replace("flex", "hidden");
    background.classList.add("hidden");
  }, 200);
}

function hideRegister() {
  registerForm.classList.remove("bottom-0", "md:bottom-24");
  registerForm.classList.add("-bottom-3/4");
  setTimeout(() => {
    registerForm.classList.replace("flex", "hidden");
    background.classList.add("hidden");
  }, 200);
}

loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  openLogin();
});

registerBtn.addEventListener("click", (e) => {
  e.preventDefault();
  openRegister();
});

loginBtn2.addEventListener("click", (e) => {
  e.preventDefault();
  setTimeout(() => {
    openLogin();
  }, 350);
  hideRegister();
});

registerBtn2.addEventListener("click", (e) => {
  e.preventDefault();
  setTimeout(() => {
    openRegister();
  }, 350);
  hideLogin();
});

loginClose.addEventListener("click", (e) => {
  e.preventDefault();
  hideLogin();
});

registerClose.addEventListener("click", (e) => {
  e.preventDefault();
  hideRegister();
});
