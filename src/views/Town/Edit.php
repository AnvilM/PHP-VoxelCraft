<body class="bg-tavern-black  min-w-[500px]">
    <?require 'src\views\Partials\header.php';?>
        <main>
            <div class="pt-20 font-sans">
                <section class="pt-2">
                    <swiper-container class="mySwiper  container z-10 overflow-hidden" navigation="true">
                        <swiper-slide>
                            <div class="">
                                <div class="relative bg-slider-1  xl:flex xl:justify-center xl:items-center">

                                    <div class="xl:block hidden w-full mr-0 2xl:mr-6">
                                        <div role="status" class="rounded shadow animate-pulse">
                                            <div
                                                class="flex items-center justify-center h-80 bg-gray-300 rounded-xl dark:bg-tavern-grid">
                                                <svg class="w-12 h-12 text-gray-200 dark:text-gray-600"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    fill="currentColor" viewBox="0 0 640 512">
                                                    <path
                                                        d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006 486.1 .0006 456.1L0 456.1z" />
                                                </svg>
                                            </div>
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                    <!-- <div class="w-full ml-0 2xl:ml-6">
                                        <div role="status" class="rounded shadow animate-pulse">
                                            <div
                                                class="flex items-center justify-center h-80 bg-gray-300 rounded-xl dark:bg-tavern-grid">
                                                <svg class="w-12 h-12 text-gray-200 dark:text-gray-600"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    fill="currentColor" viewBox="0 0 640 512">
                                                    <path
                                                        d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006 486.1 .0006 456.1L0 456.1z" />
                                                </svg>
                                            </div>
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div> -->
                                    <div class="flex items-center justify-center ml-0 2xl:ml-6 w-full">
                                        <label for="dropzone-file"
                                            class="flex flex-col items-center justify-center w-full h-80 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-tavern-grid hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-zinc-800">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="w-14 h-18 mb-3 text-gray-400" width="67"
                                                    height="54" viewBox="0 0 67 54" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_0_1548)">
                                                        <path
                                                            d="M17.4165 41.4999C13.7773 41.4999 10.2872 40.117 7.71391 37.6556C5.14061 35.1942 3.69495 31.8558 3.69495 28.3749C3.69495 24.8939 5.14061 21.5555 7.71391 19.0941C10.2872 16.6327 13.7773 15.2499 17.4165 15.2499C18.276 11.4208 20.7904 8.05585 24.4066 5.89528C26.1971 4.82547 28.2043 4.08354 30.3134 3.71185C32.4225 3.34017 34.5923 3.346 36.6989 3.72903C38.8056 4.11205 40.8077 4.86476 42.5911 5.94417C44.3745 7.02359 45.9042 8.40858 47.0929 10.0201C48.2816 11.6315 49.106 13.438 49.5189 15.3362C49.9319 17.2344 49.9254 19.1872 49.4999 21.0832H52.4165C55.124 21.0832 57.7205 22.1587 59.6349 24.0731C61.5494 25.9876 62.6249 28.5841 62.6249 31.2915C62.6249 33.9989 61.5494 36.5955 59.6349 38.5099C57.7205 40.4243 55.124 41.4999 52.4165 41.4999H49.4999"
                                                            stroke="#00D9D9" stroke-width="5.83333"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M23.25 32.75L32 24L40.75 32.75" stroke="#00D9D9"
                                                            stroke-width="5.83333" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M32 24V50.25" stroke="#00D9D9" stroke-width="5.83333"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_0_1548">
                                                            <rect width="67" height="54" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>

                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                        class="font-semibold">Нажмите, чтобы загрузить</span> или
                                                    перетащите</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG или JPG (МАКС.
                                                    800x400px)</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="">
                                <div class="relative bg-slider-1  xl:flex xl:justify-center xl:items-center">

                                    <div class="xl:block hidden w-full mr-0 2xl:mr-6">
                                        <div role="status" class="rounded shadow">
                                            <div
                                                class="flex overflow-hidden items-center justify-center h-80 bg-gray-300 rounded-xl dark:bg-tavern-grid">
                                                <img class="object-fill rounded-xl"
                                                    src="https://media.discordapp.net/attachments/1086216483010527272/1090888356054974514/image.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full ml-0 2xl:ml-6">
                                        <div role="status" class="rounded shadow">
                                            <div
                                                class="flex overflow-hidden items-center justify-center h-80 bg-gray-300 rounded-xl dark:bg-tavern-grid">
                                                <img class="object-fill rounded-xl"
                                                    src="https://media.discordapp.net/attachments/1086216483010527272/1090888356054974514/image.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="">
                                <div class="relative bg-slider-1  xl:flex xl:justify-center xl:items-center">

                                    <div class="xl:block hidden w-full mr-0 2xl:mr-6">
                                        <div role="status" class="rounded shadow">
                                            <div
                                                class="flex overflow-hidden items-center justify-center h-80 bg-gray-300 rounded-xl dark:bg-tavern-grid">
                                                <img class="object-fill rounded-xl"
                                                    src="https://media.discordapp.net/attachments/891261530857963532/1089892085420793886/Its_No_Use_Hes_in_A_Deep_Coma_26032023225225.jpg?width=437&height=671">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full ml-0 2xl:ml-6">
                                        <div role="status" class="rounded shadow">
                                            <div
                                                class="flex overflow-hidden items-center justify-center h-80 bg-gray-300 rounded-xl dark:bg-tavern-grid">
                                                <img class="object-fill rounded-xl"
                                                    src="https://media.discordapp.net/attachments/1086216483010527272/1090890567430459464/2023-03-18_23.23.02.png?width=1276&height=671">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                    </swiper-container>
                </section>
                <div class="lg:container mx-auto px-4 xl:px-28 md:px-0 pt-6">
                    <div class="flex-col items-center lg:items-start lg:flex-row flex justify-center">
                        <div class="mr-0 lg:mr-28 xl:mr-48 max-w-2xl">
                            <div class="flex">
                                <div class="flex items-center">

                                    <img class="h-[288px] mr-6" src="<?=$Town[0][3]?>" style="image-rendering: pixelated;">
                                    <div class="flex flex-col">
                                        <div
                                            class="bg-tavern-bg-bank select-none mb-10 text-tavern-black max-w-fit rounded-full px-6 py-2.5 text-base font-semibold flex items-center">

                                            <svg class="mr-2 mt-[1px]" width="16" height="19" viewBox="0 0 16 19"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_0_1597)">
                                                    <path
                                                        d="M7.00008 8.16667C8.84103 8.16667 10.3334 6.67428 10.3334 4.83333C10.3334 2.99238 8.84103 1.5 7.00008 1.5C5.15913 1.5 3.66675 2.99238 3.66675 4.83333C3.66675 6.67428 5.15913 8.16667 7.00008 8.16667Z"
                                                        stroke="#111414" stroke-width="1.66667" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M2 16.5V14.8333C2 13.9493 2.35119 13.1014 2.97631 12.4763C3.60143 11.8512 4.44928 11.5 5.33333 11.5H6.16667"
                                                        stroke="#111414" stroke-width="1.66667" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M10.7501 15.6667C11.9007 15.6667 12.8334 14.7339 12.8334 13.5833C12.8334 12.4327 11.9007 11.5 10.7501 11.5C9.59949 11.5 8.66675 12.4327 8.66675 13.5833C8.66675 14.7339 9.59949 15.6667 10.7501 15.6667Z"
                                                        stroke="#111414" stroke-width="1.66667" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12.4167 15.25L14.5001 17.3333" stroke="#111414"
                                                        stroke-width="1.66667" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_0_1597">
                                                        <rect width="16" height="19" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            Нужны новые люди!
                                            <label
                                                class="relative ml-2 mt-[1px] inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer" <?=$Town[0][7] != 0 ? "checked" : ""?> onclick="openLink('&SwitchPlayers_need')">
                                                <div
                                                    class="w-7 h-4 rounded-full peer dark:bg-tavern-black peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-tavern-bg-bank after:rounded-full after:h-3 after:w-3 after:transition-all dark:border-tavern-bg-bank peer-checked:bg-tavern-black">
                                                </div>
                                            </label>
                                        </div>
                                        <h1 class="text-white text-3xl mb-3 font-bold"><?=$Town[0][1]?></h1>
                                        <p class="text-white mb-9 flex">
                                            <a href="#" class="mr-2 mt-1">
                                                <svg class="w-5" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_0_1350)">
                                                        <path
                                                            d="M5 17L15.5 6.5C15.7626 6.23735 15.971 5.92555 16.1131 5.58239C16.2553 5.23923 16.3284 4.87143 16.3284 4.5C16.3284 4.12856 16.2553 3.76077 16.1131 3.4176C15.971 3.07444 15.7626 2.76264 15.5 2.5C15.2374 2.23735 14.9256 2.02901 14.5824 1.88687C14.2392 1.74473 13.8714 1.67157 13.5 1.67157C13.1286 1.67157 12.7608 1.74473 12.4176 1.88687C12.0744 2.02901 11.7626 2.23735 11.5 2.5L1 13V17H5Z"
                                                            stroke="#00D9D9" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M10.5 3.5L14.5 7.5" stroke="#00D9D9" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M13 15H17M15 13V17" stroke="#00D9D9" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_0_1350">
                                                            <rect width="18" height="18" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
                                            <?=$Town[0][2]?>
                                        </p>
                                        <p class="text-white flex items-center font-medium">
                                            <svg class="mr-2 mt-[1px]" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_0_1555)">
                                                    <path
                                                        d="M7 9C9.20914 9 11 7.20914 11 5C11 2.79086 9.20914 1 7 1C4.79086 1 3 2.79086 3 5C3 7.20914 4.79086 9 7 9Z"
                                                        stroke="#00D9D9" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M1 19V17C1 15.9391 1.42143 14.9217 2.17157 14.1716C2.92172 13.4214 3.93913 13 5 13H9C10.0609 13 11.0783 13.4214 11.8284 14.1716C12.5786 14.9217 13 15.9391 13 17V19"
                                                        stroke="#00D9D9" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M14 1.13C14.8604 1.35031 15.623 1.85071 16.1676 2.55232C16.7122 3.25392 17.0078 4.11683 17.0078 5.005C17.0078 5.89318 16.7122 6.75608 16.1676 7.45769C15.623 8.1593 14.8604 8.6597 14 8.88"
                                                        stroke="#00D9D9" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M19 19V17C18.9949 16.1172 18.6979 15.2608 18.1553 14.5644C17.6126 13.868 16.8548 13.3707 16 13.15"
                                                        stroke="#00D9D9" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_0_1555">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <?=$Town[0][4]?> участников
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="border-tavern-grid-br my-5">
                            <h1 class="text-white text-2xl font-bold mb-5">Подробное описание:</h1>
                            <p class="text-white flex">
                                <a href="#" class="mr-2 mt-1">
                                    <svg class="w-5" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_0_1350)">
                                            <path
                                                d="M5 17L15.5 6.5C15.7626 6.23735 15.971 5.92555 16.1131 5.58239C16.2553 5.23923 16.3284 4.87143 16.3284 4.5C16.3284 4.12856 16.2553 3.76077 16.1131 3.4176C15.971 3.07444 15.7626 2.76264 15.5 2.5C15.2374 2.23735 14.9256 2.02901 14.5824 1.88687C14.2392 1.74473 13.8714 1.67157 13.5 1.67157C13.1286 1.67157 12.7608 1.74473 12.4176 1.88687C12.0744 2.02901 11.7626 2.23735 11.5 2.5L1 13V17H5Z"
                                                stroke="#00D9D9" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.5 3.5L14.5 7.5" stroke="#00D9D9" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13 15H17M15 13V17" stroke="#00D9D9" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_0_1350">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <textarea id="message" rows="3"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-tavern-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Напишите что-то..."></textarea>
                            </p>
                        </div>
                        <div class="lg:w-[300px] mb-3">
                            <div class="flex lg:flex-col mt-5 lg:mt-0">
                                <div class="mr-12 lg:mr-0 flex flex-col">
                                    <h2 class="text-white  mb-3 text-2xl font-bold">Ссылки</h2>
                                    
                                    <div class="mb-10">
                                        <label for="first_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Изменить
                                            ссылку на дискорд</label>
                                            
                                        <input type="text" id="first_name"
                                            class="discord bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-tavern-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="<?=$Town[0][8]=='' ? "Ссылка на дискорд не установленна" : $Town[0][8]?>" required>
                                            <button class="mt-4 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="changeDiscrodLink()">Изменить</button>
                                    </div>
                                </div>

                                <div class="ml-12 lg:ml-0 flex flex-col">
                                    <h2 class="text-white mb-3 text-2xl flex items-center font-bold">Участники
                                        <div
                                            class="rounded-full text-white select-none text-sm mt-1 font-medium bg-tavern-grid-br ml-3 py-1 px-2">
                                            <?=$Town[0][4]?></div>
                                    </h2>
                                    <form class="flex mb-5 items-center">
                                        <label for="simple-search" class="sr-only">Поиск</label>
                                        <div class="relative w-full">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input type="text" id="simple-search"
                                                class="search bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-tavern-black dark:border-tavern-link dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Поиск..." required>
                                        </div>
                                        <button type="submit"
                                            class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                            <span class="sr-only">Поиск</span>
                                        </button>
                                    </form>
                                    <div class="user flex mb-3 items-center">
                                        <img class="h-11 mr-2 rounded-lg" style="image-rendering: pixelated;" src="<?=$this->User->getAvatar($Town[0][5])?>">
                                        <svg class="mr-2" width="24" height="22" viewBox="0 0 24 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_0_1317)">
                                                <path
                                                    d="M20 18H4C3.46957 18 2.96086 18.2107 2.58579 18.5858C2.21071 18.9609 2 19.4696 2 20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H20C20.5304 22 21.0391 21.7893 21.4142 21.4142C21.7893 21.0391 22 20.5304 22 20C22 19.4696 21.7893 18.9609 21.4142 18.5858C21.0391 18.2107 20.5304 18 20 18Z"
                                                    fill="#FFD600" />
                                                <path
                                                    d="M22 4.99995C21.4696 4.99995 20.9609 5.21066 20.5858 5.58573C20.2107 5.9608 20 6.46951 20 6.99995C20.0002 7.13734 20.0143 7.27437 20.042 7.40895L16.41 9.58994L13.349 3.46795C13.6464 3.19583 13.8547 2.84018 13.9465 2.44763C14.0383 2.05508 14.0093 1.64396 13.8633 1.26818C13.7173 0.892397 13.4612 0.569495 13.1285 0.341816C12.7959 0.114137 12.4021 -0.00769043 11.999 -0.00769043C11.5959 -0.00769043 11.2021 0.114137 10.8695 0.341816C10.5368 0.569495 10.2807 0.892397 10.1347 1.26818C9.98873 1.64396 9.95974 2.05508 10.0515 2.44763C10.1433 2.84018 10.3516 3.19583 10.649 3.46795L7.59 9.58994L3.958 7.40895C3.98573 7.27437 3.9998 7.13734 4 6.99995C4 6.60438 3.8827 6.2177 3.66294 5.8888C3.44318 5.55991 3.13082 5.30356 2.76537 5.15219C2.39992 5.00081 1.99778 4.9612 1.60982 5.03837C1.22186 5.11554 0.865492 5.30603 0.585787 5.58573C0.306082 5.86544 0.115601 6.2218 0.0384303 6.60976C-0.0387401 6.99773 0.000866562 7.39986 0.152242 7.76531C0.303617 8.13076 0.559962 8.44312 0.88886 8.66288C1.21776 8.88265 1.60444 8.99994 2 8.99994C2.037 8.99994 2.071 8.99094 2.107 8.98895L2.88 15.9999H21.12L21.893 8.98895C21.929 8.98895 21.963 8.99994 22 8.99994C22.5304 8.99994 23.0391 8.78923 23.4142 8.41416C23.7893 8.03909 24 7.53038 24 6.99995C24 6.46951 23.7893 5.9608 23.4142 5.58573C23.0391 5.21066 22.5304 4.99995 22 4.99995Z"
                                                    fill="#FFD600" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_0_1317">
                                                    <rect width="24" height="22" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="user-name text-white text-base font-medium"><?=$Town[0][5]?></p>
                                    </div>
                                    <?php
                                   if($Town[0][6] != ''){
                                    echo ' <div class="user flex mb-3 items-center">
                                    <img class="h-11 mr-2 rounded-lg" style="image-rendering: pixelated;" src="'.$this->User->getAvatar($Town[0][6]).'">
                                        <svg class="mr-2" width="26" height="24" viewBox="0 0 26 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 19.0001H5C4.46957 19.0001 3.96086 19.2108 3.58579 19.5859C3.21071 19.961 3 20.4697 3 21.0001C3 21.5306 3.21071 22.0393 3.58579 22.4143C3.96086 22.7894 4.46957 23.0001 5 23.0001H21C21.5304 23.0001 22.0391 22.7894 22.4142 22.4143C22.7893 22.0393 23 21.5306 23 21.0001C23 20.4697 22.7893 19.961 22.4142 19.5859C22.0391 19.2108 21.5304 19.0001 21 19.0001Z"
                                                stroke="#FFD600" />
                                            <path
                                                d="M23 6.00007C22.4696 6.00007 21.9609 6.21078 21.5858 6.58585C21.2107 6.96093 21 7.46963 21 8.00007C21.0002 8.13747 21.0143 8.2745 21.042 8.40907L17.41 10.5901L14.349 4.46807C14.6464 4.19595 14.8547 3.8403 14.9465 3.44775C15.0383 3.0552 15.0093 2.64408 14.8633 2.2683C14.7173 1.89252 14.4612 1.56962 14.1285 1.34194C13.7959 1.11426 13.4021 0.992432 12.999 0.992432C12.5959 0.992432 12.2021 1.11426 11.8695 1.34194C11.5368 1.56962 11.2807 1.89252 11.1347 2.2683C10.9887 2.64408 10.9597 3.0552 11.0515 3.44775C11.1433 3.8403 11.3516 4.19595 11.649 4.46807L8.59 10.5901L4.958 8.40907C4.98573 8.2745 4.9998 8.13747 5 8.00007C5 7.6045 4.8827 7.21783 4.66294 6.88893C4.44318 6.56003 4.13082 6.30368 3.76537 6.15231C3.39992 6.00093 2.99778 5.96133 2.60982 6.0385C2.22186 6.11567 1.86549 6.30615 1.58579 6.58585C1.30608 6.86556 1.1156 7.22192 1.03843 7.60989C0.96126 7.99785 1.00087 8.39998 1.15224 8.76543C1.30362 9.13089 1.55996 9.44324 1.88886 9.66301C2.21776 9.88277 2.60444 10.0001 3 10.0001C3.037 10.0001 3.071 9.99107 3.107 9.98907L3.88 17.0001H22.12L22.893 9.98907C22.929 9.98907 22.963 10.0001 23 10.0001C23.5304 10.0001 24.0391 9.78935 24.4142 9.41428C24.7893 9.03921 25 8.5305 25 8.00007C25 7.46963 24.7893 6.96093 24.4142 6.58585C24.0391 6.21078 23.5304 6.00007 23 6.00007V6.00007Z"
                                                stroke="#FFD600" />
                                        </svg>
                                        <p class="user-name text-white text-base font-medium">'.$Town[0][6].'</p>
                                    </div>';
                                   }
                                   ?>
                                   
                                    <?php
                                        for($i=0;$i<count($Players); $i++){
                                            if($Players[$i][1] != $Town[0][5] && $Players[$i][1] != $Town[0][6]){
                                                echo '
                                                <div class="user flex mb-3 items-center">
                                                    <img class="h-11 mr-2 rounded-lg" style="image-rendering: pixelated;" src="'.$this->User->getAvatar($Players[$i][1]).'">
                                                    <p class="user-name text-white text-base font-medium">'.$Players[$i][1].'</p>
                                                </div>
                                                
                                                ';
                                            }
                                        }
                                    ?>
                                    <a class="show-more text-tavern-link hover:text-blue-500 hover:underline text-base font-semibold cursor-pointer" onclick="showAllUsers()">Показать
                                        больше...</a>
                                    <button type="button" data-modal-target="adduser" data-modal-toggle="adduser" class="mt-4 w-full text-[#95F867] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#2D5027] dark:hover:bg-[#2D5027] dark:focus:ring-[#95F867]">Добавить</button>
                                    <button type="button" data-modal-target="removeuser" data-modal-toggle="removeuser" class="mt-4 w-full text-[#FF866B] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#503127] dark:hover:bg-[#503127] dark:focus:ring-[#FF866B]">Убрать</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?require 'src\views\Partials\modals\adduser.php';?>
        <?require 'src\views\Partials\modals\removeuser.php';?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

</html>