<?php
    ob_start();
    include __DIR__.'/../header.php';
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Secretariat | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>
<main>


<div class="flex flex-col-reverse lg:flex-row"  style="min-height: calc(100vh - 10rem)">

<?php include __DIR__.'/../teamside.php'; ?>


<div class="lg:w-full mx-4 mb-8 lg:mx-32">
    <div class="font-display text-3xl pt-24 mb-8 text-center">Secretariat</div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/highcomm/syarif.webp" class="w-36 mx-auto my-2 object-cover">
                    <div class="font-bold">Secretary General</div>
                    <div class="">Muhammad Syarif bin Mohd Shariful Azwan</div>
                </div>
            </div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/highcomm/celup.webp" class="w-36 mx-auto my-2 object-cover">
                    <div class="font-bold">Deputy Secretary General</div>
                    <div class="">Wan Muhammad Daniel bin Wan Junaidi</div>
                    <div class="text-xs hidden">itswdaniel2006@gmail.com</div>
                    <div class="text-sm my-2 hidden">"Syarif needs a pretty face that can talk"</div>
                </div>
            </div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/highcomm/aqil.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Secretary</div>
                    <div class="">Aqil Ar-Rayyan bin Muhammad Haniff</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Deputy Secretary</div>
                    <div class="">Amelia Siow</div>
                    <div class="text-xs hidden">ameliasiow.3@gmail.com</div>
                    <div class="text-sm my-2 hidden">"mountain chickens are actually frogs"</div>
                </div>
            </div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/highcomm/ken.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Treasurer</div>
                    <div class="">Choong Cheng Ken</div>
                    <div class="text-xs hidden">chengken130206@gmail.com</div>
                    <div class="text-sm my-2 hidden">"There are no regrets. If one can be proud of one's life, one should not wish for another chance"</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/team/highcomm/anas.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Deputy Treasurer</div>
                    <div class="">Muhammad Anas bin Zamri</div>
                </div>
            </div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/highcomm/cw.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Student Council President</div>
                    <div class="">Ling Chin Wei</div>
                    <div class="text-xs hidden">lingchinwei0306@gmail.com</div>
                    <div class="text-sm my-2 hidden">""Don't be trapped in someone else's dream." - Kim Taehyung"</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/team/highcomm/mel.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Head of Delegate Affairs</div>
                    <div class="">Amelia Adam Cheah</div>
                    <div class="text-xs hidden">ameliaadamcheah@gmail.com</div>
                    <div class="text-sm my-2 hidden">"They call me cookie but I don’t crumble"</div>
                </div>
            </div>
</div>

</div>

</main>
<?php include __DIR__.'/../footer.php'; ?>