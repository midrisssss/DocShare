<header
    class="w-svw py-3 px-5 flex flex-wrap gap-3 md:gap-5 justify-between items-center text-base text-black  dark:text-white bg-white dark:bg-black sticky top-0 z-40 shadow-xl">
    <a href="./index.php" class="flex-none"><img src="./assets/logo.svg" alt="" title="DocShare"
            class="flex-1 w-14"></a>
    <form action="./pages/documents.php" method="get" class="flex gap-2 flex-1 w-1/2 md:w-1/4">
        <input type="text" placeholder="Search Document"
            class="flex-auto md:w-3/4 px-3 py-2 text-xs md:text-base outline-none border-2 border-gray rounded-lg focus:border-blue bg-white dark:bg-black dark:text-white">
        <button role="submit" class="flex-auto md:w-14 grow-0 bg-blue hover:bg-blue rounded-lg py-2 px-3"><i
                class="fi fi-sr-search text-white"></i></button>
    </form>
    <button role="button" id="toggle-theme" class="flex-1 grow-0 w-14 hover:bg-gray rounded-lg px-3 py-2">
        <i class="fi fi-sr-moon"></i><i class="fi fi-sr-sun hidden"></i>
    </button>
    <button id="toggle-btn" class="grow-0 w-14 md:hidden hover:bg-gray rounded-lg py-2 px-3"><i
            class="fi fi-sr-menu-burger"></i><i id="closeNav" class="fi fi-sr-cross hidden"></i></button>
    <div id="nav-menu"
        class="flex-none w-full hidden md:flex gap-3 flex-wrap flex-col items-center text-center md:flex-auto md:w-1/3 md:flex-row md:justify-between md:flex-nowrap mt-8 md:mt-0">
        <div id="nav-links"
            class="flex-auto w-full flex flex-wrap gap-3 flex-col justify-center md:w-1/4 md:flex-row md:justify-evenly md:items-center md:flex-nowrap">
            <a href="./index.php" id="#nav-home"
                class="flex-auto w-full md:w-auto rounded-lg text-black  dark:text-white hover:bg-gray hover:text-white font-semibold px-3 py-2">Home</a>
            <a href="./index.php?p=pricing" id="#nav-pricing"
                class="flex-auto w-full md:w-auto rounded-lg text-black  dark:text-white hover:bg-gray hover:text-white font-semibold px-3 py-2">Pricing</a>
            <a href="./index.php?p=about" id="#nav-about"
                class=" flex-auto w-full md:w-auto rounded-lg text-black  dark:text-white hover:text-white hover:bg-gray font-semibold px-3 py-2">About</a>
        </div>
        <div id="nav-account" class="flex-auto flex flex-wrap w-full md:w-1/4 md:items-end md:justify-end mt-12 md:mt-0">
            <a href="" id="loginBtn"
                class="w-full md:w-auto h-full text-sm md:text-lg rounded-xl bg-black border-4 border-white dark:border-black dark:bg-white dark:text-black hover:border-gray text-white font-semibold px-4 py-2 openLogin">Login</a>
            <a href="" id="registerBtn"
                class="w-full md:w-auto h-full text-sm md:text-lg rounded-xl bg-blue border-4 border-white dark:border-black  dark:text-black hover:border-gray text-white font-semibold px-4 py-2 openRegister">Register</a>
        </div>
    </div>
</header>
<script src="./components/header.js"></script>