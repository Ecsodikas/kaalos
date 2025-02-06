<script setup>
import KaalosEntry from './KaalosEntry.vue';

defineProps({
    kaalosEntries: null,
});

</script>

<template>
    <div id="search-result-wrapper" class="w-full flex-row items-center">
        <KaalosEntry v-bind:url="entry.url" v-bind:description="entry.description" v-for="entry in $page.props.kaalosEntries" />
    </div>
</template>
