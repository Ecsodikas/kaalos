<script setup>

import KaalosEntryCollection from "./KaalosEntries/KaalosEntryCollection.vue"

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    numberOfEntries: {
        type: Number
    },
    kaalosEntries: {
        type: null
    }
});

</script>

<script>
    import BaseLayout from './BaseLayout.vue'

    export default {
        layout: BaseLayout,
    }
</script>

<template>
    <KaalosEntryCollection />
</template>
