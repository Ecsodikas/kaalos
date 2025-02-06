<script setup>

defineProps({
    title: {
        type: String,
    },
    description: {
        type: String,
    }
});

</script>

<template>
    <AppLayout title="Search results">
        <div>
            <p>{{ title }}</p>
            <p>{{ description }}</p>
        </div>
    </AppLayout>
</template>
