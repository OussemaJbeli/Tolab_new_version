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
            <!-- Payment -->
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة خطط الدفع</span>
                    <button class="button button_acount"  @click="add_payment_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i> انشاء خطة دفع
                    </button>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-end">إسم الخطة</th>
                            <th class="pb-4 pt-6 px-6 text-end">المستوى الدراسي</th>
                            <th class="pb-4 pt-6 px-6 text-end">السعر</th>
                            <th class="pb-4 pt-6 px-6 text-end">وصف الخطة</th>
                            <th class="pb-4 pt-6 px-6 text-end">التكرار</th>
                            <th class="pb-4 pt-6 px-6 text-end">حالة العرض</th>
                            <th class="pb-4 pt-6 px-6 text-end">تعديل</th>
                            <th class="pb-4 pt-6 px-6 text-end">حذف</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <!-- <tr v-for="master in users_master" class="hover:bg-gray-900">
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
                        </tr> -->
                    </tbody>
                </DataTable>
            </div>
            <!-- add payment -->
            <div class="limit_frame" v-if="add_payment_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_payment_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="save_payment_db" class="body_fram">
                        <div class="small_panel">
                            <!-- <div class="form-group">
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
                            </div> -->
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
            <div class="limit_frame" v-if="change_payment_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_payment_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_payment_db" class="body_fram">
                        <div class="small_panel">
                            <!-- <div class="form-group">
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
                            </div> -->
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
                name_master: null,
                email_master: null,
                password_master: null,
            }),
            change_payment_frame: false,
            change_payment_vars: this.$inertia.form({
                id_user: null,
                dashboard_control: null,
                chanels_control: null,
                support_control: null,
                videos_control: null,
                comments_control: null,
            }),
        }
    },
    methods: {
        add_payment_frame_fun(){
            this.add_payment_frame?
                this.add_payment_frame=false:
                this.add_payment_frame=true
        },
        change_payment_frame_fun(id_user,name,email,password){
            this.change_paymen_frame?
                this.change_paymen_frame=false:
                [
                    this.change_password_frame=true,
                    this.change_password_vars.id_user=id_user,
                    this.change_password_vars.name=name,
                    this.change_password_vars.email=email,  
                ]
        },
        payment_active_togle() {
        this.change_payment_vars.dashboard_control = !this.change_payment_vars.dashboard_control;
        },
        change_payment_db() {
            this.change_payment_vars.get(`/admin_taleb/users/${this.change_payment_vars.id_user}/chaneg_state_users`, {
                onSuccess: () => {
                this.change_payment_frame = false;
                this.change_payment_vars.reset();
                },
            });
        },
        save_payment_db() {
            this.add_payment_vars.get(`/admin_taleb/users/${this.add_payment_vars.id_user}/add_master`, {
                onSuccess: () => {
                this.add_payment_frame = false;
                this.add_payment_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>