<!-- Dropdown menu -->
<div id="dropdown"
  class="z-10 hidden bg-tavern-black border-[#343737] border divide-y divide-gray-100 rounded-lg shadow w-72">
  <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
    <a href="/Profile" class="flex items-center px-5 py-2">
      <img class="h-9 rounded-lg" style="image-rendering: pixelated;" src="<?=$this->User->get_avatar($this->User->get_login())?>">
      <p href="#" class="block text-xl ml-3 font-medium"><?=$_SESSION['User']['Login']?></p>
    </a>
    <hr class="border-[#343737]" />
    <li class="p-2">
      <a href="/profile/logout" class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-600 hover:text-white">
        <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M14 8V6C14 5.46957 13.7893 4.96086 13.4142 4.58579C13.0391 4.21071 12.5304 4 12 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6V18C3 18.5304 3.21071 19.0391 3.58579 19.4142C3.96086 19.7893 4.46957 20 5 20H12C12.5304 20 13.0391 19.7893 13.4142 19.4142C13.7893 19.0391 14 18.5304 14 18V16"
            stroke="#1D72F2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M7 12H21L18 9M18 15L21 12" stroke="#1D72F2" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
        Выйти из аккаунта</a>
    </li>
  </ul>
</div>