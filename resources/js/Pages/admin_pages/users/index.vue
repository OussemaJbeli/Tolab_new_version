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
            <div class="historique_statistique frame_original pt-10 pb-4 ">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة الطلاب</span>
                    <button class="button button_acount"  @click="add_special_student_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i> انشاء حساب
                    </button>
                </div>
                <div class="overflow-x-scroll">
                    <DataTable class="display DataTable1">
                        <thead>
                            <tr class="text-center font-bold bg-gray-600 ">
                                <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                                <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                                <th class="pb-4 pt-6 px-6 text-start">المستوى الدراسي</th>
                                <th class="pb-4 pt-6 px-6 text-start">الاشتراك</th>
                                <th class="pb-4 pt-6 px-6 text-start">تعديل</th>
                                <th class="pb-4 pt-6 px-6 text-start">اضافة الاشتراك</th>
                                <th class="pb-4 pt-6 px-6 text-start">سحب الاشتراك</th>
                                <th class="pb-4 pt-6 px-6 text-start">حذف</th>
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
                                    <span v-if="student.payment" class="text-green-500">مشترك</span>
                                    <span v-else class="text-red-500">غير مشترك</span>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                    <button @click="edite_special_student_frame_fun(student.id,student.name,student.email,student.etudient_level)">
                                        <i class="fa-solid fa-pen-to-square text-green-500"></i> تعديل
                                    </button>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white ">
                                    <Link :href="`/admin_taleb/users/${student.id}/addsubscribe`" class="text-white">
                                        <i class="fa-solid fa-plus text-green-500"></i>اضافة 
                                    </Link>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white ">
                                    <Link :href="`/admin_taleb/users/${student.id}/dessubscribe`" class="text-white">
                                        <i class="fa-solid fa-minus text-red-500"></i>سحب 
                                    </Link>
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
            </div>
            <!-- master -->
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة الاساتذة</span>
                    <button class="button button_acount"  @click="add_master_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i> انشاء حساب
                    </button>
                </div>
                <div class="overflow-x-scroll">
                    <DataTable class="display DataTable1">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> القنوات</th>
                            <th class="pb-4 pt-6 px-6 text-start">اضافة قنات</th>
                            <th class="pb-4 pt-6 px-6 text-start">تعديل</th>
                            <th class="pb-4 pt-6 px-6 text-start">حذف</th>
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
                                {{ master.count_chanels }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                <button @click="add_chanel_frame_fun(master.id)">
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
            </div>
            <!-- admin -->
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة المديرين </span>
                    <button class="button button_acount"  @click="add_admin_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i> انشاء حساب
                    </button>
                </div>
                <div class="overflow-x-scroll">
                    <DataTable class="display DataTable1">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start items-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start">تعديل</th>
                            <th class="pb-4 pt-6 px-6 text-start">ترقية</th>
                            <th class="pb-4 pt-6 px-6 text-start">حذف</th>
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
                                    <i class="fa-solid fa-person-arrow-up-from-line text-green-500"></i> ترقية
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
                                <p class="pb-2">حدد المهام المسموح بها</p>
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
            <!-- add spacial student -->
            <div class="limit_frame" v-if="add_special_student_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_special_student_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="save_special_student_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white">الاسم</label>
                                <input type="text" class="form-control" id="name" v-model="add_special_student_vars.name" required :error="add_special_student_vars.errors.name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white"> البريد الالكتروني</label>
                                <input type="email" class="form-control" id="email" v-model="add_special_student_vars.email" required :error="add_special_student_vars.errors.email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white"> كلمة السر</label>
                                <input type="password" class="form-control" id="password" v-model="add_special_student_vars.password" required :error="add_special_student_vars.errors.password">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white">المستوى الدراسي</label>
                                <select
                                    id="etudient_levelspacial"
                                    class="mt-1 block w-full input"
                                    v-model="add_special_student_vars.student_level"
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
            <!-- edite user -->
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
            <!-- edite special student -->
            <div class="limit_frame" v-if="edite_special_student_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="edite_special_student_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="edite_special_student_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white">الاسم</label>
                                <input type="text" class="form-control" id="name" v-model="edite_special_student_vars.name" required :error="edite_special_student_vars.errors.name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white"> البريد الالكتروني</label>
                                <input type="email" class="form-control" id="email" v-model="edite_special_student_vars.email" required :error="edite_special_student_vars.errors.email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white"> كلمة السر</label>
                                <input type="password" class="form-control" id="password" v-model="edite_special_student_vars.password" required :error="edite_special_student_vars.errors.password">
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-form-label text-white">المستوى الدراسي</label>
                                <select
                                    id="etudient_levelspacial"
                                    class="mt-1 block w-full input"
                                    v-model="edite_special_student_vars.student_level"
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
            <div class="limit_frame" v-if="add_chanel_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_chanel_frame_fun()"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_chanel_db" class="body_fram">
                        <div class="small_panel">
                            <div class="chanels_details">
                                <div class="details">
                                    <div class="form-group details-group1">
                                        <label for="name" class="col-form-label text-white">الاسم القنات</label>
                                        <input type="text" class="form-control" required id="name" v-model="add_chanel_frame_vars.chanels_name">
                                    </div>
                                    <div class="form-group details-group2">
                                        <label for="name" class="col-form-label text-white"> الصف</label>
                                        <select
                                        id="etudient_level"
                                        class="mt-1 block w-full input"
                                        v-model="add_chanel_frame_vars.chanels_level"
                                        required
                                        >
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
                                </div>
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
            add_special_student_frame:false,
            add_special_student_vars: this.$inertia.form({
                name: null,
                email: null,
                password: null,
                student_level: null,
            }),
            edite_special_student_frame:false,
            edite_special_student_vars: this.$inertia.form({
                id_student: null,
                name: null,
                email: null,
                password: null,
                student_level: null,
            }),
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
            add_chanel_frame:false,
            add_chanel_frame_vars: this.$inertia.form({
                id_user:null,
                chanels_name:null,
                chanels_level:null,
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
                dashboard_control: false,
                chanels_control: false,
                support_control: false,
                videos_control: false,
                comments_control: false,
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
        change_password_frame_fun(id_user,name,email){
            this.change_password_frame?
                this.change_password_frame=false:
                [
                    this.change_password_frame=true,
                    this.change_password_vars.id_user=id_user,
                    this.change_password_vars.name=name,
                    this.change_password_vars.email=email,  
                ]
        },
        add_chanel_frame_fun(id_user){
            this.add_chanel_frame?
                this.add_chanel_frame=false:
                [
                    this.add_chanel_frame_vars.id_user=id_user,
                    this.add_chanel_frame=true,
                ]
        },
        add_special_student_frame_fun(){
            this.add_special_student_frame?
                this.add_special_student_frame=false:
                this.add_special_student_frame=true
        },
        edite_special_student_frame_fun(id_student,name,email,student_level){
            this.edite_special_student_frame?
                this.edite_special_student_frame=false:
                [
                    this.edite_special_student_frame=true,
                    this.edite_special_student_vars.id_student=id_student,
                    this.edite_special_student_vars.name=name,
                    this.edite_special_student_vars.email=email, 
                    this.edite_special_student_vars.student_level=student_level,  
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
        save_special_student_db() {
            this.add_special_student_vars.get(`/admin_taleb/users/add_special_student`, {
                onSuccess: () => {
                this.add_special_student_frame = false;
                this.add_special_student_vars.reset();
                },
            });
        },
        edite_special_student_db() {
            this.edite_special_student_vars.get(`/admin_taleb/users/edite_special_student`, {
                onSuccess: () => {
                this.edite_special_student_frame = false;
                this.edite_special_student_vars.reset();
                },
            });
        },
        save_master_db() {
            this.add_master_vars.get(`/admin_taleb/users/add_master`, {
                onSuccess: () => {
                this.add_master_frame = false;
                this.add_master_vars.reset();
                },
            });
        },
        save_admin_db() {
            this.add_admin_vars.get(`/admin_taleb/users/add_admin`, {
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
        add_chanel_db() {
            this.add_chanel_frame_vars.get(`/admin_taleb/users/${this.add_chanel_frame_vars.id_user}/add_chanel_users`, {
                onSuccess: () => {
                this.add_chanel_frame = false;
                this.add_chanel_frame_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>