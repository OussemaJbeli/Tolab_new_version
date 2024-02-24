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
                                <td class="pb-4 pt-6 px-6 border-t text-start text-white w-56">
                                    <span class="mr-2 text-yellow-500" v-if="pyment_plan.Allclasses">جميع الصفوف</span>
                                    <p v-else>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class1">الصف 1</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class2">الصف 2</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class3">الصف 3</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class4">الصف 4</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class5">الصف 5</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class6">الصف 6</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class7">الصف 7</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class8">الصف 8</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class9">الصف 9</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class10">الصف 10</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class11">الصف 11</span>
                                        <span class="mr-2 text-yellow-500" v-if="pyment_plan.class12">الصف 12</span>
                                    </p>
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
                                    <button @click="change_payment_frame_fun(pyment_plan.id,pyment_plan.name,pyment_plan.description,pyment_plan.Price,pyment_plan.frequency,pyment_plan.status,pyment_plan.frame,pyment_plan.Allclasses,pyment_plan.class1,pyment_plan.class2,pyment_plan.class3,pyment_plan.class4,pyment_plan.class5,pyment_plan.class6,pyment_plan.class7,pyment_plan.class8,pyment_plan.class9,pyment_plan.class10,pyment_plan.class11,pyment_plan.class12)">
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
                        <label for="name" class="col-form-label text-yellow-500">المستوى الدراسي</label>
                        <div class="classes_checkbox">
                            <div class="part">
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'جميع الصفوف'"
                                        :isChecked="add_payment_vars.Allclasses"
                                        @toggle="payment_Allclasses_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 1'"
                                        :isChecked="add_payment_vars.class1"
                                        @toggle="payment_class1_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 2'"
                                        :isChecked="add_payment_vars.class2"
                                        @toggle="payment_class2_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 3'"
                                        :isChecked="add_payment_vars.class3"
                                        @toggle="payment_class3_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 4'"
                                        :isChecked="add_payment_vars.class4"
                                        @toggle="payment_class4_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 5'"
                                        :isChecked="add_payment_vars.class5"
                                        @toggle="payment_class5_togle"
                                    />
                            </div>
                            <div class="part">
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 6'"
                                        :isChecked="add_payment_vars.class6"
                                        @toggle="payment_class6_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 7'"
                                        :isChecked="add_payment_vars.class7"
                                        @toggle="payment_class7_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 8'"
                                        :isChecked="add_payment_vars.class8"
                                        @toggle="payment_class8_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 9'"
                                        :isChecked="add_payment_vars.class9"
                                        @toggle="payment_class9_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 10'"
                                        :isChecked="add_payment_vars.class10"
                                        @toggle="payment_class10_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 11'"
                                        :isChecked="add_payment_vars.class11"
                                        @toggle="payment_class11_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 12'"
                                        :isChecked="add_payment_vars.class12"
                                        @toggle="payment_class12_togle"
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
                                    <label for="name" class="col-form-label text-white">التكرار</label>
                                    <select
                                        id="etudient_level"
                                        class="mt-1 block w-full input"
                                        v-model="change_payment_vars.frequency"
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
                        <label for="name" class="col-form-label text-yellow-500">المستوى الدراسي</label>
                        <div class="classes_checkbox">
                            <div class="part">
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'جميع الصفوف'"
                                        :isChecked="change_payment_vars.Allclasses"
                                        @toggle="payment_change_Allclasses_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 1'"
                                        :isChecked="change_payment_vars.class1"
                                        @toggle="payment_change_class1_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 2'"
                                        :isChecked="change_payment_vars.class2"
                                        @toggle="payment_change_class2_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 3'"
                                        :isChecked="change_payment_vars.class3"
                                        @toggle="payment_change_class3_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 4'"
                                        :isChecked="change_payment_vars.class4"
                                        @toggle="payment_change_class4_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 5'"
                                        :isChecked="change_payment_vars.class5"
                                        @toggle="payment_change_class5_togle"
                                    />
                            </div>
                            <div class="part">                                  
                                <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 6'"
                                        :isChecked="change_payment_vars.class6"
                                        @toggle="payment_change_class6_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 7'"
                                        :isChecked="change_payment_vars.class7"
                                        @toggle="payment_change_class7_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 8'"
                                        :isChecked="change_payment_vars.class8"
                                        @toggle="payment_change_class8_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 9'"
                                        :isChecked="change_payment_vars.class9"
                                        @toggle="payment_change_class9_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 10'"
                                        :isChecked="change_payment_vars.class10"
                                        @toggle="payment_change_class10_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 11'"
                                        :isChecked="change_payment_vars.class11"
                                        @toggle="payment_change_class11_togle"
                                    />
                                    <ToggleCheckbox
                                        :id="'ventilation'"
                                        :active_value="'مفعل'"
                                        :inactive_value="'غير مفعل'"
                                        :label="'الصف 12'"
                                        :isChecked="change_payment_vars.class12"
                                        @toggle="payment_change_class12_togle"
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
                frequency: null,
                activation: true,
                frame: true,
                Allclasses: false,
                class1: false,
                class2: false,
                class3: false,
                class4: false,
                class5: false,
                class6: false,
                class7: false,
                class8: false,
                class9: false,
                class10: false,
                class11: false,
                class12: false,
            }),
            change_payment_frame: false,
            change_payment_vars: this.$inertia.form({
                id_plan:null,
                name: null,
                description: null,
                price: null,
                frequency: null,
                activation: null,
                frame: true,
                Allclasses: false,
                class1: false,
                class2: false,
                class3: false,
                class4: false,
                class5: false,
                class6: false,
                class7: false,
                class8: false,
                class9: false,
                class10: false,
                class11: false,
                class12: false,
            }),
        }
    },
    methods: {
        add_payment_frame_fun(){
            this.add_payment_frame?
                this.add_payment_frame=false:
                this.add_payment_frame=true
        },
        change_payment_frame_fun(id_plan,name,description,price,frequency,activation,frame,Allclasses,class1,class2,class3,class4,class5,class6,class7,class8,class9,class10,class11,class12){
            this.change_payment_frame?
                this.change_payment_frame=false:
                [
                    this.change_payment_frame=true,
                    this.change_payment_vars.id_plan=id_plan,
                    this.change_payment_vars.name=name,
                    this.change_payment_vars.description=description,
                    this.change_payment_vars.price=price,  
                    this.change_payment_vars.frequency=frequency,
                    this.change_payment_vars.activation=activation, 
                    this.change_payment_vars.frame=frame,  
                    this.change_payment_vars.Allclasses = Allclasses,
                    this.change_payment_vars.class1 = class1,
                    this.change_payment_vars.class2 = class2,
                    this.change_payment_vars.class3 = class3,
                    this.change_payment_vars.class4 = class4,
                    this.change_payment_vars.class5 = class5,
                    this.change_payment_vars.class6 = class6,
                    this.change_payment_vars.class7 = class7,
                    this.change_payment_vars.class8 = class8,
                    this.change_payment_vars.class9 = class9,
                    this.change_payment_vars.class10 = class10,
                    this.change_payment_vars.class11 = class11,
                    this.change_payment_vars.class12 = class12,
                ]
        },
        // 
        payment_active_togle() {
        this.add_payment_vars.activation = !this.add_payment_vars.activation;
        },
        //
        payment_Allclasses_togle() {
        this.add_payment_vars.Allclasses = !this.add_payment_vars.Allclasses;
            if(this.add_payment_vars.Allclasses){
                this.add_payment_vars.class1 = true;
                this.add_payment_vars.class2 = true;
                this.add_payment_vars.class3 = true;
                this.add_payment_vars.class4 = true;
                this.add_payment_vars.class5 = true;
                this.add_payment_vars.class6 = true;
                this.add_payment_vars.class7 = true;
                this.add_payment_vars.class8 = true;
                this.add_payment_vars.class9 = true;
                this.add_payment_vars.class10 = true;
                this.add_payment_vars.class11 = true;
                this.add_payment_vars.class12 = true;
            }
            else{
                this.add_payment_vars.class1 = false;
                this.add_payment_vars.class2 = false;
                this.add_payment_vars.class3 = false;
                this.add_payment_vars.class4 = false;
                this.add_payment_vars.class5 = false;
                this.add_payment_vars.class6 = false;
                this.add_payment_vars.class7 = false;
                this.add_payment_vars.class8 = false;
                this.add_payment_vars.class9 = false;
                this.add_payment_vars.class10 = false;
                this.add_payment_vars.class11 = false;
                this.add_payment_vars.class12 = false;
            }
        }, 
        payment_class1_togle() {
        this.add_payment_vars.class1 = !this.add_payment_vars.class1;
        if(this.add_payment_vars.class1 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_class2_togle() {
        this.add_payment_vars.class2 = !this.add_payment_vars.class2;
        if(this.add_payment_vars.class2 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_class3_togle() {
        this.add_payment_vars.class3 = !this.add_payment_vars.class3;
        if(this.add_payment_vars.class3 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_class4_togle() {
        this.add_payment_vars.class4 = !this.add_payment_vars.class4;
        if(this.add_payment_vars.class4 == false)
            this.add_payment_vars.Allclasses = false;
        },  
        payment_class5_togle() {
        this.add_payment_vars.class5 = !this.add_payment_vars.class5;
        if(this.add_payment_vars.class5 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_class6_togle() {
        this.add_payment_vars.class6 = !this.add_payment_vars.class6;
        if(this.add_payment_vars.class6 == false)
            this.add_payment_vars.Allclasses = false;
        },  
        payment_class7_togle() {
        this.add_payment_vars.class7 = !this.add_payment_vars.class7;
        if(this.add_payment_vars.class7 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_class8_togle() {
        this.add_payment_vars.class8 = !this.add_payment_vars.class8;
        if(this.add_payment_vars.class8 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_class9_togle() {
        this.add_payment_vars.class9 = !this.add_payment_vars.class9;
        if(this.add_payment_vars.class9 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_class10_togle() {
        this.add_payment_vars.class10 = !this.add_payment_vars.class10;
        if(this.add_payment_vars.class10 == false)
            this.add_payment_vars.Allclasses = false;
        },  
        payment_class11_togle() {
        this.add_payment_vars.class11 = !this.add_payment_vars.class11;
        if(this.add_payment_vars.class11 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_class12_togle() {
        this.add_payment_vars.class12 = !this.add_payment_vars.class12;
        if(this.add_payment_vars.class12 == false)
            this.add_payment_vars.Allclasses = false;
        }, 
        payment_active_togle() {
        this.change_payment_vars.activation = !this.change_payment_vars.activation;
        },
        // 

        payment_change_Allclasses_togle() {
        this.change_payment_vars.Allclasses = !this.change_payment_vars.Allclasses;
            if(this.change_payment_vars.Allclasses){
                this.change_payment_vars.class1 = true;
                this.change_payment_vars.class2 = true;
                this.change_payment_vars.class3 = true;
                this.change_payment_vars.class4 = true;
                this.change_payment_vars.class5 = true;
                this.change_payment_vars.class6 = true;
                this.change_payment_vars.class7 = true;
                this.change_payment_vars.class8 = true;
                this.change_payment_vars.class9 = true;
                this.change_payment_vars.class10 = true;
                this.change_payment_vars.class11 = true;
                this.change_payment_vars.class12 = true;
            }
            else{
                this.change_payment_vars.class1 = false;
                this.change_payment_vars.class2 = false;
                this.change_payment_vars.class3 = false;
                this.change_payment_vars.class4 = false;
                this.change_payment_vars.class5 = false;
                this.change_payment_vars.class6 = false;
                this.change_payment_vars.class7 = false;
                this.change_payment_vars.class8 = false;
                this.change_payment_vars.class9 = false;
                this.change_payment_vars.class10 = false;
                this.change_payment_vars.class11 = false;
                this.change_payment_vars.class12 = false;
            }
        }, 
        payment_change_class1_togle() {
        this.change_payment_vars.class1 = !this.change_payment_vars.class1;
        if(this.change_payment_vars.class1 == false)
            this.change_payment_vars.Allclasses = false;
        }, 
        payment_change_class2_togle() {
        this.change_payment_vars.class2 = !this.change_payment_vars.class2;
        if(this.change_payment_vars.class2 == false)
            this.change_payment_vars.Allclasses = false;
        }, 
        payment_change_class3_togle() {
        this.change_payment_vars.class3 = !this.change_payment_vars.class3;
        if(this.change_payment_vars.class3 == false)
            this.change_payment_vars.Allclasses = false;
        },  
        payment_change_class4_togle() {
        this.change_payment_vars.class4 = !this.change_payment_vars.class4;
        if(this.change_payment_vars.class4 == false)
            this.change_payment_vars.Allclasses = false;
        },  
        payment_change_class5_togle() {
        this.change_payment_vars.class5 = !this.change_payment_vars.class5;
        if(this.change_payment_vars.class5 == false)
            this.change_payment_vars.Allclasses = false;
        },  
        payment_change_class6_togle() {
        this.change_payment_vars.class6 = !this.change_payment_vars.class6;
        if(this.change_payment_vars.class6 == false)
            this.change_payment_vars.Allclasses = false;
        }, 
        payment_change_class7_togle() {
        this.change_payment_vars.class7 = !this.change_payment_vars.class7;
        if(this.change_payment_vars.class7 == false)
            this.change_payment_vars.Allclasses = false;
        }, 
        payment_change_class8_togle() {
        this.change_payment_vars.class8 = !this.change_payment_vars.class8;
        if(this.change_payment_vars.class8 == false)
            this.change_payment_vars.Allclasses = false;
        }, 
        payment_change_class9_togle() {
        this.change_payment_vars.class9 = !this.change_payment_vars.class9;
        if(this.change_payment_vars.class9 == false)
            this.change_payment_vars.Allclasses = false;
        }, 
        payment_change_class10_togle() {
        this.change_payment_vars.class10 = !this.change_payment_vars.class10;
        if(this.change_payment_vars.class10 == false)
            this.change_payment_vars.Allclasses = false;
        }, 
        payment_change_class11_togle() {
        this.change_payment_vars.class11 = !this.change_payment_vars.class11;
        if(this.change_payment_vars.class11 == false)
            this.change_payment_vars.Allclasses = false;
        },  
        payment_change_class12_togle() {
        this.change_payment_vars.class12 = !this.change_payment_vars.class12;
        if(this.change_payment_vars.class12 == false)
            this.change_payment_vars.Allclasses = false;
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