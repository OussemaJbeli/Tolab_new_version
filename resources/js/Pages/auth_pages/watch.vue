<!-- ////////////////// temlate///////////// -->
<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="watch-page pt-5">
        <div class="container-fluid">
            <div class="card4 border-0">
                <div class="row px-2">
                    <div class="col-lg-7 main_video_panel">
                        <video  controls :poster="'/'+table_target_video_count.img_path" autoplay muted loop class="w-100">
                            <track kind="captions" :src="'/'+table_target_video_count.video_path" srclang="ar" label="عربي" default>
                            <source :src="'/'+table_target_video_count.video_path" type="video/webm">
                            <source :src="'/'+table_target_video_count.video_path" type="video/mp4">
                            <source :src="'/'+table_target_video_count.video_path" type="video/webm">
                            <source :src="'/'+table_target_video_count.video_path" type="video/ogg">
                            لا يدعم متصفحك العنصر <code>video</code>.
                        </video>
                    </div>
                    <div class="col-lg-5 show_details_respanse">
                        <div class="card-block mb-4">
                            <div class="flex direction-row items-center">
                                <a class="channel-img">
                                    <div>
                                        <Link :href="`/chanel_AUTH/${table_target_video_count.video_chanels_id}`"  class="card-text flex items-center">
                                            <img :src="'/'+table_target_video_count.video_chanels_logo_path" class="rounded-circle my-2 ml-3 w-16 h-16">
                                            <div class="flex flex-column pl-2">
                                                <strong>{{ table_target_video_count.video_chanels_name }}</strong>
                                                {{ chanel_subscribe_table.count_subscribe }} مشترك
                                            </div>
                                        </Link>
                                    </div>
                                </a>
                                <div>
                                    <button @click="Sunscribe_count(table_target_video_count.video_chanels_id)" class="float-right btn text-white btn-warning ml-4">
                                        إشترك
                                    </button>
                                </div>

                            </div>
                            <a>
                                <h4 class="card-title">{{table_target_video_count.name}}</h4>
                            </a>
                            <p class="card-text overflow-hidden max-h-60 discription_show_video">{{table_target_video_count.discription}}</p>
                        </div>
                        <small class="text-muted mr-4 ">
                            <i class="fa-solid fa-eye"></i> <span> {{target_video_vues.vuews_video}} مشاهدة</span>
                            <i class="fa-solid fa-calendar-days ml-2"></i> <span>منذ {{ time_test }} </span>
                        </small>
                        <div class="flex direction-row justify-between ">
                            <div class="w-100 flex flex-row items-center pt-2 pb-2">
                                <button @click="likeVideos(table_target_video_count.id)" class="float-right btn text-white btn-warning mt-4 mr-2">
                                    <i class="fa fa-heart"></i>
                                    اعجبني {{ table_target_video_count.count }}
                                </button> 
                                <Link :href="`striks/${this.table_target_video_count.id}/striks_main`" class="float-right btn text-white btn-warning mt-4 mr-2">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    إبلاغ
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 px-2">
                <div class="col-lg-7 order-2 order-lg-1">
                    <div class="comments">
                        <div class="comments-details mb-3">
                            <span>التعليقات {{coments_count.count}}</span>
                            <span class="dropdown ml-2">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    الترتيب بحسب
                                </button>
                                <div class="dropdown-menu">
                                    <p @click="filter_comment('likes')"  class="dropdown-item cursor-pointer">عدد الاعجابات</p>
                                    <p @click="filter_comment('newest')"  class="dropdown-item cursor-pointer">التعليقات الأحدث</p>
                                </div>
                            </span>
                        </div>
                        <div class="public-comments">
                            <div class="form-group2">
                                <!-- form coment -->
                                <form @submit.prevent="add_coments_db">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="إضافة تعليق" v-model="add_coment_values.the_coment" required :error="add_coment_values.errors.the_coment"></textarea>
                                    <button type="submit" class="btn btn-warning mt-3">تعليق</button>
                                </form>
                                <!-- coments -->
                                <div class="card mt-5 mb-3 coment_frame">
                                    <div class="card-body">
                                        <!-- coment -->
                                        <div class="row_comment" v-for="(coment,index) in table_comment_count">
                                            <div class="image_user_logo">
                                                <img :src="'/'+coment.coments_chanels_logo_path" class="img img-rounded rounded-full w-24 h-24 mb-2" v-if="coment.coments_chanels_logo_path"/>
                                                <img src="/img/chanels/base_logo.png" class="img img-rounded rounded-full w-24 h-24 mb-2" v-else/>
                                                <p class="text-secondary reply-time">منذ {{ coment.date_count }} </p>
                                            </div>
                                            <div class="dis_comment_part">
                                                <p>
                                                    <div>
                                                        <Link class="float-right mt-3 mt-md-4" :href="`/chanel_AUTH/${coment.coments_chanels_id}`" v-if="coment.coments_chanels_name"><strong>{{ coment.coments_chanels_name }}</strong></Link>
                                                        <p class="float-right mt-3 mt-md-4 cursor-pointer" v-else><strong>{{ coment.coments_user_name }}</strong></p>
                                                    </div>
                                                </p>
                                                <div class="clearfix"></div>
                                                <p>{{ coment.the_coment }}</p>
                                                <div class="comments_buttons">
                                                    <div class="subcomments_buttons">
                                                        <a class="subcomments_button float-right btn text-white btn-warning mt-4 mr-2" @click="open_repender_function(coment.id)"> <i class="fa fa-reply"></i> رد</a>
                                                        <button @click="likeComment(coment.id,index)" class="subcomments_button float-right btn text-white btn-warning mt-4 mr-2">
                                                                <i class="fa fa-heart"></i>
                                                                اعجبني {{coment.count}}
                                                        </button> 
                                                    </div>
                                                    <div class="mt-2 Sub_coment_frame">
                                                        <div class="accordion accordion-flush" :id="`accordionFlushExample${coment.id}`">
                                                            <div class="accordion-item">
                                                                <h2 v-for="Subcoments_number in Subcoments_count" class="accordion-header list_of_repond" :id="`flush-headingOne${coment.id}`">
                                                                    <button v-if="parseInt(Subcoments_number.id_coment, 10) == coment.id" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="`#flush-collapse${coment.id}`" aria-expanded="false" :aria-controls="`flush-collapse${coment.id}`">
                                                                        قائمة الردود {{ Subcoments_number.count }}
                                                                    </button>
                                                                </h2>
                                                                
                                                                <div v-for="(Subcoment,index1) in  table_Subcomment_count" :id="`flush-collapse${coment.id}` " class="accordion-collapse collapse visible" :aria-labelledby="`flush-headingOne${coment.id}`" :data-bs-parent="`#accordionFlushExample${coment.id}`">
                                                                    <div  v-if="parseInt(Subcoment.id_coment, 10) == coment.id" class="accordion-body">
                                                                        <div class="row_comment subrow_comment">
                                                                            <div class="image_user_logo">
                                                                                <img :src="'/'+Subcoment.coments_chanels_logo_path" class="img img-rounded rounded-full h-20 w-20" v-if="coment.coments_chanels_logo_path"/>
                                                                                <img src="/img/chanels/base_logo.png" class="img img-rounded rounded-full h-20 w-20" v-else/>
                                                                                <p class="text-secondary reply-time">منذ {{ Subcoment.date_count }} </p>
                                                                            </div>
                                                                            <div class="dis_comment_part">
                                                                                <p>
                                                                                    <div class="flex flex-column">
                                                                                        <Link class="float-right mt-3 mt-md-4" :href="`/chanel_AUTH/${Subcoment.coments_chanels_id}`" v-if="coment.coments_chanels_name"><strong>{{ coment.coments_chanels_name }}</strong></Link>
                                                                                        <p class="float-right mt-3 mt-md-4 cursor-pointer" v-else><strong>{{ coment.coments_user_name }}</strong></p>
                                                                                    </div>
                                                                                </p>
                                                                                <p>{{ Subcoment.the_sub_coment }}</p>
                                                                                <p class="subcomments_buttons">
                                                                                    <button @click="likeSUBComment(Subcoment.id,index1)" class="subcomments_button float-right btn text-white btn-warning mt-4">
                                                                                            <i class="fa fa-heart"></i>
                                                                                            اعجبني {{Subcoment.count}}
                                                                                    </button> 
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <p>الاقتراحات</p>
                    <div class="card p-2 mb-4 pnael_optionel_videos"   v-for="(video,index) in videos">
                        <div class="row_show">
                            <Link class="image_logo_videos" :href="video.id">
                                <img :src="'/'+video.img_path" class="card-img-top" alt="card image">
                                <time>{{video.video_duration}}</time>
                                <i class="fas fa-play fa-2x"></i>
                            </Link>
                            <div class="card_dis">
                                <div class="card-block h-100">
                                    <Link :href="video.id">
                                        <p class="card-title">{{ video.name }}</p>
                                    </Link>
                                    <small class="text-muted ">
                                        <span><i class="fa-solid fa-eye mr-2"></i>{{video.vuews_video}} مشاهدة</span> 
                                        <div>
                                            <Link class="channel-img" :href="`/chanel_AUTH/${video.id_chanel}`">
                                                <span class="card-text flex items-center"><img :src="'/'+video.video_chanels_logo_path" class="rounded-circle my-2 ml-3 h-8 w-8"><span class="card-text  pl-2">{{video.video_chanels_name}}</span></span>
                                            </Link>
                                        </div>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- coments popup -->
                <div class="add_coment_frame" id="loginModal" v-if="open_repence">
                    <div class="panel_chanel">
                        <div class="modal-header">
                            <h5 class="modal-title " style="color: #b2dfdb;" id="exampleModalLabel">
                                الرد على التعليق
                            </h5>
                            <button type="button" class="close" @click="open_repender_function" >
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form @submit.prevent="open_repender_db">
                                <div class="small_panel">
                                    <div class="info_video frames">
                                        <div class="form-group">
                                            <label for="dis" class="col-form-label text-white">محتوى الرد</label>
                                            <textarea name="discription" class="form-control form-control-text" id="dis" v-model="add_Subcoment_values.the_coment" required :error="add_Subcoment_values.errors.the_coment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center border-solid border-t border-white h-16">
                                    <button type="submit" class=" btn btn-outline-warning" >إرسال</button>
                                </div>
                            </form>
                        </div>
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
import axios from 'axios';
</script>

