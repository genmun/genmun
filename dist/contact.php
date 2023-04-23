<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Contact Us | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>


<main class="mx-12 lg:mx-52 mb-4" style="min-height: calc(100vh - 10rem)">

<div class="font-display text-2xl lg:text-3xl pt-24 text-center">
    CONTACT US
</div>

<div class="flex flex-col lg:flex-row ">
	<div class="basis-1/2 py-4 mt-4 lg:p-10 text-justify">
If you have any questions or inquiries, please do not hesitate to reach out to us directly at <a class="text-blue-400 hover:underline" href="mailto:genmodelun@gmail.com">genmodelun@gmail.com</a>. We look forward to hearing from you!<br><br>
Alternatively, you can message us at one of our social media. Our team works around the clock to make sure that you receive your reply as soon as possible.

   			<div class="flex space-x-10 justify-center my-6">
				<a href="https://www.instagram.com/gmun_23/"><img class="h-16" src="/images/instagram.svg" alt="instagram"></a>
				<a href="https://twitter.com/GMUN2023"><img class="h-16" src="/images/twitter.svg" alt="twitter"></a>
			</div>
    </div>
	<div class="basis-1/2 py-4 lg:p-10 text-center">
<div style="max-width:100%;list-style:none; transition: none;overflow:hidden;height:300px;"><div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Pusat+GENIUS@Pintar+Negara,+Pusat+GENIUS@Pintar+Negara+Universiti+Kebangsaan+Malaysia,+Bangi,+スランゴル+マレーシア&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="embed-map-html" href="https://www.bootstrapskins.com/themes" id="get-map-data">premium bootstrap themes</a><style>#my-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
        <div class="font-display mt-6 p-5">OUR LOCATION</div>

<div class="text-sm font-light text-left ">
<div class="mx-auto w-fit">Pusat GENIUS@Pintar Negara,<br>Universiti Kebangsaan Malaysia,<br>43600 Bangi,<br>Selangor,<br>Malaysia</div>

    </div>
    </div>
</div>

</main>
<?php include 'footer.php'; ?>
