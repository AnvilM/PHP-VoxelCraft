<body class="bg-[#111414] min-w-[530px]">
<?require 'src\views\Partials\header.php';?>
        <div class="container  max-w-screen-lg mx-auto mt-24">
            <div style="background-image: url(https://schalker.ru/user/profile/banners/ComboGames_GG_banner.png?v=718);" class="bg-cover bg-center w-full h-[320px] mb-5 rounded-[10px] bg-[#1C1C1C]"></div>
            <div class="flex items-center mb-5 font-semibold text-base justify-between">
                <a data-modal-target="createzap" data-modal-toggle="createzap" href="#" class="text-[#000000] px-[50px] py-[17px] rounded-[20px] bg-[#4B73FF]">
                    Создать запись
                </a>
                <a data-modal-target="deletezap" data-modal-toggle="deletezap" href="#" class="text-[#000000] px-[50px] py-[17px] rounded-[20px] bg-[#FF4B4B]">
                    Удалить баннер
                </a>
                <a data-modal-target="createbanner" data-modal-toggle="createbanner" href="#" class="text-[#000000] px-[50px] py-[17px] rounded-[20px] bg-[#FFA24B]">
                    Создать баннер
                </a>
            </div>
            <div class="grid grid-cols-1 gap-[20px]">
                <a href="#" class="w-full p-[50px] rounded-[10px] bg-[#1C1C1C] relative">
                    <div class="">
                        <div class="flex space-x-[15px]">
                            <img class="w-[50px] h-[50px] rounded-[5px]" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                            <div class="flex flex-col justify-between font-semibold text-base">
                                <div class="text-white">dsq_Aluminium_</div>
                                <div class="text-[#7C7C7C]">13.04.2023</div>
                            </div>
                        </div>
                        <div class="font-semibold  text-white text-base my-4">Я очень крутой чел люблю какашки.</div>
                        <div class="flex items-center space-x-[15px]">
                            <div class="w-[70px] h-[30px] bg-zinc-800 rounded-[10px]"></div>
                            <div class="w-[70px] h-[30px] bg-zinc-800 rounded-[10px]"></div>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-full p-[50px] rounded-[10px] bg-[#1C1C1C] relative">
                    <div class="">
                        <div class="flex space-x-[15px]">
                            <img class="w-[50px] h-[50px] rounded-[5px]" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                            <div class="flex flex-col justify-between font-semibold text-base">
                                <div class="text-white">dsq_Aluminium_</div>
                                <div class="text-[#7C7C7C]">13.04.2023</div>
                            </div>
                        </div>
                        <div class="font-semibold  text-white text-base my-4">Я очень крутой чел люблю какашки.</div>
                        <div class="flex items-center space-x-[15px]">
                            <div class="w-[70px] h-[30px] bg-zinc-800 rounded-[10px]"></div>
                            <div class="w-[70px] h-[30px] bg-zinc-800 rounded-[10px]"></div>
                        </div>
                    </div>
                </a>
                <a href="#" class="w-full p-[50px] rounded-[10px] bg-[#1C1C1C] relative">
                    <div class="">
                        <div class="flex space-x-[15px]">
                            <img class="w-[50px] h-[50px] rounded-[5px]" src="https://media.discordapp.net/attachments/1095820577622732820/1149796670175977492/image.png" />
                            <div class="flex flex-col justify-between font-semibold text-base">
                                <div class="text-white">dsq_Aluminium_</div>
                                <div class="text-[#7C7C7C]">13.04.2023</div>
                            </div>
                        </div>
                        <div class="font-semibold  text-white text-base my-4">Я очень крутой чел люблю какашки.</div>
                        <div class="flex items-center space-x-[15px]">
                            <div class="w-[70px] h-[30px] bg-zinc-800 rounded-[10px]"></div>
                            <div class="w-[70px] h-[30px] bg-zinc-800 rounded-[10px]"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
</body>
<?require 'src\views\Partials\zaps\create-zap.php';?>
<?require 'src\views\Partials\zaps\delete-zap.php';?>
<?require 'src\views\Partials\zaps\create-banner.php';?>