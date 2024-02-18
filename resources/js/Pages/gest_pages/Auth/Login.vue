<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/gestLayoutuser.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login_S'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
<script>
export default {
    data() {
        return {
            eye_state: 'fa-solid fa-eye-slash',
            input_type: 'password',
            conditionMouth: 0,
            conditionHandright: 0,
            conditionHandleft: 0,
        }
    },
    methods:{
        password_visibility(){
            if(this.input_type == 'password'){
                this.input_type = 'text';
                this.eye_state = 'fa-solid fa-eye';
            }
            else{
                this.input_type = 'password';
                this.eye_state = 'fa-solid fa-eye-slash';
            }
        },
        mouthaction(mouth,hand){
            this.conditionMouth = mouth;
            this.conditionHandright = hand;
            this.conditionHandleft = hand;
        },
    },
    computed: {

    },
    mounted() {

    },
}

</script>


<!-- ////////////////// temlate///////////// -->
<template>
    <GuestLayout>
        <div class="body_login">
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>
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
                    <div class="heading">تسجيل الدخول</div>
                    <form class="form" @submit.prevent="submit" @mouseenter="mouthaction(1,0)" @mouseleave="mouthaction(0,0)">
                        <div class="bear_avatar">
                            <div class="eye_frame">
                                <div class="eyes" id="eyes">
                                    <div class="eye_left eye" id="eye_left" ref="eye_left">
                                        <div class="pupil" id="left_pupil" ref="left_pupil"></div>
                                    </div>
                                    <div class="eye_right eye" id="eye_right" ref="eye_right">
                                        <div class="pupil" id="right_pupil" ref="right_pupil"></div>
                                    </div>
                                    <div class="roumouch" id="roumouch"></div>
                                </div>
                            </div>
                            <div class="mouth_frame">
                                <div class="mouth" id="mouth" :style="mouthState"></div>
                            </div>
                            <div class="left_hand" id="left_hand" :style="lefthandState"></div>
                            <div class="right_hand" id="right_hand" :style="righthandState"></div>
                        </div>

                        <div class="inputs" @mouseenter="mouthaction(2,0)" @mouseleave="mouthaction(1,0)">
                            <InputLabel for="email" value="البريد الالكتروني" />

                            <TextInput
                                id="email"
                                type="email"
                                class="mt-1 block w-full input"
                                v-model="form.email"
                                required
                                autofocus
                                autocomplete="username"
                            />

                            <InputError class="mt-2 text-red" :message="form.errors.email" />
                        </div>
                        <div class="mt-4 inputs" @mouseenter="mouthaction(2,1)" @mouseleave="mouthaction(1,0)">
                            <InputLabel for="password" value="كلمة السر" />

                            <TextInput
                                id="password"
                                :type=input_type
                                class="mt-1 block w-full input"
                                v-model="form.password"
                                required
                                autocomplete="current-password"
                            />
                            <div class="eye_password">
                                <i :class=eye_state class="eye_pass" @click="password_visibility"></i>
                            </div>
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                        <PrimaryButton class="p-3 login-button w-100" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                تسجيل الدخول
                        </PrimaryButton>
                        <div class="flex justify-center mt-4 register">
                            <!-- create new -->
                            <p class="flex items-center">ليس لديك حساب؟
                                <span>                
                                    <Link
                                        :href="route('register_student')"
                                        class="pl-2 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-semibold"
                                    >
                                        انشاء حساب
                                    </Link>
                                </span>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
