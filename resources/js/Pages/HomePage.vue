<script>
import PageLayout from '@/Layouts/PageLayout.vue';

export default {
    name: 'HomePage',
    components: {
        PageLayout
    }
};
</script>

<template>
    <PageLayout>
        <div class="min-h-screen bg-gray-100">
            <section class="bg-green-600 text-white py-16 rounded-b-3xl shadow-lg mt-20">
                <div class="text-center max-w-3xl mx-auto px-6">
                    <h1 class="text-5xl font-extrabold mb-6">32nd International Symposium Animal Science Days</h1>
                    <p class="text-2xl mb-4">Welcome to ASD 2024</p>
                    <p class="text-lg font-light"> The deadline for submitting abstracts has been extended to <strong>July 31, 2024</strong>. </p>
                </div>
            </section>
            <section class="max-w-5xl mx-auto py-16 px-8">
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-gray-800 mb-8">Welcome to ASD 2024!</h2>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed"> The 32nd International Symposium Animal Science Days will be held in the picturesque setting of Oberaichwald near Faaker See, Carinthia, Austria, from <strong>2 to 4 October 2024</strong>. This premier event will feature distinguished keynote speakers, inspiring oral and poster presentations, and an exhibition of sponsors. </p>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    <strong>Important update:</strong> The deadline for abstract submissions has been extended to <strong>July 31, 2024</strong>. We encourage researchers at all career stages to participate in this unique platform for scientific exchange.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed"> Since its inception in 1993 with three participating countries, ASD has grown into a respected consortium of eight universities from Austria, Croatia, Czech Republic, Hungary, Italy, Slovakia and Slovenia. Recognized by the <strong>European Federation for Animal Science (EAAP)</strong>, ASD 2024 continues our tradition of fostering collaboration and promoting young researchers in Animal Sciences. </p>
                    <div class="flex flex-wrap justify-center gap-6 mt-12">
                        <a href="/about" class="bg-white text-green-600 border-2 border-green-600 py-3 px-8 rounded-full hover:bg-green-50 transition duration-300 text-lg font-semibold shadow-sm"> About Us </a>
                        <a href="/contact" class="bg-gray-800 text-white py-3 px-8 rounded-full hover:bg-gray-700 transition duration-300 text-lg font-semibold shadow-sm"> Contact </a>
                        <a href="/program" class="flex items-center gap-2 text-green-600 hover:text-green-700 py-3 px-6 rounded-full hover:bg-green-50 transition duration-300 text-lg font-medium">
                            <span>Scientific Program</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-white py-16 rounded-2xl shadow-inner mx-4 my-8">
                <div class="text-center max-w-4xl mx-auto px-8">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Join Us at ASD 2024!</h2>
                    <p class="text-lg text-gray-700 mb-10">Submit your abstract or register today!</p>
                    <div class="flex flex-col md:flex-row justify-center gap-6">
                        <a href="/registration" class="bg-green-600 text-white py-3 px-8 rounded-full hover:bg-green-700 transition duration-300 text-lg font-semibold"> Register Now </a>
                        <a href="/call-for-contributions" class="bg-black text-white py-3 px-8 rounded-full hover:bg-gray-800 transition duration-300 text-lg font-semibold"> Submit Abstract </a>
                    </div>
                </div>
            </section>
            <section class="py-16 px-8 bg-gray-50 rounded-2xl shadow-md mx-4 my-8">
                <div class="text-center max-w-5xl mx-auto">
                    <h2 class="text-4xl font-bold text-gray-800 mb-10">Our Sponsors</h2>
                    <div class="flex flex-wrap justify-center items-center gap-10">
                        <a href="https://www.neogen.com/" target="_blank" rel="noopener noreferrer">
                            <img src="images/sponsors/Neogen_logo.png" alt="Neogen" class="h-20 object-contain rounded-lg shadow-sm hover:opacity-80 transition-opacity">
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-green-100 py-12 rounded-2xl mx-4 my-8 shadow-sm">
                <div class="text-center max-w-4xl mx-auto px-8">
                    <p class="text-lg text-gray-700"> ASD 2024 is organized under the patronage of the <a href="https://eaap.org/" target="_blank" class="text-green-700 hover:underline font-semibold">European Federation for Animal Science (EAAP)</a>. </p>
                </div>
            </section>
        </div>
    </PageLayout>
</template>
