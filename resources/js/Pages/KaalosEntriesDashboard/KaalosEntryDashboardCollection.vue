<script setup>
import KaalosEntryDashboard from './KaalosEntryDashboard.vue';
import { router } from '@inertiajs/vue3';

defineProps({
    kaalosEntries: null,
});

const onDelete = (id) => {
    router.delete(route('kaalosentry.delete', id))
}

</script>

<template>
    <div id="search-result-wrapper" class="w-full flex-row items-center">
        <KaalosEntryDashboard
        @delete="onDelete"
        :id="entry.id"
        :url="entry.url"
        :description="entry.description"
        :upvotes="entry.upvotes"
        :downvotes="entry.downvotes"
        :tags="entry.tags"
        v-for="entry in $page.props.kaalosEntries"
    />
    </div>
</template>
