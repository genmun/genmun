<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "About GMUN | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main class="mx-12 lg:mx-52 mb-8" style="min-height: calc(100vh - 10rem)">

<div class="font-display mb-8 text-2xl lg:text-3xl pt-24 text-center">
    About GMUN
</div>

<div class=" my-4 text-center">
<img class="md:h-52 inline-block" src="/images/permun.webp">
</div>
<div class="lg:mx-32 text-justify">
GENIUS Model United Nations 2023 (GMUN 2023) is a Model United Nations Conference held by our school, Pusat GENIUS@Pintar Negara. It has been held twice previously under the name PERMATApintar Model United Nations (PERMUN), involving participants from all over Malaysia. Both high school and foundation students were invited to participate, resulting in a turnout of 200 participants in 2018. This year, we hope to welcome around 250 participants to participate in GMUN 2023. 
</div>

<div class="font-display text-xl my-6 text-center">
    What is Mun?
</div>

<div class="lg:mx-32 text-justify">
The Model United Nations, usually known as MUN, is a simulation of actual United Nations conferences. Participants are known as delegates, and are each assigned a country to represent as well as a council or committee to participate in. Throughout the conference period, delegates will have to discuss a given topic and reach a resolution with the rest of their council members by the end. 

</div>

</main>
<?php include 'footer.php'; ?>
