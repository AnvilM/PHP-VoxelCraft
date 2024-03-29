<a href="Town?Id=<?=$Towns[$i][0]?>" class="hover:bg-tavern-grid border select-none relative <?=$Towns[$i][7]==0 ? "border-tavern-grid-br" : "border-tavern-link"?> rounded-md flex flex-col">
    <div class="<?=$Towns[$i][7]==0 ? "bg-tavern-grid-br" : "bg-tavern-link"?> w-full <?=$Towns[$i][7]==0 ? "text-white" : "text-tavern-black"?> font-semibold py-4 px-6 flex items-center rounded-t-md">
    <?=$Towns[$i][7]==0 ? '<svg class="mr-2" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_0_967)">
                <path
                    d="M4.66663 10.8333V4.58331C4.66663 4.25179 4.79832 3.93385 5.03274 3.69943C5.26716 3.46501 5.58511 3.33331 5.91663 3.33331C6.24815 3.33331 6.56609 3.46501 6.80051 3.69943C7.03493 3.93385 7.16663 4.25179 7.16663 4.58331V9.99998"
                    stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M7.16663 4.58335V2.91669C7.16663 2.75253 7.19896 2.58999 7.26178 2.43833C7.32459 2.28668 7.41667 2.14888 7.53274 2.0328C7.64882 1.91673 7.78661 1.82466 7.93827 1.76184C8.08993 1.69902 8.25247 1.66669 8.41663 1.66669C8.58078 1.66669 8.74332 1.69902 8.89498 1.76184C9.04664 1.82466 9.18444 1.91673 9.30051 2.0328C9.41658 2.14888 9.50866 2.28668 9.57148 2.43833C9.63429 2.58999 9.66663 2.75253 9.66663 2.91669V10"
                    stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M9.66663 4.58331C9.66663 4.25179 9.79832 3.93385 10.0327 3.69943C10.2672 3.46501 10.5851 3.33331 10.9166 3.33331C11.2481 3.33331 11.5661 3.46501 11.8005 3.69943C12.0349 3.93385 12.1666 4.25179 12.1666 4.58331V9.99998"
                    stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M12.1667 6.25C12.1667 5.91848 12.2984 5.60054 12.5328 5.36612C12.7672 5.1317 13.0852 5 13.4167 5C13.7482 5 14.0662 5.1317 14.3006 5.36612C14.535 5.60054 14.6667 5.91848 14.6667 6.25V13.3333C14.6667 14.6594 14.1399 15.9312 13.2022 16.8689C12.2646 17.8065 10.9928 18.3333 9.6667 18.3333H8.00003H8.17336C7.34531 18.3335 6.53019 18.128 5.80118 17.7352C5.07218 17.3425 4.45213 16.7749 3.9967 16.0833C3.94204 16.0001 3.88759 15.9168 3.83336 15.8333C3.57336 15.4342 2.66086 13.8433 1.09503 11.06C0.935406 10.7763 0.892767 10.4415 0.976183 10.1268C1.0596 9.81212 1.26249 9.5424 1.5417 9.375C1.8391 9.19655 2.18759 9.1226 2.53183 9.16487C2.87607 9.20715 3.19631 9.36323 3.4417 9.60833L4.6667 10.8333"
                    stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
                <clipPath id="clip0_0_967">
                    <rect width="16" height="20" fill="white" />
                </clipPath>
            </defs>
        </svg>' : '<svg class="mr-2" width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_0_876)">
                <path
                    d="M6.99996 8.16667C8.84091 8.16667 10.3333 6.67428 10.3333 4.83333C10.3333 2.99238 8.84091 1.5 6.99996 1.5C5.15901 1.5 3.66663 2.99238 3.66663 4.83333C3.66663 6.67428 5.15901 8.16667 6.99996 8.16667Z"
                    stroke="#111414" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M2 16.5V14.8333C2 13.9493 2.35119 13.1014 2.97631 12.4763C3.60143 11.8512 4.44928 11.5 5.33333 11.5H6.16667"
                    stroke="#111414" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M10.75 15.6667C11.9006 15.6667 12.8333 14.7339 12.8333 13.5833C12.8333 12.4327 11.9006 11.5 10.75 11.5C9.59937 11.5 8.66663 12.4327 8.66663 13.5833C8.66663 14.7339 9.59937 15.6667 10.75 15.6667Z"
                    stroke="#111414" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.4166 15.25L14.5 17.3333" stroke="#111414" stroke-width="1.66667" stroke-linecap="round"
                    stroke-linejoin="round" />
            </g>
            <defs>
                <clipPath id="clip0_0_876">
                    <rect width="16" height="19" fill="white" />
                </clipPath>
            </defs>
        </svg>'?>
        
        <?=$Towns[$i][7]==0 ? "Люди не требуются" : "Нужны новые люди"?>
    </div>
    <img class="float-right w-[100px] top-[70px] absolute right-[12px]" src="<?=$Towns[$i][3]?>" style="image-rendering: pixelated;">
    <div class="py-4 px-6">
        <p class="city-name text-white"><?=$Towns[$i][1]?></p>
        <div class="flex items-center">
            <img class="h-[18px] rounded-sm" style="image-rendering: pixelated;" src="<?=$this->User->getAvatar($Towns[$i][5])?>">
            <p class="text-white ml-3"><?=$Towns[$i][5]?></p>
        </div>
    </div>
    <hr class="<?=$Towns[$i][7]==0 ? "border-tavern-grid-br" : "border-tavern-link"?> max-w-[307px] sm:max-w-[506px] md:max-w-[222px] lg:max-w-[165px] xl:max-w-[247px] 2xl:max-w-[338px]">
    <div class="py-4 px-6 max-w-[331px] sm:max-w-[357px] md:max-w-[238px] lg:max-w-[165px] xl:max-w-[269px] 2xl:max-w-[338px]">
        <p class="text-white">
        <?=$Towns[$i][2]?>
        </p>
    </div>
    <hr class="<?=$Towns[$i][7]==0 ? "border-tavern-grid-br" : "border-tavern-link"?>">
    <div class="py-4 px-6">
        <p class="text-white flex items-center text-base">
            <svg class="mr-2" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 5L0.5 9.33013L0.5 0.669872L8 5Z" fill="#00D9D9" />
            </svg>
            <span class="font-medium mr-1"><?=$Towns[$i][4]?></span>участников
        </p>
        <p class="text-white flex items-center text-base">
            <svg class="mr-2" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 5L0.5 9.33013L0.5 0.669872L8 5Z" fill="#00D9D9" />
            </svg>
            <span class="font-medium mr-1">30</span>часов наиграно за неделю
        </p>
        <p class="text-white flex items-center text-base">
            <svg class="mr-2" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 5L0.5 9.33013L0.5 0.669872L8 5Z" fill="#00D9D9" />
            </svg>
            <span class="font-medium mr-1"><?=$Towns[$i][10]?></span>штрафов на сумму:<span class="font-medium ml-1"><?=$Towns[$i][11]?></span>
        </p>
        <p class="text-white flex items-center text-base">
            <svg class="mr-2" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 5L0.5 9.33013L0.5 0.669872L8 5Z" fill="#00D9D9" />
            </svg>
            <span class="font-medium mr-1"><?=$Towns[$i][12]?></span>судебных заседаний
        </p>
        <p class="text-white flex items-center text-base">
            <svg class="mr-2" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 5L0.5 9.33013L0.5 0.669872L8 5Z" fill="#00D9D9" />
            </svg>
            <?php
                if($Towns[$i][8] != ''){
                    echo 'Есть<span class="font-medium mx-1">Discord</span>сервер';
                }
                else{
                    echo 'Нет<span class="font-medium mx-1">Discord</span>сервера';
                }
            ?>
        </p>
    </div>
</a>