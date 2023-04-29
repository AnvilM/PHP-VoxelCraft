<body class="bg-tavern-black min-w-[447px]">
    <?require 'src\views\Partials\header.php';?>
        <main>
            <div class="pt-28 px-10 sm:px-0 font-sans">
                <div class="container px-10 sm:px-0 mb-10 mx-auto">
                    <h1 class="text-4xl select-none mb-6 font-semibold flex items-center text-left text-white">
                        <svg class="mr-1" width="34" height="27" viewBox="0 0 34 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_0_1207)">
                                <path
                                    d="M12 15.5C14.0711 15.5 15.75 13.8211 15.75 11.75C15.75 9.67893 14.0711 8 12 8C9.92893 8 8.25 9.67893 8.25 11.75C8.25 13.8211 9.92893 15.5 12 15.5Z"
                                    stroke="#004AD9" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M19.0713 18.8212L13.7675 24.1249C13.2987 24.5932 12.6632 24.8563 12.0006 24.8563C11.338 24.8563 10.7025 24.5932 10.2338 24.1249L4.92875 18.8212C3.53028 17.4226 2.57792 15.6408 2.19211 13.701C1.8063 11.7612 2.00437 9.75058 2.76126 7.92335C3.51815 6.09612 4.79988 4.53436 6.44436 3.43557C8.08884 2.33678 10.0222 1.75031 12 1.75031C13.9778 1.75031 15.9112 2.33678 17.5557 3.43557C19.2001 4.53436 20.4819 6.09612 21.2388 7.92335C21.9956 9.75058 22.1937 11.7612 21.8079 13.701C21.4221 15.6408 20.4697 17.4226 19.0713 18.8212V18.8212Z"
                                    stroke="#004AD9" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_0_1207">
                                    <rect width="34" height="27" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        Города
                    </h1>
                    <form class="flex items-center">
                        <div
                            class="rounded-full text-white select-none font-medium border border-solid border-[#004AD9] mr-3 py-2 px-3">
                            <?=count($Towns)?></div>
                        <label for="simple-search" class="sr-only">Вводи название города...</label>
                    
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-tavern-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Вводи название города..." required>
                        </div>
                        <button type="button" data-modal-target="createtown" data-modal-toggle="createtown"
                            class="flex justify-center select-none whitespace-nowrap items-center w-60 h-[42px] p-2.5 ml-2 text-base font-medium text-tavern-black bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="mr-2" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 6.62591C1 5.40172 1.56058 4.24494 2.52142 3.48638L4.45892 1.95677C5.91216 0.809481 7.96284 0.809479 9.41608 1.95677L11.3536 3.48638C12.3144 4.24494 12.875 5.40172 12.875 6.62591V9.25C12.875 11.0449 11.4199 12.5 9.625 12.5V12.5C9.17627 12.5 8.8125 12.1362 8.8125 11.6875V10.625C8.8125 9.58947 7.97303 8.75 6.9375 8.75V8.75C5.90197 8.75 5.0625 9.58947 5.0625 10.625V11.6875C5.0625 12.1362 4.69873 12.5 4.25 12.5V12.5C2.45507 12.5 1 11.0449 1 9.25L1 6.62591Z"
                                    fill="#111414" stroke="#111414" stroke-width="1.5" />
                            </svg>
                            Создать свой город
                            <span class="sr-only">Вводи название города...</span>
                        </button>
                        
                    </form>
                </div>

                <div class="container mx-auto gap-x-16 gap-y-8 px-10 sm:px-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 grid-rows-2">
                    <?php
                        for($i=0;$i<count($Towns); $i++){
                            require 'src\views\Partials\city.php';
                        }
                    ?>
                    
                </div>
            </div>
        </main>
        <?require 'src\views\Partials\modals\createtown.php';?>
        <?require 'src\views\Partials\footer.php';?>
</body>


</html>