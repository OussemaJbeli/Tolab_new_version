<script setup>
import GuestLayout from '@/Layouts/gestLayoutuser.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    etudient_level: '',
});

const submit = () => {
    form.post(route('register_S'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <div class="body_login">
            <div class="first_part">
                <Link class="reteurn" :href="route('home.gest')">
                    الرجوع إلى الصفحة الرئيسية
                    <i class="fa-solid fa-arrow-left ml-2"></i>
                </Link>
                <div class="color1"></div>
                <div class="img_color student_img">
                    <img src="img/home_images/student_login.png">
                </div>
            </div>
            <div class="second_part">
                <div class="container">
                    <div class="heading">انشاء حساب جديد </div>
                    <form class="form" @submit.prevent="submit">
                        <div class="inputs">
                            <InputLabel for="name" value="الاسم" />

                            <TextInput
                                id="name"
                                type="text"
                                class="mt-1 block w-full input"
                                v-model="form.name"
                                required
                                autofocus
                                autocomplete="name"
                            />

                            <InputError class="mt-2" :message="form.errors.name" />
                        </div>

                        <div class="mt-4 inputs">
                            <InputLabel for="email" value="البريد الالكتروني" />

                            <TextInput
                                id="email"
                                type="email"
                                class="mt-1 block w-full input"
                                v-model="form.email"
                                required
                                autocomplete="username"
                            />

                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                        <div class="mt-4 inputs">
                            <InputLabel for="password" value="كلمة السر" />

                            <TextInput
                                id="password"
                                type="password"
                                class="mt-1 block w-full input"
                                v-model="form.password"
                                required
                                autocomplete="new-password"
                            />

                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                        <div class="mt-4 inputs">
                            <InputLabel for="password" value=" تاكيد كلمة السر" />

                            <TextInput
                                id="password_confirmation"
                                type="password"
                                class="mt-1 block w-full input"
                                v-model="form.password_confirmation"
                                required
                                autocomplete="new-password"
                            />

                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                        </div>

                        <div class="mt-4 inputs">
                            <InputLabel for="etudient_level" value=" المستوى الدراسي" />

                            <select
                                id="etudient_level"
                                class="mt-1 block w-full input"
                                v-model="form.etudient_level"
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
                            <InputError class="mt-2" :message="form.errors.etudient_level" />
                        </div>


                        <div class="flex items-center justify-between mt-4">
                            <Link
                                :href="route('login_student')"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-semibold"
                            >
                                لديك حساب بالفعل؟
                            </Link>

                            <PrimaryButton class="p-3 login-button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                انشاء الحساب
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
