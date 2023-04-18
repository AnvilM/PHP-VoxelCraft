<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en" id="element" class="dark antialiased [--scrollbar-size:theme(width.4)] motion-safe:scroll-smooth">

<head>

</head>

<body class="bg-tavern-black overflow-x-hidden min-w-[647px]">
    <?require 'src\views\Partials\header.php';?>
    <main class="pt-20 font-sans">
      <section class="container mx-auto">
        <div class="container negri pb-[400px] pt-20 mb-8 items-center max-w-[1920px] text-center mx-auto  flex justify-between flex-col">
          <img class="w-[100px]" src="public\images\logo.png">
          <h1 class="text-white text-4xl font-bold mt-5">VoxelCraft</h1>
          <p class="text-white text-center text-xl mt-5">Приватный сервер Майнкрафт, с уютной игрой,<br>ламповой атмосферой и дружелюбным<br>комьюнити
          </p>
          <a href="#buy" class="text-white bg-[#1d72f2] hover:bg-blue-500 px-8 py-3 font-semibold rounded-xl text-center mt-7">Купить проходку</a>
        </div>
      </section>
      <section class="h-[1450px] md:h-[597px] mb-24">
        <div class="container mx-auto pt-6">
          <h1 class="text-white text-5xl text-center font-[benzin]">Ответы на частные вопросы</h1>
          <div class="block md:grid grid-cols-3 grid-rows-2 gap-4 lg:gap-18 mt-10">
            <div
              class="bg-tavern-grid border mb-10 md:mb-0 py-5 px-6 md:py-2 md:px-3 lg:py-5 lg:px-6 border-tavern-grid-br w-full h-[189px] rounded-lg flex justify-between flex-col">
              <img class="w-[39px]" src="public\images\koshel.svg">
              <h3 class="text-white font-semibold text-base">Вход на сервер платный?</h3>
              <p class="text-white text-sm">Нет. Вход на сервер абсолютно бесплатный! Подать заявку можно<br class="hidden xl:block">в нашем <a
                  href="#" class="text-tavern-link">дискорд сервере</a>!
              </p>
            </div>
            <div
              class="bg-tavern-grid border mb-10 md:mb-0 py-5 px-6 md:py-2 md:px-3 lg:py-5 lg:px-6 border-tavern-grid-br w-full h-[189px] rounded-lg flex justify-between flex-col">
              <img class="w-[39px]" src="public\images\Cart.svg">
              <h3 class="text-white font-semibold text-base">Какая валюта на сервере?</h3>
              <p class="text-white text-sm">На сервере используется <a href="#" class="text-tavern-link">алмазы</a><br class="hidden xl:block">в
                качестве основной валюты.
              </p>
            </div>
            <div
              class="bg-tavern-grid border mb-10 md:mb-0 py-5 px-6 md:py-2 md:px-3 lg:py-5 lg:px-6 border-tavern-grid-br w-full h-[189px] rounded-lg flex justify-between flex-col">
              <img class="w-[39px]" src="public\images\star.svg">
              <h3 class="text-white font-semibold text-base">Нужна лицензия?</h3>
              <p class="text-white text-sm">На сервер возможно зайти как<br class="hidden xl:block">с <a href="#"
                  class="text-tavern-link">лицензии,</a> так и с <a href="#" class="text-tavern-link">пиратки.</a>
              </p>
            </div>
            <div
              class="bg-tavern-grid border mb-10 md:mb-0 py-5 px-6 md:py-2 md:px-3 lg:py-5 lg:px-6 border-tavern-grid-br w-full h-[189px] rounded-lg flex justify-between flex-col">
              <img class="w-[39px]" src="public\images\case.svg">
              <h3 class="text-white font-semibold text-base">Можно ли купить разбан?</h3>
              <p class="text-white text-sm">Разбан купить <a href="#" class="text-tavern-link">нельзя,</a> но можно <a
                  href="#" class="text-tavern-link">подать<br class="hidden xl:block">апелляцию</a> на свой разбан в суде.
              </p>
            </div>
            <div
              class="bg-tavern-grid border mb-10 md:mb-0 py-5 px-6 md:py-2 md:px-3 lg:py-5 lg:px-6 border-tavern-grid-br w-full h-[189px] rounded-lg flex justify-between flex-col">
              <img class="w-[39px]" src="public\images\gamepad.svg">
              <h3 class="text-white font-semibold text-base">Какая версия игры?</h3>
              <p class="text-white text-sm">Сервер работает на версии игры <a href="#"
                  class="text-tavern-link">1.19</a><br class="hidden xl:block"> Мы поддерживаем все последние<br class="hidden xl:block">версии, чтобы игрокам было
                интересно.
              </p>
            </div>
            <div
              class="bg-tavern-grid border mb-10 md:mb-0 py-5 px-6 md:py-2 md:px-3 lg:py-5 lg:px-6 border-tavern-grid-br w-full h-[189px] rounded-lg flex justify-between flex-col">
              <img class="w-[39px]" src="public\images\Trash.svg">
              <h3 class="text-white font-semibold text-base">Как часто вайпы?</h3>
              <p class="text-white text-sm">Мы стараемся поддерживать интерес<br class="hidden xl:block">игроков, поэтому вайпы проходят с <a
                  href="#" class="text-tavern-link">выходом новой стабильной</a> версии игры.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="buy" class="h-[597px] relative my-24">
        
        <div class="container mx-auto  pt-6">
          <h1  class="text-white text-5xl text-center font-[benzin]">Оплата товара</h1>
          <div class="flex flex-col mt-14">
            <div class="flex justify-center">
              <label class="relative buy mr-6" data-title="Никнейм">
                <input placeholder="Ваш никнейм..."
                  class="bg-tavern-black pl-8 placeholder:text-gray-500 font-light text-white border border-tavern-input-br rounded-lg w-[300px] h-[55px]"
                  type="text" value="">
              </label>
              <label class="relative buy2 ml-6" data-title="Промокод">
                <input placeholder="При наличии..."
                  class="bg-tavern-black placeholder:text-gray-500 text-white border pl-8 border-tavern-input-br rounded-lg w-[300px] h-[55px]"
                  type="text" value="">
              </label>
            </div>
            <div class="flex mt-5 justify-center">
              <label class="relative buy3" data-title="Ассортимент">
                <select name="select" id="select"
                  class="bg-tavern-black text-white border pl-8 border-tavern-input-br rounded-lg w-[647px] h-[55px]">
                  <option label="Выберите нужный товар" selected value="">Не выбрано</option>
                  <option label="Проходка (50 р.)" value="266999">Проходка</option>
                  <option label="Разбан (300 р.)" value="339553">Разбан</option>
                  <option label="Смена Ника (100 р.)" value="348735">Смена ника</option>
                </select>
              </label>
            </div>
            <div class="flex mt-5 justify-center">
              <label class="relative buy3" data-title="Оплата">
                <select name="select" id="select"
                  class="bg-tavern-black text-white border pl-8 border-tavern-input-br rounded-lg w-[647px] h-[55px]">
                  <option label="Выберите способ оплаты" selected value="">Не выбрано</option>
                  <option label="Qiwi" value="266999">Qiwi</option>
                  <option label="EasyDonate" value="339553">EasyDonate</option>
                  <option label="DonationAlerts" value="348735">DonationAlerts</option>
                </select>
              </label>
            </div>
            <div class="flex mt-5 items-center justify-center">
              <a href="#"
                class="bg-tavern-input-br hover:bg-blue-500 px-[100px] mr-[24px] py-4 rounded-lg font-semibold text-white">Приобрести</a>
              <a href="#" class="text-white px-[100px] font-semibold">Правила сервера</a>
            </div>
          </div>
        </div>
        <div class="zalupa"></div>
        <!-- <div class="zalupa2"></div> -->
      </section>
    </main>
    <?require 'src\views\Partials\footer.php';?>
</body>


</html>
