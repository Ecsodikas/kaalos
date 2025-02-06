<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    numberOfEntries: {
        type: Number
    }
});

const form = reactive({
    search_string: null,
})

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}

function submit() {
    router.get('/search', form)
}
</script>

<template>
    <div class="bg-black">
        <Head title="Kaalos" />
        <nav class="flex w-full center-items">
            <div class="w-full">
                <img class="h-12" src="storage/assets/images/logo.png">
            </div>
            <input id="search_string" v-model="form.search_string"
                class="h-8 justify text-black background-grey" name="search_string" type="text"
                placeholder="What are you interested in?">
        </nav>
    </div>

    <main class="grow text-black bg-green">
        <slot />
    </main>

    <footer class="bg-yellow text-center text-sm text-black dark:text-white/70">
        Currently we have {{ 0 }} passion projects in our database
    </footer>
</template>
