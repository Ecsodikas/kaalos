<script setup>
import KaalosEntry from './KaalosEntry.vue';

defineProps({
    kaalosEntries: Array,
});
</script>

<KaalosEntry title="hi" description="ho" v-for="entry in kaalosEntries" />