<script>
export default {
    components: {
        Head,
        Link,
    },
    props: {
        target_video: Object,
        videos: Object,
        comentsNewst: Object,
        comentsLikes: Object,
        coments_count: Object,
        Subcoments: Object,
        Subcoments_count: Object,
        like_coment_list: Object,
        time_test: Object,
        chanel_subscribe: Object,
        target_video_vues: Object,
    },

    data() {
        return {
            add_coment_values: this.$inertia.form({
                the_coment: null,
            }),
            add_Subcoment_values: this.$inertia.form({
                the_coment: null,
                id_coment: null,
            }),
            open_repence:false,
            //like fill
            like_fill: true,
            likesCount: 0,
            table_comment_count: this.comentsNewst,
            table_Subcomment_count: this.Subcoments,
            table_target_video_count: this.target_video,
            chanel_subscribe_table: this.chanel_subscribe,

            copy_success:false,

            user_name: null,

        }
    },
    methods: {
        add_coments_db(){
            this.add_coment_values.get(`/Coments_AUTH/${this.target_video.id}/create`, {
                onSuccess: () => {
                    this.add_coment_values.reset();
                },
            });
        },
        //coment
        open_repender_function(id_coment){
            this.open_repence?
                this.open_repence = false:
                [
                    this.open_repence = true,
                    this.add_Subcoment_values.id_coment = id_coment,
                ];
        },
        open_repender_db(){
            this.add_Subcoment_values.get(`/Coments_AUTH/${this.add_Subcoment_values.id_coment}/createSub`, {
                onSuccess: () => {
                    this.open_repence = false,
                    this.add_Subcoment_values.reset();
                },
            });
        },
        //like fill
        //like fill
        like_fill_function(){
            this.like_fill=false;
        },
        filteredItems(id_coments) {
            if(this.like_coment_count.filter(number_likes => number_likes.id_coment == id_coments)){
                return this.like_coment_count.filter(number_likes => number_likes.id_coment == id_coments)
            }
            else{
                return null;
            }
        },
        //like comment
        likeComment(coment_id,index) {
            axios.get(`Coments_AUTH/${coment_id}/add_like`)
                .then(response => {
                if (response.data.success) {
                    this.table_comment_count[index].count = response.data.likesCount;
                }
                })
                .catch(error => {
                console.error('Error liking comment:', error);
            });
        },
        likeSUBComment(Subcoment_id,index1) {
            axios.get(`Coments_AUTH/${Subcoment_id}/add_Sublike`)
                .then(response => {
                if (response.data.success) {
                    this.table_Subcomment_count[index1].count = response.data.likesCount1;
                }
                })
                .catch(error => {
                console.error('Error liking comment:', error);
            });
        },
        //like video
        likeVideos(video_id) {
            axios.get(`my_videos_AUTH/${video_id}/add_like`)
                .then(response => {
                if (response.data.success) {
                    this.table_target_video_count.count = response.data.likesCount;
                }
                })
                .catch(error => {
                console.error('Error liking comment:', error);
            });
        },
        //subscribe
        Sunscribe_count(chanel_id) {
            axios.get(`my_videos_AUTH/${chanel_id}/add_subscribe`)
                .then(response => {
                if (response.data.success) {
                    this.chanel_subscribe_table.count_subscribe = response.data.likesCount;
                }
                })
                .catch(error => {
                console.error('Error liking comment:', error);
            });
        },
        //comment
        filter_comment(page_name_type){
            switch (page_name_type) {
                case 'likes':
                    this.table_comment_count = this.comentsLikes;break;
                case 'newest':
                    this.table_comment_count = this.comentsNewst;break;
            }
        }
    },
}
</script>
