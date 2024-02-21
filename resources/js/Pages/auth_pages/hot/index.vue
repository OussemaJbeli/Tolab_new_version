<!-- ////////////////// temlate///////////// -->
<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="content m-4 home_content_frame">
                <h4 class="py-5">الفديوهات الرائجة </h4>
                <div class="row">
                    <div class="video_card col-sm-6 col-md-4 col-lg-3" v-for="video in videos">
                        <div class="card p-1 mp-4">
                            <div class="card-icon">
                                <Link class="image_video" :href="`show_video/${video.id}`">
                                    <img :src="'/'+video.img_path" class="card-img-top" alt="card image">
                                    <time>{{video.video_duration}}</time>
                                    <i class="fas fa-play fa-2x"></i>
                                </Link>
                            </div>
                            <Link :href="`show_video/${video.id}`">
                                <div class="card-body p-0">
                                    <p class="card-title">{{video.name}}</p>
                                </div>
                            </Link>
                            <div class="card-footer">
                                <small class="text-muted">
                                    <span class="d-block"><i class="fa-solid fa-eye"></i> <span> {{video.vuews_video}} مشاهدة</span></span>
                                    <i class="fa-solid fa-calendar-days"></i> <span>منذ {{ video.date_count }} </span>
                                </small>
                            </div>
                            <div>
                                <Link :href="`chanel_AUTH/${video.chanel_id}`" class="channel-img flex items-center flex-row">
                                    <img :src="'/'+video.chanel_logo_path"  class="rounded-circle my-2 ml-3 h-8 w-8">
                                    <span class="card-text  pl-2">{{video.chanel_name}}</span>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
                        <!-- popup u chould subscribe -->
                        <div class="should_subscribe_frame" v-if="$page.props.auth.user.etudient && !$page.props.auth.user.payment">
                    <div class="frame">
                        <p>
                            يجب عليك ان تقوم بالاشتراك لفتح الدروس
                        </p>
                        <button>
                            <Link :href="route('pyment_AUTH')">
                                        اشتراك
                                    </Link> 
                                    <div class="star-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                        <path
                                            class="fil0"
                                            d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                        ></path>
                                        </g>
                                    </svg>
                                    </div>
                                    <div class="star-2">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                        <path
                                            class="fil0"
                                            d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                        ></path>
                                        </g>
                                    </svg>
                                    </div>
                                    <div class="star-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                        <path
                                            class="fil0"
                                            d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                        ></path>
                                        </g>
                                    </svg>
                                    </div>
                                    <div class="star-4">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                        <path
                                            class="fil0"
                                            d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                        ></path>
                                        </g>
                                    </svg>
                                    </div>
                                    <div class="star-5">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                        <path
                                            class="fil0"
                                            d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                        ></path>
                                        </g>
                                    </svg>
                                    </div>
                                    <div class="star-6">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xml:space="preserve"
                                        version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                        <path
                                            class="fil0"
                                            d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                        ></path>
                                        </g>
                                    </svg>
                                    </div>
                        </button>
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
