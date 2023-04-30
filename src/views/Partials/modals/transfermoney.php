<!-- Main modal -->
<div id="transfermoney" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-lg md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-tavern-black">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="transfermoney">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Закрыть модал</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">По номеру карты</h3>
                <form class="space-y-6" action="/Profile/Bank" method="GET">
                    <h4 class="text-lg font-medium text-gray-900 dark:text-white">Откуда</h4>

                    <div class="flex">
                        <select id="cards" name="From_Card"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-tavern-grid-br dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <option selected>Выбранная карта</option>
                            <?php
                                for($i=0; $i<count($allCards); $i++){
                                    echo '<option value="'.$allCards[$i][0][1].'">'.$allCards[$i][0][1].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <h4 class="text-lg font-medium text-gray-900 dark:text-white">Куда</h4>
                    <div>
                        <input type="card" name="To_Card" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-tavern-grid-br dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required placeholder="Номер карты">
                    </div>
                    <div>
                        <input type="number" name="Score" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-tavern-grid-br dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required placeholder="Сумма">
                    </div>
                    <div class="flex items-center">
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Отправить
                        </button>
                        <button type="submit"
                            class="w-full text-white ml-10 font-medium rounded-lg text-sm text-center">Отменить
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>