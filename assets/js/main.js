// /* -------------------------------------------------------------------------- */
// /*                                 Navigation                                 */
// /* -------------------------------------------------------------------------- */

let hamburgerIconMainNavigation = document.querySelector('#hamburgerIconMainNavigation');
let navigationBar = document.querySelector('#navigationBar')
let mainNavigation = document.querySelector('#mainNavigation');
let linksNavigation = mainNavigation.querySelectorAll(".linksAnim");
hamburgerIconMainNavigation.addEventListener('click', function () {
  if (navigationBar.classList.contains('active')) {
    // In desactivation
    navigationBar.classList.remove('active');
    anime({
      targets: '#navigationBar',
      translateX: ['0%', '-100%'],
      duration: 800,
      easing: 'easeInOutCubic'
    })
    anime({
      targets: linksNavigation,
      opaciy: [1,0],
      duration: 800,
    })
  } else {
    // In activation
    navigationBar.classList.add('active');
    anime({
      targets: '#navigationBar',
      translateX: ['-100%', '0%'],
      duration: 800,
      easing: 'easeInOutCubic'
    });
    anime({
      targets: linksNavigation,
      opaciy: [0,1],
      duration: 800,
    })
  }
});


/* -------------------------------------------------------------------------- */

anime({
  targets: '#bonjour',
  translateX: 250,
  duration: 1000,
})