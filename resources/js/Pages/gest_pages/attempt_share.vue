<template>
    <GestLayoutuser>
        <div class="content after_pyment_frame_page">
            <div class="success-container">
                <div class="success-icon">
                    <svg viewBox="0 0 64 64" width="90" height="90" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FF0000"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M20 20L44 44M44 20L20 44"/> <!-- Add X symbol -->
                    </svg>
                </div>
                <h1 class="text-red-500">تحذير</h1>
                <p>سياسة منصة طلاب تمنع الطلاب من مشاركة الحسابات المدفوعة !<br>
                قم بالتأكد من ان حسابك غير مفتوح في جهاز آخر
                ثم قم بتسجيل الدخول مجددا</p>
                <Link :href="route('home.gest')" class="button faild">الصفحة الرئيسية</Link>
            </div> 
        </div>
    </GestLayoutuser>
</template>
<script setup>
   import { ref } from 'vue';
   import GestLayoutuser from '@/Layouts/gestLayoutuser.vue';
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
