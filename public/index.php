<?php

session_start();

$page = 'home';

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Find Me Pets!</title>
  <style>
    .slide {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center center;
      opacity: 0;
      transform: scale(1);
      transition: all .9s ease-out;
    }

    .slide:nth-last-child(2) {
      opacity: 1;
      transform: scale(1.08);
    }
  </style>
</head>

<body>

  <!-- Search By Breed -->
  <header class="pt-8 pb-4 overflow-x-hidden w-full h-full bg-no-repeat bg-cover bg-center bg-fixed" style="background-image: url('./img/dogz.jpg');">

    <div class="absolute top-6 left-6">
      <h1 class="text-3xl text-white">That's My Dog!</h1>
    </div>

    <div class="app h-50 w-100 flex flex-col text-center mt-20">
      <div class="header">
        <div class="text-5xl font-extrabold text-yellow-200 filter drop-shadow-lg">Search By Breed:</div>
        <br>
        <div id="breed"></div>
        <br>
      </div>
      <div class="slideshow flex-1 relative overflow-hidden" id="slideshow">

      </div>
    </div>
  </header>

  <div class="tabsContainer">
    <ul class="tabList flex justify-center mt-3 mb-3 px-16 text-xl">
      <li class="<?php if ($page == 'home') {
                    echo 'active';
                  } ?> border-b-4 border-blue-600">
        <a class="no-underline font-bold" href="index.php">
          Input Dog
        </a>
      </li>

      <li class="<?php if ($page == 'search') {
                    echo 'active';
                  } ?> ml-6">
        <a class="no-underline" href="search.php">
          Search Breeds
        </a>
      </li>
    </ul>
  </div>

  <section class="bg-gradient-to-r from-green-400 via-blue-500 to-orange-500">

    <div class="grid md:grid-cols-1 text-center">

      <!-- Input Dog -->
      <form name="doginput" method="POST" action="../doginput.php" enctype="multipart/form-data" onsubmit="alert('Form Submitted Successfully. Thank you!');">
        <div class="text-2xl text-white mt-3 mb-3">Input Dog</div>
        <label for="dog-name">Name</label>
        <input class="w-48 mb-2 focus:outline-black" type="text" name="name" placeholder=" Name">
        <br>
        <label for="dog-breed">Breed</label>
        <input class="w-48 mb-2 focus:outline-black" type="text" name="breed" placeholder=" Breed">
        <br>
        <label for="dog-age">Age</label>
        <input class="w-48 ml-3.5 focus:outline-black" type="text" name="age" placeholder=" Age">
        <br>
        <label class="mt-2" for="dog-gender">Gender</label>
        <select name="gender">
          <option value=""> -- SELECT -- </option>
          <option value="Male"> MALE </option>
          <option value="Female"> FEMALE </option>
        </select>

        <input type="hidden" name="size" value="1000000">
        <div class="file mt-4 mb-2 pl-11">
          <input type="file" name="image">
        </div>
        <div class="description">
          <textarea class="focus:outline-black" id="text" cols="34" rows="4" name="image_text" placeholder=" Description of dog"></textarea>
        </div>
        <input class="mt-4 mb-4 px-5 py-2 rounded hover:bg-blue-700 hover:text-white" type="submit" name="submit-input"></input>

      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="bg-gray-300">
      <div class="text-center pt-4 h-24">
        <span>&copy 2021 That's My Dog!</span><br>
        <p class="text-base">Created by:<span class="text-lg pl-2">Ibsaa Jamal Adam</span></p>
      </div>
    </div>
  </footer>

  <script src="../js/app.js"></script>
</body>

</html>