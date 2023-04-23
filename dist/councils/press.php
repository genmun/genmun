<?php
    ob_start();
    include __DIR__.'/../header.php';
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "International Press Corps | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main>

<div class="flex flex-col-reverse lg:flex-row"  style="min-height: calc(100vh - 10rem)">

<div class="pt-4 lg:pt-24 px-6 h-auto bg-cyan-900 lg:w-56" id="sidebar">
<img class="h-28 mx-auto" src="/images/councils/press.webp">

<?php include __DIR__.'/../councilside.php'; ?>

    <div class="lg:w-full mx-4 lg:mx-32">
        <div class="font-display text-3xl pt-24 text-center">International Press Corps</div>

        <div class="flex flex-wrap ">
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
                <div class="text-justify">To be announced.</div>
            </div>
        </div>

        </div>
    </div>


</div>

</main>

<?php include __DIR__.'/../footer.php'; ?>