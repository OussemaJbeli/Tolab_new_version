<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message" class="text-red">
        <p class="text-sm error_text">
            {{ message }}
        </p>
    </div>
</template>
