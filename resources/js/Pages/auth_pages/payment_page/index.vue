<!-- ////////////////// temlate///////////// -->
<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="content pyment_frame_page">
            <div class="left_part p-4">
                <h4>خطط الدفع</h4>
                {{ data }}
                <div class="card_plane" v-if="payments_plan">
                    <div class="plan" v-for="payment in payments_plan">
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
                                    <div  @click="initiatePayment(payment.id)" class="button cursor-pointer">
                                        اشترك الآن
                                    </div>
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
                                        <div  @click="initiatePayment(payment.id)" class="button cursor-pointer">
                                        اشترك الآن
                                        </div>
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
                                        <div  @click="initiatePayment(payment.id)" class="button cursor-pointer">
                                        اشترك الآن
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="card_plane flex column" v-else-if="date_end">
                    <h3>انت مشترك! والوقت المتبقي لنفاذ الإشتراك</h3>
                    <h2>{{ date_end }}</h2>
                </div>
                <div class="card_plane flex column" v-else-if="special_stident">
                    <h3> مرحبا <span class="text-yellow-500"> {{ $page.props.auth.user.name }} </span>! انت مشترك مميز</h3>
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
import axios from 'axios';
</script>

<script>
export default {
    components: {
        Head,
        Link,
    },
    props: {
        data:Object,
        payments_plan:Object,
        date_end:Object,
        special_stident:Object,
    },
    props: ['payments_plan'],
    methods: {
    initiatePayment(paymentId) {
        axios.post(`/pyment_AUTH/${paymentId}/store`)
            .then(response => {
            // Redirect to the external payment URL
            if (response.data.redirect_url) {
                window.location.href = response.data.redirect_url;
            }
            })
            .catch(error => {
            console.error("Payment initiation failed:", error.response.data);
            // Handle error
            });
        }
    },
    data() {
        return {
            
        }
    },
}
</script>
