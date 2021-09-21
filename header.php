<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head() ?>
</head>

<body class="m-0 p-0 bg--black text--white">
  <!-- <?php wp_nav_menu([
          'main',
          'mainNavigationImg',
        ]);
        ?> -->

  <!-- /* -------------------------------------------------------------------------- */
  /*                                   Navbar                                  */
  /* -------------------------------------------------------------------------- */ -->
  <div id="hamburgerIconMainNavigation" class="mainNavigation__HamburgerIcon">
    <i class="fas fa-bars fa-3x"></i>
  </div>
  <nav id="navigationBar" class="mainNavigation font--inter">
    <a href="/">
      <img class="mainNavigation__img" src="https://ik.imagekit.io/tvlk/blog/2020/01/Traveloka_Primary_Logo.png?tr=dpr-1,w-675" alt="">
    </a>
    <ul class="mainNavigation__list">
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link font--inter" href="">exemple 1</a>
        <div class="mainNavigation__link__animatedBar"></div>
      </li>
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link font--inter" href="">exemple 2</a>
        <div class="mainNavigation__link__animatedBar"></div>
      </li>
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link font--inter" href="">exemple 3</a>
        <div class="mainNavigation__link__animatedBar"></div>
      </li>
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link font--inter" href="">exemple 4</a>
        <div class="mainNavigation__link__animatedBar"></div>
      </li>
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link font--inter" href="">exemple 5</a>
        <div class="mainNavigation__link__animatedBar"></div>
      </li>
    </ul>
  </nav>
  <div class=""></div> <!-- // H spacing for the absolute for the height of <nav> -->