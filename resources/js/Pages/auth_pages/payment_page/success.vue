<!-- ////////////////// temlate///////////// -->
<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="content after_pyment_frame_page">
            <div class="success-container">
                <div class="success-icon">
                    <svg viewBox="0 0 64 64" width="90" height="90" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#4CAF50"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M20 31.86L28.54 40.4 44.14 24.8"/>
                    </svg>
                </div>
                <h1>تم الاشتراك بنجاح!</h1>
                <p>انت الان مشترك ! يمكنك الان الاتمتع بعروضنا</p>
                <Link :href="route('home_AUTH')" class="button">الصفحة الرئيسية</Link>
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

