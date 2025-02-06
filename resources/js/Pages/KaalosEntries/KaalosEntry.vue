<script setup>

defineProps({
    url: {
        type: String,
    },
    description: {
        type: String,
    }
});

</script>

<template>
    <a :href="url" class="w-1/2 block border border-gray-200 rounded-lg shadow-sm bg-gray-100 hover:bg-gray-600 bg-gray-800 mb-4 m-auto">
        <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ url }}</h5>
        <p class="m-2 font-normal text-gray-700 dark:text-gray-400">{{ description }}</p>
    </a>
</template>
