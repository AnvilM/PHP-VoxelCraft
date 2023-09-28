<div id="createbanner" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-lg md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-[#111414]">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="createbanner">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Закрыть модал</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Создать баннер</h3>
                
                <form class="space-y-3" action="/Profile/Bank">
                    <h3 class="mb-2 text-base font-medium text-gray-900 dark:text-white">Изображение</h3>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">ЖМИ</span> чтобы загрузить</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div> 
                    <h3 class="mb-2 text-base font-medium text-gray-900 dark:text-white">С какой карты списывать деньги</h3>
                    <input type="text" name="name" id="name" placeholder="Номер карты"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#1C1C1C] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required>
                    <input type="text" name="name" id="name" placeholder="Сумма"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#1C1C1C] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required>
                    <button type="submit" name="Edit" data-modal-hide="closedelo"
                        class="w-full text-[#95F867] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium transition-all rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#2D5027] dark:focus:ring-blue-800">Создать</button>
                </form>
            </div>
        </div>
    </div>
</div>