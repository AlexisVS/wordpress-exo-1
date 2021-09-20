<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head() ?>
</head>

<body class="m-0 p-0">
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
  <nav id="navigationBar" class="mainNavigation">
    <img class="mainNavigation__img" src="https://ik.imagekit.io/tvlk/blog/2020/01/Traveloka_Primary_Logo.png?tr=dpr-1,w-675" alt="">
    <ul class="mainNavigation__list">
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link" href="">exemple 1</a>
      </li>
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link" href="">exemple 2</a>
      </li>
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link" href="">exemple 3</a>
      </li>
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link" href="">exemple 4</a>
      </li>
      <li class="mainNavigation__link__wrapper">
        <a class="mainNavigation__link" href="">exemple 5</a>
      </li>
    </ul>
  </nav>
  <div class=""></div> <!-- // H spacing for the absolute for the height of <nav> -->