<a href="Town?id=<?=$Towns[$i][1]?>" class="hover:bg-tavern-grid border select-none relative border-tavern-link rounded-md flex flex-col">
    <div class="bg-tavern-link w-full text-tavern-black font-semibold py-4 px-6 flex items-center rounded-t-md">
        <svg class="mr-2" width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        </svg>
        Нужны новые люди!
    </div>
    <img class="float-right w-[100px] top-[70px] absolute right-[12px]" src="/public/resources/Towns/<?=$Towns[$i][0]?>/banner.png">
    <div class="py-4 px-6">
        <p class="city-name text-white"><?=$Towns[$i][1]?></p>
        <div class="flex items-center">
            <img class="h-[18px] " src="public\images\ava.png">
            <p class="text-white ml-3"><?=$Towns[$i][5]?></p>
        </div>
    </div>
    <hr class="border-tavern-link max-w-[307px] sm:max-w-[506px] md:max-w-[222px] lg:max-w-[165px] xl:max-w-[247px] 2xl:max-w-[338px]">
    <div class="py-4 px-6 max-w-[331px] sm:max-w-[357px] md:max-w-[238px] lg:max-w-[165px] xl:max-w-[269px] 2xl:max-w-[338px]">
        <p class="text-white">
        <?=$Towns[$i][2]?>
        </p>
    </div>
    <hr class="border-tavern-link">
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
            <span class="font-medium mr-1">5</span>штрафов на сумму:<span class="font-medium ml-1">$$$</span>
        </p>
        <p class="text-white flex items-center text-base">
            <svg class="mr-2" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 5L0.5 9.33013L0.5 0.669872L8 5Z" fill="#00D9D9" />
            </svg>
            <span class="font-medium mr-1">0</span>судебных заседаний
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