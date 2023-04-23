<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "GENIUS Model United Nations | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
    echo $buffer;
?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<main class="mb-8 ">
<div id="headline">
	<img class="object-cover h-screen" src="/images/kgpnight.webp">
	<div class="absolute top-24 md:top-32 text-center w-full text-white">
		<div class="font-display text-4xl md:text-5xl"><span class="text-blue-300 text-5xl md:text-6xl">GENIUS</span> Model United Nations</div>
		<div class="font-body text-2xl md:text-3xl py-2 md:py-6 font-bold">7 - 9 July 2023</div>
		<div class="font-display text-xl md:text-2xl py-4 font-bold italic" style="text-shadow: 0 0 5px #00B4d8, 0 0 10px #00b4d8, 0 0 15px #00b4d8, 0 0 20px #6930C3, 0 0 30px #6930C3, 0 0 40px #023e8a; color: #caf0f8;">Beyond Borders: Bridging the Divide</div>
	</div>
	<div class="arrow bounce absolute w-full text-center bottom-20">
  		<a class="fa fa-arrow-down fa-2x text-white" href="#welcome"></a>
	</div>
</div>

<div class=" mx-12 lg:mx-52 ">

<div id="welcome" class="font-extralight my-4">
Supported by
<div class="flex flex-wrap bg-blue-700 bg-opacity-40 py-4 rounded-lg justify-center">
	<img class="mx-6 my-2 h-16" src="/images/ukmlogo.webp">
	<img class="mx-6 my-2 h-16" src="/images/watanlogo.webp">
	<img class="mx-6 my-2 h-16" src="/images/moegeniuslogo.webp">
	<img class="mx-6 my-2 h-16" src="/images/kgplogo.webp">
</div>
</div>

<div id="welcomingremarks" class="text-justify font-light">
<div class="font-display text-center py-10">Welcoming Remarks</div>
<span class="font-bold text-lg">Dear distinguished delegates,</span><br><br>
<p>With a cocktail of emotions made from delight, honor, and anticipation, I am writing this to invite all of you to the GENIUS Model United Nations Conference 2023 (GMUN 2023). It is my greatest privilege to warmly welcome you all to GMUN 2023!</p>
<br><p>This year, GMUN 2023 will commence on the 7th, 8th, and 9th of July 2023, taking place at the beautiful campus of Pusat GENIUS@Pintar Negara, Universiti Kebangsaan Malaysia. Located just a few kilometers away from the nation's metropolitan capital of Kuala Lumpur, it is guaranteed that your experience with us will be one that is prized and remembered.</p>
<br><p>GMUN is a conference that prides itself on being one of the most unique MUN conferences. With the tremendous support from our advisors and the administration, our conference is held almost entirely by the students of the nation's first center for the gifted and talented, Kolej GENIUS@Pintar Negara, Universiti Kebangsaan Malaysia. Our Committee members work tirelessly to ensure that GMUN is a conference that is highly educational, holistic, and fruitful.</p>
<br><p>Model United Nations is an educational simulation in which students learn about diplomacy, international relations, and the United Nations. At a MUN conference, students work as the representative of a country, organization, or person, and must solve a problem with other delegates from around the world through discussion and diplomacy. MUN teaches participants skills like research, public speaking, debating, and writing, in addition to critical thinking, teamwork, and leadership. MUN is meant to engage students, and allow them to develop a deeper understanding of current real-world issues.</p>
<br><p>Moving into 2023 we see violent, damaging, and degenerating conflicts loom over the international community. We see international cooperation deteriorating, the climate retrogressing, and phrases like war crimes, crises, wars, military operations, and nuclear weapons being thrown around by world leaders. International cooperation is now more important than ever. We have to think beyond our borders and work together to end the suffering and bloodshed that people all around the world are facing. With that goal in mind, we believe that our theme for this year’s GMUN conference, “Beyond Borders: Bridging the Divide” is a significant and strong foundation to expand upon into more specific and relevant topics.</p>
<br><p>Delegates will have an opportunity to discuss and understand current real-world topics from a multifaceted and international point of view with the goal to reach a middle ground between all the conflicting interests. These topics that require international cooperation range from those relating to the ever-worsening climate, the ignorance of governments on upholding human rights, the slow death of culture as modernization occurs, the economies that determine the suffering of people, the political crises that start and end wars, the weapons created by humans threatening humanity, and the violent greed-fueled wars causing bloodshed and suffering of innocent people. Through diplomacy and cooperation by the international community, we truly believe that these issues can be solved and may GMUN be a step you take in your journey to lead international cooperation towards a world we can live in peace and happily call home. Join us, as we achieve world peace, together.</p>
<br><p>I hope to see you all this July!</p>


<div class="my-8 font-extralight text-sm ">
Warm regards, 
<img src="/images/syarifsignature.webp" class="h-20 my-4">
	Syarif Azwan<br>Secretary General<br>GENIUS Model United Nations 2023
</div>

</div>
</div>
</main>

<?php include 'footer.php'; ?>