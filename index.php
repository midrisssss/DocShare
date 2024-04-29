<?php
require_once "./class.Connect.php";
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

<body class="w-svw overflow-x-hidden bg-white dark:bg-black font-sans transition-all">
    <div id="background" class="w-svw h-svh fixed z-50 top-0 left-0 bg-black opacity-50"></div>
    <?php
    include "./components/loading.php";
    include "./components/login.php";
    include "./components/register.php";
    include "./components/header.php";

    // p = pages
    $route = isset($_GET["p"]) ? $_GET["p"] : "";

    switch ($route) {
        case "":
        case "home":
            $route = "home";
            include "./pages/home.php";
            echo "<script>document.querySelector('#nav-links>a').classList.remove('bg-blue', 'text-black');document.querySelector('#nav-links>a:nth-of-type(1)').className += ' bg-blue text-white';</script>";
            break;
        case "pricing":
            include "./pages/pricing.php";
            echo "<script>document.querySelector('#nav-links>a').classList.remove('bg-blue', 'text-black');document.querySelector('#nav-links>a:nth-of-type(2)').className += ' bg-blue text-white';</script>";
            break;
        case "about":
            include "./pages/about.php";
            echo "<script>document.querySelector('#nav-links>a').classList.remove('bg-blue', 'text-black');document.querySelector('#nav-links>a:nth-of-type(3)').className += ' bg-blue text-white';</script>";
            break;
        default:
            echo "<h1>Page not Found</h1>";
            break;
    }

    include "./components/footer.php";
    ?>
    <a href="#"
        class="fixed bottom-8 right-4 z-40 bg-white dark:bg-black dark:text-white py-3 px-4 shadow-xl rounded-full hover:bg-blue dark:hover:bg-blue hover:text-white hover:opacity-100"><i
            class="fi fi-sr-angle-up"></i></a>
    <script src="./index.js"></script>
</body>

</html>