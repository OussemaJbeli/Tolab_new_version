<template>
    <div>
        <div class="bg-gray-100">
            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>
            <div id="top-menu">
                <div class="container-fluid overflow-visible">
                    <nav class="navbar-expand-lg navbar-light bg-light p-2 flex justify-between ">
                        <div class="">
                            <i class="fa-solid fa-bars fa-xl" @click="open_side_bar">X</i>
                                <Link class="navbar-brand" v-if="$page.props.auth.user.etudient" :href="route('home_AUTH')">
                                    طلاب
                                    <span class="tolab-icon"><i class="fa-solid fa-graduation-cap fa-lg"></i></span>
                                </Link>
                                <Link class="navbar-brand" v-else-if="$page.props.auth.user.super_user" :href="route('profile.edit')">
                                    طلاب
                                    <span class="tolab-icon"><i class="fa-solid fa-graduation-cap fa-lg"></i></span>
                                </Link>
                                <Link class="navbar-brand" v-else :href="route('master_panel')">
                                    طلاب
                                    <span class="tolab-icon"><i class="fa-solid fa-graduation-cap fa-lg"></i></span>
                                </Link>
                        </div>
                        <div class="navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-lg-auto">
                                    <li class="nav-item active">
                                        <Link class="nav-link4 pl-0 px-3 ml-1 mr-3" :href="route('home_AUTH')" v-if="$page.props.auth.user.etudient">
                                            الصفحة الرئيسية
                                        </Link>
                                    </li>
                                    <li class="nav-item">
                                        <Link class="nav-link4 pl-0 px-3 ml-1 mr-3" :href="route('news_AUTH')" v-if="$page.props.auth.user.etudient">
                                            المرفوعة حديثآ
                                        </Link>
                                    </li>
                                    <li class="nav-item">
                                        <Link class="nav-link4 pl-0 px-3 ml-1 mr-3" :href="route('hot_AUTH')" v-if="$page.props.auth.user.etudient">
                                            الفديوهات الرائجة
                                        </Link>
                                    </li>
                                </ul>
                        </div>
                        <div class="flex flex-row">
                            <div class="form-inline m-0 p-0" v-if="$page.props.auth.user.etudient && $page.props.auth.user.payment">
                                <label :style="{ width: search_run? '100%' : '20%' }" class="label_for_search">
                                    <i class="fa-solid fa-circle-xmark" v-if="search_run" @click="start_searsh()" ></i>
                                    <i class="fa-solid fa-magnifying-glass" v-else @click="start_searsh()" ></i>
                                    <input 
                                        class="search" type="search" 
                                        v-model="searchQuery" 
                                        placeholder="إبحث ..." 
                                        :style="{ display: search_run? 'flex' : 'none' }"
                                    />
                                </label>
                            </div>
                            <div class="hidden sm:flex sm:items-center z-2000" v-if="!search_run">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <Dropdown align="left" width="48" >
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    class=" text-amber-500 inline-flex items-center mr-2 text-1xl leading-4 font-medium rounded-md  focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <i class="fa-solid fa-circle-user text-4xl"></i>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> الملف الشخصي </DropdownLink>
                                            <DropdownLink :href="route('logout')" method="post" as="button">
                                            تسجيل الخروج    
                                            </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Content -->
            <main class="main_over_all">
                <!-- side bar -->
                <div class="row side_bare_copy">
                        <div id="wrap">
                            <div class="sidebar" :style="{ right: open_side_frame? '0px' : '-17rem' }">
                                <ul class="list-group list-group-flush pl-0">
                                    <Link v-if="$page.props.auth.user.etudient" class="list-group-item list-group-item-action" :href="route('home_AUTH')">
                                        <i class="fas fa-home mr-2 purple"></i>الصفحة الرئيسية
                                    </Link> 
                                    <Link v-if="$page.props.auth.user.Master && !$page.props.auth.user.admin" class="list-group-item list-group-item-action" :href="route('master_panel')">
                                        <i class="fas fa-home mr-2 purple"></i>الصفحة الرئيسية
                                    </Link> 
                                    <Link v-if="$page.props.auth.user.etudient" class="list-group-item list-group-item-action" :href="route('news_AUTH')">
                                        <i class="fas fa-plus-square mr-2 purple"></i>المرفوعة حديثآ
                                    </Link> 
                                    <Link v-if="$page.props.auth.user.etudient" class="list-group-item list-group-item-action" :href="route('hot_AUTH')">
                                        <i class="fas fa-fire-alt mr-2 purple"></i>الفديوهات الرائجة
                                    </Link> 
                                    <Link class="list-group-item list-group-item-action" :href="route('profile.edit')"> 
                                        <i class="fa-solid fa-user purple mr-2"></i>الملف الشخصي
                                    </Link>
                                    <Link v-if="$page.props.auth.user.Master" class="list-group-item list-group-item-action" :href="`/my_chanel_AUTH/${chanel_list.id}`" v-for="chanel_list in $page.props.auth.chanel_list[0]">
                                        <i class="fa-brands fa-youtube mr-2 purple"></i>قنات {{chanel_list.name_chanel}}
                                    </Link> 
                                    <Link v-if="$page.props.auth.user.etudient" class="list-group-item list-group-item-action" :href="route('historique_AUTH')">
                                        <i class="fas fa-history mr-2 purple"></i>سجل المشاهدة
                                    </Link> 
                                    <Link v-if="$page.props.auth.user.etudient" class="list-group-item list-group-item-action" :href="route('subscribe_AUTH')">
                                        <i class="fas fa-share-square mr-2 purple"></i>القنوات المشترك بها
                                    </Link>                                  
                                    <Link class="list-group-item list-group-item-action" :href="route('support_AUTH')">
                                        <i class="fas fa-headset mr-2 purple"></i>الدعم الفني
                                    </Link> 
                                    <Link class="list-group-item list-group-item-action" :href="route('pyment_AUTH')">
                                        <i class="fa-solid fa-coinss mr-2 purple"></i>خطط الدفع
                                    </Link> 
                                    <Link class="list-group-item list-group-item-action" :href="route('logout')" method="post">
                                        <i class="fa-solid fa-right-from-bracket purple mr-2"></i>تسجيل الخروج  
                                    </Link> 
                                    <div class="copy_right">
                                        &copy; 2024 - طلاب <br>
                                        جميع الحقوق محفوظة. المحتوى التعليمي مخصص للاستخدام الشخصي فقط. ويحظر الاستخدام أو التوزيع غير المصرح له. اتصل بـالدعم الفني للاستفسارات.
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="layer_dark" @click="open_side_bar" :style="{ display: open_side_frame? 'block' : 'none' }"></div>
                <!-- search items -->
                <div v-if="search_run" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="home_content_frame home_content_frame_serach" tabindex="0">
                    <div class="content m-4 home_content_frame">
                    <h4 class="py-5">قائمة البحث</h4>
                        <div class="row">
                            <div class="video_card col-sm-6 col-md-4 col-lg-3" v-for="video_serach in filteredItems">
                                <div class="card p-1 mp-4">
                                    <div class="card-icon">
                                        <Link class="image_video" :href="`/show_video/${video_serach.id}`">
                                            <img :src="'/'+video_serach.img_path" class="card-img-top" alt="card image">
                                            <time>9:30</time>
                                            <i class="fas fa-play fa-2x"></i>
                                        </Link>
                                    </div>
                                    <Link :href="`show_video/${video_serach.id}`">
                                        <div class="card-body p-0">
                                            <p class="card-title">{{video_serach.name}}</p>
                                        </div>
                                    </Link>
                                    <div class="card-footer">
                                        <small class="text-muted">
                                            <span class="d-block"><i class="fa-solid fa-eye"></i> <span>{{video_serach.vuews_video}} مشاهدة</span></span>
                                            <i class="fa-solid fa-calendar-days"></i> <span>منذ {{ video_serach.date_count }} </span>
                                        </small>
                                    </div>
                                    <div>
                                        <Link :href="`/chanel_AUTH/${video_serach.chanel_id}`" class="channel-img flex items-center flex-row">
                                            <img :src="'/'+video_serach.video_chanel_logo_path" class="rounded-circle my-2 ml-3 h-8 w-8">
                                            <span class="card-text  pl-2">{{video_serach.video_chanel_name}}</span>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <FlashMessages />
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import FlashMessages from "@/Components/FlashMessages.vue";
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>
<script>
export default {
    components: {
        Link,
        FlashMessages,
    },
    props: {
        items_list: Object,
    },
    data() {
        return {
            open_side_frame: false,
            search_run: false,
            searchQuery: '',
        }
    },
    methods: {
        open_side_bar(){
            this.open_side_frame ? 
                this.open_side_frame=false : 
                this.open_side_frame=true;
        },
        start_searsh(){
            this.search_run?
                this.search_run=false:
                this.search_run=true;
        },
    },
    computed: {
        filteredItems() {
            const query = this.searchQuery.toLowerCase();
            return this.$page.props.videos_chanel_target.filter(video_serach => video_serach.name.toLowerCase().includes(query));
        }
    }
}
</script>