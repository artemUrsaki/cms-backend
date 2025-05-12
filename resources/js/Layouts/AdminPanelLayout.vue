<script setup>
import PageLayout from '@/Layouts/PageLayout.vue';
import AdminNavLink from '@/Components/AdminNavLink.vue';
</script>

<template>
    <PageLayout>
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <div class="bg-green-100 w-64 p-4 border-r border-green-200">
                <h2 class="text-lg font-semibold mb-6 text-green-800">Navigation</h2>
                <nav class="space-y-2">
                    <AdminNavLink
                        :href = "route('admin.users')"
                        :active = "route().current('admin.users')"
                    >
                        Users
                    </AdminNavLink>
                    <AdminNavLink
                        :href = "route('admin.conferences')"
                        :active = "route().current('admin.conferences')"
                    >
                        Conferences
                    </AdminNavLink>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="flex-1 bg-white">
                <div class="p-6">
                    <slot />
                </div>
            </div>
        </div>
    </PageLayout>
  </template>
