<?php
    ob_start();
    include __DIR__.'/../header.php';
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Photography | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>
<main>


<div class="flex flex-col-reverse lg:flex-row"  style="min-height: calc(100vh - 10rem)">

<?php include __DIR__.'/../teamside.php'; ?>


<div class="lg:w-full mx-4 mb-8 lg:mx-32">
    <div class="font-display text-2xl lg:text-3xl pt-24 mb-8 text-center">Photography Committee</div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/hocs/Qawiemah Batrisyia.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Head of Photography Committee</div>
                    <div class="">Qawiemah Batrisyia binti Syaiful Izzat</div>
                </div>
            </div>

</div>

</div>

</main>
<?php include __DIR__.'/../footer.php'; ?>