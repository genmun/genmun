<?php
    ob_start();
    include __DIR__.'/../header.php';
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "DISEC | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main>

<div class="flex flex-col-reverse lg:flex-row"  style="min-height: calc(100vh - 10rem)">

<div class="pt-4 lg:pt-24 px-6 h-auto bg-cyan-900 lg:w-56" id="sidebar">
<img class="h-28 mx-auto" src="/images/councils/disec.webp">

<?php include __DIR__.'/../councilside.php'; ?>

    <div class="lg:w-full mx-4 lg:mx-32">
        <div class="font-display text-3xl pt-24 text-center">Disarmament and International Security Committee</div>

        <div class="flex flex-wrap lg:flex-row">
            <div class="py-10 lg:w-auto w-full">
            <div class="font-display text-xl text-center">Board of Dais</div>
	        <div class="flex flex-row lg:flex-col justify-center">
                <div class="text-center p-2">
                    <img src="/images/tbapor.webp" class="w-20 lg:w-32 mx-auto my-2">
                    <div class="font-bold">Chair</div>
                    <div class="">To be announced</div>
                    <div class="text-xs">genmodelun@gmail.com</div>
                </div>
                <div class="text-center p-2">
                    <img src="/images/tbapor.webp" class="w-20 lg:w-32 mx-auto my-2">
                    <div class="font-bold">Co-Chair</div>
                    <div class="">To be announced</div>
                    <div class="text-xs">genmodelun@gmail.com</div>
                </div>
            </div>
            </div>
           <div class="py-4 pb-8 lg:py-10 lg:mx-14 grow text-justify lg:w-0 mb-20"> 
                <div class="font-display text-xl text-left pb-4">Background</div>
                <div class="text-justify">To be announced.<br><b>Note: </b>This council will follow <a class="text-blue-400 hover:underline" href="/resources">HMUN Rules of Procedure.</a></div>
                <div class="font-display text-xl text-left py-4 pt-12">Topic 1: The role of private military and security companies in conflicts with a focus on accountability</div>
                <div class="text-justify"></div>
                <div class="font-display text-xl text-left py-4 pt-12">Topic 2: The issue of Lethal Autonomous Weapons System with a focus on international regulation</div>
                <div class="text-justify"></div>
            </div>
        </div>

        </div>
    </div>


</div>

</main>

<?php include __DIR__.'/../footer.php'; ?>