<?php
    ob_start();
    include __DIR__.'/../header.php';
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Multimedia | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>
<main>


<div class="flex flex-col-reverse lg:flex-row"  style="min-height: calc(100vh - 10rem)">

<?php include __DIR__.'/../teamside.php'; ?>


<div class="lg:w-full mx-4 mb-8 lg:mx-32">
    <div class="font-display text-2xl lg:text-3xl pt-24 mb-8 text-center">Multimedia Committee</div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/hocs/Aqil Mukhlis.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Head of Multimedia Committee</div>
                    <div class="">Aqil Mukhlis bin Rosman</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/team/hocs/Emir.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Head of Multimedia Committee</div>
                    <div class="">Emir Hakim bin Suhaimi</div>
                    <div class="text-sm my-2 hidden">"qus"</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/team/hocs/Jack.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Head of Multimedia Committee</div>
                    <div class="font-bold font-sm text-blue-200">Webmaster</div>
                    <div class="">Jack Lim Wei Jye</div>
                    <div class="text-xs hidden">jacklim2019@gmail.com</div>
                    <div class="text-sm my-2 hidden">"what am i doing at 3 in the morning"</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/team/hocs/Qistina Aisyah.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Head of Multimedia Committee</div>
                    <div class="">Qistina Aisyah binti Abdul Razak</div>
                    <div class="text-sm my-2 hidden">"one day or day one bos"</div>
                </div>
            </div>

</div>

</div>

</main>
<?php include __DIR__.'/../footer.php'; ?>