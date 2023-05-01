<div id="dropdown2" class="z-10 hidden bg-tavern-black border-[#343737] border divide-y divide-gray-100 rounded-lg shadow w-72">
  <ul class="text-sm text-gray-200" aria-labelledby="dropdownDefaultButton">
    <li class="flex items-center px-5 py-2">
      <p href="#" class="block text-sm ml-3 font-medium">Последние уведомления:</p>
    </li>
    <hr class="border-[#343737]" />
    <?php 
      if(count($_SESSION['User']['Notices']) <= 0){
        echo '
        <div class="py-5 flex justify-center items-center">
            <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_0_2592)">
                    <path d="M44.25 14.75L14.75 44.25" stroke="#1D72F2" stroke-width="4.91667" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M14.75 14.75L44.25 44.25" stroke="#1D72F2" stroke-width="4.91667" stroke-linecap="round"
                        stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_0_2592">
                        <rect width="59" height="59" fill="white" />
                    </clipPath>
                </defs>
            </svg>

        </div>
        ';
      }
      else{
        echo '<ul class="py-2 list-disc 0 text-sm text-gray-200 huy">';
        for($i=0;$i<count($_SESSION['User']['Notices']); $i++){
          echo '
            <li class="px-5">
              <a href="#" class="block px-4 py-2 text-gray-200 bg-tavern-black hover:bg-gray-600 hover:text-white">'.$_SESSION['User']['Notices'][$i].'</a>
            </li>
          ';
        }
        echo '</ul>';
      }
    ?>    
  </ul>
</div>