<template>
    <adminLayout>
        <Head title="Admin" />
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight page_title">
                <i class="fa-solid fa-chart-line"></i>
                /لوحة التحكم
            </h2>
        </template>
        <div v-if="!$page.props.auth.user.admin 
                && !$page.props.auth.user.dashboard_control" 
                class="w-100 h-100 flex items-center justify-center">
            <p class="h3 text-white">انت مسؤول لكن ليس لديك صلاحيات بعد !!</p>
        </div>
        <div v-else class="contain_admin">
            <div class="cards_panel">
                <total_cards class="first_card total_card_panel">
                    <div class="logo_card">
                        <p>إجمالي المستخدمين</p>
                        <span class="value">{{countusers}} مستخدم</span>
                    </div>
                    <div class="values_card">
                        <i class="fa-regular fa-user"></i>
                    </div>
                </total_cards>
                <total_cards class="second_card total_card_panel">
                    <div class="logo_card">
                        <p>إجمالي القنوات</p>
                        <span class="value">{{countChanels}} قنات</span>
                    </div>
                    <div class="values_card">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </total_cards>
                <total_cards class="theerd_card total_card_panel">
                    <div class="logo_card">
                        <p>إجمالي الفيديوهات</p>
                        <span class="value">{{countvideos}} فيديو</span>
                    </div>
                    <i class="fa-solid fa-video values_card"></i>
                </total_cards>
            </div>
            <div class="charts_frame">
                <!-- chart line for vues in one manth -->
                <div class="first_chart">
                    <ChartComponent_line class='barchart' :chart-data="chartData_line" :chart-options="chartOptions_line"></ChartComponent_line>
                </div>
                <!-- chart circle for users have chanels/don't have -->
                <div class="second_chart">
                    <ChartComponent_donate class="barchart2" :chart-data="chartData_donate" :chart-options="chartOptions_donate"></ChartComponent_donate>
                </div>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  1</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level1" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  2</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level2" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  3</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level3" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  4</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level4" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  5</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level5" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  6</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level6" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  7</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level7" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  8</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level8" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  9</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level9" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  10</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level10" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  11</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level11" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">قائمة اساتذة الصف  12</span>
                </div>
                <DataTable class="display">
                    <thead>
                        <tr class="text-center font-bold bg-gray-600">
                            <th class="pb-4 pt-6 px-6 text-start">الإسم</th>
                            <th class="pb-4 pt-6 px-6 text-start">البريد الالكتروني</th>
                            <th class="pb-4 pt-6 px-6 text-start"> إسم القنات</th>
                        </tr>
                    </thead>
                    <tbody class="text-right">
                        <tr v-for="Masters in Masters_evry_level12" class="hover:bg-gray-900">
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.email }}
                            </td>
                            <td class="pb-4 pt-6 px-6 border-t text-start text-white">
                                {{ Masters.name_chanel }}
                            </td>
                        </tr>
                    </tbody>
                </DataTable>
            </div>
        </div>
    </adminLayout>
</template>
<script setup>
import adminLayout from '@/Layouts/Admin.vue';
import { Head, Link} from '@inertiajs/vue3';
import total_cards from '@/Components/cards/total_cards.vue';
//chart
import ChartComponent_line from '@/Pages/admin_pages/dashboard/ChartComponent_line.vue';
import ChartComponent_donate from '@/Pages/admin_pages/dashboard/ChartComponent_donate.vue';

//datatabel
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';

DataTable.use(DataTablesCore);

</script>

<script>
export default {
    name: 'App',
    components: {
        Head,
        Link,
        DataTable,
        ChartComponent_line,
        ChartComponent_donate,
    },
    props: {
        countusers: Object,
        countvideos: Object,
        countChanels: Object,
        dateRange: Object,
        viewsByDay: Object,
        viewsDay: Object,
        countusers_master: Object,
        countusers_student: Object,
        Masters_evry_level1: Object,
        Masters_evry_level2: Object,
        Masters_evry_level3: Object,
        Masters_evry_level4: Object,
        Masters_evry_level5: Object,
        Masters_evry_level6: Object,
        Masters_evry_level7: Object,
        Masters_evry_level8: Object,
        Masters_evry_level9: Object,
        Masters_evry_level10: Object,
        Masters_evry_level11: Object,
        Masters_evry_level12: Object,
    },

    data() {
        return {
            chartData_line: {
                labels: this.dateRange,
                datasets: [
                    {
                    label: 'سجل المشاهداة الشهري',
                    data: this.viewsDay,
                    fill: true, 
                    borderColor: 'rgba(75, 192, 192, 1)', 
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', 
                    tension: 0.4,
                    },
                ],
            },
            chartOptions_line: {
                scales: {
                    x: {
                        ticks: {
                        color: 'white', // Change the color of x-axis labels to white
                        },
                    },
                    y: {
                        ticks: {
                        color: 'white', // Change the color of y-axis labels to white
                        },
                    },
                },
                plugins: {
                    legend: {
                        labels: {
                        color: 'white', // Change the color of legend labels to white
                        },
                    },
                },
            },
            chartData_donate: {
                labels: ['الطلاب', 'اساتذة',],
                datasets: [
                    {
                    label: 'عددهم',
                    data: [this.countusers_student, this.countusers_master],
                    },
                ],
            },
            chartOptions_donate: {
                plugins: {
                    legend: {
                        labels: {
                        color: 'white', // Change the color of legend labels to white
                        },
                    },
                },
            },
        };
    },
    methods: {
        
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>