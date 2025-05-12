<script setup>
import DropdownLink from '@/Components/DropdownLink.vue';
</script>

<template>
    <div class="min-h-screen bg-gray-100">
        <header class="fixed w-full top-0 left-0 bg-white shadow-sm z-50 py-4">
            <div class="w-full px-4 flex justify-between items-center">
                <div class="logo">
                    <a href="/">
                        <img src="images/logo.png" alt="Logo" class="h-12">
                    </a>
                </div>


                <nav class="flex items-center">
                    <template v-if="$page.props.auth.user">
                        <DropdownLink
                            class="text-nowrap"
                            :href="route('logout')"
                            method="post"
                            as="button"
                        >
                                Log Out
                        </DropdownLink>

                        <DropdownLink href="/admin" class="text-black">Admin</DropdownLink>
                    </template>

                    <template v-else>
                        <DropdownLink :href="route('login')">
                            Log In
                        </DropdownLink>
                        <DropdownLink :href="route('register')">
                            Register
                        </DropdownLink>
                    </template>
                </nav>

                <!-- TODO: Rocniki sa budu nacitavat s db -->
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
</template>
