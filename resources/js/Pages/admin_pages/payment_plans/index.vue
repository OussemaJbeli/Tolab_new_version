<template>
    <adminLayout>
        <Head title="Admin" />
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight page_title">
                <i class="fa-solid fa-user"></i>
                /خطط الدفع
            </h2>
        </template>
        <div class="contain_admin">
            <!-- Payment -->
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة خطط الدفع</span>
                    <button class="button button_acount"  @click="add_payment_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i> انشاء خطة دفع
                    </button>
                </div>
                <div class="overflow-x-scroll">
                    <DataTable class="display DataTable1">
                        <thead>
                            <tr class="text-center font-bold bg-gray-600">
                                <th class="pb-4 pt-6 px-6 text-end">إسم الخطة</th>
                                <th class="pb-4 pt-6 px-6 text-end w-32">المستوى الدراسي</th>
                                <th class="pb-4 pt-6 px-6 text-end w-24">السعر</th>
                                <th class="pb-4 pt-6 px-6 text-end w-40">وصف الخطة</th>
                                <th class="pb-4 pt-6 px-6 text-end">التكرار</th>
                                <th class="pb-4 pt-6 px-6 text-end w-24">حالة العرض</th>
                                <th class="pb-4 pt-6 px-6 text-end w-24">الشكل</th>
                                <th class="pb-4 pt-6 px-6 text-end">تعديل</th>
                                <th class="pb-4 pt-6 px-6 text-end">حذف</th>
                            </tr>
                        </thead>
                        <tbody class="text-right">
                            <tr v-for="pyment_plan in pyment" class="hover:bg-gray-900">
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                    {{ pyment_plan.name }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                    {{ pyment_plan.education_level }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                    {{ pyment_plan.Price }} (AED)
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                    {{ pyment_plan.description }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                    {{ pyment_plan.frequency }}
                                </td>
                                <td v-if="pyment_plan.status" class="pb-4 pt-6 px-6 border-t text-start text-green-500">
                                    مفعل                          
                                </td>
                                <td v-else class="pb-4 pt-6 px-6 border-t text-start text-red-500">
                                    غير مفعل                 
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                    {{ pyment_plan.frame }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                    <button @click="change_payment_frame_fun(pyment_plan.id,pyment_plan.name,pyment_plan.description,pyment_plan.Price,pyment_plan.education_level,pyment_plan.frequency,pyment_plan.status,pyment_plan.frame)">
                                        <i class="fa-solid fa-pen-to-square text-green-500"></i> تعديل
                                    </button>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white ">
                                    <Link :href="`/admin_taleb/payment_plans/${pyment_plan.id}/remove`" class="text-white">
                                        <i class="fa-solid fa-trash text-red-500"></i> حذف
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </DataTable>
                </div>
                <div class="subs_plane_exemple">
                    <span class="h3 mb-4 mt-4">قائمة خطط الدفع</span>
                    <div class="subs_plane">
                        <!-- plane 1 -->
                        <div class="exemple">
                            <span>المثال الاول</span>     
                            <div class="plan1">
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
                        <!-- plane 2 -->
                        <div class="exemple">
                            <span>المثال الثاني</span>
                            <div class="plan2">
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
                        <!-- plane 3 -->
                        <div class="exemple">
                            <span>المثال الثالث</span>
                            <div class="plan3">
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
                </div>
            </div>
            <!-- add payment -->
            <div class="limit_frame_pay" v-if="add_payment_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_payment_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="save_payment_db" class="payment_form">
                        <div class="small_panel">
                            <div class="part">
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-white">الاسم</label>
                                    <input type="text" class="form-control" id="name" v-model="add_payment_vars.name" required :error="add_payment_vars.errors.name">
                                </div>
                                <div class="form-group">
                                    <label for="desc" class="col-form-label text-white">وصف الخطة</label>
                                    <textarea name="discription" class="form-control form-control-text" id="desc" v-model="add_payment_vars.description" required :error="add_payment_vars.errors.discription"></textarea>
                                </div>
                            </div>
                            <div class="part">
                                <div class="form-group">
                                    <label for="price" class="col-form-label text-white">السعر (AED)</label>
                                    <input type="number" class="form-control" id="price" v-model="add_payment_vars.price" required :error="add_payment_vars.errors.price">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-white">المستوى الدراسي</label>
                                    <select
                                        id="etudient_level"
                                        class="mt-1 block w-full input"
                                        v-model="add_payment_vars.etudient_level"
                                        required
                                    >
                                        <option value="جميع الصفوف">جميع الصفوف</option>
                                        <option value="الصف 1">الصف 1</option>
                                        <option value="الصف 2">الصف 2</option>
                                        <option value="الصف 3">الصف 3</option>
                                        <option value="الصف 4">الصف 4</option>
                                        <option value="الصف 5">الصف 5</option>
                                        <option value="الصف 6">الصف 6</option>
                                        <option value="الصف 7">الصف 7</option>
                                        <option value="الصف 8">الصف 8</option>
                                        <option value="الصف 9">الصف 9</option>
                                        <option value="الصف 10">الصف 10</option>
                                        <option value="الصف 11">الصف 11</option>
                                        <option value="الصف 12">الصف 12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-white"> التكرار</label>
                                    <select
                                        id="etudient_level"
                                        class="mt-1 block w-full input"
                                        v-model="add_payment_vars.frequency"
                                        required
                                    >
                                        <option value="شهر">شهر</option>
                                        <option value="شهرين">شهرين</option>
                                        <option value="اشهر 3">3 اشهر</option>
                                        <option value="اشهر 4">4 اشهر</option>
                                        <option value="اشهر 5">5 اشهر</option>
                                        <option value="اشهر 6">6 اشهر</option>
                                        <option value="اشهر 7">7 اشهر</option>
                                        <option value="اشهر 8">8 اشهر</option>
                                        <option value="اشهر 9">9 اشهر</option>
                                        <option value="اشهر 10">10 اشهر</option>
                                        <option value="اشهر 11">11 اشهر</option>
                                        <option value="اشهر 12">12 اشهر</option>                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-white">الشكل </label>
                                    <select
                                        id="etudient_level"
                                        class="mt-1 block w-full input"
                                        v-model="add_payment_vars.frame"
                                        required
                                    >
                                    <option value="المثال الاول">المثال الاول</option>
                                    <option value="المثال الثاني">المثال الثاني</option>
                                    <option value="المثال الثالث">المثال الثالث</option>
                                    </select>
                                </div>
                                <ToggleCheckbox
                                    :id="'ventilation'"
                                    :active_value="'مفعل'"
                                    :inactive_value="'غير مفعل'"
                                    :label="'حالة العرض'"
                                    :isChecked="add_payment_vars.activation"
                                    @toggle="payment_active_togle"
                                />
                            </div>
                        </div>
                        <div class="save">
                            <button type="submit">
                                save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- change payment -->
            <div class="limit_frame_pay" v-if="change_payment_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_payment_frame_fun()"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_payment_db" class="payment_form">
                        <div class="small_panel">
                            <div class="part">
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-white">الاسم</label>
                                    <input type="text" class="form-control" id="name" v-model="change_payment_vars.name" required :error="change_payment_vars.errors.name">
                                </div>
                                <div class="form-group">
                                    <label for="desc" class="col-form-label text-white">وصف الخطة</label>
                                    <textarea name="discription" class="form-control form-control-text" id="desc" v-model="change_payment_vars.description" required :error="add_payment_vars.errors.discription"></textarea>
                                </div>
                            </div>
                            <div class="part">
                                <div class="form-group">
                                    <label for="price" class="col-form-label text-white">السعر (AED)</label>
                                    <input type="number" class="form-control" id="price" v-model="change_payment_vars.price" required :error="change_payment_vars.errors.price">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-white">المستوى الدراسي</label>
                                    <select
                                        id="etudient_level"
                                        class="mt-1 block w-full input"
                                        v-model="change_payment_vars.etudient_level"
                                        required
                                    >
                                        <option value="جميع الصفوف">جميع الصفوف</option>
                                        <option value="الصف 1">الصف 1</option>
                                        <option value="الصف 2">الصف 2</option>
                                        <option value="الصف 3">الصف 3</option>
                                        <option value="الصف 4">الصف 4</option>
                                        <option value="الصف 5">الصف 5</option>
                                        <option value="الصف 6">الصف 6</option>
                                        <option value="الصف 7">الصف 7</option>
                                        <option value="الصف 8">الصف 8</option>
                                        <option value="الصف 9">الصف 9</option>
                                        <option value="الصف 10">الصف 10</option>
                                        <option value="الصف 11">الصف 11</option>
                                        <option value="الصف 12">الصف 12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-white">التكرار</label>
                                    <select
                                        id="etudient_level"
                                        class="mt-1 block w-full input"
                                        v-model="change_payment_vars.frequency"
                                        required
                                    >
                                        <option value="سنة">سنوي</option>
                                        <option value="شهر">شهري</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-white">الشكل </label>
                                    <select
                                        id="etudient_level"
                                        class="mt-1 block w-full input"
                                        v-model="change_payment_vars.frame"
                                        required
                                    >
                                    <option value="المثال الاول">المثال الاول</option>
                                    <option value="المثال الثاني">المثال الثاني</option>
                                    <option value="المثال الثالث">المثال الثالث</option>
                                    </select>
                                </div>
                                <ToggleCheckbox
                                    :id="'ventilation'"
                                    :active_value="'مفعل'"
                                    :inactive_value="'غير مفعل'"
                                    :label="'حالة العرض'"
                                    :isChecked="change_payment_vars.activation"
                                    @toggle="change_payment_active_togle"
                                />
                            </div>
                        </div>
                        <div class="save">
                            <button type="submit">
                                save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </adminLayout>
</template>
<script setup>

import adminLayout from '@/Layouts/Admin.vue';
import { Head, Link} from '@inertiajs/vue3';
import ToggleCheckbox from "@/Components/ToggleCheckbox.vue";
import InputError from '@/Components/InputError.vue';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';

DataTable.use(DataTablesCore);
</script>

<script>
export default {
    components: {
        Head,
        Link,
        DataTable,
        ToggleCheckbox,
    },
    props: {
        pyment: Object,
    },
    data() {
        return {
            add_payment_frame:false,
            add_payment_vars: this.$inertia.form({
                name: null,
                description: null,
                price: null,
                etudient_level: null,
                frequency: null,
                activation: true,
                frame: true,
            }),
            change_payment_frame: false,
            change_payment_vars: this.$inertia.form({
                id_plan:null,
                name: null,
                description: null,
                price: null,
                etudient_level: null,
                frequency: null,
                activation: null,
                frame: true,
            }),
        }
    },
    methods: {
        add_payment_frame_fun(){
            this.add_payment_frame?
                this.add_payment_frame=false:
                this.add_payment_frame=true
        },
        change_payment_frame_fun(id_plan,name,description,price,etudient_level,frequency,activation,frame){
            this.change_payment_frame?
                this.change_payment_frame=false:
                [
                    this.change_payment_frame=true,
                    this.change_payment_vars.id_plan=id_plan,
                    this.change_payment_vars.name=name,
                    this.change_payment_vars.description=description,
                    this.change_payment_vars.price=price,  
                    this.change_payment_vars.etudient_level=etudient_level,
                    this.change_payment_vars.frequency=frequency,
                    this.change_payment_vars.activation=activation, 
                    this.change_payment_vars.frame=frame,  
                ]
        },
        payment_active_togle() {
        this.add_payment_vars.activation = !this.add_payment_vars.activation;
        },
        change_payment_active_togle() {
        this.change_payment_vars.activation = !this.change_payment_vars.activation;
        },
        save_payment_db() {
            this.add_payment_vars.get(`/admin_taleb/payment_plans/add`, {
                onSuccess: () => {
                this.add_payment_frame = false;
                this.add_payment_vars.reset();
                },
            });
        },
        change_payment_db() {
            this.change_payment_vars.get(`/admin_taleb/payment_plans/${this.change_payment_vars.id_plan}/edite`, {
                onSuccess: () => {
                this.change_payment_frame = false;
                this.change_payment_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>