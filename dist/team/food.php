<?php
    ob_start();
    include __DIR__.'/../header.php';
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Food | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>
<main>


<div class="flex flex-col-reverse lg:flex-row"  style="min-height: calc(100vh - 10rem)">

<?php include __DIR__.'/../teamside.php'; ?>


<div class="lg:w-full mx-4 mb-8 lg:mx-32">
    <div class="font-display text-2xl lg:text-3xl pt-24 mb-8 text-center">Food Committee</div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/hocs/Aina Food.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Head of Food Committee</div>
                    <div class="">Aina Batrisyia binti Mohd Rafee</div>
                    <div class="text-sm my-2 hidden">""When you cease to dream you cease to live." —Malcolm Forbes"</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/team/hocs/Sarah Food.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Head of Food Committee</div>
                    <div class="">Sarah Diyanah binti Yusnizam</div>
                    <div class="text-sm my-2 hidden">"Dream big, so that you can achieve at least half of it."</div>
                </div>
            </div>

</div>

</div>

</main>
<?php include __DIR__.'/../footer.php'; ?>