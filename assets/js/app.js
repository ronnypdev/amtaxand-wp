var hamburgerButton = document.querySelector('.cd-nav-trigger');
var sideNav = document.querySelector('.side-nav');

hamburgerButton.addEventListener('click', function () {
  sideNav.classList.toggle('is-hidden');
});
