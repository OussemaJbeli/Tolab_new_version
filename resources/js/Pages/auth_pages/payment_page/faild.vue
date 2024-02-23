<!-- ////////////////// temlate///////////// -->
<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="content after_pyment_frame_page">
            <div class="success-container">
                <div class="success-icon">
                    <svg viewBox="0 0 64 64" width="90" height="90" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FF0000"/> <!-- Change fill color to red -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M20 20L44 44M44 20L20 44"/> <!-- Add X symbol -->
                    </svg>
                </div>
                <h1>لم يتم الاشتراك !</h1>
                <p>حدث خطء اثناء عملية الدفع .الرجاء المحاولة مرة اخرى</p>
                <Link :href="route('pyment_AUTH')" class="button faild">إعادة المحاولة</Link>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link} from '@inertiajs/vue3';
</script>

<script>
export default {
    components: {
        Head,
        Link,
    },
    props: {

    },

    data() {
        return {
            
        }
    },
    methods: {

    },
}
</script>