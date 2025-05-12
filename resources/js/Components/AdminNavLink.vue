<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'block w-full px-4 py-2 text-left rounded-lg bg-green-200 transition-colors '
        : 'block w-full px-4 py-2 text-left rounded-lg hover:bg-green-200 transition-colors',
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
