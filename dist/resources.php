<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Resources | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main class="mx-12 lg:mx-52 mb-4" style="min-height: calc(100vh - 10rem)">

<div class="font-display text-2xl lg:text-3xl pt-24 text-center">
    RESOURCES
</div>

<div class="flex flex-col lg:flex-row ">
	<div class="basis-1/2 py-4 lg:p-10 text-center">
        <div class="font-display p-5">RULES OF PROCEDURE</div>
        <img src="images/hmun.webp" class="h-20 mx-auto">
        <div class="lg:h-52 xl:h-36 font-body py-5 text-justify">The GMUN 2023 conference will always use the most updated set of <b>HMUN</b> Rules of Procedure. Click on the link below to get more information regarding Rules of Procedure of HMUN.</div>
		<a class="px-8 py-2 mx-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="https://www.my-adp.org/_files/ugd/88a5d7_c97b2fea1652401f8d11eec09b3afeab.pdf">Download ROP</a>
    </div>
	<div class="basis-1/2 py-4 lg:p-10 text-center">
        <div class="font-display p-5">COUNTRY MATRIX</div>
        <img src="images/earth.webp" class="h-20 mx-auto">
        <div class="lg:h-52 xl:h-36 font-body py-5 text-justify">The country matrix contains a list of all countries participating in all respective councils as well as the available countries for your council in the country matrix.</div>
		<a class="px-8 py-2 mx-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/country-matrix">Country Matrix</a>
    </div>
</div>

</main>
<?php include 'footer.php'; ?>
