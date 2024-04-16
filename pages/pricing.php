<?php
require_once "./class/Plans.php";

$plans = new Plans($conn);
$getAllPlans = $plans->getAllPlans();
?>
<main class="bg-white dark:bg-black px-5 py-3">
    <div class="flex flex-col justify-center items-center gap-10 py-10">
        <h1 class="flex-auto w-full text-center font-extrabold text-3xl md:text-5xl text-black dark:text-white">Pick
            Your Perfect
            Plan</h1>
        <div class="flex-none w-full flex flex-row flex-wrap justify-center items-stretch gap-10">
            <?php foreach ($getAllPlans as $plan) { ?>
                <div
                    class="flex-none w-full md:w-1/4 border-4 border-gray bg-white dark:bg-black text-black dark:text-white hover:border-blue rounded-xl p-5 text-center hover:scale-105 transition-transform shadow-2xl">
                    <h2 class="text-center text-3xl font-bold text-black dark:text-white mb-5"><?= $plan['name'] ?></h2>
                    <h2 class="text-center text-6xl font-extrabold text-blue mb-10"><span
                            class="font-semibold text-black text-3xl">$</span>
                        <?= $plan['price'] ?> <span class="font-semibold text-3xl text-black">/mo</span></h2>
                    <a href="./pages/pay.php?plan=<?= $plan['id'] ?>"
                        class="text-white bg-blue shadow-xl px-4 py-3 rounded-lg hover:brightness-75 font-semibold">Choose
                        Plan</a>
                    <hr class="border-gray border-2 my-10">
                    <?php $features = explode(",", $plan['description']); ?>
                    <ul>
                        <?php foreach ($features as $feature) { ?>
                            <li class="text-base text-start"><i class="fi fi-sr-check text-blue"></i> <?= $feature ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="flex flex-wrap flex-row justify-around items-center w-full gap-5 my-10">
        <div class="flex-none w-full md:w-1/3 text-start text-black dark:text-white">
            <h2 class="text-4xl font-extrabold mb-5">What You Get with Membership?</h2>
            <ul class="list-disc px-5">
                <li>Get Access to downloads to access and save documents locally.</li>
                <li>Eliminate distractions with an ad -free browsing experience. Enjoy an ad-free platform to focus on
                    the content that matters to you.</li>
            </ul>
        </div>
        <div class="flex-none w-full md:w-1/4">
            <img src="./assets/banner-square.png" alt="">
        </div>
    </div>
</main>