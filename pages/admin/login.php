<?php
require_once "../../class.Connect.php";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth transition-all">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/logo.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="./index.css">
    <title>Docshare</title>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        black: "#000000",
                        white: "#ffffff",
                        blue: "#2322ff",
                        gray: "#d1d1d1",
                    },
                },
            },
        }
    </script>
</head>

<body>
    <main class="flex justify-center items-center">

        <form action="" method="POST"
            class="flex-auto w-full md:w-1/2 flex flex-col gap-3 justify-center items-center md:p-[50px] md:pt-10">
            <div class="flex-auto w-full text-end">
                <button type="button" class="font-bold" id="hideLogin"><i
                        class="fi fi-sr-cross dark:text-white"></i></button>
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
            <p class="flex-auto w-full dark:text-white">Don't have an account? <a href="" id="loginToRegister"
                    class="text-blue">Register</a>
            </p>
        </form>
    </main>
</body>

</html>