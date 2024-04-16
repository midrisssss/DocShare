<div id="loginForm"
    class="fixed -bottom-3/4 left-1/2 -translate-x-1/2 hidden mx-auto z-50 w-full md:w-3/4 h-3/4 p-[50px] pt-10 md:p-0 flex-row gap-5 justify-center items-start rounded-t-xl md:rounded-xl overflow-hidden bg-white dark:bg-black shadow-2xl transition-all duration">
    <div class="hidden md:block md:flex-auto md:w-1/2 md:h-full md:bg-cover md:bg-center bg-[url('./assets/image-2.png')]"></div>
    <form action="" method="POST"
        class="flex-auto w-full md:w-1/2 flex flex-col gap-3 justify-center items-center md:p-[50px] md:pt-10">
        <div class="flex-auto w-full text-end">
            <button type="button" class="font-bold" id="hideLogin"><i class="fi fi-sr-cross dark:text-white"></i></button>
        </div> 
        <h2 class="flex-auto w-full font-bold text-2xl text-center dark:text-white">Login</h2>
        <div class="flex-auto w-full">
            <label for="usernameLogin" class="w-full font-semibold dark:text-white">Username</label>
            <input type="text" id="usernameLogin" name="usernameLogin"
                class="w-full rounded-xl border-4 border-gray focus:border-blue outline-none  px-5 py-3 mt-3 dark:bg-black dark:text-white"
                placeholder="Jhon Doe">
        </div>
        <div class="flex-auto w-full">
            <label for="passwordLogin" class="w-full font-semibold dark:text-white">Password</label>
            <input type="password" id="passwordLogin" name="passwordLogin"
                class="w-full rounded-xl border-4 border-gray focus:border-blue outline-none  px-5 py-3 mt-3 dark:bg-black dark:text-white"
                placeholder="Jhon Doe">
        </div>
        <button type="submit" id="login" name="login"
            class="flex-auto w-full px-5 py-3 bg-blue text-white font-semibold hover:bg-blue-800 rounded-xl">Login</button>
        <p class="flex-auto w-full dark:text-white">Don't have an account? <a href="" id="loginToRegister" class="text-blue">Register</a>
        </p>
    </form>
</div>