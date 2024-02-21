<!-- ////////////////// temlate///////////// -->
<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="frame_subs">
            <h4 class="p-10" > قائمة القنواة المشترك بها </h4>
            <div class="list_chaine" v-if="subscrib_chanel[0]">
                <div class="list_chanel_frame" v-for="subscrib_chanels in subscrib_chanel">
                    <Link class="img_panel_video" :href="`/chanel_AUTH/${subscrib_chanels.id}`">
                        <img :src="subscrib_chanels.logo_path_chanel" class="card-img-top" alt="card image">
                    </Link>
                    <p>{{subscrib_chanels.name_chanel}}</p>
                </div>
            </div> 
            <div class="pont_subscribe" v-else>
                انت لست مشترك في اي قنات
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
        subscrib_chanel:Object,
    },

    data() {
        return {
            
        }
    },
    methods: {
        
    },
}
</script>
