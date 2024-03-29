<body class="bg-tavern-black min-w-[447px]">
    <?require 'src\views\Partials\header.php';?>
        <main>
            <div class="pt-28 px-10 sm:px-0 font-sans">
                <div class="bg-tavern-link container  mx-auto rounded-t-lg p-2 w-full flex flex-col">
                    <p class="text-white flex items-center">
                        <svg class="mx-2" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_0_811)">
                                <path
                                    d="M8.55926 15.5254C12.5189 15.5254 15.7288 12.3156 15.7288 8.35595C15.7288 4.39635 12.5189 1.18646 8.55926 1.18646C4.59966 1.18646 1.38977 4.39635 1.38977 8.35595C1.38977 12.3156 4.59966 15.5254 8.55926 15.5254Z"
                                    stroke="#111414" stroke-width="1.59322" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M6.96604 11.9407L8.55926 9.55084L10.1525 11.9407M8.55926 9.55084V7.95762L10.9491 7.16101M6.16943 7.16101L8.55926 7.95762"
                                    stroke="#111414" stroke-width="1.59322" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M8.55932 5.16947C8.77929 5.16947 8.95762 4.99115 8.95762 4.77117C8.95762 4.55119 8.77929 4.37286 8.55932 4.37286C8.33934 4.37286 8.16101 4.55119 8.16101 4.77117C8.16101 4.99115 8.33934 5.16947 8.55932 5.16947Z"
                                    fill="#111414" stroke="#111414" stroke-width="1.59322" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_0_811">
                                    <rect width="17" height="17" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        50 игроков
                    </p>
                    <p class="text-white flex items-center">
                        <svg class="mx-2" width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_0_820)">
                                <path
                                    d="M8.27225 5.16949H6.84632C6.36017 5.16949 5.96606 5.5636 5.96606 6.04975V13.8486C5.96606 14.3347 6.36017 14.7288 6.84632 14.7288H8.27225C8.7584 14.7288 9.15251 14.3347 9.15251 13.8486V6.04975C9.15251 5.5636 8.7584 5.16949 8.27225 5.16949Z"
                                    fill="#111414" />
                                <path
                                    d="M13.8485 0.389832H12.4226C11.9365 0.389832 11.5424 0.783935 11.5424 1.27009V13.8486C11.5424 14.3347 11.9365 14.7288 12.4226 14.7288H13.8485C14.3347 14.7288 14.7288 14.3347 14.7288 13.8486V1.27009C14.7288 0.783935 14.3347 0.389832 13.8485 0.389832Z"
                                    fill="#111414" />
                                <path
                                    d="M1.98299 14.7288C2.8629 14.7288 3.57621 14.0155 3.57621 13.1356C3.57621 12.2557 2.8629 11.5424 1.98299 11.5424C1.10308 11.5424 0.389771 12.2557 0.389771 13.1356C0.389771 14.0155 1.10308 14.7288 1.98299 14.7288Z"
                                    fill="#111414" />
                            </g>
                            <defs>
                                <clipPath id="clip0_0_820">
                                    <rect width="15" height="15" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        mc.voxelcraft.ru
                    </p>
                </div>
                <?php

                    $months = [
                        'Января',
                        'Февраля',
                        'Марта',
                        'Апрелья',
                        'Мая',
                        'Июня',
                        'Июля',
                        'Августа',
                        'Сентября',
                        'Октября',
                        'Ноября',
                        'Декабря'
                    ];
                    $weekDays = [
                        'Понедельник',
                        'Вторник',
                        'Среда',
                        'Четверг',
                        'Пятница',
                        'Суббота',
                        'Воскресенье'
                    ];
                ?>
                <script>
                    const dataToday = [
                        <?php
                            for($i=0; $i < count($StatsToday); $i++){
                                echo $StatsToday[$i][1].',';
                            }
                        ?>
                    ]
                    const dataYesterday = [
                        <?php
                            for($i=0; $i < count($StatsYesterday); $i++){
                                echo $StatsYesterday[$i][1].',';
                            }
                        ?>
                    ]
                    const dataWeek = [
                        <?php
                            for($i=0; $i < count($StatsWeek); $i++){
                                echo $StatsWeek[$i][1].',';
                            }
                        ?>
                    ]
                    const dataMonth = [
                        <?php
                            for($i=0; $i < count($StatsMonth); $i++){
                                echo $StatsMonth[$i][1].',';
                            }
                        ?>
                    ]





                    const labelsToday = [
                        <?php
                            for($i=0; $i < count($StatsToday); $i++){
                                echo '"'.date('G:i', $StatsToday[$i][0]).'",';
                            }
                        ?>
                    ]
                    const labelsYesterday = [
                        <?php
                            for($i=0; $i < count($StatsYesterday); $i++){
                                echo '"Вчера в '.date('G:i', $StatsYesterday[$i][0]).'",';
                            }
                        ?>
                    ]
                    const labelsWeek = [
                        <?php
                            for($i=0; $i < count($StatsWeek); $i++){
                                echo '"'.date('j', $StatsWeek[$i][0]).' '.$months[date('n', $StatsWeek[$i][0])-1].', '.$weekDays[date('N', $StatsWeek[$i][0])-1].' в '.date('G:i', $StatsWeek[$i][0]).'",';
                            }
                        ?>
                    ]
                    const labelsMonth = [
                        <?php
                            for($i=0; $i < count($StatsMonth); $i++){
                                echo '"'.date('j', $StatsMonth[$i][0]).' '.$months[date('n', $StatsMonth[$i][0])-1].', '.$weekDays[date('N', $StatsMonth[$i][0])-1].' в '.date('G:i', $StatsMonth[$i][0]).'",';
                            }
                        ?>
                    ]
                </script>

            
                <canvas class="border border-tavern-link container mx-auto rounded-b-lg h-72 max-h-72 w-full flex flex-col chart-today" style="display: none;"></canvas>
                <canvas class="border border-tavern-link container mx-auto rounded-b-lg h-72 max-h-72 w-full flex flex-col chart-yesterday" style="display: none;"></canvas>
                <canvas class="border border-tavern-link container mx-auto rounded-b-lg h-72 max-h-72 w-full flex flex-col chart-week" style="display: none;"></canvas>
                <canvas class="border border-tavern-link container mx-auto rounded-b-lg h-72 max-h-72 w-full flex flex-col chart-month"></canvas>
            </div>
            <div class="py-10  font-sans">
                <div class="container mx-auto flex items-center flex-col md:grid md:grid-cols-none md:grid-rows-1">
                    <div class="md:my-auto mb-5">
                        <button class="bg-tavern-link hover:bg-blue-500 py-[16px] px-[42px] rounded-md text-white font-medium online-all-button">Все игроки</button>
                    </div>

                    <div class="bg-tavern-grid h-[54px]  rounded-md col-start-3 col-span-10 w-full">
                        <nav class="ml-0 md:ml-8">
                            <ul class="flex justify-center md:justify-start p-4 flex-row lg:space-x-6 mt-0 font-medium">
                                <li>
                                    <a
                                        class="text-white hover:border-b border-[#1d72f2] transition-all mx-3 px-1 py-4 cursor-pointer online-now-button"
                                        aria-current="page">Онлайн</a>
                                </li>
                                <li>
                                    <a 
                                        class="text-white hover:border-b border-[#1d72f2] transition-all mx-3 px-1 py-4 cursor-pointer online-month-button"
                                        aria-current="page">Месяц</a>
                                </li>
                                <li>
                                    <a 
                                        class="text-white hover:border-b border-[#1d72f2] transition-all mx-3 px-1 py-4 cursor-pointer online-week-button"
                                        aria-current="page">Неделя</a>
                                </li>
                                <li>
                                    <a 
                                        class="text-white hover:border-b border-[#1d72f2] transition-all mx-3 px-1 py-4 cursor-pointer online-yesterday-button"
                                        aria-current="page">Вчера</a>
                                </li>
                                <li>
                                    <a 
                                        class="text-white hover:border-b border-[#1d72f2] transition-all mx-3 px-1 py-4 cursor-pointer online-today-button" 
                                        aria-current="page">Сегодня</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="container px-10 sm:px-0 my-10 mx-auto">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Введи желаемый никнейм...</label>
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
                                placeholder="Введи желаемый никнейм..." required>
                        </div>
                        <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Введи желаемый никнейм</span>
                        </button>
                    </form>
                </div>
                <div class="container mx-auto gap-x-16 gap-y-8 px-10 sm:px-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 grid-rows-3">
                    <?php
                        for($i=0; $i<count($Players); $i++){
                            
                            echo '
                            <a href="/Profile?Login='.$Players[$i][1].'" class="bg-tavern-grid hover:bg-zinc-800 border border-gray-500 py-5 px-5 rounded-md flex items-center user online-';
                            if($Players[$i][4] == 1){echo 'now';}
                            else if(time() - (time() - strtotime('today')) - $Players[$i][3] <= 0){echo 'today';}
                            else if(time() - (time() - strtotime('today')) - $Players[$i][3] < 0 && time() - (time() - strtotime('today')) - 24*60*60 - $Players[$i][3] > 0){echo 'yesterday';}
                            else if(time() - (time() - strtotime('today')) - 7*24*60*60 - $Players[$i][3] < 0){echo 'week';}
                            else if(time() - (time() - strtotime('today')) - 30*24*60*60 - $Players[$i][3] < 0){echo 'month';}

                            echo '">
                                <img class="h-[80px] rounded-lg" src="'.$this->User->getAvatar($Players[$i][1]).'" style="image-rendering:pixelated;">
                                <div class="text-white ml-8 flex flex-col">
                                    <p class="user-name font-medium text-lg leading-7">'.$Players[$i][1].'</p>
                                    <p class="leading-none text-lg text-gray-400 font-normal">Наиграл: <span class="text-tavern-link font-semibold">'.$Players[$i][2].' ч.</span></p>
                                </div>
                            </a>
                            ';
                        }

                        
                    ?>
                </div>
            </div>
        </main>
        <?require 'src\views\Partials\footer.php';?>
</body>

</html>