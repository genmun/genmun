<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Register | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main class="mx-2 lg:mx-12 mb-4" style="min-height: calc(100vh - 10rem)">


<div class="pt-10 flex flex-col-reverse lg:flex-row ">

<div class="p-4 lg:p-10 text-center flex-none">
	<div class="font-display p-5">Key Dates</div>

	<table class="table-fixed mx-auto">
		<tbody class="">
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light w-64">Chair Application Deadline</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold w-52">16 June 2023</td>
			</tr>
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light w-64">Registration Deadline</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold w-52">30 June 2023</td>
			</tr>
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light w-64">Conference Day</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold w-52">7 - 9 July 2023</td>
			</tr>
		</tbody>
	</table> 

	<div class="font-display p-5 mt-8">Fees</div>

	<table class="table-fixed mx-auto">
		<tbody class="">
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light w-64">Individual Delegate</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold w-52">MYR 100 / delegate</td>
			</tr>
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light">Group Delegation</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold">MYR 100 / delegate</td>
			</tr>
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light">Advisor</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold">MYR 85 / advisor</td>
			</tr>
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light ">Individual Delegate (International Participants)</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold">USD 55 / delegate</td>
			</tr>
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light">Group Delegation (International Participants)</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold">USD 55 / delegate</td>
			</tr>
			<tr class="h-10">
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-light">Advisor<br>(International Participants)</td>
				<td class="even:bg-cyan-800 odd:bg-cyan-900 p-4 font-semibold">USD 45 / advisor</td>
			</tr>
		</tbody>
	</table>  
	
</div>

<div class="grow p-10 text-center">

	<div class="font-display text-xl lg:text-3xl py-4 text-center">REGISTRATION</div>

	<div x-data="{ openTab: 1 }" class="py-6">
		<ul class="flex border-b w-full font-lg font-bold max-w-sm xl:max-w-none mx-auto">
		<li @click="openTab = 1" class="w-full h-full">
			<a><div class="cursor-pointer py-4 bg-blue-900 hover:bg-cyan-800 focus:bg-blue-900" :class="{'bg-purple-500': openTab != 1}"   >Individual Delegate</div></a>
		</li>
		<li @click="openTab = 2" class="w-full h-full">
			<a><div class="cursor-pointer py-4 bg-blue-900 hover:bg-cyan-800 focus:bg-blue-900" :class="{'bg-purple-500': openTab != 2}"  >Group Delegation</div></a>
		</li>
		</ul>


	<div class="w-full pt-4 font-body text-left pb-8 px-4 mb-4 bg-blue-700 p-4 border-l-4 border-blue-300">
		<div x-show="openTab === 1">
			Fill in the following form. After registering, we will send you an email containing your invoice and payment details.
					<div class="text-center my-6 w-full"><a class="block md:inline px-8 py-2 mx-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="https://forms.gle/MBDa9pMNgNJUm4PX6">Individual Registration</a></div>
					<div class="text-center my-6 w-full"><a class="block md:inline px-8 py-2 mx-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="https://forms.gle/SWjk9pz5F7LPjdzY8">Advisor Registration</a></div>
		</div>

	  	<div x-show="openTab === 2">
			Fill in the following form and email it to <a class="text-blue-400 hover:underline" href="mailto:register@gmun.my">register@gmun.my</a>. After registering, we will send you an email containing your invoice and payment details.
					<div class="text-center my-6 w-full"><a class="block md:inline px-8 py-2 mx-2 font-semibold bg-purple-400 rounded-3xl hover:text-gray-900 hover:bg-blue-200" href="/GMUN_2023_Group_Registration.pdf"><img class="inline h-6 px-2" src="/images/pdf.svg">Download Group Registration Form</a></div>
			Please note that a delegation should consist of no less than 5 delegates and no more than 10 delegates. <br> A delegation is allowed to have no more than 2 advisors, though they are not required.
	  	</div>


	</div>

	<div class="w-full pt-4 font-body text-left pb-8 px-4 mb-4 bg-blue-600 p-4 border-l-4 border-blue-300">
		<div class="font-display text-xl py-4">Chair Application</div>
		<div class="">We welcome experienced delegates to participate as chair or crisis director. Please note that due to the competitive nature of chairs applications, acceptance is not guaranteed. Click on the registration form below to apply.</div>
		<div class="text-center my-6 w-full"><a class="block md:inline px-16 py-2 mx-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="https://forms.gle/h41EYDBACEf98zWE6">Chair Application</a></div>
		<div class="text-center my-6 w-full"><a class="block md:inline px-8 py-2 mx-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="https://forms.gle/qNUM9HwMwTm8vjrc7">Crisis Director Application</a></div>
	</div>

	<div class="text-left">
		<div class="font-display text-2xl py-4 mt-8 text-center text-blue-300">After Registering</div>
		<div class="font-display text-xl py-4">Accommodation</div>
		<div class="">Check out our <a class="text-blue-400 hover:underline" href="/accommodation">accommodation page</a> for recommendations on where to stay for the duration of the conference.</div>



	</div>

	</div>
</div>

</div>

</main>
<?php include 'footer.php'; ?>
