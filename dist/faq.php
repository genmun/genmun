<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "FAQ | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main class="mx-4 lg:mx-52 mb-4" style="min-height: calc(100vh - 10rem)">

<div class="font-display text-xl lg:text-3xl pt-24 text-center">
    Frequently Asked Questions
</div>

<div class="mx-auto max-w-3xl py-4">

<div class="font-display text-xl my-4 text-center">General Information</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">What is GMUN?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
A Model UN (MUN) conference that will be held by the GENIUS Model United Nations Club (GENMUN Club) together with the students of Malaysia's first center for the gifted and talented, Pusat GENIUS@Pintar Negara, UKM.

  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">Is this the same conference/organization as PERMUN?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
Yes. However just recently, the PERMATA Model United Nations Club rebranded into GENIUS Model United Nations Club, following the rebranding of our institution – from Pusat PERMATApintar Negara, UKM, to Pusat GENIUS@Pintar Negara, UKM.

  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">What is Model United Nations (MUN)? 
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
The Model United Nations, usually known as MUN, is a simulation of actual United Nations conferences. Participants are known as delegates, and are each assigned a country to represent as well as a council or committee to participate in. Throughout the conference period, delegates will have to discuss a given topic and reach a resolution with the rest of their council members by the end. 

  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">When is GMUN 2023?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
GMUN 2023 is prospected to be held from <b>July 7th to July 9th, 2023</b>.

  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">Where is GMUN 2023?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
GMUN 2023 will be held at the beautiful campus of Pusat GENIUS@Pintar Negara, UKM, in Bangi, Malaysia. The city of Bangi, also known as "The Knowledge City”, is only a 30-minutes drive away from Malaysia's cosmopolitan capital, Kuala Lumpur. <br><br>You can find our address <a class="text-blue-400 hover:underline" href="/contact">here</a>.
  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">What are the objectives of GMUN 2023?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">

  <ul class="ml-2 list-disc">
<li>Introduce the MUN conference scene to Malaysian students</li>
<li>Provide students with the experience of partaking in a United Nations conference</li>
<li>Develop skills in students to speak at a prestigious global conference</li>
<li>Develop critical and globular thinking among Malaysian students</li>
<li>Raise awareness on MUN conferences among Malaysian schools</li>
<li>Raise students' knowledge on current global political, social, and economic issues</li>
<li>Strengthen the use of the English language among Malaysian students</li>
  </ul>
  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">What language is used at GMUN 2023?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
GMUN is a fully English event. Everyone is encouraged to speak English, as people come from all over the world. 
  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">What is the theme of GMUN 2023?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
This year’s GMUN theme is <strong>Beyond Borders: Bridging the Divide</strong>. As such, delegates can expect to take part in discussions centered around this central theme and its various branches, from various perspectives as assigned by council.

  </div>
</div>

<div class="font-display text-xl my-4 text-center">Registration</div>
<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">How do I register to attend?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
Check out our <a class="text-blue-400 hover:underline" href="/register">registration page</a> in order to register for GMUN 2023. 
  </div>
</div>
<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">What are the fees and what do they cover?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
The registration fee is set at MYR 100 per delegate and MYR 85 per advisor. The fees include:
  <ul class="ml-2 list-disc">
<li>Participants' meals (three times daily) throughout the three days of the conference</li>
<li>GMUN 2023 merchandise</li>
  </ul>
Check out our <a class="text-blue-400 hover:underline" href="/register">registration page</a> for more details. 
  </div>
</div>
<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">Who are eligible to participate? 
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
Students who are currently enrolled in any educational institution of any level may participate as delegates. We warmly welcome participants from all kinds of backgrounds!

  </div>
</div>
<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">Where do I stay during the conference?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
		Check out our <a class="text-blue-400 hover:underline" href="/accommodation">accommodation page</a> for recommendations on where to stay for the duration of the conference.
  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">What awards will GMUN offer?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
Delegates who perform well throughout the conference will stand a chance to win awards. In addition, if you register as part of group delegation, you are eligible to win the Best Delegation award.
  </div>
</div>

<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">I am a Non-Malaysian studying in Malaysian school. Should I register as local or international participant?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
   You should register as local participant if you are currently enrolling in educational institution located on Malaysian soil. If you are still not sure, feel free to <a class="text-blue-400 hover:underline" href="/contact">reach out</a> to us.
  </div>
</div>

<div class="font-display text-xl my-4 text-center">Others</div>
<div x-data="{ open: false }" class="py-1 flex flex-col items-center justify-center relative overflow-hidden">
  <div @click="open = ! open" class="cursor-pointer p-4 bg-blue-700 w-full flex justify-between items-center">
    <div class="flex items-center gap-2 text-lg text-white">Have more questions?
    </div>
    <div class='transform transition duration-300 ease-in-out' :class="{'rotate-180': open,' -translate-y-0.0': !open }">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="1"><path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path></svg>
    </div>
  </div>
  <div x-show="open"  x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10" x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-cyan-600 p-4 border-l-4 border-cyan-300">
If you still have more questions, feel free to <a class="text-blue-400 hover:underline" href="/contact">reach out</a> to us. We will be happy to answer your questions.
  </div>
</div>
</div>

</div>
</main>
<?php include 'footer.php'; ?>
