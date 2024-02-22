<template>
    <AuthenticatedLayout>
        <Head title="طلاب" />
        <div class="content m-4 home_content_frame">
            <h4 class="py-5">الصفحة الرئيسية</h4>
            <div class="contain_admin">
                <div class="charts_frame mb-10">
                    <!-- chart line for vues in one manth -->
                    <div class="first_chart master_panel_charts">
                        <ChartComponent_line class='barchart' :chart-data="chartData_line" :chart-options="chartOptions_line"></ChartComponent_line>
                    </div>
                    <!-- chart circle for users have chanels/don't have -->
                    <div class="second_chart master_panel_charts master_panel_charts_2 p-4">
                        <div class="h3">التفاصيل الكاملة للقنوات</div>
                        <div class="details">
                            <p>عدد القنوات : {{ chanelNum }}</p>
                            <p>عدد المشتركين : {{ subscribesTotal }}</p>
                            <p>عدد المشاهدات : {{ vuewsNum }}</p>
                            <p>عدد الفيديوهات : {{ videosTotal }}</p>
                        </div>
                    </div>
                </div>
                <div class="historique_statistique frame_original mt-20">
                    <div class="master_table_info p-4 overflow-x-scroll">
                        <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                            <span class="h3 text-black">قائمة القنوات</span>
                        </div>
                        <DataTable class="display min-w-full DataTable1">
                            <thead>
                                <tr class="text-center font-bold bg-green-900">
                                    <th class="pb-4 pt-6 px-6 text-end">القنوات </th>
                                    <th class="pb-4 pt-6 px-6 text-end">الصف</th>
                                    <th class="pb-4 pt-6 px-6 text-end">عدد المشتركين</th>
                                    <th class="pb-4 pt-6 px-6 text-end">عدد المشاهدات</th>
                                    <th class="pb-4 pt-6 px-6 text-end">عدد الفيديوهات</th>
                                    <th class="pb-4 pt-6 px-6 text-end">تاريخ الانشاء</th>
                                    <th class="pb-4 pt-6 px-6 text-end"></th>
                                </tr>
                            </thead>   
                            <tbody class="text-right">
                                <tr v-for="channel in chanel_tab" class="hover:bg-yellow-400 bg-green-300">
                                    <td class="pb-4 pt-6 px-6 border-t text-end text-white">
                                        <Link class="subchanel_icon" :href="`/my_chanel_AUTH/${channel.id}`">
                                            <img :src="'/'+channel.logo_path_chanel"  class="rounded-circle my-2 ml-3" width="30">
                                            <span class="card-text text-black">{{channel.name_chanel}}</span>
                                        </Link>
                                    </td>
                                    <td class="pb-4 pt-6 px-6 border-t text-end text-black">
                                        {{ channel.study_level }}
                                    </td>
                                    <td class="pb-4 pt-6 px-6 border-t text-end text-black">
                                        {{ channel.count_subscribe }}
                                    </td>
                                    <td class="pb-4 pt-6 px-6 border-t text-end text-black">
                                        {{ channel.count_views }}
                                    </td>
                                    <td class="pb-4 pt-6 px-6 border-t text-end text-black">
                                        {{ channel.count_videos }}
                                    </td>
                                    <td class="pb-4 pt-6 px-6 border-t text-end text-black">
                                        منذ {{ channel.date_create }}  
                                    </td>
                                    <td class="pb-4 pt-6 px-6 border-t text-end text-black">
                                        <Link :href="`/my_chanel_AUTH/${channel.id}`">
                                            فتح <i class="fa-solid fa-chevron-left ml-2 text-yellow-500"></i>
                                        </Link>   
                                    </td>
                                </tr>
                            </tbody>
                        </DataTable>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link} from '@inertiajs/vue3';
import total_cards from '@/Components/cards/total_cards.vue';
//chart
import ChartComponent_line from '@/Pages/admin_pages/dashboard/ChartComponent_line.vue';

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
    },
    props: {
        // general
        videosTotal: Object,
        subscribesTotal: Object,
        vuewsNum: Object,
        chanelNum: Object,
        // tab
        chanel_tab: Object,
        // chart
        dateRange: Object,
        viewsDay: Object,
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
                    borderColor: 'rgb(245, 158, 11)', 
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', 
                    tension: 0.4,
                    },
                ],
            },
            chartOptions_line: {
                scales: {
                    x: {
                        ticks: {
                        color: 'black', // Change the color of x-axis labels to white
                        },
                    },
                    y: {
                        ticks: {
                        color: 'black', // Change the color of y-axis labels to white
                        },
                    },
                },
                plugins: {
                    legend: {
                        labels: {
                        color: 'black', // Change the color of legend labels to white
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