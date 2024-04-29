<footer
    class="flex flex-row flex-wrap justify-evenly items-start gap-5 p-[3rem] md:p-[4rem] bg-white dark:bg-black dark:text-white border-t-2 border-gray">
    <div class="flex-none w-1/4"><a href="#" class=""><img src="./assets/footer-brand.png" title="DocShare" alt=""
                class="w-full pointer-events-none"></a></div>
    <ul class="flex-none flex flex-col">
        <li>
            <h3 class="font-semibold">Pages</h3>
        </li>
        <li class="py-2 transition duration-300 hover:translate-x-3"><a href="?p=home"
                class="hover:text-blue transition duration-300 hover:translate-x-3">Home</a></li>
        <li class="py-2 transition duration-300 hover:translate-x-3"><a href="?p=pricing"
                class="hover:text-blue transition duration-300 hover:translate-x-3">Pricing</a></li>
        <li class="py-2 transition duration-300 hover:translate-x-3"><a href="?p=about"
                class="hover:text-blue transition duration-300 hover:translate-x-3">About Us</a></li>
        <li class="py-2 transition duration-300 hover:translate-x-3"><a href="./pages/register.php"
                class="hover:text-blue transition duration hover:translate-x-3">Upload Document</a></li>
    </ul>
    <ul class="flex-none flex flex-col">
        <li class="flex-1 grow">
            <h3 class="font-semibold">Category</h3>
        </li>
        <?php
        include "./class/Documents.php";
        $myDocumentsFooter = new Documents();
        $getCategoryFooter = $myDocumentsFooter->getCategory();
        ?>
        <?php foreach ($getCategoryFooter as $value) { ?>
            <li class="flex-1 grow py-2 transition duration-300 hover:translate-x-3"><a
                    href="./pages/documents.php?c=<?= $value ?>"
                    class="hover:text-blue hover:translate-x-3"><?= $value ?></a></li>
        <?php } ?>
    </ul>
    <div class="flex-auto md:flex-none p-5 md:w-1/5 flex-wrap flex justify-center gap-5 text-center">
        <a href="./pages/login.php"
            class="py-3 px-4 flex-auto w-full font-semibold bg-blue transition hover:bg-blue rounded-lg text-white">Login</a>
        <a href="./pages/register.php"
            class="py-3 px-4 flex-auto w-full font-semibold bg-black dark:bg-white dark:text-black rounded-lg text-white">Register</a>
    </div>
</footer>