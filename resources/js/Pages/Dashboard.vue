<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import KaalosEntryDashboardCollection from './KaalosEntriesDashboard/KaalosEntryDashboardCollection.vue'
import CreateNewEntryForm from './KaalosEntriesDashboard/CreateNewEntryForm.vue'
import { router } from '@inertiajs/vue3';

const props = defineProps({
    kaalosEntries: {
        type: null
    }
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <CreateNewEntryForm />
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <KaalosEntryDashboardCollection />
                </div>
            </div>
        </div>


    </AppLayout>
</template>
