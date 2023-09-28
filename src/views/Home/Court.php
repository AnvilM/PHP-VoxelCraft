<body class="bg-[#111414] min-w-[530px]">
    <?require 'src\views\Partials\header.php';?>
    <div class="container  max-w-screen-xl mx-auto mt-24">
        <div class="flex flex-wrap items-center justify-between mx-auto mb-[15px]">
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li class="bg-[#1D72F2] rounded-[20px] px-[33px] py-[15px]">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-[#E4E4E4] rounded hover:bg-[#131313] md:hover:bg-transparent md:border-0 md:p-0"
                            aria-current="page">Новые дела</a>
                    </li>
                    <li class="bg-[#1C1C1C] rounded-[20px] px-[33px] py-[15px]">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-[#E4E4E4] rounded hover:bg-[#131313] md:hover:bg-transparent md:border-0 md:p-0"
                            aria-current="page">На сервере</a>
                    </li>
                    <li class="bg-[#1C1C1C] rounded-[20px] px-[33px] py-[15px]">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-[#E4E4E4] rounded hover:bg-[#131313] md:hover:bg-transparent md:border-0 md:p-0"
                            aria-current="page">Архив</a>
                    </li>
                    <li class="bg-[#1C1C1C] rounded-[20px] px-[33px] py-[15px]">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-[#E4E4E4] rounded hover:bg-[#131313] md:hover:bg-transparent md:border-0 md:p-0"
                            aria-current="page">Мои дела</a>
                    </li>
                    <li  class="bg-[#1C1C1C] rounded-[20px] px-[33px] py-[15px]">
                        <a data-modal-target="warndelo" data-modal-toggle="warndelo" href="#"
                            class="block py-2 pl-3 pr-4 text-[#E4E4E4] rounded hover:bg-[#131313] md:hover:bg-transparent md:border-0 md:p-0"
                            aria-current="page">НА ВАС ПОДАЛИ</a>
                    </li>
                </ul>
            </div>
            <div data-modal-target="createdelo" data-modal-toggle="createdelo" class="bg-[#FF4B4B] rounded-[20px] px-[33px] py-[15px]">
                <a href="#"
                    class="block font-medium py-2 pl-3 pr-4 text-[#000000] rounded hover:bg-[#131313] md:hover:bg-transparent md:border-0 md:p-0"
                    aria-current="page">Подать дело</a>
            </div>
        </div>
        <form class="flex items-center mb-[30px]">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <input type="text" id="simple-search"
                    class="text-[#838383] active:text-[#838383] border border-[#1D72F2] active:bg-[none] text-sm rounded-lg focus:ring-[#FF67B4] focus:border-[#FF67B4] block w-full pl-2.5 p-2.5"
                    placeholder="Поиск..." style="background-color: rgb(255, 136, 71, 0) !important;" required>
            </div>
            <button type="submit"
                class="p-2.5 ml-2 text-sm font-medium text-white bg-[#1D72F2] rounded-lg">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-[20px]">
            <a data-modal-target="infodelo" data-modal-toggle="infodelo" href="#" class="w-full p-[25px] rounded-[10px] bg-[#1C1C1C] relative">
                <div class="flex justify-between">
                    <div class="space-y-[9px]">
                        <div class="text-[#E4E4E4] text-xl font-semibold">Дело №333: Ударил меня оч сильно</div>
                        <div class="text-[#7C7C7C] font-semibold flex text-base">
                            <div class="">13.04.2023</div>
                            <div class="ml-3">21:53</div>
                        </div>
                        <div class="text-[#7C7C7C] font-semibold text-base">Данный молодой человек толкнул меня и мне было больно</div>

                        <div class="flex items-center justify-between space-x-[15px]">
                            <div class="flex items-center space-x-[18px]">
                                <img class="w-8 h-8 rounded-[5px] select-none" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                                <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 9L-8.15666e-07 17.6603L-5.85621e-08 0.339745L15 9Z" fill="#7C7C7C"/>
                                </svg>
                                <img class="w-8 h-8 rounded-[5px] select-none" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                            </div>
                            
                            <div class="text-[#A767F8] bg-[#392750] px-[15px] py-[6px] rounded-xl text-sm font-semibold">Ожидание ответчика</div>
                        </div>
                        <div class="text-[#7C7C7C] font-semibold text-center text-base">Нажмите чтобы посмотреть подробнее</div>
                    </div>
                </div>
            </a>
            <a href="#" class="w-full p-[25px] rounded-[10px] bg-[#1C1C1C] relative">
                <div class="flex justify-between">
                    <div class="space-y-[9px]">
                        <div class="text-[#E4E4E4] text-xl font-semibold">Дело №333: Ударил меня оч сильно</div>
                        <div class="text-[#7C7C7C] font-semibold flex text-base">
                            <div class="">13.04.2023</div>
                            <div class="ml-3">21:53</div>
                        </div>
                        <div class="text-[#7C7C7C] font-semibold text-base">Данный молодой человек толкнул меня и мне было больно</div>

                        <div class="flex items-center justify-between space-x-[15px]">
                            <div class="flex items-center space-x-[18px]">
                                <img class="w-8 h-8 rounded-[5px] select-none" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                                <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 9L-8.15666e-07 17.6603L-5.85621e-08 0.339745L15 9Z" fill="#7C7C7C"/>
                                </svg>
                                <img class="w-8 h-8 rounded-[5px] select-none" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                            </div>
                            
                            <div class="text-[#FF866B] bg-[#503127] px-[15px] py-[6px] rounded-xl text-sm font-semibold">В очереди</div>
                        </div>
                        <div class="text-[#7C7C7C] font-semibold text-center text-base">Нажмите чтобы посмотреть подробнее</div>
                    </div>
                </div>
            </a>
            <a href="#" class="w-full p-[25px] rounded-[10px] bg-[#1C1C1C] relative">
                <div class="flex justify-between">
                    <div class="space-y-[9px]">
                        <div class="text-[#E4E4E4] text-xl font-semibold">Дело №333: Ударил меня оч сильно</div>
                        <div class="text-[#7C7C7C] font-semibold flex text-base">
                            <div class="">13.04.2023</div>
                            <div class="ml-3">21:53</div>
                        </div>
                        <div class="text-[#7C7C7C] font-semibold text-base">Данный молодой человек толкнул меня и мне было больно</div>

                        <div class="flex items-center justify-between space-x-[15px]">
                            <div class="flex items-center space-x-[18px]">
                                <img class="w-8 h-8 rounded-[5px] select-none" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                                <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 9L-8.15666e-07 17.6603L-5.85621e-08 0.339745L15 9Z" fill="#7C7C7C"/>
                                </svg>
                                <img class="w-8 h-8 rounded-[5px] select-none" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                            </div>
                            
                            <div class="text-[#95F867] bg-[#2D5027] px-[15px] py-[6px] rounded-xl text-sm font-semibold">Дело закрыто</div>
                        </div>
                        <div class="text-[#7C7C7C] font-semibold text-center text-base">Нажмите чтобы посмотреть подробнее</div>
                    </div>
                </div>
            </a>
            
        </div>
    </div>
</body>
<?require 'src\views\Partials\modals\create-delo.php';?>
<?require 'src\views\Partials\modals\close-delo.php';?>
<?require 'src\views\Partials\modals\info-delo.php';?>
<?require 'src\views\Partials\modals\warn-modal.php';?>