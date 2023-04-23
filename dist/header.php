<?php
function active($currect_page){
    echo 'text-gray-900 bg-gray-200'; 
}
?>

<!DOCTYPE html>
<html style="max-width: 100%; overflow-x: hidden;" class="scroll-smooth" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>GMUN 2023</title>

	<link rel="stylesheet" href="/style.css" type="text/css" media="all" />
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
	<link rel="canonical" href="https://gmun.my">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="font-body bg-blue-800 text-white text-base">
<div class="absolute font-display white dark-mode:text-gray-200 dark-mode:bg-gray-800 z-40 lg:bg-transparent w-screen "  >
	<div x-data="{ open: false }" :class="{'bg-blue-800': open, 'bg-transparent': !open}" class="px-4 flex flex-col max-w-screen-xl ml-0 mx-auto lg:items-center lg:justify-between lg:flex-row">
		<div class="p-4 flex flex-row items-center justify-between">
			<a href="/" ><img class="ml-2 h-12" src="/images/logo-white.webp"></a>
			<button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
			<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
				<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
				<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
			</svg>
	  		</button>
		</div>

		<nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 lg:pb-0 hidden lg:flex lg:justify-end lg:flex-row">
		<a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">Home</a>

		<div @click.away="open = false" class="relative" x-data="{ open: false }">
			<button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 lg:w-auto lg:inline lg:mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
				<span>About</span>
				<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform lg:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
			</button>
			<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg lg:w-60 z-40">
				<div class="px-2 py-2 bg-blue-600 rounded-md shadow dark-mode:bg-gray-800">
					<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/about">About GMUN</a>
					<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/story">Our Story</a>
					<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/team/secretariat">Meet the Team</a>
					<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/faq">FAQ</a>
					<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/contact">Contact Us</a>
				</div>
			</div>
		</div>    


		<div @click.away="open = false" class="relative" x-data="{ open: false }">
			<button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 lg:w-auto lg:inline lg:mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
				<span>Conference</span>
				<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform lg:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
			</button>
			<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg lg:w-60">
				<div class="px-2 py-2 bg-blue-600 rounded-md shadow dark-mode:bg-gray-800">
					<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/schedule">Schedule</a>
					<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/accommodation">Accommodation</a>
					<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/resources">Resources</a>
				</div>
			</div>
		</div>
		<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg lg:mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/councils/overview">Councils</a>
		<a class="px-8 py-2 mt-2 text-sm font-semibold bg-purple-400 rounded-full lg:mt-0 lg:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/register">Register Now</a>
		</nav>
  	</div>
</div>