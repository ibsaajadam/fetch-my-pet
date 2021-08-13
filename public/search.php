<?php

$page = 'search';

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
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Qahiri&display=swap');

    .title {
      position: absolute;
      top: 20px;
      left: 50px;
      font-family: 'Qahiri', sans-serif;
      opacity: 100%;
      color: #fff;
    }

    .label {
      font-family: 'Open Sans', sans-serif;
    }

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

    .tabsContainer {
      /* margin-left: 150px; */
      text-align: center;
    }

    .tabsContainer .tabList {
      padding: 0;
      margin: 0;
    }

    .tabsContainer .tabList li {
      display: inline-block;
      padding: 0 16px 12px 16px;
      color: #777;
      font-size: 20px;
    }

    .tabsContainer .tabList li a {
      text-decoration: none;
    }

    .tabsContainer .tabList li.active {
      border-bottom: 3px solid #1A73E8;
    }

    .tabsContainer .tabList li.active a {
      font-weight: bold;
      color: #1A73E8;
    }
  </style>
</head>
<body>

  <!-- Search By Breed -->
  <header class="pt-8 pb-4 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 overflow-x-hidden">

   <div class="title">
      <h1>Find Me Pets!</h1>
    </div>

    <div class="text-center app h-50 w-100 flex flex-col mt-20">
      <div class="header">
        <div class="label font-bold text-3xl">Search By Breed:</div>
        <br>
        <div id="breed"></div>
        <br>
      </div>
      <div class="slideshow flex-1 relative overflow-hidden" id="slideshow">
  
      </div>
    </div>
  </header>

  <div class="tabsContainer">
      <ul class="tabList">
        <li>
          <a href="index.php">
           Input Dog
          </a>
        </li>
        
        <li class="active">
          <a href="search.php">
           Search Breeds
          </a>
        </li>
      </ul>
   </div>

<section class="bg-gradient-to-r from-green-400 via-blue-500 to-orange-500">
    <div class="grid md:grid-cols-1 text-center">    
      
      
      <!-- Search Dog -->
     <div class="border-t-2 md:border-t-0 pt-3">
        <form name="dogsearch" method="POST" action="../dogcheck.php" enctype="multipart/form-data">
          <div class="text-2xl text-white md:mt-20 mt-2 mb-4">Search Breeds Below</div>
          <br>
            <input class="mb-2 w-52 p-2 rounded focus:outline-blue" type="text" name="search" placeholder=" Search">
            <br>
            <input class="mt-4 mb-4 px-3 py-2 rounded hover:bg-purple-700 hover:text-white" type="submit" name="submit-search" value="Let's Look!">
        </form>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
  <div class="bg-gray-300">
    <div class="text-center pt-4 h-24">
      <span>&copy FindMePets!</span><br>
      <p class="text-sm"><span class="text-lg">By: </span>Ibsaa Jamal Adam</span></p>
    </div>
  </div>
  </footer>
  
  <script src="../js/app.js"></script>
</body>
</html>