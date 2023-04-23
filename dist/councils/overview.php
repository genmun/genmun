<?php
    ob_start();
    include __DIR__.'/../header.php';
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Councils | GMUN 2023";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<main>

<div class="flex flex-col-reverse lg:flex-row"  style="min-height: calc(100vh - 10rem)">

<div class="pt-4 lg:pt-24 px-6 h-auto bg-cyan-900 lg:w-56" id="sidebar">
<img class="h-28 mx-auto" src="/images/logo-white.webp">
<?php include __DIR__.'/../councilside.php'; ?>


    <div class="lg:w-full mx-4 lg:mx-12">
        <div class="font-display text-3xl pt-24 text-center">COUNCILS</div>

        <div class="flex flex-wrap">
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row">
                <img src="/images/councils/unep.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="text-left w-full flex flex-col my-auto">
                    <div class="rounded-full font-bold bg-cyan-300 mr-auto text-xs px-2 py-1 my-2 mb-6">Beginner Council</div>
                    <div class="font-display text-left">United Nations Environment Programme</div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Enforcing Regulations on the Usage of Nuclear Plants</div></div>
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">2</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Ensuring a Just Transition Into Sustainability</div></div>
                    </div>
		        <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/unep">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/unwomen.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col">
                    <div class="rounded-full font-bold bg-cyan-300 mr-auto text-xs px-2 py-1 my-2 mb-6">Beginner Council</div>
                    <div class="font-display text-left">United Nations Entity for Gender Equality and the Empowerment of Women</div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Promoting a Holistic and Ethical Reproductive Health Education</div></div>
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">2</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">The Impact of the Russia-Ukrainian War on Women's Rights</div></div>
                    </div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/unwomen">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/unhrc.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col">
                    <div class="rounded-full font-bold bg-cyan-300 mr-auto text-xs px-2 py-1 my-2 mb-6">Beginner Council</div>
                    <div class="font-display text-left">United Nations Human Rights Council</div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Ensuring the Protection of Migrants' Human Rights</div></div>
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">2</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Governments and the Displacement of Indigenous People</div></div>
                    </div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/unhrc">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/disec.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col">
                    <div class="rounded-full font-bold bg-blue-500 mr-auto text-xs px-2 py-1 my-2 mb-6">Intermediate Council</div>
                    <div class="font-display text-left">Disarmament and International Security Committee </div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">The role of private military and security companies in conflicts with a focus on accountability</div></div>
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">2</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">The issue of Lethal Autonomous Weapons System with a focus on international regulation</div></div>
                    </div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/disec">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/ecosoc.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col">
                    <div class="rounded-full font-bold bg-blue-500 mr-auto text-xs px-2 py-1 my-2 mb-6">Intermediate Council</div>
                    <div class="font-display text-left">Economic and Social Council</div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Promoting Sustainable Natural Resource Management</div></div>
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">2</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Promoting Access to Affordable Housing</div></div>
                    </div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/ecosoc">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/unesco.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col my-auto">
                    <div class="rounded-full font-bold bg-blue-500 mr-auto text-xs px-2 py-1 my-2 mb-6">Intermediate Council</div>
                    <div class="font-display text-left">United Nations Educational, Scientific and Cultural Organization</div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Reviewing the Possibility of a Borderless Internet Governance</div></div>
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">2</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Reevaluating the 2005 Universal Declaration on Bioethics and Human Rights and Its Effectiveness </div></div>
                    </div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/unesco">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/crisis.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col my-auto">
                    <div class="rounded-full font-bold bg-purple-900 mr-auto text-xs px-2 py-1 my-2 mb-6">Advanced Council</div>
                    <div class="font-display text-left">Crisis Council</div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">2025: China's Invasion of Taiwan</div></div>
                    </div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/crisis">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/hunsc.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col my-auto">
                    <div class="rounded-full font-bold bg-purple-900 mr-auto text-xs px-2 py-1 my-2 mb-6 ">Advanced Council</div>
                    <div class="font-display text-left">Historical United Nations Security Council</div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">The Vietnam War after the US Massacre in Mỹ Lai</div></div>
                    </div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/hunsc">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/unsc.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col my-auto">
                    <div class="rounded-full font-bold bg-purple-900 mr-auto text-xs px-2 py-1 my-2 mb-6">Advanced Council</div>
                    <div class="font-display text-left">United Nations Security Council</div>
                    <div class="font-body font-light py-4 text-left space-y-4 my-auto text-sm">
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">1</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">Addressing the crisis in Myanmar, with a focus on the military coup and the civil war </div></div>
                        <div class="flex"><div class="font-bold text-lg px-2 text-center w-6 my-auto">2</div><div class="font-bold my-auto mr-3">:</div><div class="my-auto">The issue of governmental abuse of foreign conflict for national and international political gain. </div></div>
                    </div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/unsc">Learn More</a>
                </div>
            </div>
	        <div class="xl:basis-1/2 py-10 lg:px-10 text-left flex flex-row mb-auto">
                <img src="/images/councils/press.webp" class="w-20 md:w-32 my-auto mx-3">
                <div class="w-full flex flex-col my-auto">
                    <div class="rounded-full font-bold bg-cyan-500 mr-auto text-xs px-2 py-1 my-2 mb-6">Special Council</div>
                    <div class="font-display text-left mb-8">International Press Corps</div>
		            <a class="mt-auto mx-4 mr-auto px-8 py-2 font-semibold bg-purple-400 rounded-full hover:text-gray-900 hover:bg-blue-200" href="/councils/press">Learn More</a>
                </div>
            </div>
        </div>
    </div>


</div>

</main>
<?php include __DIR__.'/../footer.php'; ?>