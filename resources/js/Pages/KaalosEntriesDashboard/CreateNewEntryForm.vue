<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    url: null,
    description: null,
    tags: null,
});

</script>



<template>
    <form @submit.prevent="form.post('/kaalosentry', {onSuccess: () => form.reset()})"
        class="flex-row">

        <div class="m-4">
            <label for="url" class="block mb-2 text-sm font-medium text-white">URL</label>
            <input v-model="form.url"type="text" id="url" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="https://kaalos.ecsodikas.eu" required />
        </div>

        <div class="m-4">
            <label for="description" class="block mb-2 text-sm font-medium text-white">Description</label>
            <textarea  v-model="form.description" type="text" id="description" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Website about cool stuff!" required />
        </div>

        <div class="m-4">
            <label for="tags" class="block mb-2 text-sm font-medium text-white">URL</label>
            <input  v-model="form.tags" type="text" id="tags" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Tag 1, Tag-2, Tag_3" />
        </div>
        <button class="text-white m-4 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-purple-600 hover:bg-purple-700 focus:ring-purple-800">Create entry</button>
    </form>
</template>
