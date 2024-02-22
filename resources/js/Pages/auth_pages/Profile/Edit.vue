<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head , Link} from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="طلاب" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" v-if="$page.props.auth.user.etudient">
                    <div>
                        <div class="subscription_button">
                            <p> المستويات الدّراسي: {{ $page.props.auth.user.etudient_level }}</p>
                            <div class="under_sub">
                                <p v-if="$page.props.auth.user.payment" class="text-green-500"><i class="fa-solid fa-check"></i>مشترك</p>
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
                    </div>
                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
