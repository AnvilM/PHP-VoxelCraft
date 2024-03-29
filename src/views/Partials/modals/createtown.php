<!-- Main modal -->
<div id="createtown" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-lg md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-tavern-black">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="createtown">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Закрыть модал</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Создание города</h3>
                <form class="space-y-6" action="/Town/Create" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название
                            города</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-tavern-grid-br dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <div>
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание города</label>
                        <textarea id="description" rows="4" name="desc"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-tavern-grid-br dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                    <!-- <div>
                        <label for="banner"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Баннер</label>
                        <input type="file" name="banner" id="banner"
                            placeholder="https://www.planetminecraft.com/banner/?b=g"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-tavern-grid-br dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            accept=".png" required>
                        <p class="text-white mt-2 text-sm">Размер баннера 20x40 пикселей</p>
                        <p class="text-white text-sm">Вы можете создать и скачать баннер на <a
                                href="https://www.planetminecraft.com/banner/"
                                class="text-tavern-link underline hover:no-underline">Planet Minecraft</a></p>
                    </div> -->

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Загрузить баннер</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-tavern-grid-br dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file" name="banner">
                    <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG (MAX. 20x40px).</p>

                    <div>
                        <label for="discord"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Дискорд сервер (не
                            обязательно)</label>
                        <input type="text" name="discord" id="discord" placeholder="https://discord.com/invite/Dh5YDDT"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-tavern-grid-br dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>


                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Создать
                        город</button>

                </form>
            </div>
        </div>
    </div>
</div>