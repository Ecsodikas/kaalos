<script setup>

const props = defineProps({
    id: {
        type: Number
    },
    url: {
        type: String,
    },
    tags: {
        type: String,
    },
    description: {
        type: String,
    },
    upvotes: {
        type: Number
    },
    downvotes: {
        type: Number
    }
});

const emit = defineEmits(['delete']);
</script>


<template>
    <a href="#" class="block m-auto mb-5 max-w-sm p-6 border rounded-lg shadow-sm bg-gray-800 border-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{url}}</h5>
        <p class="font-normal text-gray-50">{{description}}</p>
        <p class="font-semibold text-purple-500">{{tags}}</p>
        <button class="border p-3 hover:bg-red-100 rounded text-red-600" @click="$emit('delete', props.id)">Delte entry</button>
    </a>
</template>
