<header class="bg-tavern-black select-none shadow-xl min-w-[647px]" >
  <nav class="font-inter font-semibold px-0 py-3.5 bg-tavern-black fixed w-full z-20 top-0 left-0">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">
        <img src="\public\images\logo.png" class="h-12 mr-0 sm:mr-3 sm:h-12 hidden lg:block" alt="VoxelCraft Logo">
        <img src="\public\images\logo.png" class="block lg:hidden h-9 ml-3" alt="VoxelCraft Logo">
      </a>
      <div class="flex items-center lg:order-2">
        <?php
        if($this->User->isPlayer()){
          echo '<a href="#">
          <img class="h-6 mr-2" src="\public\images\bans.svg">
        </a>
        <a href="/Profile/Bank">
          <img class="h-6 mr-2" src="\public\images\card.svg">
        </a>
        <a href="##" id="dropdownDefaultButton" data-dropdown-toggle="dropdown2">
          <img class="h-6 mr-3" src="\public\images\check.svg">
        </a>';
        require 'src\views\Partials\dropdowns\checks.php';
        }
        ?>

        <!-- КНОПКА АВТОРИЗОВАТЬСЯ -->
        <?php
          if(!$this->User->isAuth()){
            echo ' <a href="https://discord.com/oauth2/authorize?client_id=1099066657961414698&redirect_uri=http://localhost/Profile/Signin&response_type=code&scope=identify%20guilds"
            class="flex items-center text-white text-center bg-[#1d72f2] hover:bg-blue-500 px-3 py-2 font-semibold rounded-lg mr-3 lg:mr-0 transition-all">
            Авторизоваться
          </a>';
          }
        ?>
       
        <!-- КНОПКА ПРОФИЛЯ --> <?php
        if($this->User->isAuth()){
          echo '<a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" href="#"
          class="flex items-center text-center mr-3 lg:mr-0 transition-all">
          <img class="h-11 rounded-lg" style="image-rendering: pixelated;" src="'.$this->User->getMyAvatar($this->User->getLogin()).'">
        </a>';
        }
        require 'src\views\Partials\dropdowns\signout.php';
        ?>
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 text-sm rounded-lg lg:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600"
          aria-controls="navbar-sticky" aria-expanded="false">
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="items-center justify-between pl-[8.5rem] mx-auto hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
        <ul
          class="flex flex-col p-4 mt-4 border rounded-lg lg:flex-row lg:space-x-6 lg:mt-0 lg:text-sm lg:font-medium lg:border-0 bg-tavern-black lg:bg-tavern-black border-gray-700">
          <li>
            <a href="/" class="text-white
            hover:border-b border-[#1d72f2] transition-all px-1 py-6" aria-current="page">Главная</a>
          </li>
          <li class="hidden lg:block">
            <a class="text-white select-none" aria-current="page">•</a>
          </li>
          <li>
            <a href="/stats" class="text-white
            hover:border-b border-[#1d72f2] transition-all px-1 py-6" aria-current="page">Статистика</a>
          </li>
          <li class="hidden lg:block">
            <a class="text-white select-none" aria-current="page">•</a>
          </li>
          <li>
            <a href="/wiki" class="text-white
            hover:border-b border-[#1d72f2] transition-all px-1 py-6" aria-current="page">Вики</a>
          </li>
          <li class="hidden lg:block">
            <a class="text-white select-none" aria-current="page">•</a>
          </li>
          <li>
            <a href="/towns" class="text-white
            hover:border-b border-[#1d72f2] transition-all px-1 py-6" aria-current="page">Города</a>
          </li>
          <li class="hidden lg:block">
            <a class="text-white select-none" aria-current="page">•</a>
          </li>
          <li>
            <a href="/map" class="text-white
            hover:border-b border-[#1d72f2] transition-all px-1 py-6" aria-current="page">Карта</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>