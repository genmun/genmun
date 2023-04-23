<?php
    ob_start();
    include __DIR__.'/../header.php';
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "BOD | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>
<main>


<div class="flex flex-col-reverse lg:flex-row"  style="min-height: calc(100vh - 10rem)">

<?php include __DIR__.'/../teamside.php'; ?>


<div class="lg:w-full mx-4 mb-8 lg:mx-32">
    <div class="font-display text-xl lg:text-3xl pt-24 mb-8 text-center">Board Of Directors</div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Chairperson</div>
                    <div class="">Prof. Madya Dr. Rorlinda Yusof</div>
                </div>
            </div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Vice Chairperson</div>
                    <div class="">En. Mohd Hakimie Zainal Abidin</div>
                </div>
            </div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Executive I</div>
                    <div class="">Puan Nor Intan Zanariah binti Abd. Aziz </div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Executive II</div>
                    <div class="">En. Ammar Hafiz bin Abd. Karim</div>
                </div>
            </div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Advisor I</div>
                    <div class="">Pn. Siti Aishah Hassan</div>
                    <div class="text-sm my-2">Head of College</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Advisor II</div>
                    <div class="">Pn. Mariati Moktar</div>
                    <div class="text-sm my-2">Director of Co-curricular Activities</div>
                </div>
            </div>

	        <div class="flex flex-wrap justify-center">
                <div class="text-center p-2 w-64">
                    <img src="/images/team/bod/dee.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Teacher Advisor</div>
                    <div class="">Pn Siti Noor Diana bt. Mohd Kamaruddin</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/team/bod/kz.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Teacher Advisor</div>
                    <div class="">En. Kamarul Zaman Hamzah</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Teacher Advisor</div>
                    <div class="">Dr. Teh Chin Hoong </div>
                    <div class="text-sm my-2">Director of Student Affairs, ASASIpintar</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Teacher Advisor</div>
                    <div class="">Cik Nur Shamim Hamzah </div>
                    <div class="text-sm my-2">Director of Student Affairs, Kolej GENIUS@Pintar Negara</div>
                </div>
                <div class="text-center p-2 w-64">
                    <img src="/images/tbapor.webp" class="w-36 mx-auto my-2">
                    <div class="font-bold">Teacher Advisor</div>
                    <div class="">Pn Afifah Mohamad Radzi</div>
                    <div class="text-sm my-2">Head of Industry and Community Relations</div>
                </div>
            </div>

</div>

</div>

</main>
<?php include __DIR__.'/../footer.php'; ?>