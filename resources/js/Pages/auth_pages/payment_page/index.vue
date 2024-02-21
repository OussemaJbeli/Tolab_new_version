<!-- ////////////////// temlate///////////// -->
<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="content pyment_frame_page">
            <div class="left_part p-4">
                <h4>خطط الدفع</h4>
                <div class="card_plane">
                    <div class="plan">
                        <div class="inner">
                                    <span class="pricing">
                                    <span>
                                        50 AED <small>/شهر</small>
                                    </span>
                                    </span>
                                    <p class="title">اسم العرض</p>
                                    <p class="info">وصف العرض في هذه الخانة</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                            </svg>
                                            </span>
                                            <span>الصف المستهدف</span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                            </svg>
                                            </span>
                                            <span>فتح كل الفيديوهات والقنوات</span>
                                        </li>
                                        <li>
                                            <span class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                            </svg>
                                            </span>
                                            <span>قوائم التشغيل والاتعليقات</span>
                                        </li>
                                    </ul>
                                    <div class="action">
                                    <a class="button" href="#">
                                    اشترك الآن
                                    </a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second_part">

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
        videos:Object,
    },

    data() {
        return {
            
        }
    },
    methods: {
        
    },
}
</script>
