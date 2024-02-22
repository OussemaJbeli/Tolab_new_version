<!-- ////////////////// temlate///////////// -->
<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="content pyment_frame_page">
            <div class="left_part p-4">
                <h4>خطط الدفع</h4>
                <div class="card_plane" v-if="payments">
                    <div class="plan" v-for="payment in payments">
                        <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                    <span class="pricing">
                                    <span>
                                        {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                    </span>
                                    </span>
                                    <p class="title">{{payment.name}}</p>
                                    <p class="info">{{payment.description}}</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                            </svg>
                                            </span>
                                            <span>{{payment.education_level}}</span>
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
                        <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                            <span class="pricing">
                                    <span>
                                        {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                    </span>
                                    </span>
                                    <p class="title">{{payment.name}}</p>
                                    <p class="info">{{payment.description}}</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                            </svg>
                                            </span>
                                            <span>{{payment.education_level}}</span>
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
                        <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                            <span class="pricing">
                                    <span>
                                        {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                    </span>
                                    </span>
                                    <p class="title">{{payment.name}}</p>
                                    <p class="info">{{payment.description}}</p>
                                    <ul class="features">
                                        <li>
                                            <span class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                            </svg>
                                            </span>
                                            <span>{{payment.education_level}}</span>
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
                <div class="card_plane" v-else>
                    <h3>لا يوجد خطط دفع لهذا المستوى الدراسي</h3>
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
        payments:Object,
    },

    data() {
        return {
            
        }
    },
    methods: {
        
    },
}
</script>
