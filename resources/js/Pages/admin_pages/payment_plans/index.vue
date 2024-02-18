<template>
    <adminLayout>
        <Head title="Admin" />
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight page_title">
                <i class="fa-solid fa-user"></i>
                /المستخدمون
            </h2>
        </template>
        <div class="contain_admin">
            <!-- student -->
            <div class="historique_statistique frame_original pt-10 pb-4">
                <p class="h3">
                    <span>قائمة الطلاب</span>
                </p>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-end">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-end">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-end">المستوى الدراسي</th>
                            <th class="pb-4 pt-6 px-6 text-end">الاشتراك</th>
                            <th class="pb-4 pt-6 px-6 text-end">حذف</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="student in users_student" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ student.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ student.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ student.etudient_level }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                <span v-if="student.payment">مشترك</span>
                                <span v-else>غير مشترك</span>
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white ">
                                <Link :href="`/admin_taleb/users/${student.id}/destroy`" class="text-white">
                                    <i class="fa-solid fa-trash text-red-500"></i> حذف
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <!-- master -->
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة الاساتذة</span>
                    <button class="button button_acount"  @click="add_master_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i> انشاء حساب
                    </button>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-end">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-end">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-end">المستوى الدراسي</th>
                            <th class="pb-4 pt-6 px-6 text-end">عدد القنوات</th>
                            <th class="pb-4 pt-6 px-6 text-end">اضافة قنات</th>
                            <th class="pb-4 pt-6 px-6 text-end">تعديل</th>
                            <th class="pb-4 pt-6 px-6 text-end">حذف</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="master in users_master" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ master.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ master.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ master.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ master.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                <button @click="change_password_frame_fun(master.id,master.name,master.email)">
                                    <i class="fa-solid fa-plus text-green-500"></i> اضافة قنات
                                </button>
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                <button @click="change_password_frame_fun(master.id,master.name,master.email)">
                                    <i class="fa-solid fa-pen-to-square text-green-500"></i> تعديل
                                </button>
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white ">
                                <Link :href="`/admin_taleb/users/${master.id}/destroy`" class="text-white">
                                    <i class="fa-solid fa-trash text-red-500"></i> حذف
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <!-- admin -->
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة مديري المنصة</span>
                    <button class="button button_acount"  @click="add_admin_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i> انشاء حساب
                    </button>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-end">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-end">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-end">تعديل</th>
                            <th class="pb-4 pt-6 px-6 text-end">ترقية</th>
                            <th class="pb-4 pt-6 px-6 text-end">حذف</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="sub_admin in users_admin" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ sub_admin.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ sub_admin.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                <button @click="change_password_frame_fun(sub_admin.id,sub_admin.name,sub_admin.email)">
                                    <i class="fa-solid fa-pen-to-square text-green-500"></i> تعديل
                                </button>
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                <button @click="change_user_frame_fun(sub_admin.id,sub_admin.dashboard_control,sub_admin.chanels_control,sub_admin.support_control,sub_admin.videos_control,sub_admin.comments_control)">
                                    <i class="fa-solid fa-pen-to-square text-green-500"></i> ترقية
                                </button>
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white ">
                                <Link :href="`/admin_taleb/users/${sub_admin.id}/destroy`" class="text-white">
                                    <i class="fa-solid fa-trash text-red-500"></i> حذف
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <!-- popup change admin rools -->
            <div class="limit_frame" v-if="change_user_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_user_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_user_db" class="body_fram">
                        <div class="limit_type">
                            <label for="r3">
                                <p class="pb-2">حدد الالمهام المسموح بها</p>
                                <ToggleCheckbox
                                    :id="'ventilation'"
                                    :active_value="'نعم'"
                                    :inactive_value="'لا'"
                                    :label="'لوحة التحكم'"
                                    :isChecked="change_user_vars.dashboard_control"
                                    @toggle="dashboard_control_togle"
                                />
                                <ToggleCheckbox
                                    :id="'ventilation'"
                                    :active_value="'نعم'"
                                    :inactive_value="'لا'"
                                    :label="'القنوات '"
                                    :isChecked="change_user_vars.chanels_control"
                                    @toggle="chanels_control_togle"
                                />
                                <ToggleCheckbox
                                    :id="'ventilation'"
                                    :active_value="'نعم'"
                                    :inactive_value="'لا'"
                                    :label="'الدعم والابلاغات '"
                                    :isChecked="change_user_vars.support_control"
                                    @toggle="support_control_togle"
                                />
                                <ToggleCheckbox
                                    :id="'ventilation'"
                                    :active_value="'نعم'"
                                    :inactive_value="'لا'"
                                    :label="'الفيديوهات '"
                                    :isChecked="change_user_vars.videos_control"
                                    @toggle="videos_control_togle"
                                />
                                <ToggleCheckbox
                                    :id="'ventilation'"
                                    :active_value="'نعم'"
                                    :inactive_value="'لا'"
                                    :label="'التعليقات '"
                                    :isChecked="change_user_vars.comments_control"
                                    @toggle="comments_control_togle"
                                />
                            </label>
                        </div>
                        <div class="save">
                            <button type="submit">
                                save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- add master -->
            <div class="limit_frame" v-if="add_master_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_master_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="save_master_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white">الاسم</label>
                                <input type="text" class="form-control" id="name" v-model="add_master_vars.name_master" required :error="add_master_vars.errors.name_master">
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white"> البريد الالكتروني</label>
                                <input type="email" class="form-control" id="email" v-model="add_master_vars.email_master" required :error="add_master_vars.errors.email_master">
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white"> كلمة السر</label>
                                <input type="password" class="form-control" id="password" v-model="add_master_vars.password_master" required :error="add_master_vars.errors.password_master">
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
            <!-- add admin -->
            <div class="limit_frame" v-if="add_admin_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_admin_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="save_admin_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white">الاسم</label>
                                <input type="text" class="form-control" id="name" v-model="add_admin_vars.name_admin" required>
                                <InputError class="mt-2" :message="add_admin_vars.errors.name_admin" />
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white"> البريد الالكتروني</label>
                                <input type="email" class="form-control" id="name" v-model="add_admin_vars.email_admin" required>
                                <InputError class="mt-2" :message="add_admin_vars.errors.email_admin" />
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white"> كلمة السر</label>
                                <input type="password" class="form-control" id="name" v-model="add_admin_vars.password_admin" required>
                                <InputError class="mt-2" :message="add_admin_vars.errors.password_admin" />
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
            <!-- add chanel -->
            <div class="limit_frame" v-if="change_password_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_password_frame_fun()"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_password_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white">الاسم</label>
                                <input type="text" class="form-control" id="name" v-model="change_password_vars.name" required :error="change_password_vars.errors.name">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white"> البريد الالكتروني</label>
                                <input type="email" class="form-control" id="name" v-model="change_password_vars.email" required :error="change_password_vars.errors.email">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white"> كلمة السر</label>
                                <input type="password" class="form-control" id="name" v-model="change_password_vars.password" required :error="change_password_vars.errors.password">
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
            <!-- change password -->
            <div class="limit_frame" v-if="change_password_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_password_frame_fun()"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_password_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white">الاسم</label>
                                <input type="text" class="form-control" id="name" v-model="change_password_vars.name" :error="change_password_vars.errors.name">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white"> البريد الالكتروني</label>
                                <input type="email" class="form-control" id="name" v-model="change_password_vars.email" :error="change_password_vars.errors.email">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white"> كلمة السر</label>
                                <input type="password" class="form-control" id="name" v-model="change_password_vars.password" :error="change_password_vars.errors.password">
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
        users_student: Object,
        users_master: Object,
        users_admin: Object,
    },
    data() {
        return {
            add_master_frame:false,
            add_master_vars: this.$inertia.form({
                name_master: null,
                email_master: null,
                password_master: null,
            }),
            change_password_frame:false,
            change_password_vars: this.$inertia.form({
                id_user: null,
                name: null,
                email: null,
                password: null,
            }),
            add_admin_frame:false,
            add_admin_vars: this.$inertia.form({
                name_admin: null,
                email_admin: null,
                password_admin: null,
            }),
            change_user_frame: false,
            change_user_vars: this.$inertia.form({
                id_user: null,
                dashboard_control: this.$page.props.auth.user.dashboard_control,
                chanels_control: this.$page.props.auth.user.chanels_control,
                support_control: this.$page.props.auth.user.support_control,
                videos_control: this.$page.props.auth.user.comments_control,
                comments_control: this.$page.props.auth.user.videos_control,
            }),
        }
    },
    methods: {
        change_user_frame_fun(id_user,dashboard_control,chanels_control,support_control,videos_control,comments_control){
            this.change_user_frame?
                this.change_user_frame=false:
                [
                    this.change_user_vars.id_user=id_user,
                    this.change_user_vars.dashboard_control=dashboard_control,
                    this.change_user_vars.chanels_control=chanels_control,
                    this.change_user_vars.support_control=support_control,
                    this.change_user_vars.videos_control=videos_control,
                    this.change_user_vars.comments_control=comments_control,
                    this.change_user_frame=true
                ]
        },
        change_password_frame_fun(id_user,name,email,password){
            this.change_password_frame?
                this.change_password_frame=false:
                [
                    this.change_password_frame=true,
                    this.change_password_vars.id_user=id_user,
                    this.change_password_vars.name=name,
                    this.change_password_vars.email=email,  
                ]
        },
        add_master_frame_fun(){
            this.add_master_frame?
                this.add_master_frame=false:
                this.add_master_frame=true
        },
        add_admin_frame_fun(){
            this.add_admin_frame?
                this.add_admin_frame=false:
                this.add_admin_frame=true
        },
        //togle
        comments_control_togle() {
        this.change_user_vars.comments_control = !this.change_user_vars.comments_control;
        },
        videos_control_togle() {
        this.change_user_vars.videos_control = !this.change_user_vars.videos_control;
        },
        support_control_togle() {
        this.change_user_vars.support_control = !this.change_user_vars.support_control;
        },
        chanels_control_togle() {
        this.change_user_vars.chanels_control = !this.change_user_vars.chanels_control;
        },
        dashboard_control_togle() {
        this.change_user_vars.dashboard_control = !this.change_user_vars.dashboard_control;
        },
        change_user_db() {
            this.change_user_vars.get(`/admin_taleb/users/${this.change_user_vars.id_user}/chaneg_state_users`, {
                onSuccess: () => {
                this.change_user_frame = false;
                this.change_user_vars.reset();
                },
            });
        },
        save_master_db() {
            this.add_master_vars.get(`/admin_taleb/users/${this.change_user_vars.id_user}/add_master`, {
                onSuccess: () => {
                this.add_master_frame = false;
                this.add_master_vars.reset();
                },
            });
        },
        save_admin_db() {
            this.add_admin_vars.get(`/admin_taleb/users/${this.change_user_vars.id_user}/add_admin`, {
                onSuccess: () => {
                this.add_admin_frame = false;
                this.add_admin_vars.reset();
                },
            });
        },
        change_password_db() {
            this.change_password_vars.post(`/admin_taleb/users/${this.change_password_vars.id_user}/chaneg_details_users`, {
                onSuccess: () => {
                this.change_password_frame = false;
                this.change_password_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>