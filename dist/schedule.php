<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Schedule | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main class="px-4 pd:mx-12 pb-4" style="min-height: calc(100vh - 10rem); background: linear-gradient(to top, #03045E 0%, #00B4D8 100%);">

<div class="font-display text-3xl pt-24 text-center">
    SCHEDULE
</div>

<div class="flex flex-col xl:flex-row  max-w-xl xl:max-w-none mx-auto">
	<div class="basis-1/3 p-4 text-center ">
        <div class="font-display text-blue-200 text-xl p-2 pt-4">7 July 2023</div>
        <div class="font-display text-blue-200 p-2 pb-4">Friday</div>
 <table class="table-fixed w-full">
  <tbody class="">
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light w-32 md:w-48">12:30pm - 3:15pm</td>
      <td class="p-4 font-semibold">Registration</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">3:30pm - 5:00pm</td>
      <td class="p-4 font-semibold ">Opening Ceremony</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">5:00pm - 5:30pm</td>
      <td class="p-4 font-semibold ">Short Briefing: MUN 101<hr class="my-2 h-px bg-blue-500 border-0">Press Conference</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">5:30pm - 7:00pm</td>
      <td class="p-4 font-black ">Council Session 1</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">7:00pm - 8:30pm</td>
      <td class="p-4 font-semibold ">Dinner</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">8:30pm</td>
      <td class="p-4 font-semibold ">Dismissal</td>
    </tr>
  </tbody>
</table>  
</div>

	<div class="basis-1/3 p-4 text-center">
        <div class="font-display text-blue-400 text-xl p-2 pt-4">8 July 2023</div>
        <div class="font-display text-blue-400 p-2 pb-4">Saturday</div>
 <table class="table-fixed w-full">
  <tbody class="">
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light w-32 md:w-48">8:00am - 8:30am</td>
      <td class="p-4 font-semibold">Breakfast</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">8:30am - 10:30am</td>
      <td class="p-4 font-black ">Council Session 2</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">10:30am - 10:45am</td>
      <td class="p-4 font-semibold ">Break</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">10:45am - 12:30pm</td>
      <td class="p-4 font-black ">Council Session 3</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">1:00pm</td>
      <td class="p-4 font-semibold ">Lunch</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">3:00pm - 5:00pm</td>
      <td class="p-4 font-black ">Council Session 4</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">5:00pm - 5:15pm</td>
      <td class="p-4 font-semibold ">Break</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">5:15pm - 6:30pm</td>
      <td class="p-4 font-black ">Council Session 5</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">8:00pm - 10:00pm</td>
      <td class="p-4 font-semibold ">Meetup Mixer</td>
    </tr>
    <tr class="even:bg-cyan-600 odd:bg-cyan-700 h-10">
      <td class="p-4 font-light">10:15pm</td>
      <td class="p-4 font-semibold ">Dismissal</td>
    </tr>
  </tbody>
</table>  
</div>

	<div class="basis-1/3 p-4 text-center">
        <div class="font-display text-blue-200 text-xl p-2 pt-4">9 July 2023</div>
        <div class="font-display text-blue-200 p-2 pb-4">Sunday</div>
 <table class="table-fixed w-full">
  <tbody class="">
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light w-32 md:w-48">8:00am - 8:30am</td>
      <td class="p-4 font-semibold">Breakfast</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">8:30am - 10:30am</td>
      <td class="p-4 font-black ">Council Session 6</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">10:30am - 10:45am</td>
      <td class="p-4 font-semibold ">Break</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">10:45am - 12:30pm</td>
      <td class="p-4 font-black ">Council Session 7</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">12:30pm</td>
      <td class="p-4 font-semibold ">Lunch</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">2:20pm - 4:30pm</td>
      <td class="p-4 font-semibold ">Awards Ceremony</td>
    </tr>
    <tr class="even:bg-blue-700 odd:bg-blue-600 h-10">
      <td class="p-4 font-light">4:30pm</td>
      <td class="p-4 font-semibold ">Goodbye</td>
    </tr>
  </tbody>
</table>  
</div>
</div>

</main>
<?php include 'footer.php'; ?>
