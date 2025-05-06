<script>
export default {
    name: 'PageLayout',
};
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <header class="fixed w-full top-0 left-0 bg-white shadow-sm z-50 py-4">
                <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
                    <div class="logo">
                        <a href="/">
                        <img src="images/logo.png" alt="Logo" class="h-12">
                        </a>
                    </div>

                    <nav class="hidden md:block">
                        <!-- Rocniki sa budu nacitavat s db -->
                    </nav>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>

            <footer class="bg-gray-800 text-white py-6">
                <p>&copy; 2025 Miloš Chmelko, Andrej Mika, Patrik Rajnoha, Artem Ursaki.</p>
            </footer>
        </div>
    </div>
</template>
