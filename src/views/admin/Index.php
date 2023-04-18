<body class="bg-black">
    <div class="flex items-center relative justify-center min-h-screen">
        <form
            class="rounded-md border-solid absolute flex bg-admin-black flex-col items-stretch justify-center text-white p-10">
            <h2 class="text-white font-semibold text-2xl mb-6 text-center">Voxel ID</h2>
            <img class="w-36 h-36 mx-auto" src="http://localhost:3000/images/logo.png">
            <div class="pt-6 font-Manrope">
                <div class="form-login">
                    <input maxlength="24" placeholder="Никнейм*" type="text" name="name"
                        class="text-white bg-admin-black-btn rounded-md border-solid w-96 transition duration-150"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="pt-6 font-Manrope">
                <div class="mb-3 form-login">
                    <input maxlength="50" placeholder="Пароль*" type="password" name="passwd"
                        class="text-white bg-admin-black-btn rounded-md border-solid w-96 transition duration-150"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <!-- <p class="password-flex"><a href="#" class="password-err">Забыли пароль?</a></p> -->
            </div>
            <!-- <div class="font-Manrope">
                <div class="mb-3 flex items-center justify-center">
                    <input type='checkbox' class="text-white bg-admin-black-btn rounded-md border-solid mr-2 transition duration-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                    Запомнить пароль
                </div>
                
            </div> -->
            <div class="font-Manrope font-medium">
                <p class="flex text-center items-center justify-center transition duration-150 ease-in">
                    Ошибка: Вы ввели неправильный пароль
                </p>
                <!-- <p class="lisense">
                    Нажимая кнопку 'Подтвердить' вы соглашаетесь с нашей офертой.
                </p> -->
                <div class="flex items-center justify-center font-Manrope mt-6 ">
                    <!-- type="submit" -->
                    <button onclick="location.href='/adminpanel/bank'" type="button"
                        class="bg-admin-black-btn w-full rounded-md border py-2 shadow-xl hover:bg-admin-black hover:text-schalker-purple transition duration-150">Войти</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>