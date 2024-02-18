<template>
 <div class="gest_home_page">
    <slot />
 </div>
</template>
<script setup>
import { ref } from 'vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
</script>
<script>
export default {
    components: {
        Head,
        Link,
    },
    data() {
        return {
        }
    },
    methods: {
    },
    computed: {
    }
}
</script>
