<script src="/public/js/Profile/skinview3d.bundle.js"></script>
<script>var skin = '<?=$this->User->getSkin($_GET['Login'])?>'</script>
<body class="bg-tavern-black min-w-[547px]">
    <?require 'src\views\Partials\header.php';?>
        <main>
            <div class="pt-20 font-sans">
                <div class="container mx-auto px-20 xl:px-32 md:px-0 pt-10">
                    <div class="block md:grid md:gap-x-8 md:grid-cols-4 md:grid-rows-2">
                        <div class="flex flex-col">
                            <p class="text-white font-semibold text-xl md:text-base mb-2 justify-center md:justify-start flex items-center">
                                <img class="h-[14px] mr-2" src="/public/images/stats.svg" />
                                Статистика: <?=$_GET['Login']?>
                            </p>
                            <div
                                class="h-[400px] bg-tavern-grid relative rounded-xl border flex flex-col items-center justify-between pt-4 border-tavern-grid-br">
                                    <canvas id="skin_container" class="rounded-xl absolute top-0 h-[347px] w-[295px]"></canvas>
                                <img class="absolute top-[330px] w-14 h-14 p-3 z-10 bg-tavern-grid rounded-full mb-4 overflow-visible ring-2 ring-tavern-link" src="<?=$this->User->getAvatar($_GET['Login'])?>" alt="Bordered avatar" style="image-rendering: pixelated;">
                                <div class="pizda"></div>
                            </div>
                        </div>
                        <div class="row-start-2">
                            <div class="mt-12 flex flex-col">
                                <a href="#"
                                    class="flex items-center rounded-full transition-all hover:bg-[#5865F2] bg-[#6C79FF]">
                                    <div class="bg-[#5865F2]   p-3.5 rounded-full">
                                        <img class="h-7 "
                                            src="https://media.discordapp.net/attachments/943509410561544213/1089956906153545798/image.png" />
                                    </div>
                                    <div class="text-white font-semibold pl-4"><?=$Discord?></div>
                                </a>
                            </div>
                            <div class="mt-6 flex flex-col">
                                <a href="#"
                                    class="flex items-center rounded-full transition-all hover:bg-[#4B9FFF] bg-[#0077FF]">
                                    <div class="bg-[#4B9FFF]   p-3.5 rounded-full">
                                        <img class="h-7 "
                                            src="https://media.discordapp.net/attachments/943509410561544213/1089959554336432139/image.png" />
                                    </div>
                                    <div class="text-white font-semibold pl-4">Перейти</div>
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center md:items-start flex-col">
                            <p class="text-white font-semibold text-xl mb-3 mt-5 md:mt-0">Роли в дискорде</p>
                            <div class="flex items-center">
                            
                            <?php
                                    for($i=0; $i<count($Roles); $i++){
                                        echo '
                                        <p class="ml-3 text-white flex items-center">
                                            <svg class="mr-1" width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2.5" cy="2.5" r="2.5" fill="#'.$Roles[$i][2].'" />
                                            </svg>
                                            '.$Roles[$i][1].'
                                        </p>
                                        ';
                                    }
                                ?>
                            </div>

                            <div class="flex flex-col items-center md:items-start mt-4 ">
                                <p class="text-white font-semibold text-xl mb-6">Статистика</p>
                                <img class="w-[326px] md:w-[226px] mb-5 md:mb-0"
                                    src="https://media.discordapp.net/attachments/943509410561544213/1089960508741910528/image.png" />
                            </div>
                        </div>
                        <div class="flex flex-col items-center md:items-start my-auto mx-auto mb-5 md:mb-0">
                            <p class="text-white font-semibold flex items-center text-xl">
                                <svg class="mr-2" width="23" height="20" viewBox="0 0 23 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_0_2436)">
                                        <path
                                            d="M10.375 8.50049C10.375 9.12181 10.8787 9.62549 11.5 9.62549C12.1213 9.62549 12.625 9.12181 12.625 8.50049C12.625 7.87917 12.1213 7.37549 11.5 7.37549C10.8787 7.37549 10.375 7.87917 10.375 8.50049Z"
                                            stroke="#F4305A" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M11.5 2.875C10.3875 2.875 9.29994 3.2049 8.37492 3.82298C7.44989 4.44107 6.72892 5.31957 6.30318 6.34741C5.87743 7.37524 5.76604 8.50624 5.98308 9.59738C6.20012 10.6885 6.73585 11.6908 7.52252 12.4775C8.30919 13.2641 9.31147 13.7999 10.4026 14.0169C11.4938 14.234 12.6248 14.1226 13.6526 13.6968C14.6804 13.2711 15.5589 12.5501 16.177 11.6251C16.7951 10.7001 17.125 9.61252 17.125 8.5"
                                            stroke="#F4305A" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M3.67313 2.07593C2.64347 3.33053 1.93051 4.81427 1.59433 6.4021C1.25815 7.98992 1.30861 9.6353 1.74146 11.1995C2.17431 12.7638 2.97686 14.201 4.08146 15.3902C5.18606 16.5793 6.56035 17.4855 8.08848 18.0323C9.61662 18.5792 11.2538 18.7506 12.8621 18.5322C14.4703 18.3138 16.0025 17.712 17.3295 16.7775C18.6565 15.843 19.7394 14.6032 20.4869 13.1626C21.2345 11.7219 21.6247 10.1227 21.6248 8.49968"
                                            stroke="#F4305A" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_2436">
                                            <rect width="20" height="23" fill="white"
                                                transform="translate(23) rotate(90)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Месяц ― 5 ч.
                            </p>
                            <p class="text-white font-semibold flex items-center my-5 text-xl">
                                <svg class="mr-2" width="23" height="20" viewBox="0 0 23 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_0_2443)">
                                        <path
                                            d="M10.375 8.50049C10.375 9.12181 10.8787 9.62549 11.5 9.62549C12.1213 9.62549 12.625 9.12181 12.625 8.50049C12.625 7.87917 12.1213 7.37549 11.5 7.37549C10.8787 7.37549 10.375 7.87917 10.375 8.50049Z"
                                            stroke="#D7F468" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M11.5 2.875C10.3875 2.875 9.29994 3.2049 8.37492 3.82298C7.44989 4.44107 6.72892 5.31957 6.30318 6.34741C5.87743 7.37524 5.76604 8.50624 5.98308 9.59738C6.20012 10.6885 6.73585 11.6908 7.52252 12.4775C8.30919 13.2641 9.31147 13.7999 10.4026 14.0169C11.4938 14.234 12.6248 14.1226 13.6526 13.6968C14.6804 13.2711 15.5589 12.5501 16.177 11.6251C16.7951 10.7001 17.125 9.61252 17.125 8.5"
                                            stroke="#D7F468" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M3.67313 2.07593C2.64347 3.33053 1.93051 4.81427 1.59433 6.4021C1.25815 7.98992 1.30861 9.6353 1.74146 11.1995C2.17431 12.7638 2.97686 14.201 4.08146 15.3902C5.18606 16.5793 6.56035 17.4855 8.08848 18.0323C9.61662 18.5792 11.2538 18.7506 12.8621 18.5322C14.4703 18.3138 16.0025 17.712 17.3295 16.7775C18.6565 15.843 19.7394 14.6032 20.4869 13.1626C21.2345 11.7219 21.6247 10.1227 21.6248 8.49968"
                                            stroke="#D7F468" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_2443">
                                            <rect width="20" height="23" fill="white"
                                                transform="translate(23) rotate(90)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Неделя ― 5 ч.
                            </p>
                            <p class="text-white font-semibold flex items-center text-xl">
                                <svg class="mr-2" width="23" height="20" viewBox="0 0 23 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_0_2450)">
                                        <path
                                            d="M10.375 8.50049C10.375 9.12181 10.8787 9.62549 11.5 9.62549C12.1213 9.62549 12.625 9.12181 12.625 8.50049C12.625 7.87917 12.1213 7.37549 11.5 7.37549C10.8787 7.37549 10.375 7.87917 10.375 8.50049Z"
                                            stroke="#5EE3B4" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M11.5 2.875C10.3875 2.875 9.29994 3.2049 8.37492 3.82298C7.44989 4.44107 6.72892 5.31957 6.30318 6.34741C5.87743 7.37524 5.76604 8.50624 5.98308 9.59738C6.20012 10.6885 6.73585 11.6908 7.52252 12.4775C8.30919 13.2641 9.31147 13.7999 10.4026 14.0169C11.4938 14.234 12.6248 14.1226 13.6526 13.6968C14.6804 13.2711 15.5589 12.5501 16.177 11.6251C16.7951 10.7001 17.125 9.61252 17.125 8.5"
                                            stroke="#5EE3B4" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M3.67313 2.07593C2.64347 3.33053 1.93051 4.81427 1.59433 6.4021C1.25815 7.98992 1.30861 9.6353 1.74146 11.1995C2.17431 12.7638 2.97686 14.201 4.08146 15.3902C5.18606 16.5793 6.56035 17.4855 8.08848 18.0323C9.61662 18.5792 11.2538 18.7506 12.8621 18.5322C14.4703 18.3138 16.0025 17.712 17.3295 16.7775C18.6565 15.843 19.7394 14.6032 20.4869 13.1626C21.2345 11.7219 21.6247 10.1227 21.6248 8.49968"
                                            stroke="#5EE3B4" stroke-width="2.25" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_2450">
                                            <rect width="20" height="23" fill="white"
                                                transform="translate(23) rotate(90)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                День ― 5 ч.
                            </p>
                        </div>
                        <div class="row-start-2 col-span-3 flex flex-col items-center md:items-stretch">
                            <p class="text-white font-semibold text-xl mb-3 flex items-center">Предупреждения
                                <span class="text-tavern-link bg-[#27272A] rounded-full w-6 h-6 text-center text-sm leading-6 ml-3"><?=count($Warnings)?></span>
                            </p>
                            <div class="bg-[#1D72F2] p-2 rounded-xl w-full flex justify-center items-center">
                                <?php
                                    if(count($Warnings)< 1){
                                        echo '<div class="rounded-full bg-black h-6 w-6"></div>
                                        <div class="rounded-full mx-6 bg-black h-6 w-6"></div>
                                        <div class="rounded-full bg-black h-6 w-6"></div>';
                                    }
                                    else if(count($Warnings)==1){
                                        echo '<div class="rounded-full bg-white h-6 w-6"></div>
                                        <div class="rounded-full bg-black h-6 w-6"></div>
                                        <div class="rounded-full bg-black h-6 w-6"></div>';
                                    }
                                    else if(count($Warnings)==2){
                                        echo '<div class="rounded-full bg-white h-6 w-6"></div>
                                        <div class="rounded-full bg-white h-6 w-6"></div>
                                        <div class="rounded-full bg-black h-6 w-6"></div>';
                                    }
                                    else{
                                        echo '<div class="rounded-full bg-white h-6 w-6"></div>
                                        <div class="rounded-full bg-white h-6 w-6"></div>
                                        <div class="rounded-full bg-white h-6 w-6"></div>';
                                    }
                                ?>
                            </div>
                            <hr class="my-3 border-[#343737]">
                            <div id="element" class="overflow-y-scroll h-[180px]">
                                <?php
                                for($i = 0; $i < count($Warnings); $i++){
                                    echo '
                                    <div class="flex mt-4 items-center">
                                        <img class="w-12 h-12 rounded-lg mr-3" src="'.$this->User->getAvatar($Warnings[$i][0]).'" alt="Bordered avatar">
                                        <div class="flex flex-col">
                                            <p class="text-white font-semibold leading-none mb-1">'.date('G:i \\\ d.m.y', $Warnings[$i][3]).'</p>
                                            <p class="text-white leading-none">Выдал: <span class="font-semibold">'.$Warnings[$i][0].'</span></p>
                                        </div>
                                    </div>
                                    <p class="text-white mt-4 text-base flex items-center">
                                        <svg class="mr-3" width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 9L-8.15666e-07 17.6603L-5.85621e-08 0.339745L15 9Z" fill="#1D72F2"/>
                                            </svg>                                    
                                        '.$Warnings[$i][2].'
                                    </p>
                                    ';
                                }
                                ?>
                            </div>
                            
                            
                            <hr class="my-3 border-[#343737]">
                            <?php
                                if($this->User->isFBI()){
                                    echo '
                                    <button type="button" data-modal-target="fine" data-modal-toggle="fine" class="bg-[#EA3D2D] hover:bg-[#b13328] p-2 rounded-xl w-full flex justify-center items-center">
                                        <div class="text-white">Выписать штраф</div>
                                    </button>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?require 'src\views\Partials\modals\fine.php';?>

</body>
</html>