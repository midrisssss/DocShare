<?php
?>
<main class="bg-[url('./assets/ellipse.png')] bg-auto dark:bg-[url('')]  dark:bg-black">
        <div id="hero" class="w-full h-[85svh] py-3 px-5 mb-3">
                <div id="top"
                        class="flex flex-wrap flex-column justify-center items-center w-full h-full mx-auto  bg-[url('./assets/image-3.png')] rounded-xl bg-cover bg-center bg-no-repeat text-center background-image-animation overflow-hidden grayscale-[10%]">
                        <div
                                class="flex flex-wrap flex-column justify-center items-center mx-auto py-3 px-5 w-full h-3/4 md:h-2/4">
                                <h1
                                        class="flex-initial w-full text-4xl md:text-6xl leading-5 md:leading-8 font-extrabold text-black drop-shadow-xl">
                                        Welcome
                                        to
                                        <span class="text-blue">DocShare</span> <br><span
                                                class="text-2xl md:text-3xl">the hub of Shared
                                                Intellegence</span>
                                </h1>
                                <form action="./index.php" method="get"
                                        class="flex-none flex flex-row flex-nowrap rounded-lg bg-white dark:text-white dark:bg-black w-3/4 md:w-1/2 p-2">
                                        <select name="search-category" id="search-categroy"
                                                class="flex-none w-1/4 rounded-lg bg-transparent px-3 py-2 cursor-pointer border-none outline-none border-r-2 border-gray">
                                                <option value="*" selected>All</option>
                                                <?php $i = 0; ?>
                                                <?php while ($i < count($getCategory)) { ?>
                                                        <option value="<?= $getCategory[$i] ?>"><?= $getCategory[$i] ?></option>
                                                        <?php $i++ ?>
                                                <?php } ?>
                                        </select>
                                        <input type="text" name="search-text" id="search-text"
                                                class="flex-auto w-full bg-transparent px-3 py-2 outline-none border-2 border-none dark:text-white"
                                                placeholder="Search Document">
                                        <button type="submit" id="search"
                                                class="flex-1/4 rounded bg-blue text-white px-4 py-2 pointer"><i
                                                        class="fi fi-sr-search text-white"></i><span
                                                        class="hidden md:inline md:ml-2 font-semibold dark:text-white">Search</span></button>
                                </form>
                                <!-- ini contoh aja nanti bakal page loop buat nampilin semua category -->
                                <ul class="flex-none w-3/4 flex flex-wrap justify-center items-center gap-3">
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[0.9] rounded">Mathematics</a>
                                        </li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">Programming</a>
                                        </li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">Language</a>
                                        </li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">Social
                                                        Science</a></li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">People</a>
                                        </li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">Character
                                                        Building</a></li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">Data
                                                        Analys</a></li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">Social
                                                        Science</a></li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">People</a>
                                        </li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">Character
                                                        Building</a></li>
                                        <li><a href=""
                                                        class="flex-none w-auto text-center text-xs md:text-medium px-3 py-1 bg-white dark:bg-black dark:text-white opacity-[0.7] hover:opacity-[1] rounded">Data
                                                        Analys</a></li>
                                </ul>
                        </div>
                </div>
        </div>
        <ul
                class="flex flex-nowrap w-full py-2 px-5 items-center justify-start sticky gap-3 top-[80px] md:top-[90px] z-30">
                <?php foreach ($getCategory as $value) { ?>
                        <li><a href="#<?= $value ?>"
                                        class="flex-none w-auto bg-white dark:bg-black dark:text-white hover:bg-gray font-semibold border-2 border-gray px-3 py-2 rounded-lg shadow"><?= $value ?></a>
                        </li>
                <?php } ?>
        </ul>
        <!-- documents cards popular -->
        <div id="Popular" class="block w-full px-5 py-3 mt-5 transition-all">
                <div class="w-full flex flex-row justify-between items-center">
                        <h3 class="font-bold text-3xl dark:text-white">Popular</h3>
                        <a href="./index.phpass="hover:text-blue text-nowrap dark:text-white">See All</a>
                </div>
                <ul
                        class="flex flex-row w-full overflow-hidden overflow-x-auto gap-4 scroll-smooth snap-center md:snap-x mt-4 pb-3 scroll-none relative">
                        <li
                                class="sticky top-1/2 left-0 z-10 p-5 flex items-center text-center bg-gradient-to-r from-[rgba(255,255,255, 1)] via-[rgba(255,255,255, 0.7)] to-[rgba(255,255,255,0)] dark:from-[rgba(0,0,0,1)] dark:via-[rgba(0,0,0,0.7)] dark:to-[rgba(0,0,0,0)]">
                                <button role="button"
                                        class="w-10 h-10 pr-4 pl-3 py-2 rounded-full text-center bg-white dark:bg-black dark:hover:bg-blue dark:text-white shadow-xl outline-none  hover:text-white hover:bg-blue transition"
                                        onclick="this.parentNode.parentNode.scrollLeft -= 100;">
                                        <i class="fi fi-sr-angle-left dark:text-white"></i>
                                </button>
                        </li>
                        <li class="flex-none grow w-14 snap-start"></li>
                        <?php echo $myDocuments->createCardsDocuments($getByPopular, 10); ?>
                        <li class="flex-none grow w-14 snap-start"></li>
                        <li
                                class="sticky top-1/2 right-0 z-10 p-5 flex items-center text-center bg-gradient-to-l from-[rgba(255,255,255, 1)] via-[rgba(255,255,255, 0.7)] to-[rgba(255,255,255,0)] dark:from-[rgba(0,0,0,1)] dark:via-[rgba(0,0,0,0.7)] dark:to-[rgba(0,0,0,0)]">
                                <button role="button"
                                        class="w-10 h-10 pr-4 pl-3 py-2 rounded-full text-center bg-white dark:bg-black  dark:hover:bg-blue dark:text-white shadow-xl outline-none  hover:text-white hover:bg-blue transition"
                                        onclick="this.parentNode.parentNode.scrollLeft += 100;"><i
                                                class="fi fi-sr-angle-right dark:text-white"></i>
                                </button>
                        </li>
                </ul>
        </div>
        <!-- karena kurangnya data jadi kita pakai data document terpopuler dlu heheheh -->
        <?php foreach ($getCategory as $category) { ?>
                <div id="<?= $category ?>" class="block w-full px-5 py-3 mt-5 transition-all">
                        <div class="w-full flex flex-row justify-between items-center">
                                <h3 class="font-bold text-3xl dark:text-white"><?= $category ?></h3>
                                <a href=""
                                        class="hover:text-blue text-nowrap dark:text-white">See All</a>
                        </div>
                        <ul
                                class="flex flex-row w-full overflow-hidden overflow-x-auto gap-4 scroll-smooth snap-x mt-4 pb-3 scroll-none relative">
                                <li
                                        class="sticky top-1/2 left-0 z-10 p-5 flex items-center text-center bg-gradient-to-r from-[rgba(255,255,255, 1)] via-[rgba(255,255,255, 0.7)] to-[rgba(255,255,255,0)] dark:from-[rgba(0,0,0,1)] dark:via-[rgba(0,0,0,0.7)] dark:to-[rgba(0,0,0,0)]">
                                        <button role="button"
                                                class="w-10 h-10 pr-4 pl-3 py-2 rounded-full text-center bg-white dark:bg-black dark:hover:bg-blue dark:text-white shadow-xl outline-none hover:text-white hover:bg-blue transition"
                                                onclick="this.parentNode.parentNode.scrollLeft -= 100;">
                                                <i class="fi fi-sr-angle-left dark:text-white"></i>
                                        </button>
                                </li>
                                <li class="flex-none grow w-14 snap-start"></li>
                                <!-- nanti method createcardsDocuments akan menerima 2 argument dari $getByCategory(data array document berdasarkan suatu category) dan length(jumlah card yang diinginkan) -->
                                <?php echo $myDocuments->createCardsDocuments($getByPopular, 10); ?>
                                <li class="flex-none grow w-14 snap-start"></li>
                                <li
                                        class="sticky top-1/2 right-0 z-10 p-5 flex items-center text-center bg-gradient-to-l from-[rgba(255,255,255, 1)] via-[rgba(255,255,255, 0.7)] to-[rgba(255,255,255,0)] dark:from-[rgba(0,0,0,1)] dark:via-[rgba(0,0,0,0.7)] dark:to-[rgba(0,0,0,0)]">
                                        <button role="button"
                                                class="w-10 h-10 pr-4 pl-3 py-2 rounded-full text-center bg-white dark:bg-black dark:hover:bg-blue  dark:text-white shadow-xl outline-none  hover:text-white hover:bg-blue transition"
                                                onclick="this.parentNode.parentNode.scrollLeft += 100;"><i
                                                        class="fi fi-sr-angle-right dark:text-white"></i>
                                        </button>
                                </li>
                        </ul>
                </div>
        <?php } ?>
        <div class="flex flex-wrap flex-column w-full justify-center items-center py-3 px-5 my-5 mt-14 gap-5">
                <h2 class="w-full flex-none text-3xl md:text-5xl font-extrabold text-center text-black dark:text-white">
                        Browse All Document
                        Categories</h2>
                <div class="flex-none w-full grid grid-cols-2 md:grid-cols-3 gap-4">
                        <?php foreach ($getCategory as $value) { ?>
                                <a href="./index.php"
                                        class="w-full h-32 md:h-60 rounded-xl bg-[url('./assets/image-5.png')] bg-cover bg-center brightness-75 hover:brightness-100 transition-all duration-300 mx-auto flex items-center justify-center">
                                        <h3 class="text-3xl md:text-4xl text-black text-center font-bold"><?= $value ?></h3>
                                </a>
                        <?php } ?>
                        <!-- jadi pokoknya data disini maish dikit jadi kita tambahin code di bbawah ini dlu -->
                        <?php foreach ($getCategory as $value) { ?>
                                <a href="./index.php"
                                        class="w-full h-32 md:h-60 rounded-xl bg-[url('./assets/image-7.png')] bg-cover bg-center brightness-75 hover:brightness-100 transition-all duration-300 mx-auto flex items-center justify-center">
                                        <h3 class="text-3xl md:text-4xl text-black text-center font-bold"><?= $value ?></h3>
                                </a>
                        <?php } ?>
                </div>
                <a href="./index.php"
                        class="px-3 py-2 rounded-lg flex-none w-auto bg-blue hover:brightness-90 text-white font-semibold">See
                        all categories</a>
        </div>

        <div class="flex flex-wrap flex-column w-full justify-center items-center py-3 px-5 my-5 mt-14">
                <div class="flex-none w-full grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div
                                class="w-full h-[30svh] md:h-[60svh] bg-cover bg-center rounded-xl select-none bg-[url('./assets/image-6.png')] shadow-xl">
                        </div>
                        <div class="w-full h-full flex items-center justify-center">
                                <div>
                                        <h2
                                                class="w-full text-4xl md:text-6xl font-extrabold text-end text-black dark:text-white">
                                                Access Anywhere
                                        </h2>
                                        <p
                                                class="md:text-5xl text-3xl w-full text-black font-bold text-end dark:text-white">
                                                <span class="text-blue">Explore</span>, <span
                                                        class="text-gray dark:text-blue">download</span>, and <span
                                                        class="text-blue">upload documents</span>
                                                from any
                                                device at any time.
                                        </p>
                                </div>
                        </div>
                </div>
        </div>
        <div class="flex flex-wrap flex-column w-full justify-center items-center py-3 px-5 my-5 mt-14">
                <div class="flex-none w-full grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="w-full h-full flex items-center justify-end gap-5">
                                <div class="text-end">
                                        <h2
                                                class="w-full text-4xl md:text-6xl font-extrabold text-end text-black dark:text-white">
                                                Easy Sharing
                                        </h2>
                                        <p
                                                class="md:text-5xl text-3xl w-full text-black font-bold text-end dark:text-white mb-8">
                                                <span class="text-blue">Upload</span> your documents <span
                                                        class="text-blue">easily</span> and <span
                                                        class="text-blue">share</span> them with our people in <span
                                                        class="text-blue">seconds</span>!
                                        </p>
                                        <a href="./pages/uploads.php"
                                                class="w-full py-2 px-3 font-semibold text-lg bg-blue shadow-xl text-end text-white hover:brightness-90 rounded-lg">Upload
                                                Document</a>
                                </div>
                        </div>
                        <div
                                class="w-full h-[30svh] md:h-[60svh] bg-cover bg-center rounded-xl select-none bg-[url('./assets/image-3.png')] shadow-xl">
                        </div>
                </div>
        </div>
        <div
                class="w-svw h-auto overflow-hidden px-5 mt-14 flex flex-col justify-between items-center gap-10 rounded-xl">
                <h2 class="flex-none w-full md:text-6xl text-4xl font-extrabold text-black dark:text-white text-center">
                        What are they
                        saying?</h2>
                <div class="flex-none w-full grid grid-cols-1 md:grid-cols-3 justify-center items-center gap-5">
                        <div
                                class="rounded-xl h-40 p-5 flex flex-row gap-5 border-gray border-4 hover:bg-gray dark:hover:bg-gray dark:text-white dark:hover:text-black bg-white dark:bg-black items-center justify-center">
                                <img src="./assets/image-1.png" alt="" class="w-1/4 max-w-20 rounded-full bg-cover">
                                <div class="w-3/4 overflow-hidden">
                                        <h4 class="font-bold text-base md:text-lg">Jhon Doe</h4>
                                        <p class="font-semibold text-sm md:text-lg">"Sangat berguna sekali website nyaa!
                                                wuowwwwwwww wiwjiwdhwudhwiugfweif"</p>
                                </div>
                        </div>
                        <div
                                class="rounded-xl h-40 p-5 flex flex-row gap-5 border-gray border-4 hover:bg-gray dark:hover:bg-gray dark:text-white dark:hover:text-black bg-white dark:bg-black items-center justify-center">
                                <img src="./assets/image-1.png" alt="" class="w-1/4 max-w-20 rounded-full bg-cover">
                                <div class="w-3/4 overflow-hidden">
                                        <h4 class="font-bold text-base md:text-lg">Jhon Doe</h4>
                                        <p class="font-semibold text-sm md:text-lg">"Sangat berguna sekali website nyaa!
                                                wuowwwwwwww wiwjiwdhwudhwiugfweif"</p>
                                </div>
                        </div>
                        <div
                                class="rounded-xl h-40 p-5 flex flex-row gap-5 border-gray border-4 hover:bg-gray dark:hover:bg-gray dark:text-white dark:hover:text-black bg-white dark:bg-black items-center justify-center">
                                <img src="./assets/image-1.png" alt="" class="w-1/4 max-w-20 rounded-full bg-cover">
                                <div class="w-3/4 overflow-hidden">
                                        <h4 class="font-bold text-base md:text-lg">Jhon Doe</h4>
                                        <p class="font-semibold text-sm md:text-lg">"Sangat berguna sekali website nyaa!
                                                wuowwwwwwww wiwjiwdhwudhwiugfweif"</p>
                                </div>
                        </div>
                        <div
                                class="rounded-xl h-40 p-5 flex flex-row gap-5 border-gray border-4 hover:bg-gray dark:hover:bg-gray dark:text-white dark:hover:text-black bg-white dark:bg-black items-center justify-center">
                                <img src="./assets/image-1.png" alt="" class="w-1/4 max-w-20 rounded-full bg-cover">
                                <div class="w-3/4 overflow-hidden">
                                        <h4 class="font-bold text-base md:text-lg">Jhon Doe</h4>
                                        <p class="font-semibold text-sm md:text-lg">"Sangat berguna sekali website nyaa!
                                                wuowwwwwwww wiwjiwdhwudhwiugfweif"</p>
                                </div>
                        </div>
                        <div
                                class="rounded-xl h-40 p-5 flex flex-row gap-5 border-gray border-4 hover:bg-gray dark:hover:bg-gray dark:text-white dark:hover:text-black bg-white dark:bg-black items-center justify-center">
                                <img src="./assets/image-1.png" alt="" class="w-1/4 max-w-20 rounded-full bg-cover">
                                <div class="w-3/4 overflow-hidden">
                                        <h4 class="font-bold text-base md:text-lg">Jhon Doe</h4>
                                        <p class="font-semibold text-sm md:text-lg">"Sangat berguna sekali website nyaa!
                                                wuowwwwwwww wiwjiwdhwudhwiugfweif"</p>
                                </div>
                        </div>
                        <div
                                class="rounded-xl h-40 p-5 flex flex-row gap-5 border-gray border-4 hover:bg-gray dark:hover:bg-gray dark:text-white dark:hover:text-black bg-white dark:bg-black items-center justify-center">
                                <img src="./assets/image-1.png" alt="" class="w-1/4 max-w-20 rounded-full bg-cover">
                                <div class="w-3/4 overflow-hidden">
                                        <h4 class="font-bold text-base md:text-lg">Jhon Doe</h4>
                                        <p class="font-semibold text-sm md:text-lg">"Sangat berguna sekali website nyaa!
                                                wuowwwwwwww wiwjiwdhwudhwiugfweif"</p>
                                </div>
                        </div>
                </div>
                <div
                        class="flex-none w-full flex justify-center items-center h-24 text-center bg-gradient-to-b from-[rgba(255,255,255,0)] to-[rgba(255,255,255,1)] dark:from-[rgba(0,0,0,0)] dark:to-[rgba(0,0,0,1)]">
                        <button id="addComment"
                                class="bg-blue px-3 py-2 text-center text-white rounded-lg w-32 hover:brightness-75">Show
                                more</button>
                </div>
        </div>
        <div class="flex justify-center items-center w-full  h-svh text-center px-5 py-10 mt-14">
                <div class="flex-auto w-full dark:text-white">
                        <h2 class="w-full md:text-6xl text-4xl font-extrabold text-black dark:text-white">Join our
                                community!</h2>
                        <p class="w-full md:text-3xl text-xl font-bold my-8">Experience the benefits of sharing
                                documents with millions
                                of people. Receive feedback, appreciationn, and inspiration from your community.</p>
                        <a href="./index.php"
                                class="bg-blue text-white font-semibold px-3 py-2 text-lg rounded-lg shadow-xl hover:brightness-90">Register</a>
                </div>
        </div>
</main>